<br>
    <div class="row d-flex justify-content-center">
        <?php 
        if(count($list) > 0){
        $i = 1;
        foreach($list as $row): ?> 
        <div class="col-5 m-3 ">
            <div class="card-sm bg-success shadow">
                <div class="card-body">
                    <h4 class="card-title"><?=$row->DNI?></h4>
                    <p class="card-text"><?=$row->NomInvestigador?></p>
                    <p class="card-text"><?=$row->ApellInvestigador?></p>
                    <p class="card-text"><?=$row->IdFacultad?></p>
                </div>
            </div>
        </div>
        <?php endforeach;
    }?> 
    </div>
<br>
