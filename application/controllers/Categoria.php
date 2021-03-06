<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
    } 

    /*
     * Listing of categorias
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('categoria/index?');
        $config['total_rows'] = $this->Categoria_model->get_all_categorias_count();
        $this->pagination->initialize($config);

        $data['categorias'] = $this->Categoria_model->get_all_categorias($params);
        
        $data['_view'] = 'categoria/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new categoria
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nomecategoria','Nomecategoria','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nomecategoria' => $this->input->post('nomecategoria'),
				'timestamp' => $this->input->post('timestamp'),
            );
            
            $categoria_id = $this->Categoria_model->add_categoria($params);
            redirect('categoria/index');
        }
        else
        {            
            $data['_view'] = 'categoria/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a categoria
     */
    function edit($idcategoria)
    {   
        // check if the categoria exists before trying to edit it
        $data['categoria'] = $this->Categoria_model->get_categoria($idcategoria);
        
        if(isset($data['categoria']['idcategoria']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nomecategoria','Nomecategoria','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nomecategoria' => $this->input->post('nomecategoria'),
					'timestamp' => $this->input->post('timestamp'),
                );

                $this->Categoria_model->update_categoria($idcategoria,$params);            
                redirect('categoria/index');
            }
            else
            {
                $data['_view'] = 'categoria/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The categoria you are trying to edit does not exist.');
    } 

    /*
     * Deleting categoria
     */
    function remove($idcategoria)
    {
        $categoria = $this->Categoria_model->get_categoria($idcategoria);

        // check if the categoria exists before trying to delete it
        if(isset($categoria['idcategoria']))
        {
            $this->Categoria_model->delete_categoria($idcategoria);
            redirect('categoria/index');
        }
        else
            show_error('The categoria you are trying to delete does not exist.');
    }
    
}
