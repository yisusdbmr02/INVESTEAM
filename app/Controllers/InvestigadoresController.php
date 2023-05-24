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
        helper('form');
        helper('language');
        //this->config->set('language', 'ingles');
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
        echo view('addInves', $this->data);
        echo view('estructure/footer');
    }
    // UPT Form Page
    public function upt(){
        $this->data['request'] = $this->request;
        $dni = $this->request->getPost('dni');
        $post = [
            'NomInvestigador' => $this->request->getPost('nombre'),
            'ApellInvestigador' => $this->request->getPost('apellidos'),
            'IdFacultad' => $this->request->getPost('facu'),
        ];
        
        $save = $this->crud_invest->where('DNI',$dni)->set($post)->update();
        
            return redirect()->to(site_url('/investigadorescontroller/list'));
       
    }

    // Insert Function
    public function save(){
        $this->data['request'] = $this->request;
        $post = [
            'DNI' => $this->request->getPost('dni'),
            'NomInvestigador' => $this->request->getPost('nombre'),
            'ApellInvestigador' => $this->request->getPost('apellidos'),
            'IdFacultad' => $this->request->getPost('facultad'),
        ];
       
        $save = $this->crud_invest->insert($post);
       
            return redirect()->to(site_url('/investigadorescontroller/list'));
       
    }

   

    // Edit Form Page
    public function edit($dni=''){
        $this->data['page_title'] = "Editar Investigador";
        $qry=$this->crud_invest->orderBy('DNI ASC')->select('*')->where(['DNI'=>$dni]);
        $this->data['invest'] = $qry->first();
        $this->crud_facultades = new CrudFacultad();
        $this->data['lista_facultades']=$this->crud_facultades->orderBy('IdFacultad ASC')->select('*')->get()->getResult();
        $this->data['request'] = $this->request;
        echo view('estructure/header', $this->data);
        echo view('edit_investigadores', $this->data);
        echo view('estructure/footer');
    }

     // Delete Data
     public function del(){
        
        $request = \Config\Services::request();
        $dni = $request->getPostGet('DNI');
        $this->crud_invest->delete($dni);
        //$this->data['page_title'] = "Lista Investigadores";
        //$this->data['list'] = $this->crud_invest->orderBy('DNI ASC')->select('*')->get()->getResult();
        return redirect()->to(site_url('/investigadorescontroller/list'));
        //return view('estructure/header',$this->data).view('listado_investigadores',$this->data).view('estructure/footer');
    }
}