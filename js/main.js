var slider = document.getElementsByClassName("slider");
const INDEXMAX = slider.length - 1;
var i = 0;
/*var setTimeout = 1000;
var img =["img/img/1.jpeg", "img/img/2.jpeg", "img/img/3.jpeg"];
//slider[0].style.display = "none";
//slider[1].style.display = "none";
//slider[2].style.display = "none";

index = 0;
function col() {
  slider[0].src = img[index];

  index++;
  if(index < ){
    index = 0
  }
}*/



for (var i = 0; i < slider.length; i++){
  slider[i].style.display = "none";
}


slider[0].style.display = "block";

var myInterval = setInterval(carousel, 2000)


let  index =  0;

function carousel(){

  slider[index].style.display = "block";
  index++;
  if(index > INDEXMAX){
    index = 0;
  }
}


/*var i = 0;
var images = [];
var time = 3000;


images[0] = '1.jpeg';
images[1] = '2.jpeg';
images[2] = '3.jpeg';

function changeImg() {
  document.slider.src = images[i];

  if(i < imges.length - 1){
    i++;
  }else{
    i = 0;
  }
  setTimeout("changeImg()", time);
}

window.onload = changeImg;*/
