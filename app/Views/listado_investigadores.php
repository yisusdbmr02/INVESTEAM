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
                <td><a class="btn" href=""><i class="fas fa-edit"></i></a>&nbsp;<a class="btn" href="javascript:swalDelete('<?=$row->DNI?>')"><i class="fas fa-trash"></i></a></td>
            </tr>
            <?php endforeach;
    }?> 
        </tbody>
    </table>
        </div>       
        
    
    </div>
<br>
