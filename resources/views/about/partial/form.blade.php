<div class="form-group">
    <input type="text" class="form-control" id="skill" name="skill" 
        value="{{ $about->skill or old('skill') }}" placeholder="ingresa una habilidad">                            
</div>

<div class="form-group">
 <input type="text" class="form-control" id="nivel" name="nivel" 
  value="{{ $about->nivel or old('nivel') }}" placeholder="ingresa el nivel">                            
</div>
