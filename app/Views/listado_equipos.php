<br>
    <div class="row d-flex justify-content-center"> 
        <div class="col-8">
        <h1><?=$page_title?></h1>
        <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>IdEquipo</th>
                <th>IdFacultad</th>
                <th>Descripcion</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($list) > 0){
        foreach($list as $row): ?> 
            <tr>
                <td><?=$row->IdEquipo?></td>
                <td><?=$row->Idfacultad?></td>
                <td><?=$row->Descripcion?></td>
                <td><a class="btn" href="<?=site_url('equiposcontroller/edit/').$row->IdEquipo?>"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn" href="<?php echo site_url(); ?>/equiposcontroller/del?IdEquipo=<?php echo $row->IdEquipo;?>"onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?')" ><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
    }?> 
        </tbody>
    </table>
        </div>       
        
    
    </div>
<br>
