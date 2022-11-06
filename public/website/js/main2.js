
var myImages = document.querySelectorAll(".paper img");

var lightBox = document.querySelector(".lightBox-container");

var close = document.getElementById("close");
var next = document.getElementById("next");
var prev = document.getElementById("prev");
var count = 0 ;
for(var i=0 ; i<myImages.length; i++) 
{
    myImages[i].addEventListener("click",function(e){
        var imgSrc = e.target.src;
        console.log(imgSrc)
        lightBox.style.display="flex";
        lightBox.firstElementChild.style.backgroundImage ="url("+imgSrc+")";
        
    })
}

close.addEventListener("click",hideLightBox);
next.addEventListener("click",gonext);
prev.addEventListener("click",goprev);

function hideLightBox(){
    lightBox.style.display="none";

}
function gonext(){
    count++ ;
    if(count ==  myImages.length)
    {
    count=0 ;
    }    
    lightBox.firstElementChild.style.backgroundImage ="url("+myImages[count].src+")";  
    
}
function goprev(){
    count--;
    if(count < 0 )
    {
    count =myImages.length -1 ;
    }    
    lightBox.firstElementChild.style.backgroundImage ="url("+myImages[count].src+")";  
    
}