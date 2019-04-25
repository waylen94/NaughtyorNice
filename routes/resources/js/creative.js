
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

document.getElementById("testing_button").onclick = loadDoc;
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

