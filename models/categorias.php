<?php


class categorias extends model{



public function getCategorias(){
   
   $array = array();
 
 $sql = $this->db->query("SELECT * FROM categoria");

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;


}





















}