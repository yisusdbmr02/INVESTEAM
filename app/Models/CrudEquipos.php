<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudEquipos extends Model{
        protected $table = 'equipo';
        protected $primaryKey = 'IdEquipo';
        protected $allowedFields = ['IdEquipo','Idfacultad','Descripcion'];
    }
?>