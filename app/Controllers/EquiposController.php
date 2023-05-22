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
    //if(!empty($this->request->getPost('id')))
      //  $save = $this->crud_model->where(['id'=>$this->request->getPost('id')])->set($post)->update();
    //else
    $save = $this->crud_eq->insert($post);
    //if($save){
      //  if(!empty($this->request->getPost('id')))
        //$this->session->setFlashdata('success_message','Data has been updated successfully') ;
        //else
        //$this->session->setFlashdata('success_message','Data has been added successfully') ;
        //$id =!empty($this->request->getPost('id')) ? $this->request->getPost('id') : $save;
        return redirect()->to(site_url('/equiposcontroller/list'));
    //}else{
    //    echo view('templates/header', $this->data);
    //    echo view('crud/create', $this->data);
    //    echo view('templates/footer');
    //}
}

   

    // Edit Form Page
    /*public function edit($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $this->data['page_title'] = "Edit Contact Details";
        $qry= $this->crud_model->select('*')->where(['id'=>$id]);
        $this->data['data'] = $qry->first();
        echo view('templates/header', $this->data);
        echo view('crud/edit', $this->data);
        echo view('templates/footer');
    }

    // Delete Data
    public function delete($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $delete = $this->crud_model->delete($id);
        if($delete){
            $this->session->setFlashdata('success_message','Contact Details has been deleted successfully.') ;
            return redirect()->to('/main/list');
        }
    }

    // View Data
    public function view_details($id=''){
        if(empty($id)){
            $this->session->setFlashdata('error_message','Unknown Data ID.') ;
            return redirect()->to('/main/list');
        }
        $this->data['page_title'] = "View Contact Details";
        $qry= $this->crud_model->select("*, CONCAT(lastname,', ',firstname,COALESCE(concat(' ', middlename), '')) as `name`")->where(['id'=>$id]);
        $this->data['data'] = $qry->first();
        echo view('templates/header', $this->data);
        echo view('crud/view', $this->data);
        echo view('templates/footer');
    }*/
}