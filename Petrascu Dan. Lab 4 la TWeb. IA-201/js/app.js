autoSlider();
var left = 0;
var timer = 0;

function autoSlider(){
    timer = setTimeout(function(){
        var polosa = document.querySelector('.slider-line');
        left = left - 350;
        if(left < -700){
            left = 0;
            clearTimeout(timer);
        }
        polosa.style.left = left + 'px';
        autoSlider();
    }, 1500);
}
