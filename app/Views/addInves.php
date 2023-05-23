<div class="container">
<?php
echo form_open('/investigadorescontroller/add');
if(isset($list)){
    $dni=$list[0]['DNI'];
    $nombre=$list[0]['NomInvestigador'];
    $apell=$list[0]['ApellInvestigador'];
    $facu=$list[0]['IdFacultad'];
}
else{
    $dni="";
    $nombre="";
    $apell="";
    $facu="";
}
?>
<div class="form-group">
<?php
echo form_label('DNI','dni');
echo form_input(array('name'=>'dni','placeholder'=>'DNI','class'=>'form-control','value'=>$dni));
echo "<br>";
echo form_label('Nombre','nombre');
echo form_input(array('name'=>'nombre','placeholder'=>'Nombre','class'=>'form-control','value'=>$nombre));
echo "<br>";
echo form_label('Apellidos','apellidos');
echo form_input(array('name'=>'apellidos','placeholder'=>'Apellidos','class'=>'form-control','value'=>$apell));
echo "<br>";
echo form_label('Facultad','facultad');
echo form_input(array('name'=>'facultad','placeholder'=>'Facultad','class'=>'form-control','value'=>$facu));
echo "<br>";
echo form_submit('add','Guardar','class="btn btn-primary"');
?>
<a href="http://localhost/ProyectoCI/index.php/investigadorescontroller/" class="btn btn-warning" role="button">Cancelar</a>
<?php
if(isset($list)){
    echo form_hidden('id',$users[0]['DNI']);
}

?>
</div>
<?php

echo form_close();
?>
</div>