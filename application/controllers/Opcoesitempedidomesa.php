<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Opcoesitempedidomesa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Opcoesitempedidomesa_model');
    } 

    /*
     * Listing of opcoesitempedidomesa
     */
    function index()
    {
        $data['opcoesitempedidomesa'] = $this->Opcoesitempedidomesa_model->get_all_opcoesitempedidomesa();
        
        $data['_view'] = 'opcoesitempedidomesa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new opcoesitempedidomesa
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'iditenspedidomesa' => $this->input->post('iditenspedidomesa'),
				'idadicionais' => $this->input->post('idadicionais'),
				'valor_adicional' => $this->input->post('valor_adicional'),
				'observacao' => $this->input->post('observacao'),
				'idpedidomesa' => $this->input->post('idpedidomesa'),
				'nome' => $this->input->post('nome'),
				'tipoopcao' => $this->input->post('tipoopcao'),
            );
            
            $opcoesitempedidomesa_id = $this->Opcoesitempedidomesa_model->add_opcoesitempedidomesa($params);
            redirect('opcoesitempedidomesa/index');
        }
        else
        {            
            $data['_view'] = 'opcoesitempedidomesa/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a opcoesitempedidomesa
     */
    function edit($idopcoesitempedidomesa)
    {   
        // check if the opcoesitempedidomesa exists before trying to edit it
        $data['opcoesitempedidomesa'] = $this->Opcoesitempedidomesa_model->get_opcoesitempedidomesa($idopcoesitempedidomesa);
        
        if(isset($data['opcoesitempedidomesa']['idopcoesitempedidomesa']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'iditenspedidomesa' => $this->input->post('iditenspedidomesa'),
					'idadicionais' => $this->input->post('idadicionais'),
					'valor_adicional' => $this->input->post('valor_adicional'),
					'observacao' => $this->input->post('observacao'),
					'idpedidomesa' => $this->input->post('idpedidomesa'),
					'nome' => $this->input->post('nome'),
					'tipoopcao' => $this->input->post('tipoopcao'),
                );

                $this->Opcoesitempedidomesa_model->update_opcoesitempedidomesa($idopcoesitempedidomesa,$params);            
                redirect('opcoesitempedidomesa/index');
            }
            else
            {
                $data['_view'] = 'opcoesitempedidomesa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The opcoesitempedidomesa you are trying to edit does not exist.');
    } 

    /*
     * Deleting opcoesitempedidomesa
     */
    function remove($idopcoesitempedidomesa)
    {
        $opcoesitempedidomesa = $this->Opcoesitempedidomesa_model->get_opcoesitempedidomesa($idopcoesitempedidomesa);

        // check if the opcoesitempedidomesa exists before trying to delete it
        if(isset($opcoesitempedidomesa['idopcoesitempedidomesa']))
        {
            $this->Opcoesitempedidomesa_model->delete_opcoesitempedidomesa($idopcoesitempedidomesa);
            redirect('opcoesitempedidomesa/index');
        }
        else
            show_error('The opcoesitempedidomesa you are trying to delete does not exist.');
    }
    
}
