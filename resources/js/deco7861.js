var edge_record_list = [];
if(document.getElementById('deco7861')){
	var json_data = json_data_diagram;
	//After we have corresponded Json File ex. json_data 
	  vis_dataset_id_label = []; // store nodes info
	//Seperate Node from json
	  for (var j = 0, jl = json_data.node.length; j < jl; j++) {
	    vis_dataset_id_label.push({
	      id: json_data.node[j][0],
	      label: json_data.node[j][1]
	    });
	  }

	  var nodes = new vis.DataSet(vis_dataset_id_label); // create an array with edges

	  vis_dataset_connection = []; // store edge info
	//seperate edge from json
	  for (var j = 0, jl = json_data.edge.length; j < jl; j++) {
	    vis_dataset_connection.push({
	      from: json_data.edge[j][0],
	      to: json_data.edge[j][1],
	      arrows: 'to',
	    });
	  }

	  var edges = new vis.DataSet(vis_dataset_connection); // create a network
	  //Capture the container where exhibited the diagram
	  var container = document.getElementById('deco7861');
	  

	  for (i = 0; i < vis_dataset_id_label.length; i++) { 
		  var id = vis_dataset_id_label[i].id;
		  var str = vis_dataset_id_label[i].label;	
		  if(str.indexOf("attacker")>-1){
			//detecting attacker node and change the color to grey
			  nodes.update({
				    id: Number(id),
				    color: "rgba(151,151,151)"
				  }); 
		  }else if(str.indexOf("server")>-1){
			//detecting server node
			  //if it is decoy then green
			  if (str.indexOf("decoy")>-1){
				  nodes.update({
					    id: Number(id),
					    color: "#7BE141"
					  }); 
				  //if it is real then red
			  }else{
				  nodes.update({
					    id: Number(id),
					    color: "rgba(245,70,15)"
					  }); 
			  }
		  }else if(str.indexOf("target")>-1){
			//detecting target node and change to red
			  //if it is decoy then green
			  if (str.indexOf("decoy")>-1){
				  nodes.update({
					    id: Number(id),
					    color: "#7BE141"
					  }); 
				  //if it is real then red
			  }else{
				  nodes.update({
					    id: Number(id),
					    color: "rgba(245,70,15)"
					  }); 
			  }
		  }
		}

		  // provide the data in the vis format
		  var data = {
		    nodes: nodes,
		    edges: edges
		  };	  
		  var options = {}; // initialize your network!
		  var network = new vis.Network(container, data, options);
		  network.redraw();
		  
		  
		// event driven
			if(document.getElementById("fix_shuffle")){
			document.getElementById("fix_shuffle").onclick = fixshuffle;
			}

			function fixshuffle(){
				// network.setDate({"node": [[1, "mri000"], [2, "ct"], [3, "thermostat"], [4, "meter"], [5, "camera"], [6, "tv"], [7, "laptop"], [8, "server1"], [100, "decoy_laptop1"], [101, "decoy_laptop2"], [102, "decoy_thermostat3"], [103, "decoy_thermostat4"], [104, "decoy_tv5"], [105, "decoy_tv6"], [106, "decoy_server7"], [500, "attacker"]], "edge": [[1, 8], [2, 8], [3, 8], [3, 6], [3, 7], [4, 8], [4, 6], [4, 7], [5, 8], [5, 6], [5, 7], [6, 8], [7, 8], [8, 550], [100, 106], [101, 106], [102, 106], [103, 106], [104, 106], [105, 106], [106, 550], [500, 1], [500, 2], [500, 3], [500, 4], [500, 5], [500, 6], [500, 7], [500, 100], [500, 101], [500, 102], [500, 103], [500, 104], [500, 105]]})
				var edge_items = edges.get();
				var newId = (Math.random()*edge_items.length).toFixed(0);
				var random = (Math.random()*10).toFixed(0);
				
				

				//for testing

				if(random > 5){
					edge_record_list.push({"from":edge_items[newId].from,"to":edge_items[newId].to, arrows: 'to'});
					edges.remove(edge_items[newId]);

					console.log(newId);
					console.log(edge_record_list);
					console.log("operate remove action"+ "   this is new id  "+ newId);
				}else{
					if(edge_record_list.length>0){		
						edges.add(edge_record_list.shift());		
					}
					console.log("operate add action" + random);
					console.log(edge_record_list)
				}
				

				
				
			}
			// event driven
			if(document.getElementById("dyn_shuffle")){
			document.getElementById("dyn_shuffle").onclick = dynshuffle;
			}

			function dynshuffle(){
				

			}
	}



						
						
						
