<div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="file" class="form-control" id="imagen" name="imagen" value="{{ $works->imagen or old('imagen') }}" required>
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
 </div>
 <div class="container">
	<div class="row">
		<div class="col-md-10">
				<div class="form-group col-md-4">
			    <input type="text" class="form-control" id="titulo" name="titulo" 
			        value="{{ $works->titulo or old('titulo') }}" placeholder="ingresa el titulo">                            
				</div>

				<div class="form-group col-md-4">
			    <input type="text" class="form-control" id="subtitulo" name="subtitulo" 
			        value="{{ $works->subtitulo or old('subtitulo') }}" placeholder="ingresa el subtitulo">                            
				</div>
		</div>
	</div>
</div>

 <div class="form-group">
 	<input type="textarea" name="descripcion" id="descripcion" class="form-control" placeholder="ingresa descripcion" value="{{ $works->descripcion or old('descripcion') }}" required>
 </div>

 <div class="form-group">
 	<input type="textarea" name="link" id="link" class="form-control" placeholder="ingresa el link" value="{{ $works->link or old('link') }}" required>
 </div>

 <div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="tag1" name="tag1" 
			        value="{{ $works->tag1 or old('tag1') }}" placeholder="ingresa la etiqueta">                            
				</div>

				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="tag2" name="tag2" 
			        value="{{ $works->tag2 or old('tag2') }}" placeholder="ingresa la etiqueta">                            
				</div>

				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="tag3" name="tag3" 
			        value="{{ $works->tag3 or old('tag3') }}" placeholder="ingresa la etiqueta">                            
				</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="nombre1" name="nombre1"
			        value="{{ $works->nombre1 or old('nombre1') }}" placeholder="ingresa el nombre">                            
				</div>

				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="nombre2" name="nombre2" 
			        value="{{ $works->nombre2 or old('nombre2') }}" placeholder="ingresa el nombre">                            
				</div>

				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="nombre3" name="nombre3" 
			        value="{{ $works->nombre3 or old('nombre3') }}" placeholder="ingresa el nombre">                            
				</div>
		</div>
	</div>
</div>

 <div class="form-group">
 	<input type="text" name="cliente" id="cliente" class="form-control" placeholder="ingresa el cliente" value="{{ $works->cliente or old('cliente') }}" required>
 </div>
