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
                <div class="panel-heading">Seccion inicio</div>
                <div class="panel-body">
					<a href="{{ url('/index/create') }}" class="btn btn-primary">Crear</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th width="15%">IMAGEN</th>
                    		<th>ARCHIVO</th>
                    		<th>NOMBRE</th>
                    		<th>DESCRIPCION</th>
                    		<th colspan="2" width="5%">ACCIONES</th>
                    	</tr>
						@foreach($index as $index)
							<tr>
								<td>{{ $index->id}}</td>
								<td><img src="{{ asset('imagenes/'.$index->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<td>{{ $index->imagen}}</td>
								<td>{{ $index->nombre}}</td>
								<td>{{ $index->descripcion}}</td>
								<td>
									<a href="{{ url('/index/' . $index->id . '/edit') }}" class="btn btn-link">
										<i class="fa fa-pencil fa-2x"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-link"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-index-form').submit();">
										<i class="fa fa-trash fa-2x"></i>
									</a>
									<form id="delete-index-form" action="{{ url('/index/'.$index->id) }}" method="post">
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