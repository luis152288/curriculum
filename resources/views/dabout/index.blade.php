@extends ('layouts.app') 

@section ('content')
<div class="panel panel-default">
                <div class="panel-heading">Seccion About</div>
                <div class="panel-body">
					<a href="{{ url('/about/create') }}" class="btn btn-primary">Crear</a> <a href="{{ url('/dabout/create') }}" class="btn btn-primary">Crear descripcion</a><hr>
                    <table class="table table-bordered">
                    	<tr>
                    		<th>ID</th>
                       		<th>DESCRIPCION</th>
                    		<th colspan="2" width="5%">ACCIONES</th>
                    	</tr>
						@foreach($dabout as $dabout)
							<tr>
								<td>{{ $dabout->id}}</td>
								<td>{{ $dabout->descripcion}}</td>
								<td>
									<a href="{{ url('/dabout/' . $dabout->id . '/edit') }}" class="btn btn-link">
										<i class="fa fa-pencil fa-2x"></i>
									</a>
								</td>
								<td>
									<a href="javascript:void();" class="btn btn-link"
										onclick="event.preventDefault();
                                                     document.getElementById('delete-dabout-form').submit();">
										<i class="fa fa-trash fa-2x"></i>
									</a>
									<form id="delete-dabout-form" action="{{ url('/dabout/'.$dabout->id) }}" method="post">
										{{ method_field('DELETE')}}
										{{ csrf_field() }}						
									</form>
								</td>
							</tr>
						@endforeach
                    </table>
                </div>
@endsection