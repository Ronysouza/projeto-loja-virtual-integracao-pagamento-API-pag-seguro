<?php

class venda extends model{



public function verificar(){
     
 require "libraries/PagSeguroLibrary/PagSeguroLibrary.php";

  $code = '';
  $type = '';
  
 

  if(isset($_POST['notificationCode']) && isset($_POST["notificationType"])){
     

    $code = trim($_POST['notificationCode']);
    $type = trim($_POST['notificationType']);

    $notificationType = new PagSeguroNotificationType($type);
    $strType = $notificationType->getTypeFromValue();

      $credentials= PagSeguroConfig::getAccountCredentials();
   
       
      

  
    try{

       

        $transaction = PagSeguroNotificationService::checkTransaction($credentials,$code);

         $ref = $transaction->getReference();
         $status = $transaction->getStatus()->getValue();


 

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
    
     
      
    $sql = "UPDATE status SET status = '$novoStatus' WHERE codigo_venda = '$ref'";
    $this->db->query($sql);
    
    
        echo 'ok';exit();




    }catch(PagSeguroServiceException $e){

        echo 'FALHA'.$e->getMessage();

    }



  }
  





}





public function efetuarVendas($email,$rua,$cidade,$cep,$numero,$bairro,$observacoes,$id_usuario,$carrinho,$subtotal){
 
   
   
   
   $cod_venda =  time().rand(0,999);
   $status =0;
     $link  = '';


    foreach ($carrinho as $item) {
    	$id_produto = $item[0]['id']; 
    	$total = $item[0]['preco'];
    	$descricao = $item[0]['descricao'];

    	$sql = "INSERT INTO vendas SET id_produtos ='$id_produto', total = '$total', id_usuario = '$id_usuario',codigo_venda = '$cod_venda', descricao = '$descricao' ";    
     
         

    	 $this->db->query($sql);
    } 

   

    $sql = "INSERT INTO venda_usuario SET id_usuario ='$id_usuario',email = '$email',rua = '$rua',cidade ='$cidade',cep='$cep',numero='$numero',bairro='$bairro',observacoes='$observacoes',total=$subtotal,codigo_venda='$cod_venda' ";    	 
    	 $this->db->query($sql);

         $sql = "INSERT INTO status SET status = '$status',codigo_venda = '$cod_venda' ,id_usuario='$id_usuario'";  


         $this->db->query($sql);

       

   
   
      
    //PagSeguro..
    require "libraries/PagSeguroLibrary/PagSeguroLibrary.php";
 
     $paymentRequest = new PagSeguroPaymentRequest();


        
        foreach ($carrinho as $prods) {
            $id_pg = $prods[0]['id'];
            $name_pg = $prods[0]['nome'];
            $qtd_pg = 1;
           $preco_pg = $prods[0]['preco'];             
         
            $paymentRequest->addItem($id_pg,$name_pg,$qtd_pg,$preco_pg);       

               
        }

          unset($_SESSION['carrinho']);
      unset($_SESSION['login']);
      unset($_SESSION['subtotal']);
      unset($_SESSION['vendas']);


              
        $paymentRequest->setCurrency("BRL");
        $paymentRequest->setReference($cod_venda);
        $paymentRequest->setRedirectUrl('http://vipmodas.tk/');
        $paymentRequest->addParameter("notificationURL","http://vipmodas.tk/index.php?url=notificacao/pagamento");
          
          
          //adicionando ao servidor do pag seguro
      try{
            
              

             $cred = PagSeguroConfig::getAccountCredentials();                   
             $link = $paymentRequest->register($cred);
            

            
        }catch(PagSeguroServiceException $e){
            echo $e->getMessage();

         }  


    
  

     return $link;



}


 

 
















}