<?php
class loginController extends controller{





public function index(){

  $dados=array(
    'senha_incorreta'=>array(),
    'campo_vazio'=>array(),
    'dados_usuario'=>array()
  );
  $u = new usuario();

   
   if(isset($_POST['email']) && !empty($_POST['email'])){
   	$email = addslashes($_POST['email']);
   	$senha =  addslashes($_POST['senha']);
     
     if($u->faserLogin($email,$senha)){

     	$dados['dados_usuario'] = $u->faserLogin($email,$senha);
      // $dados['vendas'] = $_SESSION['vendas'];
      // $dados['subtotal'] = $_SESSION['subtotal']; 
       
    header('Location:'.BASE_URL.'carrinho/finalizar/'.$_SESSION['subtotal']);
     }else{
         
         
     	$dados['senha_incorreta'] = 'usuário e/ou senha estao errados!';
     }


   }else{

       $dados['campo_vazio'] = 'Preencha todos os Campos!';

   }


 //echo "ok";exit();


  $this->loadTemplate('login',$dados);

}











}