
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
	}



						
						
						
