<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get cliente by idclientes
     */
    function get_cliente($idclientes)
    {
        return $this->db->get_where('clientes',array('idclientes'=>$idclientes))->row_array();
    }
    
    /*
     * Get all clientes count
     */
    function get_all_clientes_count()
    {
        $this->db->from('clientes');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all clientes
     */
    function get_all_clientes($params = array())
    {
        $this->db->order_by('idclientes', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('clientes')->result_array();
    }
        
    /*
     * function to add new cliente
     */
    function add_cliente($params)
    {
        $this->db->insert('clientes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update cliente
     */
    function update_cliente($idclientes,$params)
    {
        $this->db->where('idclientes',$idclientes);
        return $this->db->update('clientes',$params);
    }
    
    /*
     * function to delete cliente
     */
    function delete_cliente($idclientes)
    {
        return $this->db->delete('clientes',array('idclientes'=>$idclientes));
    }
}
