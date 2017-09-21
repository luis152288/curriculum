@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Crear</div>
                <div class="panel-body">
					<form action="{{ url('/about') }}" class="form-vertical" method="post" enctype="multipart/form-data">
						{{ method_field('POST')}}
						{{ csrf_field() }}
						@include('dabout.partial.form')
						<div class="form-group">
							<button type="submit" class="btn btn-info form-control">
								Guardar
							</button>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection