<?php
namespace App\Controllers;

use App\Models\CrudInvestigadores;
use App\Models\CrudFacultad;
use App\Config\Security;

class InvestigadoresController extends BaseController{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $crud_invest;

    // Initialize Objects
    public function __construct(){
        $this->crud_invest = new CrudInvestigadores();
        $this->session = \Config\Services::session();
        $this->data['session'] = $this->session;
    }

    // Home Page
    public function index(){
        $this->data['page_title'] = "Home Page";
        echo view('estructure/header', $this->data);
        echo view('listado_investigadores', $this->data);
        echo view('estructure/footer');
    }

    // List Page
    public function list(){
        $this->data['page_title'] = "Lista Investigadores";
        $this->data['list'] = $this->crud_invest->orderBy('DNI ASC')->select('*')->get()->getResult();
        echo view('estructure/header');
        echo view('listado_investigadores', $this->data);
        echo view('estructure/footer');
    }
    // Create Form Page
    public function add(){
        $this->data['page_title'] = "Añadir Investigadores";
        $this->crud_facu= new CrudFacultad();
        $this->data['lista_facultades'] = $this->crud_facu->orderBy('NomFacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('add_investigadores', $this->data);
        echo view('estructure/footer');
    }
    
    // Insert And Update Function
    public function save(){
        $this->data['request'] = $this->request;
        $post = [
            'DNI' => $this->request->getPost('dni'),
            'NomInvestigador' => $this->request->getPost('nombre'),
            'ApellInvestigador' => $this->request->getPost('apellidos'),
            'IdFacultad' => $this->request->getPost('facu'),
        ];
        //if(!empty($this->request->getPost('id')))
          //  $save = $this->crud_model->where(['id'=>$this->request->getPost('id')])->set($post)->update();
        //else
        $save = $this->crud_invest->insert($post);
        //if($save){
          //  if(!empty($this->request->getPost('id')))
            //$this->session->setFlashdata('success_message','Data has been updated successfully') ;
            //else
            //$this->session->setFlashdata('success_message','Data has been added successfully') ;
            //$id =!empty($this->request->getPost('id')) ? $this->request->getPost('id') : $save;
            return redirect()->to(site_url('/investigadorescontroller/list'));
        //}else{
        //    echo view('templates/header', $this->data);
        //    echo view('crud/create', $this->data);
        //    echo view('templates/footer');
        //}
    }

   
/*
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
    }*/

    // Delete Data
    public function del(){
        $this->data['request']= $this->request;
        
        $dni = $this->request->getPost('dni');

        $res = $this->crud_invest->where('DNI',$dni)->delete();
        echo 'Estoy dentro';

        echo $dni;
        return redirect()->to(site_url('/investigadorescontroller/list'));
    }
    /*
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