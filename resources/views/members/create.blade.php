@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li><a href="{{ url('/home') }}">Dashboard</a></li>
				<li><a href="{{ url('/admin/members') }}">Pekerja</a></li>
				<li class="active">Tambah Pekerja</li>
			</ul>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="panel-title">Tambah Pekerja</h2>
				</div>
				<div class="panel-body">
					{!! Form::open(['url'=>route('members.store'), 'method'=>'post', 'files'=>'true','class'=>'form-horizontal']) !!}
					@include('members._form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection