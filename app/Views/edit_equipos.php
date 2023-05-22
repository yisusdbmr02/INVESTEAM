<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/equiposcontroller/upt" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<div class="row my-2">
    <div class="col">
        <label for="ideq">IdEquipo:</label>
        <input type="text" disabled class="form-input" requiered name="ideq" id="ideq">
    </div>
</div>
<div class="row my-2">
<div class="col">
        <label for="descripcion">Descripcion:</label>
        <input type="text" class="form-input" value="<?=$equipo['Descripcion']?>" requiered name="descripcion" id="nombreInvest">
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="facu">Facultad:</label>
        <select requiered name="facu" id="facu">
        <option value="">Todas las facultades</option>
            <?php
            if(count($lista_facultades) > 0){
            foreach($lista_facultades as $row):
            $sele=($equipo['Idfacultad']==$row->IdFacultad)?'selected':''?> 
            <option value="<?=$row->IdFacultad?>" <?=$sele?>><?=$row->NomFacultad?></option>
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
    
            