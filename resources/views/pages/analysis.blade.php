@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
<section class="page-section2" id="page-section2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">


	@include('chart._areachart')
	@include('chart._barchart')
	@include('chart._bubblechart')
	@include('chart._linechart')
	@include('chart._piechart')
	@include('chart._polarchart')
	@include('chart._radarchart')
	@include('chart._scatterchart')
        </div>
      </div>
    </div>
 </section>
   
  
  
@stop