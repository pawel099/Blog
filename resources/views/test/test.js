var index=0;
var y=0;
var x=0;


function dane() {

var divs = document.getElementById('move');
var images = document.getElementById('obrazek');

images.src="jsImage/football-ball-gif-1.gif";

divs.style.left=index+'.px';
index++;

          if (index>300) {
            divs.style.top=y+'.px';
               y++;
          }

         if (y>100) {
            divs.style.left=y+'.px';
            y=0;

         }

         else if (index>1000) {
         index=0;

         }

var time = setTimeout("dane(),100");

}




