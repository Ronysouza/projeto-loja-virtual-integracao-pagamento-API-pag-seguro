<?php
class produtosController extends controller{


public function index(){

$dados = array(
  'All_produtos'=>array()
);
   
   $prods = new produtos();

   $dados['All_produtos'] = $prods->getAllProdutos();


$this->loadTemplate('produtos',$dados);

}


 

public function descricao($id){
 
   
    $dados = array(
    	'descricao_prod'=>array(),
    	'produtos_In_Id'=>array()
    );


	if(!empty($id)){

       $produtos = new produtos();

       $dados['descricao_prod'] = $produtos->getProdutoDescricao($id);
       $dados['produtos_In_Id'] = $produtos->getProdutosInId($id);


	}


   $this->loadTemplate('descricao_produto',$dados);


}



















}