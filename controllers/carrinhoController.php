<?php

class carrinhoController extends controller{


public function excluir_finalizar($id){ 
  foreach ($_SESSION['carrinho'] as $key => $id_item) { 
         
         if($id == $id_item){
         	unset($_SESSION['carrinho'][$key]);
         	header('Location:'.BASE_URL.'carrinho');
         	exit();
         }         
  }

     
}


public function excluir($id){ 
  foreach ($_SESSION['carrinho'] as $key => $id_item) { 
         
         if($id == $id_item){
         	unset($_SESSION['carrinho'][$key]);
          
         	header('Location:'.BASE_URL.'carrinho');
         	exit();
         }         
  }

     
}




public function index(){

$dados=array(
  'add_itens_carrinho'=>array(),
  'vazio'=>array(),
  
);

   
    $car = new orcamento();


       
       
         
         if(!empty($_SESSION['carrinho'])){
         	$prods = $_SESSION['carrinho'];
         	$dados['add_itens_carrinho'] = $car->getItensCarrinho($prods);
         	 
         }else{
         	$dados['vazio'] = 'nao contem itens para orcamento"';
         }

 
       



$this->loadTemplate('carrinho',$dados);
}



public function add($id){
	$dados =array(
      'add_itens_carrinho'=>array(),
     
	);
	$car = new orcamento();

	  if(!isset($_SESSION['carrinho'])){
	  	$_SESSION['carrinho'] = array();

	  }

    	  $_SESSION['carrinho'][] = $id;   
       $prods = $_SESSION['carrinho'];
 
       $dados['add_itens_carrinho'] = $car->getItensCarrinho($prods);
       
            $_SESSION['vendas'] = $dados['add_itens_carrinho'];               



 
$this->loadTemplate('carrinho',$dados);

}








public function finalizar($subtotal){
  
       
       if(empty($_SESSION['login'])){
          
        header('Location:'.BASE_URL.'login');
  }

  $dados = array(
      'vendas'=>array(),
      'dados_usuario'=>array(),
      'subtotal'=>array()
  );     
      
    
        
    $dados['vendas'] = $_SESSION['vendas'];
     $dados['dados_usuario'] =  $_SESSION['login']; 
            
     if(isset($_POST['email']) && !empty($_POST['email'])){
       
               $vendas = new venda();
            
          $email = addslashes($_POST['email']);
          $rua = addslashes($_POST['rua']);
          $cidade = addslashes($_POST['cidade']);
          $cep = addslashes($_POST['cep']);
          $numero = addslashes($_POST['numero']);
          $bairro = addslashes($_POST['bairro']);
          $observacoes = addslashes($_POST['observacoes']);
           $id_usuario = addslashes($_POST['id']);
           
           $link =  $vendas->efetuarVendas($email,$rua,$cidade,$cep,$numero,$bairro,$observacoes,$id_usuario,$dados['vendas'],$subtotal);
          
           header('Location:'.$link);

    //if()     {

           //$this->loadTemplate('obrigado',$dados);
          // }

         
     }
           
         $dados['subtotal'] = $subtotal;
         $_SESSION['subtotal'] = $subtotal;
     
          
  $this->loadTemplate('finalizar',$dados);

}



public function cancelar(){

    unset($_SESSION['carrinho']);
    header('Location:'.BASE_URL.'home');
    exit();
 



}

public function noticifacao(){
  
   $vendas = new vendas();

  require "libraries/PagSeguroLibrary/PagSeguroLibrary.php";

  $code = '';
  $type = '';
  if(isset($_POST['notificationCode']) && isset($_POST['notificationType'])){

    $code = trim($_POST['notificationCode']);
    $type = trim($_POST['notificationType']);

    $notificationType = new PagSeguroNotificationType($type);
    $strType = $notificationType->getTypeFromValue();

    $credencial = PagSeguroConfig::getAccountCredencials();

    


    try{

        $transacao = PagSeguroNotificationService::checkTransaction($credencial,$code);

         $ref = $transacao->getReference();
         $status = $transacao->getStatus()->getValue();




    $novoStatus = 0;
    switch ($status) {
        case '1': //aguardando pagamento
        case '2': //em analize
            $novoStatus ='1';
            break;
           case '3': //paga
           case '4': //disponivel
               $novoStatus ='2';
               break;
            case '6'://devolvido
            case '7': //cancelado
               $novoStatus ='3';
                break;       
    }
       $vendas->verificarVendas($status,$ref);
   





    }catch(PagSeguroServiceException $e){

        echo 'FALHA'.$e->getMessage();

    }



  }
  

}




public function obrigrado(){

  $dados = array();

   $this->loadTemplate('obrigado',$dados);
}







}