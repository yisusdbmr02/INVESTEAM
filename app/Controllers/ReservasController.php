<?php
namespace App\Controllers;

use App\Models\CrudReservas;
use App\Models\CrudEquipos;
use App\Models\CrudInvestigadores;

class ReservasController extends BaseController{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_res;

    // Initialize Objects
    public function __construct(){
        $this->crud_res = new CrudReservas();
        $this->session = \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    // Home Page
    public function index(){
        $this->data['page_title'] = "Home Page";
        echo view('estructure/header', $this->data);
        echo view('listado_reservas', $this->data);
        echo view('estructure/footer');
    }

    // List Page
    public function list(){
        $this->data['page_title'] = "Lista Reservas";
        $this->data['list'] = $this->crud_res->orderBy('DNI ASC')->select('*')->get()->getResult();
        echo view('estructure/header');
        echo view('listado_reservas', $this->data);
        echo view('estructure/footer');
    }
    // Create Form Page
    public function add(){
        $this->data['page_title'] = "Añadir Reservas";
        $this->crud_invest= new CrudInvestigadores();
        $this->data['lista_invest'] = $this->crud_invest->orderBy('DNI ASC')->select('*')->get()->getResult();
        $this->crud_eq= new CrudEquipos();
        $this->data['lista_equipos'] = $this->crud_eq->orderBy('IdEquipo ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('add_reservas', $this->data);
        echo view('estructure/footer');
    }
    // Insert And Update Function
    public function save(){
        $this->data['request'] = $this->request;
        $post = [
            'IdEquipo' => $this->request->getPost('ideq'),
            'DNI' => $this->request->getPost('dni'),
            'FechaInicio' => $this->request->getPost('fechaIni'),
            'FechaFin' => $this->request->getPost('fechaFin'),
        ];
        $save = $this->crud_res->insert($post);
            return redirect()->to(site_url('/reservascontroller/list'));
    }

    public function upt(){
        $this->data['request'] = $this->request;
        $idres = $this->request->getPost('idres');
        $post = [
            'DNI' => $this->request->getPost('dni'),
            'IdEquipo' => $this->request->getPost('ideq'),
            'FechaInicio' => $this->request->getPost('fechaIni'),
            'FechaFin' => $this->request->getPost('fechaFin')
        ];
        $save = $this->crud_res->where('IdReserva',$idres)->set($post)->update();
            return redirect()->to(site_url('/reservascontroller/list'));
    }

    public function edit($id=''){
        $this->data['page_title'] = "Editar Reserva";
        $qry=$this->crud_res->orderBy('IdReserva ASC')->select('*')->where(['IdReserva'=>$id]);
        $this->data['reserva'] = $qry->first();
        $this->crud_eq = new CrudEquipos();
        $this->data['lista_equipos']=$this->crud_eq->orderBy('IdEquipo ASC')->select('*')->get()->getResult();
        $this->crud_invest = new CrudInvestigadores();
        $this->data['lista_investigadores']=$this->crud_invest->orderBy('DNI ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('edit_reservas', $this->data);
        echo view('estructure/footer');
    }

    public function del(){
        
        $request = \Config\Services::request();
        $idReserva = $request->getPostGet('IdReserva');
        $this->crud_res->delete($idReserva);
      
        return redirect()->to(site_url('/reservascontroller/list'));
    }
}