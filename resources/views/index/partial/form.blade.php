 <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
	<input type="file" class="form-control" id="imagen" name="imagen" value="{{ $index->imagen or old('imagen') }}" required>
	@if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
 </div>

 <div class="form-group">
 	<input type="text" name="nombre" id="nombre" class="form-control" placeholder="ingresa tu nombre" value="{{ $index->nombre or old('nombre') }}" required>
 </div>

 <div class="form-group">
 	<input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="ingresa descripcion" value="{{ $index->descripcion or old('descripcion') }}" required>
 </div>

  