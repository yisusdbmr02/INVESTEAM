<br>
    <div class="row d-flex justify-content-center"> 
        <div class="col-8">
        <?= csrf_field() ?>
        <h1><?=$page_title?></h1>
        <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Facultad</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($list) > 0){
        foreach($list as $row): ?> 
            <tr>
                <td><?=$row->DNI?></td>
                <td><?=$row->NomInvestigador?></td>
                <td><?=$row->ApellInvestigador?></td>
                <td><?=$row->IdFacultad?></td>
                <td><a class="btn" href="<?=site_url('investigadorescontroller/edit/').$row->DNI?>"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn" href="<?php echo site_url(); ?>/investigadorescontroller/del?DNI=<?php echo $row->DNI;?>"onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')" ><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
    }?> 
        </tbody>
    </table>
        </div>       
        
    
    </div>
<br>
