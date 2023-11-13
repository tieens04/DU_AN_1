var album=[];
for(var i=0;i<10;i++){
    album[i]=new Image();
     album[i].src="view/img/banners/banner"+i+".png";//(i=0?"gif":"png")
}
 var interval=setInterval(slideshow,2000);
index=0;
function slideshow(){
    index++;
    if(index>9){
        index=1;
    }
    document.getElementById("banner").src=album[index].src;
}

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }