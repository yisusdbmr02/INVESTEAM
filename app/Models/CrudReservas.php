<?php
    namespace App\Models;

    use CodeIgniter\Model;

    class CrudReservas extends Model{
        protected $table = 'reservas';
        protected $allowedFields = ['IdReserva','DNI','IdEquipo','FechaInicio','FechaFin'];
    }
?>