$(document).ready(function(){

  var oculto=0;

  $('.show').on('click', function(){

    if(oculto==0){
      $('aside').addClass("content-menu2");
      $('article').addClass("principal_no_oculto");
      oculto=1;
    }

    else{
      $('aside').removeClass("content-menu2");
      $('article').removeClass("principal_no_oculto");
      oculto= 0;
    }
  })
})
