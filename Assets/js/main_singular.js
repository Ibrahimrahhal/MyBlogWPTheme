$(function () {
    $(document).scroll(function () {
        var nav = $(".headerInSingular");
        var header =$(".headerWithNavigation");
        if( $(this).scrollTop() >( header.height()+30)){
            nav.addClass('headerInScrollMode');

        }else{
            nav.removeClass('headerInScrollMode');
        }

     
    });
  });