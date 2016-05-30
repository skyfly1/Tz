function toggleCP() {
  var cp = $("#cp");
  if ( cp.css('display') == 'block' ) {
    cp.hide('slow');
  } else{
    cp.show('slow');
  };
};

//функция плавного скроллинга к элементу
function scrollToElement(theElement){
  $('html, body').animate({scrollTop: $(theElement).offset().top - 125}, 1200);
} 

$( document ).ready(function() {
  $('.header__items a').each(function(index){
    $(this).click( function() {
      var css = $(this).attr('class').split('-')[1];
      if($('header').offset().top == 0){
        $('html, body').animate({scrollTop: $('.' + css).offset().top - 250}, 1200);
      } else {
        $('html, body').animate({scrollTop: $('.' + css).offset().top - 125}, 1200);
      }
    });
  }); 
});

window.onscroll = function(){
  //фиксация верхнего меню при прокрутке
  menu=document.getElementsByTagName("header")[0];

 if (window.pageYOffset>1){
  var menuStyle=menu.style;
  menuStyle.position="fixed";
  menuStyle.top="0px";
  menuStyle.opacity="0.99"; 
  menuStyle.boxShadow='0 0 10px rgba(0,0,0,0.5)';
 }
 else{
  menu.style.position="";     
  menu.style.top=""; 
  menu.style.opacity="1"; 
  menu.style.boxShadow='none';
 }
}