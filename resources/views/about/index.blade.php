@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
            <div class="panel panel-default">
                <div class="panel-heading">Seccion inicio</div>
                <div class="panel-body">
					<a href="{{ url('/about/create') }}" class="btn btn-primary">Crear</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                    		<th>DESCRIPCION</th>
                    		<th>SKILL</th>
                    		<th>NIVEL</th>
                    		<th>BARRA</th>
                    		<th colspan="2" width="5%">ACCIONES</th>
                    	</tr>
						@foreach($about as $about)
							<tr>
								<td>{{ $about->id}}</td>
								<td>{{ $about->descripcion}}</td>
								<td>{{ $about->skill}}</td>
								<td>{{ $about->nivel}}</td>
								<td>{{ $about->barra}}</td>
								<td>
									<a href="{{ url('/about/' . $about->id . '/edit') }}" class="btn btn-link">
										<i class="fa fa-pencil fa-2x"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-link"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-about-form').submit();">
										<i class="fa fa-trash fa-2x"></i>
									</a>
									<form id="delete-about-form" action="{{ url('/about/'.$about->id) }}" method="post">
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