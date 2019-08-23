@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
	@include('homepage.deco7861_section')
@stop

@section("json")
<script>
	var json_data_diagram =  {{!!trim($json_storages->file_content,"{}")!!}};
</script>
@stop