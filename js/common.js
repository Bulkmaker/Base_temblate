$(function() {

	// Custom JS

});
/*-----------------Hover bootstrap menu-------------------*/
$('body').on('mouseenter mouseleave','.dropdown',function(e){
  var _d=$(e.target).closest('.dropdown');_d.addClass('show');
  setTimeout(function(){
    _d[_d.is(':hover')?'addClass':'removeClass']('show');
  },300);
});
/*-----------------END-Hover bootstrap menu-------------------*/