@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	@if(Session::has('mensaje'))
			<div class="alert alert-success alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Mensaje:</strong> {{ session('mensaje') }}
			</div>
        	@endif
            <div class="panel panel-default">
                <div class="panel-heading">Seccion Works</div>
                <div class="panel-body">
					<a href="{{ url('/works/create') }}" class="btn btn-primary">Crear</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<td>ID</td>
                    		<td width="15%">IMAGEN</td>
                    		<td>ARCHIVO</td>
                    		<td>TITULO</td>
                    		<td>SUBTITULO</td>
                    		<td>DESCRIPCION</td>
                    		<td>CLIENTE</td>
                    		<td colspan="3" width="10%">TAG</td>
                    		<td colspan="3" width="10%" >NOMBRES</td>
                    		<td colspan="2" width="5%">ACCIONES</tr>
                    	</tr>
						@foreach($works as $works)
							<tr>
								<th>{{ $works->id}}</th>
								<th><img src="{{ asset('imagenes/'.$works->imagen) }}" alt="" class="img-responsive" width="100"></td>
								<th>{{ $works->imagen}}</th>
								<th>{{ $works->titulo}}</th>
								<th>{{ $works->subtitulo}}</th>
								<th>{{ $works->descripcion}}</th>
								<th>{{ $works->cliente}}</th>
								<th>{{ $works->tag1}}</th>
								<th>{{ $works->tag2}}</th>
								<th>{{ $works->tag3}}</th>
								<th>{{ $works->nombre1}}</th>
								<th>{{ $works->nombre2}}</th>
								<th>{{ $works->nombre3}}</th>
								<th>
									<a href="{{ url('/works/' . $works->id . '/edit') }}" class="btn btn-info">
										<i class="fa fa-edit"></i>
									</a>
								</th>
								<th>
									<a href="javascript:void();" class="btn btn-danger"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-works-form').submit();">
										<i class="fa fa-trash"></i>
									</a>
									<form id="delete-works-form" action="{{ url('/works/'.$works->id) }}" method="post">
										{{ method_field('DELETE')}}
										{{ csrf_field() }}						
									</form>
								</th>
							</tr>
						@endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection