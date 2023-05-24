<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/facultadcontroller/upt" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<div class="row my-2">
<div class="col">
        <label for="nombre">Nombre:</label>
        <input type="hidden" name='id' value="<?=$facultad['IdFacultad']?>">
        <input type="text" value="<?=$facultad['NomFacultad']?>" class="form-input" name="nombre" id="nombreInvest">
    </div>
</div>
<div class="row d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
<br>    
    
            