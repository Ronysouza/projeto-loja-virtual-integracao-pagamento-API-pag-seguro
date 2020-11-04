<?php

class produtos extends model{


 public function getAllProdutos(){



   $array = array();
 
 $sql = $this->db->query("SELECT * FROM produtos ORDER BY RAND() LIMIT 9");

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;

 }





public function getItemprodutos($id_categoria){
     

  $array = array();
 
 $sql = $this->db->prepare("SELECT * FROM produtos WHERE id_categorias = :id ");
 $sql->bindValue(':id',$id_categoria);
 $sql->execute();

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;



}



public function getProdutoDescricao($id){
     

 
 $array = array();
 
 $sql = $this->db->prepare("SELECT * FROM galeria WHERE id_produto = :id ");
 $sql->bindValue(':id',$id);
 $sql->execute();

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;



}



public function getProdutosInId($id){

 $array = array();
 
 $sql = $this->db->prepare("SELECT * FROM produtos WHERE id = :id ");
 $sql->bindValue(':id',$id);
 $sql->execute();

  if($sql->rowCount() > 0){

  	$array = $sql->fetchAll();

  }

return $array;

}







}