$(document).ready(function() {
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'horizontalBar',
		data: {
			labels: ["PHP", "JS", "Laravel", "CakePHP", "Linux", "HTML/CSS", "Vue", "Git", "MySQL" ],
			datasets: [{
				label: 'Self-appointed Skill Level ',
				data: [85, 35, 73, 65, 25, 68, 60, 40, 55],
				backgroundColor: [
				'rgba(56,43,95, 0.85)',
				'rgba(56,43,95, 0.8)',
				'rgba(56,43,95, 0.75)',
				'rgba(56,43,95, 0.7)',
				'rgba(56,43,95, 0.7)',
				'rgba(56,43,95, 0.65)',
				'rgba(56,43,95, 0.45)',
				'rgba(56,43,95, 0.45)',
				'rgba(56,43,95, 0.4)'
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
	                    fontSize: 13,
	                    callback: function(label, index, labels) {
					        switch (label) {
					            case 0:
					                return 'Brand New';
					            case 25:
					                return 'Getting It';
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