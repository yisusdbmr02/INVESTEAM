<div class="container">
<?php

echo form_open('/investigadorescontroller/save');
$options = [];
foreach ($lista_facultades as $facu) {
    $options[$facu->IdFacultad] = $facu->NomFacultad;
}

/*
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
}*/
?>
<div class="form-group">
<?php
//lang('app_lang.Guardar');
echo form_label('DNI','dni');
echo form_input(array('name'=>'dni','placeholder'=>'DNI','class'=>'form-control'));
echo "<br>";
echo form_label('Nombre','nombre');
echo form_input(array('name'=>'nombre','placeholder'=>'Nombre','class'=>'form-control',));
echo "<br>";
echo form_label('Apellidos','apellidos');
echo form_input(array('name'=>'apellidos','placeholder'=>'Apellidos','class'=>'form-control'));
echo "<br>";
echo form_label('Facultad','facultad');
echo form_dropdown('facultad',$options, '0','class="form-control"' );
echo "<br>";
echo form_submit('add',lang('app_lang.Guardar'),'class="btn btn-primary"');
echo form_button(['name' => 'cancelar','type' => 'button','content' => 'Cancelar','onclick' => "window.location.href='http://localhost/ProyectoCI/index.php/investigadorescontroller/list'",'class'=> 'btn btn-danger'
]);
?>
<a href="http://localhost/ProyectoCI/index.php/investigadorescontroller/list" class="btn btn-warning" role="button">Cancelar</a>

<?php
/*
if(isset($list)){
    echo form_hidden('dni',$users[0]['DNI']);
}
*/
?>
</div>
<?php
echo form_close();
?>
</div>