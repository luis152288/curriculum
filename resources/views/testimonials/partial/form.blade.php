<div class="form-group">
    <input type="text" class="form-control" id="mensaje" name="mensaje" 
        value="{{ $testimonials->mensaje or old('mensaje') }}" placeholder="ingresa un mensaje" cols="10" row="20">
     @if ($errors->has('imagen'))
        <span class="help-block">
        	<strong>{{ $errors->first('imagen') }}</strong>
        </span>
    @endif
</div>

<div class="form-group">
 <input type="text" class="form-control" id="nombre" name="nombre" 
  value="{{ $testimonials->nombre or old('nombre') }}" placeholder="ingresa el nombre">
</div>
