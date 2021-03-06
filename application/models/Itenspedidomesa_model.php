<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Itenspedidomesa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get itempedidomesa by iditenspedidomesa
     */
    function get_itempedidomesa($iditenspedidomesa)
    {
        return $this->db->get_where('itenspedidomesa',array('iditenspedidomesa'=>$iditenspedidomesa))->row_array();
    }

    /*
     * Get all itenspedidomesa count
     */
    function get_all_itenspedidomesa_count()
    {
        $this->db->from('itenspedidomesa');
        return $this->db->count_all_results();
    }

    /*
     * Get all itenspedidomesa
     */

     function get_itenspedidomesa($idpedidomesa){

       $this->db->select('*');
      $this->db->from('itenspedidomesa');
      $this->db->where('idpedidomesa', $idpedidomesa);

       return $this->db->get()->result_array();
     }

     function subtotal($idpedidomesa){

       $sql = "SELECT sum(preco) as subtotal from itenspedidomesa where idpedidomesa='$idpedidomesa'";
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
    function get_all_itenspedidomesa($params = array())
    {
        $this->db->order_by('iditenspedidomesa', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('itenspedidomesa')->result_array();
    }

    /*
     * function to add new itempedidomesa
     */
    function add_itempedidomesa($params)
    {
        $this->db->insert('itenspedidomesa',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update itempedidomesa
     */
    function update_itempedidomesa($iditenspedidomesa,$params)
    {
        $this->db->where('iditenspedidomesa',$iditenspedidomesa);
        return $this->db->update('itenspedidomesa',$params);
    }

    /*
     * function to delete itempedidomesa
     */
    function delete_itempedidomesa($iditenspedidomesa)
    {
        return $this->db->delete('itenspedidomesa',array('iditenspedidomesa'=>$iditenspedidomesa));
    }
}
