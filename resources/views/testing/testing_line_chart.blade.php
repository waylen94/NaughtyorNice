@extends('layouts.app')
@section('title', 'Homepage')
@section('content')

<section class="page-section1" id="page-section1">
    <div class="container">
		@include('chart._linechart')
    </div>
 </section>
 
 
@stop