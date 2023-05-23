<br>
    <div class="row d-flex justify-content-center"> 
        <div class="col-8">
        <h1><?=$page_title?></h1>
        <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>IdReserva</th>
                <th>DNI</th>
                <th>IdEquipo</th>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($list) > 0){
        foreach($list as $row): ?> 
            <tr>
                <td><?=$row->IdReserva?></td>
                <td><?=$row->DNI?></td>
                <td><?=$row->IdEquipo?></td>
                <td><?=$row->FechaInicio?></td>
                <td><?=$row->FechaFin?></td>
                <td><a class="btn" href="<?=site_url('reservascontroller/edit/').$row->IdReserva?>"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn" href="javascript:confirmar('<?=$row->IdReserva?>','<?=site_url()?>','/reservascontroller/del?IdReserva=','/reservascontroller/list')" ><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
    }?> 
        </tbody>
    </table>
        </div>       
        
    
    </div>
<br>
