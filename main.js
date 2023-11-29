var album = [];
for (var i = 0; i < 7; i++) {
    album[i] = new Image();
    album[i].src = "view/img/banners/banner" + i + ".png";//(i=0?"gif":"png")
}
var interval = setInterval(slideshow, 2000);
index = 0;
function slideshow() {
    index++;
    if (index > 7) {
        index = 1;
    }
    document.getElementById("banner").src = album[index].src;
}
