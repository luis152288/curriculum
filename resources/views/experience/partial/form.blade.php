
<div class="form-group">
    <input type="text" class="form-control" id="titulo" name="titulo" 
        value="{{ $experiences->titulo or old('titulo') }}" placeholder="ingresa un titulo">                            
</div>

<div class="form-group">
    <textarea type="text" class="form-control" id="descripcion" name="descripcion" 
        value="{{ $experiences->descripcion or old('descripcion') }}" placeholder="descripcion"></textarea>                             
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
				<div class="form-group col-md-3">
					<input type="text" class="form-control" id="img" name="img" 
        			value="{{ $experiences->img or old('img') }}" placeholder="imagen"> 
				</div>
				<div class="form-group col-md-4">
					<select name="color" id="color" class="form-control" required>
						<option >seleccione un color</option>
						<option value="color-white" @if($experiences->color == 'color-white') selected @endif>Blanco</option>
						<option value="color-grey" @if($experiences->color == 'color-grey') selected @endif>Gris</option>
					</select>
				</div>
				<div class="form-group col-md-4">
					<select name="fondo" id="fondo" class="form-control" required>
						<option >seleccione un color de fondo</option>
						<option value="bg-color-base" @if($experiences->fondo == 'bg-color-base') selected @endif>Azul</option>
						<option value="no" @if($experiences->fondo == 'no') selected @endif>Blanco</option>
					</select>
				</div>
		</div>
	</div>
</div>

