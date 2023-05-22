<br>
<div class="row d-flex justify-content-center">
   
<form action="<?=base_url()?>index.php/reservascontroller/save" class="w-50 border rounded bg-warning text-center p-3" method="post">
<h1><?=$page_title?></h1>
<div class="row my-2">
    <div class="col">
        <label for="dni">DNI:</label>
        <select name="dni" required id="dni">
        <option value="">Todos los Investigadores</option>
        <?php if(count($lista_invest) > 0){
            foreach($lista_invest as $row): ?> 
            <option value="<?=$row->DNI?>"><?=$row->NomInvestigador?></option>
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
            foreach($lista_equipos as $row): ?> 
            <option value="<?=$row->IdEquipo?>"><?=$row->IdEquipo?></option>
            <?php endforeach;
            }?> 
        </select>
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="fechaIni">Fecha Inicio:</label>
        <input required type="datetime-local" name="fechaIni" id="fechaIni">
    </div>
</div>
<div class="row my-2">
    <div class="col">
        <label for="fechaFin">Fecha Fin:</label>
        <input requierd type="datetime-local" name="fechaFin" id="fechaFin">
    </div>
</div>
<div class="row d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
<br>    
    
            