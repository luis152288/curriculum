<div class="form-group">
    <input type="text" class="form-control" id="descripcion" name="descripcion" 
        value="{{ $about->descripcion or old('descripcion') }}" placeholder="descripcion">                            
</div>
<div class="form-group">
    <input type="text" class="form-control" id="skill" name="skill" 
        value="{{ $about->skill or old('skill') }}" placeholder="ingresa una habilidad">                            
</div>

<div class="container">
	<div class="row">
		<div class="col-md-10">
				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="nivel" name="nivel" 
			        value="{{ $about->nivel or old('nivel') }}" placeholder="ingresa en % cual es tu nivel">                            
				</div>

				<div class="form-group col-md-2">
			    <input type="text" class="form-control" id="barra" name="barra" 
			        value="{{ $about->nivel or old('nivel') }}" placeholder="ingresa un numero del 1 al 100">                            
				</div>
		</div>
	</div>
</div>