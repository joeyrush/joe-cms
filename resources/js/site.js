$(document).ready(function() {
	initAnimations();

	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'horizontalBar',
		data: {
			labels: ["PHP", "Laravel", "CakePHP", "MySQL", "Webpack", "Modern CSS", "JS", "Vue", "Git", "AWS/EC2/S3", "Docker", "DevOps/Ansible", "Nginx/Apache" ],
			datasets: [{
				label: 'Self-appointed Skill Level ',
				data: [80, 75, 70, 65, 55, 70, 49, 60, 45, 19, 23, 15, 25],
				backgroundColor: [
				'rgba(235,82,134, 0.7)',
				'rgba(235,82,134, 0.7)',
				'rgba(235,82,134, 0.7)',
				'rgba(235,82,134, 0.7)',
				'rgba(111,33,63, 0.7)',
				'rgba(94,7,144, 0.7)',
				'rgba(94,7,144, 0.7)',
				'rgba(94,7,144, 0.7)',
				'rgba(94,7,144, 0.7)',
				],
				borderColor: [
				'rgba(255,99,132,1)',
				'rgba(54, 162, 235, 1)',
				'rgba(255, 206, 86, 1)',
				'rgba(75, 192, 192, 1)',
				'rgba(153, 102, 255, 1)',
				'rgba(255, 159, 64, 1)'
				],
				borderWidth: 0
			}]
		},
		options: {
			tooltips: {
				callbacks: {
					label: function(tooltipItems, data) { 
						if (typeof tooltipItems.yLabel == 'undefined') return false;

						switch (tooltipItems.yLabel) {
							default:
								return ' ' + tooltipItems.yLabel + ': ' + tooltipItems.xLabel + ' skill-points (100 = master)';
						}
                    }
				}
			},
			scales: {
				xAxes: [{
					display: true,
					gridLines: {
						offsetGridLines: false,
						beginAtZero: true
					},
					ticks: {
	                    suggestedMin: 0,
	                    stepSize: 25,
	                    suggestedMax: 100,
	                    fontColor: '#382b5f',
	                    fontSize: 14,
	                    callback: function(label, index, labels) {
					        switch (label) {
					            case 0:
					                return 'Brand New';
					            case 25:
					                return 'Confident';
					            case 50:
					                return 'Advanced';
					            case 100:
					                return 'Rockstar';
					        }
					    }
	                }
				}],
				yAxes: [{
					ticks: {
						beginAtZero: false
					}
				}]
			}
		}
	});
});

function initAnimations() {
	// 
}