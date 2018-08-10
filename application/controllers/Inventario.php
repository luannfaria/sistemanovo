<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Inventario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Inventario_model');
            $this->load->model('Itensinventario_model');
                        $this->load->model('Entradaproduto_model');
    }

    /*
     * Listing of inventarios
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('inventario/index?');
        $config['total_rows'] = $this->Inventario_model->get_all_inventarios_count();
        $this->pagination->initialize($config);

        $data['inventarios'] = $this->Inventario_model->get_all_inventarios($params);

        $data['_view'] = 'inventario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new inventario
     */
    function add()
    {

      $data['_view'] = 'inventario/add';
      $this->load->view('layouts/main',$data);



    }

    /*
     * Editing a inventario
     */

     function novoinv(){
          date_default_timezone_set('America/Sao_Paulo');
        $data=   date('d/m/Y');
       $params = array(
   'data' => $data,
   'descricao' => $this->input->post('descricao'),
       );

       $inventario_id = $this->Inventario_model->add_inventario($params);

       $prod =$this->input->post('codbarra');
       $count = count($prod);


       for($i=0;$i<$count;$i++){
        // $preco = $this->input->post('venda')[$i];
        //   str_replace("," , "." , $totalvenda );
               $itens = array(
                 'idinventario' =>$inventario_id,
                 'produto_id'=> $this->input->post('idproduto')[$i],
                 'nomeproduto'=> $this->input->post('nomeproduto')[$i],
                 'codbarra' => $this->input->post('codbarra')[$i],

//                 'mesa'=>$this->input->post('numeromesa')[$i],
                 'quantidade'=>$this->input->post('quantidade')[$i]




               );

               $null=$this->Itensinventario_model->add_iteminventario($itens);

               $entrada = array(
                 'id_produto'=>$this->input->post('idproduto')[$i],
                   'qtde'=>$this->input->post('quantidade')[$i]
               );
          $null=$this->Entradaproduto_model->entrada($entrada);
     }

       echo json_encode(array('result'=> true));
     }
    function edit($idinventario)
    {
        // check if the inventario exists before trying to edit it
        $data['inventario'] = $this->Inventario_model->get_inventario($idinventario);

        if(isset($data['inventario']['idinventario']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'data' => $this->input->post('data'),
					'descricao' => $this->input->post('descricao'),
                );

                $this->Inventario_model->update_inventario($idinventario,$params);
                redirect('inventario/index');
            }
            else
            {
                $data['_view'] = 'inventario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The inventario you are trying to edit does not exist.');
    }

    /*
     * Deleting inventario
     */
    function remove($idinventario)
    {
        $inventario = $this->Inventario_model->get_inventario($idinventario);

        // check if the inventario exists before trying to delete it
        if(isset($inventario['idinventario']))
        {
            $this->Inventario_model->delete_inventario($idinventario);
            redirect('inventario/index');
        }
        else
            show_error('The inventario you are trying to delete does not exist.');
    }

}
