<?php
namespace App\Controllers;

use App\Models\CrudFacultad;

class FacultadController extends BaseController{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_facu;

    // Initialize Objects
    public function __construct(){
        $this->crud_facu = new CrudFacultad();
        $this->session = \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    // Home Page
    public function index(){
        $this->data['page_title'] = "Home Page";
        echo view('estructure/header', $this->data);
        echo view('listado_facultad', $this->data);
        echo view('estructure/footer');
    }

    // List Page
    public function list(){
        $this->data['page_title'] = "Lista Facultades";
        $this->data['list'] = $this->crud_facu->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
        echo view('estructure/header');
        echo view('listado_facultad', $this->data);
        echo view('estructure/footer');
    }
     // Create Form Page
    public function add(){
        $this->data['page_title'] = "Añadir Facultad";
        echo view('estructure/header', $this->data);
        echo view('add_facultad', $this->data);
        echo view('estructure/footer');
    }
// UPT Form Page
public function upt(){
    $this->data['request'] = $this->request;
    $id = $this->request->getPost('id');
    $post = [
        'NomFacultad' => $this->request->getPost('nombre')
    ];
    
   
    $save = $this->crud_facu->where('IdFacultad',$id)->set($post)->update();
   
    return redirect()->to(site_url('/facultadcontroller/list'));
   
}
    // Insert Function
    public function save(){
        $this->data['request'] = $this->request;
        $post = [
            'NomFacultad' => $this->request->getPost('nombre'),
        ];
     
        $save = $this->crud_facu->insert($post);
   
            return redirect()->to(site_url('/facultadcontroller/list'));
    
    }

     // Edit Form Page
     public function edit($id=''){
        $this->data['page_title'] = "Editar Facultad";
        $qry=$this->crud_facu->orderBy('IdFacultad ASC')->select('*')->where(['IdFacultad'=>$id]);
        $this->data['facultad'] = $qry->first();
        $this->data['lista_facultades']=$this->crud_facu->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('edit_facultad', $this->data);
        echo view('estructure/footer');
    }
    public function del(){
        
        $request = \Config\Services::request();
        $idfacu = $request->getPostGet('idFacultad');
        $this->crud_facu->delete($idfacu);
        return redirect()->to(site_url('/facultadcontroller/list'));
        } 
    
}