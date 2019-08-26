$('.headerMenuCont').click(()=>{
    $('#MenuContainer').toggleClass('menuContainerActive');
});
$('#menuExitIcon').click(()=>{
    $('#MenuContainer').toggleClass('menuContainerActive');
});
function setEventsForArrowHighContaineers(selector,anotherSelector){

    $(selector).mouseenter(()=>{
        anime({
            targets:selector,
            color:'#ffffff',
            duration:300
        });
        $(anotherSelector).toggleClass('rightRowAnimation');
    });
    $(selector).mouseleave(()=>{
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
