<?php

class categoriasController extends controller{




public function index(){

$dados = array();

$this->loadTemplate('categorias_produtos',$dados);

}


public function categoriaItem($id){

   $dados = array(
    'produtos'=>array(),
    'error'=>''
   );

      if(!empty($id)){
      	$categorias = new produtos();
      	$dados['produtos'] = $categorias->getItemprodutos($id);

      }else{
      	$dados['error'] = 'Produto Inválido';
      }









   $this->loadTemplate('categorias_produtos',$dados);
  



}



















}












?>