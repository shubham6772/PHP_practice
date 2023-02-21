const slides = document.querySelectorAll(".slide")
var counter = 0;


const slideImage = () => {
    slides.forEach((slide)=> {

        slide.style.transform = `translateX(-${counter * 100}%)`
    }) 
}

const goPrev = () => {
    if(counter<0){
        counter = slides.length-1;
        slideImage()
    }else{
        counter--
        slideImage()
    }  
       
}

const goNext = () => {
    if(counter > slides.length-2){
        
        counter = 0;
        slideImage()
    }else{
    counter++
    slideImage()
    }
    
}

setInterval(() => {
    
    goNext();

}, 3000);





 


