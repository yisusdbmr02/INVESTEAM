<br>
    <div class="row d-flex justify-content-center"> 
        <div class="col-8">
        <h1><?=$page_title?></h1>
        <table class="table table-striped table-bordered ">
        <thead>
            <tr>
                <th>idFacultad</th>
                <th>Nombre</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php 
        if(count($list) > 0){
        foreach($list as $row): ?> 
            <tr>
                <td><?=$row->IdFacultad?></td>
                <td><?=$row->NomFacultad?></td>
                <td><a class="btn" href="<?=site_url('facultadcontroller/edit/').$row->IdFacultad?>"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn" href="javascript:swalDelete('<?=$row->IdFacultad?>')"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
    }?> 
        </tbody>
    </table>
        </div>       
        
    
    </div>
<br>
