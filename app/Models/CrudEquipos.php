<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudEquipos extends Model{
        protected $table = 'equipo';
        protected $allowedFields = ['IdEquipo','Idfacultad','Descripcion'];
    }
?>