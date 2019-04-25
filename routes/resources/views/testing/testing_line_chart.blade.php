@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

<section class="page-section1" id="page-section1">

	
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-8 text-center">
				<!-- Area Chart -->
                    <div class="card shadow mb-4" id="line_chart">
                        <div class="card-header py-3">
                       		<h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                            	<canvas id="line_chart_canvas_testing"></canvas>
                            </div>
                            	<hr>
                        </div>
                    </div>
			</div>
			</div>
			<form method="POST" action="{{ route('testing') }}">
			 {{ csrf_field() }}
          		<div class="form-group">
          		<div class = "row container">
   
					<label for="horizon">Horizen：</label>
      					<div class="col">	<input type="text" name="horizen_1" id="horizen_1" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_2" id="horizen_2" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_3" id="horizen_3" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_4" id="horizen_4" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_5" id="horizen_5" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_6" id="horizen_6" class="form-control" value="{{ old('horizen_1') }}">	</div>
                     <div class="col">	<input type="text" name="horizen_7" id="horizen_7" class="form-control" value="{{ old('horizen_1') }}">	</div>
					<div class="col">	<input type="text" name="horizen_8" id="horizen_8" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_9" id="horizen_9" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_10" id="horizen_10" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_11" id="horizen_11" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="horizen_12" id="horizen_12" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      
				</div>
				
<!-- 					<div class="row container"> -->
<!-- 					<label for="horizon">vertical：</label> -->
<!--                      <div class="col">	<input type="text" name="vertical_1" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_2" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_3" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_4" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_5" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_6" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                      <div class="col">	<input type="text" name="vertical_7" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                      <div class="col">	<input type="text" name="vertical_8" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                      <div class="col">	<input type="text" name="vertical_9" class="form-control" value="{{ old('horizen_1') }}"> -->
<!--                      </div> </div> -->
                     
				<div class="row container">
				<label for="horizon">Points：</label>
      					<div class="col">	<input type="text" name="point_1" id="point_1" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_2" id="point_2" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_3" id="point_3" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_4"  id="point_4" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_5" id="point_5" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_6" id="point_6" class="form-control" value="{{ old('horizen_1') }}">	</div>
                     <div class="col">	<input type="text" name="point_7" id="point_7" class="form-control" value="{{ old('horizen_1') }}">	</div>
						<div class="col">	<input type="text" name="point_8" id="point_8" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_9" id="point_9" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_10" id="point_10" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_11" id="point_11" class="form-control" value="{{ old('horizen_1') }}">	</div>
                      <div class="col">	<input type="text" name="point_12" id="point_12" class="form-control" value="{{ old('horizen_1') }}">	</div>
                     	</div>
<!-- 				<div class = "row container"> -->
                      
<!--                      <div class="col">	<input type="text" name="vertical_1" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_2" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_3" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_4" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_5" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       <div class="col">	<input type="text" name="vertical_6" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                      <div class="col">	<input type="text" name="vertical_7" class="form-control" value="{{ old('horizen_1') }}">	</div> -->
<!--                       </div> -->
				
				 <button type="button" id = "testing_button"class="btn btn-primary" onclick="loadDoc()">Save</button>
			</div>
			
   	 </div>
 </section>
 
 
@stop