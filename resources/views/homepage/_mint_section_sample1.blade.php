
 <section class="page-section1" id="page-section1">
 <div class = "row">
<div class="col-xl-1"></div>
 <!-- Area Chart -->
<div class="card shadow col-xl-10">
    <div class="card-header d-flex flex-row">
    <div class ="row">
    <div class="p-2 m-0 font-weight-bold text-primary">
    Network Graph
   	</div>
   	
   	<form action="{{ route('upload') }}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
   	 <div class="form-group">
   	 <div class ="row">
   	 	<div class = "col-xl-7">
       	 <input type="file" name="network_json" class="form-control-file"> 
       	 </div>
       	 <div class = "col-xl-2">
           <button type="submit" class="btn btn-primary">upload</button>
           </div>
           </div>
           </div>
   	 </form>
   	 
    </div>   
    </div>
<!--         	<canvas id="bar_chart_canvas"></canvas> -->
    <div class="container" id = "deco7861">
    </div>
    
    <div class="col-xl-1"></div>
</div>
</div>
 </section>