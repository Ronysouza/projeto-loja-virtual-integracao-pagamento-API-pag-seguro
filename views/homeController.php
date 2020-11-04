<?php


class homeController extends controller{

	public function index(){
	 

		$dados = array(
           'banner'=>array()
		);

          $car = new carroussel();
		$dados['banner'] = $car->getCar();

		$this->loadTemplate('home',$dados);
		

	}









}