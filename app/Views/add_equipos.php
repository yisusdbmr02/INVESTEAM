<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/equiposcontroller/save" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<div class="row my-2">
    <div class="col">
        <label for="ideq">IdEquipo:</label>
        <input type="text"  class="form-input" name="ideq" id="ideq">
    </div>
</div>
<div class="row my-2">
<div class="col">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-input" name="descripcion" id="nombreInvest">
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="facu">Facultad:</label>
        <select name="facu" id="facu">
        <option value="">Todas las facultades</option>
            <?php
            if(count($lista_facultades) > 0){
            foreach($lista_facultades as $row): ?> 
            <option value="<?=$row->IdFacultad?>"><?=$row->NomFacultad?></option>
            <?php endforeach;
            }?> 
        </select>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
<br>    
    
            