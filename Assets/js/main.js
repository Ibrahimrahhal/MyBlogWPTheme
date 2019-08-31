$('.headerMenuCont').click(()=>{
    $('#MenuContainer').toggleClass('menuContainerActive');
});
$('#menuExitIcon').click(()=>{
    $('#MenuContainer').toggleClass('menuContainerActive');
});
function setEventsForArrowHighContaineers(selector,anotherSelector){
    var animationOfDot;

    $(selector).mouseenter(()=>{

        if(selector != 'leftArrowHighContainerLeft'){
            anime({
                targets: '.questionMark',
                strokeDashoffset: [anime.setDashoffset,0],
                easing: 'easeInOutSine',
                duration: 1000,
                delay:700
              });
              animationOfDot = anime({
                targets: '.qustionDot',
                r:'30',
                easing: 'spring(1, 80, 8, 50)',
                duration: 200,
                delay:1650
            });
        }
        anime({
            targets:selector,
            color:'#ffffff',
            duration:300
        });
        $(anotherSelector).toggleClass('rightRowAnimation');
    });
    $(selector).mouseleave(()=>{
        if(selector != 'leftArrowHighContainerLeft'){
            animationOfDot.pause();
            $('.qustionDot').attr('r',0.5);
        }
       anime({
           targets:selector,
           color:'#121212',
           duration:300
       });
       $(anotherSelector).toggleClass('rightRowAnimation');
   });


}
setEventsForArrowHighContaineers('.leftArrowHighContainerLeft','.leftArrowHighContainerRight');
setEventsForArrowHighContaineers('.leftArrowHighContainerRight','.leftArrowHighContainerLeft');
