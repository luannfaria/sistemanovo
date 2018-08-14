<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Pagamentopedidopdv extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pagamentopedidopdv_model');
        $this->load->model('Caixa_model');
    }

    /*
     * Listing of pagamentopedidopdv
     */
    function index()
    {
        $data['pagamentopedidopdv'] = $this->Pagamentopedidopdv_model->get_all_pagamentopedidopdv();

        $data['_view'] = 'pagamentopedidopdv/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pagamentopedidopdv
     */
    function add111()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'idpedidopdv' => $this->input->post('idpedidopdv'),
				'valor' => $this->input->post('valor'),
				'descricao' => $this->input->post('descricao'),
				'idformapagamento' => $this->input->post('idformapagamento'),
				'data' => $this->input->post('data'),
				'tipomovimentacao' => $this->input->post('tipomovimentacao'),
				'usuario_id' => $this->input->post('usuario_id'),
				'formapgto' => $this->input->post('formapgto'),
            );

            $pagamentopedidopdv_id = $this->Pagamentopedidopdv_model->add_pagamentopedidopdv($params);
            redirect('pagamentopedidopdv/index');
        }
        else
        {
            $data['_view'] = 'pagamentopedidopdv/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a pagamentopedidopdv
     */

     function add()
     {

       $idpedidopdv = $this->input->post('idpedidopagamento');
       $totalpago = $this->input->post('valorpago');
       $vlrpgto = $this->input->post('vlrpgto');
       $totalpedido = $this->input->post('subtotalpagamento');
        $restante =   $this->input->post('restante');
       if($vlrpgto>=($totalpedido-$totalpago)){

         $vlr = ($totalpedido-$totalpago);
         $params = array(
     'idpedidopdv' => $idpedidopdv,
     'data'=>$this->input->post('data'),
     'valor' => number_format((float)$vlr,2,'.',''),
     'descricao' => $this->input->post('descricao'),
   //	'idformapagamento' => $this->input->post('idformapagamento'),
   //	'data' => $this->input->post('data'),
     'tipomovimentacao' => $this->input->post('tipomovimentacao'),
   //	'usuario_id' => $this->input->post('usuario_id'),
     'formapgto' => $this->input->post('formapgtoselecionada')
   );

   $pagamentopedidopdv_id = $this->Pagamentopedidopdv_model->add_pagamentopedidopdv($params);


 $caixa = array(
       'data'=>$this->input->post('data'),
       'valor'=> number_format((float)$vlr,2,'.',''),
       'descricao'=>$this->input->post('descricao'),
         'tipomovimentacao' => $this->input->post('tipomovimentacao'),
           'formapagto' => $this->input->post('formapgtoselecionada')

 );

   $this->Caixa_model->add_caixa($caixa);
       echo json_encode(array('result'=> true));

 }

  else{


             $params = array(
 				'idpedidopdv' => $idpedidopdv,
 				'valor' =>$this->input->post('vlrpgto'),
 				'descricao' => $this->input->post('descricao'),
 			//	'idformapagamento' => $this->input->post('idformapagamento'),
 				'data' => $this->input->post('data'),
 				'tipomovimentacao' => $this->input->post('tipomovimentacao'),
 			//	'usuario_id' => $this->input->post('usuario_id'),
 				'formapgto' => $this->input->post('formapgtoselecionada')
       );
          $pagamentopedidopdv_id = $this->Pagamentopedidopdv_model->add_pagamentopedidopdv($params);


           $caixa = array(
                 'data'=>$this->input->post('data'),
                 'valor'=> $this->input->post('vlrpgto'),
                 'descricao'=>$this->input->post('descricao'),
                   'tipomovimentacao' => $this->input->post('tipomovimentacao'),
                     'formapagto' => $this->input->post('formapgtoselecionada')

           );


             $this->Caixa_model->add_caixa($caixa);
                echo json_encode(array('result'=> false));

 }







           //  $data['_view'] = 'pagamentopedidomesa/add';
         //    $this->load->view('layouts/main',$data);

     }

    function edit($idpagamentopedidomesa)
    {
        // check if the pagamentopedidopdv exists before trying to edit it
        $data['pagamentopedidopdv'] = $this->Pagamentopedidopdv_model->get_pagamentopedidopdv($idpagamentopedidomesa);

        if(isset($data['pagamentopedidopdv']['idpagamentopedidomesa']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'idpedidopdv' => $this->input->post('idpedidopdv'),
					'valor' => $this->input->post('valor'),
					'descricao' => $this->input->post('descricao'),
					'idformapagamento' => $this->input->post('idformapagamento'),
					'data' => $this->input->post('data'),
					'tipomovimentacao' => $this->input->post('tipomovimentacao'),
					'usuario_id' => $this->input->post('usuario_id'),
					'formapgto' => $this->input->post('formapgto'),
                );

                $this->Pagamentopedidopdv_model->update_pagamentopedidopdv($idpagamentopedidomesa,$params);
                redirect('pagamentopedidopdv/index');
            }
            else
            {
                $data['_view'] = 'pagamentopedidopdv/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pagamentopedidopdv you are trying to edit does not exist.');
    }

    /*
     * Deleting pagamentopedidopdv
     */
    function remove($idpagamentopedidomesa)
    {
        $pagamentopedidopdv = $this->Pagamentopedidopdv_model->get_pagamentopedidopdv($idpagamentopedidomesa);

        // check if the pagamentopedidopdv exists before trying to delete it
        if(isset($pagamentopedidopdv['idpagamentopedidomesa']))
        {
            $this->Pagamentopedidopdv_model->delete_pagamentopedidopdv($idpagamentopedidomesa);
            redirect('pagamentopedidopdv/index');
        }
        else
            show_error('The pagamentopedidopdv you are trying to delete does not exist.');
    }

}
