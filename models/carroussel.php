<?php

class carroussel extends model{






public function getCar(){

  $array = array();
 
 $sql = "SELECT * FROM bannercarroussel";
 
 $sql = $this->db->query($sql);
  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;



}










}