<?php
  
class minhas_comprasController extends controller{



  public function index(){
       if(!isset($_SESSION['login_c']) || empty($_SESSION['login_c'])){

                 

                     header('Location:'.BASE_URL.'home');
        	
        }
   


   $dados = array(
      'consultar'=>array(),
      'invalido'=>array()
   );
             



   if(isset($_POST['pedido']) && !empty($_POST['pedido'])){
          
         $pedido = addslashes($_POST['pedido']);
     
     
        $status = new status();
              
          if($dados['consultar']=$status->getStatus($pedido)){
                  
          }else{
          	$dados['invalido'] = "número do pedido invalido!";
          }

           


   }


     
    


   $this->loadTemplate('minhas_compras',$dados);


  }
    















}










?>