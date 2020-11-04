<?php 

 class comprasController extends controller{



 public function index(){

   $dados = array(
    'senha_incorreta'=>array(),
    'todas_compras'=>array(),
    'vendas_info'=>array(),
    'status_info'=>array()
   );



       if(isset($_POST['email']) && !empty($_POST['email'])){
           $u = new usuario();
           $stats = new status();
           $venda = new venda();
       	$email = addslashes($_POST['email']);
       	$senha = addslashes($_POST['senha']);
           
      if($u->faserLoginCompras($email,$senha)){
            
          
           header('Location:'.BASE_URL.'minhas_compras');


           
      }else{
          	$dados['senha_incorreta'] = 'usuário e/ou senha estao errados!';
      }



       }else{
           
           echo "<script>alert('preencha todos os campos !')</script>";

       }
  












   $this->loadTemplate('compras',$dados);


 }









 }








 ?>