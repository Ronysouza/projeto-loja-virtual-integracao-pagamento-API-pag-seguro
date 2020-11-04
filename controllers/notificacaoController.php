<?php

class notificacaoController extends controller{



public function index(){

$dados = array();



$this->loadTemplate('notificacao',$dados);
}


public function pagamento(){


	$venda = new venda();

	$venda->verificar();
}






}