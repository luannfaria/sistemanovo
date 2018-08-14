<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Itenspedidomesa extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Itenspedidomesa_model');
    }

    /*
     * Listing of itenspedidomesa
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('itempedidomesa/index?');
        $config['total_rows'] = $this->Itenspedidomesa_model->get_all_itenspedidomesa_count();
        $this->pagination->initialize($config);

        $data['itenspedidomesa'] = $this->Itenspedidomesa_model->get_all_itenspedidomesa($params);

        $data['_view'] = 'itenspedidomesa/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new itempedidomesa
     */

     function addproduto(){
       $venda =$this->input->post('vendaitem');
       $count = count($venda);
$print = "itautec";
       for($i=0;$i<$count;$i++){
        // $preco = $this->input->post('venda')[$i];
        //   str_replace("," , "." , $totalvenda );
               $params = array(
                 'nomeitem' =>$this->input->post('nomeproduto')[$i],
                 'preco'=> $this->input->post('vendaitem')[$i],
                 'produto_id'=> $this->input->post('idproduto')[$i],
                 'quantidade' => $this->input->post('quantidade')[$i],

//                 'mesa'=>$this->input->post('numeromesa')[$i],
                 'idpedidomesa'=>$this->input->post('idpedido')[$i],
                 'horapedidoitem'=>$this->input->post('hora')[$i]



               );

               $null=$this->Itenspedidomesa_model->add_itempedidomesa($params);

     }


                //   $this->load->helper("printer");
                //    teste();
echo json_encode(array('result'=> true));
     }
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'idpedidomesa' => $this->input->post('idpedidomesa'),
				'produto_id' => $this->input->post('produto_id'),
				'quantidade' => $this->input->post('quantidade'),
				'preco' => $this->input->post('preco'),
				'impresso' => $this->input->post('impresso'),
				'idusuarios' => $this->input->post('idusuarios'),
				'nomeitem' => $this->input->post('nomeitem'),
				'horapedidoitem' => $this->input->post('horapedidoitem'),
				'precoadicional' => $this->input->post('precoadicional'),
            );

            $itempedidomesa_id = $this->Itenspedidomesa_model->add_itempedidomesa($params);
            redirect('itenspedidomesa/index');
        }
        else
        {
            $data['_view'] = 'itenspedidomesa/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a itempedidomesa
     */
    function edit($iditenspedidomesa)
    {
        // check if the itempedidomesa exists before trying to edit it
        $data['itempedidomesa'] = $this->Itenspedidomesa_model->get_itempedidomesa($iditenspedidomesa);

        if(isset($data['itempedidomesa']['iditenspedidomesa']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'idpedidomesa' => $this->input->post('idpedidomesa'),
					'produto_id' => $this->input->post('produto_id'),
					'quantidade' => $this->input->post('quantidade'),
					'preco' => $this->input->post('preco'),
					'impresso' => $this->input->post('impresso'),
					'idusuarios' => $this->input->post('idusuarios'),
					'nomeitem' => $this->input->post('nomeitem'),
					'horapedidoitem' => $this->input->post('horapedidoitem'),
					'precoadicional' => $this->input->post('precoadicional'),
                );

                $this->Itenspedidomesa_model->update_itempedidomesa($iditenspedidomesa,$params);
                redirect('itenspedidomesa/index');
            }
            else
            {
                $data['_view'] = 'itenspedidomesa/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The itempedidomesa you are trying to edit does not exist.');
    }

    /*
     * Deleting itempedidomesa
     */
    function remove()
    {


            $iditenspedidomesa = $this->input->post('iditenspedidomesa');
      $id = $this->Itenspedidomesa_model->delete_itempedidomesa($iditenspedidomesa);

      echo json_encode(array('result'=> true));

  //      $itempedidomesa = $this->Itenspedidomesa_model->get_itempedidomesa($iditenspedidomesa);

        // check if the itempedidomesa exists before trying to delete it

    }

}
