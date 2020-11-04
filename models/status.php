<?php


class status extends model{

public function getStatus($num_pedido){
   $array = array();

  $sql = "SELECT * FROM status WHERE codigo_venda = :num_pedido ";
  $sql = $this->db->prepare($sql);
  $sql->bindValue(':num_pedido',$num_pedido);
  $sql->execute();

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();


  }
  return $array;


}














}