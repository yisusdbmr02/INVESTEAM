<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudInvestigadores extends Model{
        protected $table = 'investigadores';
        protected $allowedFields = ['DNI','NomInvestigador','ApellInvestigador','IdFacultad'];
        
    }
?>