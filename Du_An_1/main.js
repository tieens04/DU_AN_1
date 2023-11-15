var album=[];
for(var i=0;i<8;i++){
    album[i]=new Image();
    album[i].src="img/banners/banner"+i+".png";
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>8){
        index=1;
    }
    document.getElementById("banner").src=album[index].src;
}
