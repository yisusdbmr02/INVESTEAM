<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/reservascontroller/upt" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<input type="hidden" value="<?=$reserva['IdReserva']?>" name="idres">
<div class="row my-2">
    <div class="col">
        <label for="dni">DNI:</label>
        <select name="dni" required id="dni">
        <option value="">Todos los Investigadores</option>
        <?php if(count($lista_investigadores) > 0){
            foreach($lista_investigadores as $row): 
                $sele=($reserva['DNI']==$row->DNI)?'selected':''?>  ?> ?> 
            <option value="<?=$row->DNI?>" <?=$sele?>><?=$row->NomInvestigador?></option>
            <?php endforeach;
            }?> 
        </select>
    </div>
</div>
<div class="row my-2">
<div class="col">
<label for="ideq">IdEquipo:</label>
        <select required name="ideq" id="ideq">
        <option value="">Todos los Equipos</option>
            <?php
            if(count($lista_equipos) > 0){
            foreach($lista_equipos as $row):
                $sele=($reserva['IdEquipo']==$row->IdEquipo)?'selected':''?>  ?> 
            <option value="<?=$row->IdEquipo?>" <?=$sele?>><?=$row->IdEquipo?></option>
            <?php endforeach;
            }?> 
        </select>
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="fechaIni">Fecha Inicio:</label>
        <input required value="<?=$reserva['FechaInicio']?>" type="datetime-local" name="fechaIni" id="fechaIni">
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="fechaFin">Fecha Fin:</label>
        <input requierd  value="<?=$reserva['FechaFin']?>" type="datetime-local" name="fechaFin" id="fechaFin">
    </div>
</div>
<div class="row d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
<br>    
    
            