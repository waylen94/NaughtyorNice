
if(document.getElementById('line_chart_canvas')){
var ctx = document.getElementById('line_chart_canvas').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
	        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
	        datasets: [{
	            label: 'My First dataset',
	            backgroundColor: 'rgb(255, 99, 132)',
	            borderColor: 'rgb(255, 99, 132)',
	            data: [0,10, 5, 2, 20, 30, 45]
	        		}]
    		}

});
};

var horizen_1 = "Jan";
var horizen_2 = "Jan";
var horizen_3 = "Jan";
var horizen_4 = "Jan";
var horizen_5 = "Jan";
var horizen_6 = "Jan";
var horizen_7 = "Jan";
var horizen_8 = "Jan";
var horizen_9 = "Jan";
var horizen_10 = "Jan";
var horizen_11 = "Jan";
var horizen_12 = "Jan";

var point_1 = 99;
var point_2 = 258;
var point_3 = 375;
var point_4 = 482;
var point_5 = 598;
var point_6 = 670;
var point_7 = 699;
var point_8 = 551;
var point_9 = 443;
var point_10 = 332;
var point_11 = 225;
var point_12 = 110;

var json_data = [];
$.ajax({
    url: '../uploads/Json/htel_testing.json',
    async: false,
    success: function (data) {
    	
    	json_data = data;
    }
});
var json_max = [];


function JsonSort(json,key){
    for(var j=1,jl=json.length;j < jl;j++){
        var temp = json[j], val  = temp[key], i    = j-1;
        
        while(i >=0 && json[i][key]>val){
            json[i+1] = json[i];
            i = i-1;    
        }
        
        json[i+1] = temp;   
    }
    return json;
}
var json_max = JsonSort(json_data,'scale');


if(document.getElementById('line_chart_canvas_testing')){
var ctx = document.getElementById('line_chart_canvas_testing').getContext('2d');



var chart_line_testing = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    // The data for our dataset
    data: {
	        labels: [horizen_1, horizen_2, horizen_3, horizen_4, horizen_5, horizen_6, horizen_7, horizen_8, horizen_9, horizen_10, horizen_11, horizen_12],
	        datasets: [{
	        	data: [point_1,point_2, point_3, point_4, point_5, point_6, point_7,point_8,point_9,point_10,point_11,point_12],
	            label: 'Sample',
	            backgroundColor: 'rgb(255, 99, 132)',
	            borderColor: 'rgb(255, 99, 132)'
	            
	        		}]
    		}
//    		options: {
//    	        elements: {
//    	            line: {
//    	                tension: 0 // disables bezier curves
//    	            }
//    	        }
  //  	    }

});


};
if(document.getElementById("testing_button")){
document.getElementById("testing_button").onclick = loadDoc;
}
function loadDoc(){
	for (i = 1; i < 13; i++) { 
		chart_line_testing.data.labels[i-1] = document.getElementById("horizen_"+i).value;
		chart_line_testing.data.datasets[0].data[i-1] = Number(document.getElementById("point_"+i).value);
		  }
//	var ctx = document.getElementById('line_chart_canvas_testing').getContext('2d');
//
//		chart_line_testing.render({
//		    // The type of chart we want to create
//		    type: 'line',
//		    // The data for our dataset
//		    data: {
//			        labels: [horizen_1, horizen_2, horizen_3, horizen_4, horizen_5, horizen_6, horizen_7, horizen_8, horizen_9, horizen_10, horizen_11, horizen_12],
//			        datasets: [{
//			            label: 'My First dataset',
//			            backgroundColor: 'rgb(255, 99, 132)',
//			            borderColor: 'rgb(255, 99, 132)',
//			            data: [point_1,point_2, point_3, point_4, point_5, point_6, point_7,point_8,point_9,point_10,point_11,point_12]
//			        		}]
//		    		}
//		    		options: {
//		    	        elements: {
//		    	            line: {
//		    	                tension: 0 // disables bezier curves
//		    	            }
//		    	        }
//  	    }
//
//});
	chart_line_testing.update();
};



//barchart
	if(document.getElementById('bar_chart_canvas')){
		var ctx = document.getElementById('bar_chart_canvas').getContext('2d');
		var myBarChart = new Chart(ctx, {
			type: 'bar',
		    data: {
		        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
		        datasets: [{
		            label: '# of Votes',
		            data: [12, 19, 3, 5, 2, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)',
		                'rgba(255, 206, 86, 0.2)',
		                'rgba(75, 192, 192, 0.2)',
		                'rgba(153, 102, 255, 0.2)',
		                'rgba(255, 159, 64, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255, 99, 132, 1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)',
		                'rgba(75, 192, 192, 1)',
		                'rgba(153, 102, 255, 1)',
		                'rgba(255, 159, 64, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero: true
		                }
		            }]
		        }
		    }
		});
		};
		
//bubblechart
		var DATA_COUNT = 2600;
		var MIN_XY = -150;
		var MAX_XY = 100;

		function generateData() {
			var data = [];
			var i;

			for (i = 0; i < DATA_COUNT; ++i) {
				data.push({
					x: i,
					y: json_data[i].scale,
					v: 100
				});
			}

			return data;
		}
		if(document.getElementById('bubble_chart_canvas')){
			var ctx = document.getElementById('bubble_chart_canvas').getContext('2d');
			var myBarChart = new Chart(ctx, {
				type: 'bubble',
				data: {datasets: [{
					data: generateData()
				}]
			}

			});
			};
			var length = json_max.length;
			var max1 = json_max[length-1].scale, max2 = json_max[length-2].scale, max3 = json_max[length-3].scale;
//piechart
			if(document.getElementById('pie_chart_canvas')){
				var ctx = document.getElementById('pie_chart_canvas').getContext('2d');
				var myBarChart = new Chart(ctx, {
				    type: 'pie',
				    data:	{
			    	    datasets: [{
			    	        data: [max1, max2, max3]
			    	    }],

			    	    // These labels appear in the legend and in the tooltips when hovering different arcs
			    	    labels: [
			    	        'Ranking First',
			    	        'Rnaking Second',
			    	        'Ranking Third'
			    	    ]
			    	}
				});
				};
//polarchart
				if(document.getElementById('polar_chart_canvas')){
					var ctx = document.getElementById('polar_chart_canvas').getContext('2d');
					var myBarChart = new Chart(ctx, {
						type: 'polarArea',
					    data:{
					    	datasets: [{
					        data: [10, 20, 30]
					    }],

					    // These labels appear in the legend and in the tooltips when hovering different arcs
					    labels: [
					        'Red',
					        'Yellow',
					        'Blue'
					    ]
					}
					});
					};
//radarchart
					if(document.getElementById('radar_chart_canvas')){
						var ctx = document.getElementById('radar_chart_canvas').getContext('2d');
						var myBarChart = new Chart(ctx, {
						    type: 'radar',
						    data: {
						        labels: ['Running', 'Swimming', 'Eating', 'Cycling'],
						        datasets: [{
						            data: [20, 10, 4, 2]
						        }]
						    },
						    options: {
						        scale: {
						            // Hides the scale
						            display: false
						        }
						    }
						    });
						};
