<div class="input-field">
<input type="text" name="titulo" id="titulo" value="{{ isset($registro->titulo)?($registro->titulo): '' }}">
<label>Título</label>
</div>

<div class="input-field">
<input type="text" name="descricao" id="descricao" value="{{ isset($registro->descricao)?($registro->descricao): '' }}">
<label>Descrição</label>
</div>

<div class="input-field">
<input type="text" name="valor" id="valor" value="{{ isset($registro->valor)?($registro->valor): '' }}">
<label>Valor</label>
</div>

<div class="file-field input-field">
    
    <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem" multiple>
    </div>
    <div class="file-path-wrapper">
    <input class="file-path validate" type="text" placeholder="Upload one or more files">
    </div>
</div>

@if (isset($registro->imagem))
    <div class="input-field">
    <img width="150" src="{{ asset($registro->imagem) }}" alt="">
    </div>    
@endif

<div class="input-field">

        <p>
                <label>
                  <input type="checkbox" name="publicado"  {{isset($registro->publicado) && $registro->publicado == 'sim' ?  'checked' : '' }} value="true" />
                  <span>Publicar?</span>
                </label>
            </p>
            <br><br>

</div>