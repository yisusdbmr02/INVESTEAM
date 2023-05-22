<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudInvestigadores extends Model{
        
        protected $table = 'investigadores';
        protected $primaryKey = 'DNI';
        protected $allowedFields = ['DNI','NomInvestigador','ApellInvestigador','IdFacultad'];

    }
?>