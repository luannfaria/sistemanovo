<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fornecedor_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get fornecedor by idfornecedor
     */
    function get_fornecedor($idfornecedor)
    {
        return $this->db->get_where('fornecedores',array('idfornecedor'=>$idfornecedor))->row_array();
    }
    
    /*
     * Get all fornecedores count
     */
    function get_all_fornecedores_count()
    {
        $this->db->from('fornecedores');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all fornecedores
     */
    function get_all_fornecedores($params = array())
    {
        $this->db->order_by('idfornecedor', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('fornecedores')->result_array();
    }
        
    /*
     * function to add new fornecedor
     */
    function add_fornecedor($params)
    {
        $this->db->insert('fornecedores',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update fornecedor
     */
    function update_fornecedor($idfornecedor,$params)
    {
        $this->db->where('idfornecedor',$idfornecedor);
        return $this->db->update('fornecedores',$params);
    }
    
    /*
     * function to delete fornecedor
     */
    function delete_fornecedor($idfornecedor)
    {
        return $this->db->delete('fornecedores',array('idfornecedor'=>$idfornecedor));
    }
}