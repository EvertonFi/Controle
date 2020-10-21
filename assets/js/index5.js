$(function(e) {
	'use strict'

	/*-----Barchart-----*/
	var chartdata = [{
		name: 'Valor de Vendas',
		type: 'bar',
		data: [10, 15, 9, 18, 10, 15, 7, 14],
		symbolSize: 10,
		itemStyle: {
			normal: {
				barBorderRadius: [0, 0, 0, 0],
				color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
					offset: 0,
					color: '#1cc5ef'
				}, {
					offset: 1,
					color: '#1cc5ef'
				}])
			}
		},
	}];
	var chart = document.getElementById('echart');
	var barChart = echarts.init(chart);
	var option = {
		grid: {
			top: '6',
			right: '0',
			bottom: '17',
			left: '25',
		},
		xAxis: {
			data: ['01/10', '02/10', '2016', '2017', '2018', '2019'],
			axisLine: {
				lineStyle: {
					color: 'rgba(112, 131, 171, .1)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		tooltip: {
			show: true,
			showContent: true,
			alwaysShowContent: true,
			triggerOn: 'mousemove',
			trigger: 'axis',
			axisPointer: {
				label: {
					show: false,
				}
			}
		},
		yAxis: {
			splitLine: {
				lineStyle: {
					color: 'rgba(112, 131, 171, .1)'
				}
			},
			axisLine: {
				lineStyle: {
					color: 'rgba(119, 119, 142, 0.2)'
				}
			},
			axisLabel: {
				fontSize: 10,
				color: '#77778e'
			}
		},
		series: chartdata,
		color: ['#1cc5ef', '#24e4ac']
	};
	barChart.setOption(option);
	/*-----AreaChart Echart-----*/
	
	/*-----canvasDoughnut-----*/
	if ($('#canvasDoughnut').length) {
		var ctx = document.getElementById("canvasDoughnut").getContext("2d");
		new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ['WhatsApp', 'Instagram', 'Facebook'],
				datasets: [{
					data: [33, 33, 33],
					backgroundColor: ['#25D366', '#F77737', '#4267B2'],
					borderColor:'transparent',
				}]
			},
			options: {
				responsive: true,
				maintainAspectRatio: false,
				legend: {
					display: false
				},
				cutoutPercentage: 75,
			}
		});
	}
	/*-----canvasDoughnut-----*/
	
});


