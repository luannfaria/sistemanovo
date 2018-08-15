<?php
/*
 * Generated by CRUDigniter v3.2
 * www.crudigniter.com
 */

class Produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     * Get produto by produto_id
     */
    function get_produto($produto_id)
    {
        return $this->db->get_where('produto',array('produto_id'=>$produto_id))->row_array();
    }

    /*
     * Get all produtos count
     */

     public function getprodutoean($codbarra){

       $sql = "select * from produto where codbarra='$codbarra'";
       $query = $this->db->query($sql);
       $array = $query->result_array();


       return $array;


     }

     function buscaitemporcategoria($idcat){

       $sql = "select * from produto where idcategoria='$idcat'";
       $query = $this->db->query($sql);
       $array = $query->result_array();


       return $array;


     }
     public function autoCompleteProdutocodbarra($q){

         $this->db->select('*');

     //		$this->db->like('nomeproduto', $q);
       //  $this->db->or();
        $this->db->or_like('codbarra', $q);
         $query = $this->db->get('produto');
         if($query->num_rows() > 0){
             foreach ($query->result_array() as $row){
               		$row_set[] = array('label'=>$row['nomeproduto'].' | COD: R$ '.$row['codbarra'].'','produto_id'=>$row['produto_id'],'nomeproduto'=>$row['nomeproduto'],'codbarra'=>$row['codbarra']);

             }
             echo json_encode($row_set);
         }
     }
     public function autoCompleteProduto($q){

     		$this->db->select('*');

     		$this->db->like('nomeproduto', $q);
     		$query = $this->db->get('produto');
     		if($query->num_rows() > 0){
     				foreach ($query->result_array() as $row){
     						$row_set[] = array('label'=>$row['nomeproduto'].' | Preço: R$ '.$row['vendaproduto'].'','codbarra'=>$row['codbarra'],'produto_id'=>$row['produto_id'],'nomeproduto'=>$row['nomeproduto'],'vendaproduto'=>$row['vendaproduto']);
     				}
     				echo json_encode($row_set);
     		}
     }
    function get_all_produtos_count()
    {
        $this->db->from('produto');
        return $this->db->count_all_results();
    }
    function get_todos()
    {
      $sql = "select * from produto INNER JOIN estoque on(produto.produto_id = estoque.id_produto)";
      $query = $this->db->query($sql);
      $array = $query->result_array();
      return $array;
    }

    function gerarcodbarra(){
      $sql = "select * from produto where codbarra is null";
      $query = $this->db->query($sql);
      $array = $query->result_array();

      if($query->num_rows() > 0){
          foreach ($query->result_array() as $row){
            $update = "update produto set codbarra = LPAD(".$row['produto_id'].",12,0) where produto_id=".$row['produto_id']."";
            $this->db->query($update);
          }
        }

    }

    /*
     * Get all produtos
     */
    function get_all_produtos($params = array())
    {
        $this->db->order_by('produto_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('produto')->result_array();
    }

    /*
     * function to add new produto
     */
    function add_produto($params)
    {
        $this->db->insert('produto',$params);
        return $this->db->insert_id();
    }

    /*
     * function to update produto
     */
    function update_produto($produto_id,$params)
    {
        $this->db->where('produto_id',$produto_id);
        return $this->db->update('produto',$params);
    }

    /*
     * function to delete produto
     */
    function delete_produto($produto_id)
    {
        return $this->db->delete('produto',array('produto_id'=>$produto_id));
    }
}
