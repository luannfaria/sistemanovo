<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Produto extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Produto_model');
    }

    /*
     * Listing of produtos
     */
    function index()
    {
      $params['limit'] = RECORDS_PER_PAGE;
      $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

      $config = $this->config->item('pagination');
        $config['base_url'] = site_url('produto/index?');
        $config['total_rows'] = $this->Produto_model->get_all_produtos_count();
        $this->pagination->initialize($config);

        $data['produtos'] = $this->Produto_model->get_all_produtos($params);

        $data['_view'] = 'produto/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new produto
     */

     function getproduto(){


   $codbarra = $this->input->post('codbarra');
        //   $qtdd = $codbarra[0];
        //   $item = $codbarra[1];

   				$data = $this->Produto_model->getprodutoean($codbarra);

   				echo json_encode($data);

   	}

    function buscaitemporcategoria(){

      $idcat =$this->input->post('idcategoria');
$data = $this->Produto_model->buscaitemporcategoria($idcat);
      echo json_encode($data);
    }
    function add()
    {
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nomeproduto','Nomeproduto','required');
	//	$this->form_validation->set_rules('codbarra','Codbarra','max_length[13]');
		$this->form_validation->set_rules('vendaproduto','Vendaproduto','required');
		$this->form_validation->set_rules('unidade','Unidade','required');
		$this->form_validation->set_rules('status','Ativo','required');

		if($this->form_validation->run())
        {
            $params = array(
				'unidade' => $this->input->post('unidade'),
				'ativo' => $this->input->post('status'),
				'idcategoria' => $this->input->post('idcategoria'),
				'nomeproduto' => $this->input->post('nomeproduto'),
				'codbarra' => $this->input->post('codbarra'),
				'custoproduto' => $this->input->post('custoproduto'),
				'margemlucro' => $this->input->post('margemlucro'),
				'vendaproduto' => $this->input->post('vendaproduto'),
				'estoquemin' => $this->input->post('estoquemin'),
				'estoquemax' => $this->input->post('estoquemax'),
				'impressora_id' => $this->input->post('impressora_id'),
				'datacadastro' => $this->input->post('datacadastro'),
				'estoque' => $this->input->post('estoque'),
				'tipoproduto' => $this->input->post('tipoproduto'),
        	'permitiradd' => $this->input->post('permitiradd'),
            );

            $produto_id = $this->Produto_model->add_produto($params);
            redirect('produto/index');
        }
        else
        {
			$this->load->model('Categoria_model');
			$data['all_categorias'] = $this->Categoria_model->get_all_categorias();

            $data['_view'] = 'produto/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a produto
     */

     public function autoCompleteProduto(){
     	if (isset($_GET['term'])){
     			$q = strtolower($_GET['term']);
     			$this->Produto_model->autoCompleteProduto($q);
     	}
     }

     public function autoCompleteProdutocodbarra(){
     	if (isset($_GET['term'])){
     			$q = strtolower($_GET['term']);
     			$this->Produto_model->autoCompleteProdutocodbarra($q);
     	}
     }


    function edit($produto_id)
    {
        // check if the produto exists before trying to edit it
        $data['produto'] = $this->Produto_model->get_produto($produto_id);

        if(isset($data['produto']['produto_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nomeproduto','Nomeproduto','required');
			$this->form_validation->set_rules('codbarra','Codbarra','max_length[13]');
			$this->form_validation->set_rules('vendaproduto','Vendaproduto','required');
			$this->form_validation->set_rules('unidade','Unidade','required');
			$this->form_validation->set_rules('ativo','Ativo','required');

			if($this->form_validation->run())
            {
                $params = array(
					'unidade' => $this->input->post('unidade'),
					'ativo' => $this->input->post('ativo'),
					'idcategoria' => $this->input->post('idcategoria'),
					'nomeproduto' => $this->input->post('nomeproduto'),
					'codbarra' => $this->input->post('codbarra'),
					'custoproduto' => $this->input->post('custoproduto'),
					'margemlucro' => $this->input->post('margemlucro'),
					'vendaproduto' => $this->input->post('vendaproduto'),
					'estoquemin' => $this->input->post('estoquemin'),
					'estoquemax' => $this->input->post('estoquemax'),
					'impressora_id' => $this->input->post('impressora_id'),
					'datacadastro' => $this->input->post('datacadastro'),
					'estoque' => $this->input->post('estoque'),
					'tipoproduto' => $this->input->post('tipoproduto'),
          	'permitiradd' => $this->input->post('permitiradd'),
                );

                $this->Produto_model->update_produto($produto_id,$params);
                redirect('produto/index');
            }
            else
            {
				$this->load->model('Categoria_model');
				$data['all_categorias'] = $this->Categoria_model->get_all_categorias();

                $data['_view'] = 'produto/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The produto you are trying to edit does not exist.');
    }

    /*
     * Deleting produto
     */
    function remove($produto_id)
    {
        $produto = $this->Produto_model->get_produto($produto_id);

        // check if the produto exists before trying to delete it
        if(isset($produto['produto_id']))
        {
            $this->Produto_model->delete_produto($produto_id);
            redirect('produto/index');
        }
        else
            show_error('The produto you are trying to delete does not exist.');
    }

}