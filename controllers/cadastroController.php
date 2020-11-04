<?php

class cadastroController extends controller{



public function index(){
 $dados = array(
  'tem_usuario'=>array(),
  'invalido'=>array()

 );



    if(isset($_POST['email']) && !empty($_POST['email'])){
        $u = new usuario();
    	$email = addslashes($_POST['email']);
    	$nome = addslashes($_POST['nome']);
    	$senha = addslashes($_POST['senha']);
            
            if($u->cadatrarUsuario($nome,$email,$senha)){
                     
                     header('Location:'.BASE_URL.'login');
            }else{
            	$dados['tem_usuario'] = 'ja existe um usuario com este email cadastro';
            	 
            }

    }else{
    	
    	$dados['invalido'] = "preencha todos os campos corretamente!";
    }
 





 $this->loadTemplate('cadastro',$dados);
}












}




?>