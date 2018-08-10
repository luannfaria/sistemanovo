<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Itenspedidopdv_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get itempedidopdv by iditenspedidodelivery
     */
    function get_itempedidopdv($iditenspedidodelivery)
    {
        return $this->db->get_where('itenspedidopdv',array('iditenspedidodelivery'=>$iditenspedidodelivery))->row_array();
    }

    function getitens($id){
      $this->db->select('*');
     $this->db->from('itenspedidopdv');
     $this->db->where('idpedidopdv', $id);

      return $this->db->get()->result_array();
    }
    /*
     * Get all itenspedidopdv count
     */
    function get_all_itenspedidopdv_count()
    {
        $this->db->from('itenspedidopdv');
        return $this->db->count_all_results();
    }

    /*
     * Get all itenspedidopdv
     */

     function subtotalpdv($idpedidopdv){

       $sql = "SELECT sum(valor) as subtotal from itenspedidopdv where idpedidopdv='$idpedidopdv'";
       $query = $this->db->query($sql);

       if ($query->num_rows() == 1)
       {
       //Use row() to get a single result
       $row = $query->row();

       //$row will now have if you printed the contents:
       //print_r( $row );
       //stdClass Object ( [email] => example@gmail.com )

       //Pass $query->email directly to reset_password

       return $row->subtotal;
     }
   }
    function get_all_itenspedidopdv($params = array())
    {
        $this->db->order_by('iditenspedidodelivery', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('itenspedidopdv')->result_array();
    }

    /*
     * function to add new itempedidopdv
     */
    function add_itempedidopdv($params)
    {
        $this->db->insert('itenspedidopdv',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update itempedidopdv
     */
    function update_itempedidopdv($iditenspedidodelivery,$params)
    {
        $this->db->where('iditenspedidodelivery',$iditenspedidodelivery);
        return $this->db->update('itenspedidopdv',$params);
    }

    /*
     * function to delete itempedidopdv
     */
    function delete_itempedidopdv($iditenspedidodelivery)
    {
        return $this->db->delete('itenspedidopdv',array('iditenspedidodelivery'=>$iditenspedidodelivery));
    }
}