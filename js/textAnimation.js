TextArray = [
    'Full Stack Developer',
    'AWS Certified Developer',
    'Technical Blogger',
    'UX/UI Designer'
];

function setAnimationForLetters(){
    anime({
        targets: '.ml9 .letter',
        scale: [0, 1],
        duration: 1500,
        elasticity: 600,
        delay: function(el, i) {
        return 45 * (i+1)
        }
    });
}
var HolderForTextArrayIndex =0;

var textWrapper = document.querySelector('.ml9 .letters');
textWrapper.innerHTML = TextArray[HolderForTextArrayIndex];
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
setAnimationForLetters();
anime({
    targets: '.ml9',
    opacity: 0,
    loop:true,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 4000,
    loopComplete: ()=>{
        HolderForTextArrayIndex++;
        let textWrapper = document.querySelector('.ml9 .letters');
        if(HolderForTextArrayIndex === TextArray.length)
        HolderForTextArrayIndex = 0;
        textWrapper.innerHTML =TextArray[HolderForTextArrayIndex];
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
        setAnimationForLetters();
    }
});
