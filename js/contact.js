var lockMode = false;

function myNameAnimation(){
    
    if(!lockMode){
        lockMode = true;
        $('.lineForNameAndCircleAnimations').addClass('lineForNameAndCircleAnimationsMiddle');
        setTimeout(()=>{
        $('.mynameAnimation').css('display','block');
        $('.circleLogo').css('display','none');
        // $('.lineForNameAndCircleAnimations').removeClass('lineForNameAndCircleAnimationsMiddle');
        $('.lineForNameAndCircleAnimations').addClass('lineForNameAndCircleAnimationsRight');
        lockMode = false;
        },750);
    }
}


$('#sideInfo').scroll((e)=>{
    if(((e.target.scrollTop/e.target.scrollHeight) > 0.1)){
        myNameAnimation();
    }
    // console.log(window.scrollY);
});

$(window).scroll((e)=>{
    if(((window.scrollY)/($(document).height()-650)>0.1)){
        myNameAnimation();
    }
});
