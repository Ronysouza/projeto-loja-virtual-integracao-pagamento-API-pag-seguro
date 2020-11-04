<?php

class controller extends model{

public function loadView($viewName,$viewData = array()){
	extract($viewData);

	require 'views/'.$viewName.'.php';

}

public function loadTemplate($viewName,$viewData = array()){

    $categoria = new categorias();

         $categorias= $categoria->getCategorias();
  
    



	require 'views/template.php';

}

public function loadViewInTemplate($viewName,$viewData = array()){

            extract($viewData);
			require 'views/'.$viewName.'.php';

}










}




?>