<?php
class usuario extends model{




public function faserLogin($email,$senha){
   
   $array = array();

  $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
   
   $sql = $this->db->prepare($sql);
   $sql->bindValue(':email',$email);
   $sql->bindValue(':senha',$senha);
   $sql->execute();

    if($sql->rowCount() > 0){    
         $array = $sql->fetchAll();  
    	return $_SESSION['login'] = $array;

    }else{
        
    	return false;
    }





}


public function cadatrarUsuario($nome,$email,$senha){

   

    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':email',$email);
     $sql->execute();
      if($sql->rowCount() > 0){
      	   
          return false;
      }else{
                        
           $sql = "INSERT INTO usuarios SET nome = :nome, email = :email,senha=:senha";

           
           $sql = $this->db->prepare($sql);
           $sql->bindValue(':nome',$nome);
           $sql->bindValue(':email',$email);
           $sql->bindValue(':senha',$senha);
           $sql->execute();
             
            $sql = $this->db->query("SELECT * FROM usuarios WHERE email = '$email'");
            $_SESSION['login'] = $sql->fetchAll();
              
           

            return true;         

       
      } 








}








public function faserLoginCompras($email,$senha){



$_SESSION['login_c'] = array();

  $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
   $sql = $this->db->prepare($sql);
   $sql->bindValue(':email',$email);
   $sql->bindValue(':senha',$senha);
   $sql->execute();

    if($sql->rowCount() > 0){    
        $_SESSION['login_c'] = $sql->fetchAll(); 
        
      return $_SESSION['login_c'];

    }else{
      return false;
    }







}
















}