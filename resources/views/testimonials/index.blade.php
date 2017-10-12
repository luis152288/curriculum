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
                <div class="panel-heading">Seccion Testimonios</div>
                <div class="panel-body">
                	<a href="{{ url('/testimonials/create')}}" class="btn btn-primary"> Crear</a> <hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                       		<th>MENSAJE</th>
                    		<th>NOMBRE</th>
                    		<th colspan="2" width="5%">ACCIONES</th>
                    	</tr>
						@foreach($testimonials as $testimonials)
							<tr>
								<td>{{ $testimonials->id}}</td>
								<td>{{ $testimonials->mensaje}}</td>
								<td>{{ $testimonials->nombre}}</td>
								<td>
									<a href="{{ url('/testimonials/' . $testimonials->id . '/edit') }}" class="btn btn-link">
										<i class="fa fa-pencil fa-2x"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-link"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-testimonials-form').submit();">
										<i class="fa fa-trash fa-2x"></i>
									</a>
									<form id="delete-testimonials-form" action="{{ url('/testimonials/'.$testimonials->id) }}" method="post">
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