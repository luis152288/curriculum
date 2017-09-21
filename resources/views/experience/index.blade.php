@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
            <div class="panel panel-default">
                <div class="panel-heading">Seccion experience</div>
                <div class="panel-body">
					<a href="{{ url('/experience/create') }}" class="btn btn-primary">Crear</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th>TITULO</th>
                    		<th>DESCRIPCION</th>
                    		<th>IMAGEN</th>
                    		<th>COLOR</th>
                    		<th colspan="2" width="5%">ACCIONES</th>
                    	</tr>
						@foreach($experiences as $experiences)
							<tr>
								<td>{{ $experiences->id}}</td>
								<td>{{ $experiences->titulo}}</td>
								<td>{{ $experiences->descripcion}}</td>
								<td>{{ $experiences->img}}</td>
								<td>{{ $experiences->color}}</td>
								<td>
									<a href="{{ url('/experience/' .$experiences->id. '/edit') }}" class="btn btn-link">
										<i class="fa fa-pencil fa-2x"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-link"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-experience-form').submit();">
										<i class="fa fa-trash fa-2x"></i>
									</a>
									<form id="delete-experience-form" action="{{ url('/experience/'.$experiences->id) }}" method="post">
										{{ method_field('DELETE')}}
										{{ csrf_field() }}						
									</form>
								</td>
							</tr>
						@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection