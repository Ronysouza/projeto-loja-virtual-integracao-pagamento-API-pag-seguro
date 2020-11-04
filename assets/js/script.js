 document.getElementById('botao_menu_mobile').addEventListener('click',function(){
  var menu_mobile = document.getElementById('menu_mobile');
   
   if( menu_mobile.style.display == 'none'){



 menu_mobile.style.display = 'block'
   }else{

     menu_mobile.style.display = 'none'
   }

})