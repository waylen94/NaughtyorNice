
if(document.getElementById('deco7861')){
	
	vis_dataset_id_label = []
	
	for(var j=0,jl=json_data_diagram.node.length;j < jl;j++){
        vis_dataset_id_label.push({id: json_data_diagram.node[j][0],label: json_data_diagram.node[j][1]});
    }
	
	
	var nodes = new vis.DataSet(vis_dataset_id_label);

    // create an array with edges
	vis_dataset_connection = []
	for(var j=0,jl=json_data_diagram.edge.length;j < jl;j++){
        vis_dataset_connection.push({from: json_data_diagram.edge[j][0],to: json_data_diagram.edge[j][1], arrows:'to'});
    }
    var edges = new vis.DataSet(vis_dataset_connection);

    // create a network
    var container = document.getElementById('deco7861');
    
    
    nodes.update({id:3, color:"rgba(245,70,15)"});
    nodes.update({id:7, color:"rgba(245,70,15)"});
    nodes.update({id:8, color:"rgba(245,70,15)"});
    nodes.update({id:100, color:"#7BE141"});
    nodes.update({id:102, color:"#7BE141"});
    nodes.update({id:106, color:"#7BE141"});
    nodes.update({id:500, color:"rgba(151,151,151)"});
//    nodes.update({id:500, color: {background:'pink', border:'purple'}});
    // provide the data in the vis format
    var data = {
        nodes: nodes,
        edges: edges
    };
    var options = {

    };
    
    // initialize your network!
    var network = new vis.Network(container, data, options);
    network.focus("3");
    network.focus("7");
    network.focus("8");
    network.redraw();
}
						
						
						
