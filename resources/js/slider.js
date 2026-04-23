const image= document.getElementById('image') ;
const imagels=[
    "images/banners3.jpg",
    "images/banners2.jpg",
];
let index=0;
setInterval(()=>{
index++
if(imagels.length==index){
index=0
}
image.setAttribute("src",imagels[index]);
},10000);