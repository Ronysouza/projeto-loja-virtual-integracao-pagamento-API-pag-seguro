<?php


class orcamento extends model{

    
 



public function getItensCarrinho($id_prods){
$array = array();

     
   
         foreach ($id_prods as $key) {
         	$sql = $this->db->query("SELECT * FROM produtos WHERE id = $key");
         
         	 if($sql->rowCount() > 0){
			  	$array[] = $sql->fetchAll();  
			      
			   
			      
			  }

			 
			      
         }     
  
          

  return $array;

}

 










}