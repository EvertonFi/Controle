<?php
require 'conexao.php';

abstract class Cadastro
{
    static function Item($nome, $marca, $qtd, $descricao, $imagem, $preco_c, $preco_v, $cor, $material, $categoria)
    {
        try {
            $conexao = BancoDados::conectar();
            $inserir = $conexao->prepare('INSERT INTO item(nome,preco_c,preco_v,qtd,descricao,imagem,id_cor,id_marca,id_material,id_categoria) VALUES (:nome,:preco_c,:preco_v,:qtd,:descricao,:imagem,:id_cor,:id_marca,:id_material,:id_categoria)');
            $inserir->bindValue(':nome', $nome);
            $inserir->bindValue(':preco_c', $preco_c);
            $inserir->bindValue(':preco_v', $preco_v);
            $inserir->bindValue(':qtd', $qtd);
            $inserir->bindValue(':descricao', $descricao);
            $inserir->bindValue(':imagem', $imagem);
            $inserir->bindValue(':id_cor', $cor);
            $inserir->bindValue(':id_marca', $marca);
            $inserir->bindValue(':id_material', $material);
            $inserir->bindValue(':id_categoria', $categoria);
            $inserir->execute();
            if ($inserir) {
                $con = BancoDados::conectar();
                $ultimo = $con->prepare('SELECT MAX(id) as id FROM item');
                $ultimo->execute();
                $ultimo = $ultimo->fetch(PDO::FETCH_OBJ);
                $ultimo = $ultimo->id;
                $historico = Cadastro::Historico($ultimo,$nome, $marca, $qtd, $descricao, $imagem, $preco_c, $preco_v, $cor, $material, $categoria);
            }

            return $inserir;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Historico($id_item,$nome, $marca, $qtd, $descricao, $imagem, $preco_c, $preco_v, $cor, $material, $categoria)
    {
        try {
            $conexao = BancoDados::conectar();
            $inserir = $conexao->prepare('INSERT INTO historico_item(id_item,nome,preco_c,preco_v,qtd,descricao,imagem,id_cor,id_marca,id_material,id_categoria,`data`) VALUES (:id_item,:nome,:preco_c,:preco_v,:qtd,:descricao,:imagem,:id_cor,:id_marca,:id_material,:id_categoria,NOW())');
            $inserir->bindValue(':id_item', $id_item);
            $inserir->bindValue(':nome', $nome);
            $inserir->bindValue(':preco_c', $preco_c);
            $inserir->bindValue(':preco_v', $preco_v);
            $inserir->bindValue(':qtd', $qtd);
            $inserir->bindValue(':descricao', $descricao);
            $inserir->bindValue(':imagem', $imagem);
            $inserir->bindValue(':id_cor', $cor);
            $inserir->bindValue(':id_marca', $marca);
            $inserir->bindValue(':id_material', $material);
            $inserir->bindValue(':id_categoria', $categoria);
            $inserir->execute();
            return $inserir;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    
}

abstract class Lista
{
    static function Cor()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM cor');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Material()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM material');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Categoria()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM categoria');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Marca()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM Marca');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Rede()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT * FROM rede');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function Item()
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT item.*,historico_item.data,cor.nome as cor FROM item 
            INNER JOIN historico_item ON item.id = historico_item.id_item
            INNER JOIN cor ON item.id_cor = cor.id');
            $lista->execute();
            $lista = $lista->fetchAll(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    static function ItemUnico($id)
    {
        try {
            $conexao = BancoDados::conectar();
            $lista = $conexao->prepare('SELECT 
            item.*,
            historico_item.data,
            cor.nome as cor, 
            marca.nome as marca,
            categoria.nome as categoria,
            material.nome as material
            FROM item 
            INNER JOIN historico_item ON item.id = historico_item.id_item
            INNER JOIN cor ON item.id_cor = cor.id
            INNER JOIN marca ON item.id_marca = marca.id
            INNER JOIN categoria on item.id_categoria = categoria.id
            INNER JOIN material on item.id_material = material.id
            WHERE item.id = :id');
            $lista->bindValue(':id', $id);
            $lista->execute();
            $lista = $lista->fetch(PDO::FETCH_OBJ);

            return $lista;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

abstract class Converter{
    static function Data($info){
        $info = explode(" ",$info);
        $data = $info[0];
        $data = explode("-",$data);
        $data = $data[2].'/'.$data[1].'/'.$data[0];
        $data = $data." ".$info[1];
        return $data;
    }
}
