const image= document.getElementById('image') ;
const imagels=[
    "images/banner-1.jpg",
    "images/banner-2.jpg",
];
let index=0;
setInterval(()=>{
index++
if(imagels.length==index){
index=0
}
image.setAttribute("src",imagels[index]);
},10000);