$(document).ready(function() {
	initAnimations();

	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		type: 'horizontalBar',
		data: {
			labels: ["Modern CSS", "PHP", "JS", "Laravel", "CakePHP", "Vue", "Git", "MySQL", "Utility-First CSS", "Linux" ],
			datasets: [{
				label: 'Self-appointed Skill Level ',
				data: [68, 85, 49, 73, 65, 60, 40, 55, 50, 25],
				backgroundColor: [
				'rgba(191, 53, 100, 0.85)',
				'rgba(191, 53, 100, 0.8)',
				'rgba(191, 53, 100, 0.75)',
				'rgba(191, 53, 100, 0.7)',
				'rgba(191, 53, 100, 0.7)',
				'rgba(191, 53, 100, 0.65)',
				'rgba(191, 53, 100, 0.45)',
				'rgba(191, 53, 100, 0.45)',
				'rgba(191, 53, 100, 0.4)'
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

function initAnimations() {
	$(".project").hover(function(){
	    $(this).addClass('animated pulse faster');
	}, function () {
	    $(this).removeClass('animated pulse faster');
	});
}