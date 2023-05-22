<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/investigadorescontroller/save" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<div class="row my-2">
    <div class="col">
        <label for="dni">DNI:</label>
        <input type="text" class="form-input" name="dni" id="dniInvest">
    </div>
</div>
<div class="row my-2">
<div class="col">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-input" name="nombre" id="nombreInvest">
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="apellidos">Apellidos:</label>
        <input type="text" class="form-input" name="apellidos" id="apellidosInvest">
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
    
            