<?php
namespace App\Controllers;

use App\Models\CrudEquipos;
use App\Models\CrudFacultad;

class EquiposController extends BaseController{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_eq;

    // Initialize Objects
    public function __construct(){
        $this->crud_eq = new CrudEquipos();
        $this->session = \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    // Home Page
    public function index(){
        $this->data['page_title'] = "Home Page";
        echo view('estructure/header', $this->data);
        echo view('listado_equipos', $this->data);
        echo view('estructure/footer');
    }

    // List Page
    public function list(){
        $this->data['page_title'] = "Lista Equipos";
        $this->data['list'] = $this->crud_eq->orderBy('IdEquipo ASC')->select('*')->get()->getResult();
        echo view('estructure/header');
        echo view('listado_equipos', $this->data);
        echo view('estructure/footer');
    }
    // Create Form Page
    public function add(){
        $this->data['page_title'] = "Añadir Equipo";
        $this->crud_facu= new CrudFacultad();
        $this->data['lista_facultades'] = $this->crud_facu->orderBy('NomFacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('add_equipos', $this->data);
        echo view('estructure/footer');
    }
    
   // Insert And Update Function
   public function save(){
    $this->data['request'] = $this->request;
    $post = [
        'IdEquipo' => $this->request->getPost('ideq'),
        'Idfacultad' => $this->request->getPost('facu'),
        'Descripcion' => $this->request->getPost('descripcion'),
    ];
  
    $save = $this->crud_eq->insert($post);
    
        return redirect()->to(site_url('/equiposcontroller/list'));
    
}
    // Edit Form Page
public function edit($id=''){
    $this->data['page_title'] = "Editar Equipo";
    $qry=$this->crud_eq->orderBy('IdEquipo ASC')->select('*')->where(['IdEquipo'=>$id]);
    $this->data['equipo'] = $qry->first();
    $this->crud_facu = new CrudFacultad();
    $this->data['lista_facultades']=$this->crud_facu->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
    $this->data['request'] = $this->request;
    echo view('estructure/header', $this->data);
    echo view('edit_equipos', $this->data);
    echo view('estructure/footer');
}

// UPT Form Page
public function upt(){
    $this->data['request'] = $this->request;
    $idEquipo = $this->request->getPost('ideq');
    $post = [
        'Descripcion' => $this->request->getPost('descripcion'),
        'IdFacultad' => $this->request->getPost('facu'),
    ];
   
    $save = $this->crud_eq->where('IdEquipo',$idEquipo)->set($post)->update();
    
        return redirect()->to(site_url('/equiposcontroller/list'));
    
}

}