<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudFacultad extends Model{
        protected $table = 'facultad';
        protected $primaryKey = 'IdFacultad';
        protected $allowedFields = ['IdFacultad','NomFacultad'];
    }
?>