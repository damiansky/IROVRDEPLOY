$('.sponsors-carousel').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 3,
  centerMode: true,
  arrows: false,
  responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 450,
        settings: {
          slidesToShow: 2,
        }
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
});

a = false;
var scroll;

var videosp = document.querySelector('#videostart');

videosp.onplaying = (event) => {
  console.log('Video is no longer paused.');
  videosp.addEventListener("click", function(){ 
    if(a){
      vid.pause();
    } 
});
};

videosp.onpause = (event) => {
  console.log('The Boolean paused property is now true. Either the ' + 
  'pause() method was called or the autoplay attribute was toggled.');
  videosp.addEventListener("click", function(){ 
    if(a){
    vid.play();
  } 
})
};

var elem = document.getElementById("myvideo");
var vid = document.getElementById("videostart");
var c = document.getElementById('cursor-id');

function openFullscreen() {
if (elem.requestFullscreen) {
  elem.requestFullscreen();
  c.style.cursor = 'pointer';
 if (!a){
  vid.currentTime = '0';
  vid.play();
 }
} else if (elem.mozRequestFullScreen) { /* Firefox */
  elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
  elem.webkitRequestFullscreen();
} else if (elem.msRequestFullscreen) { /* IE/Edge */
  elem.msRequestFullscreen();
}
}

function closeFullscreen() {
if (document.exitFullscreen) {
  document.exitFullscreen();
  vid.play();
} else if (document.mozCancelFullScreen) {
  document.mozCancelFullScreen();
} else if (document.webkitExitFullscreen) {
  document.webkitExitFullscreen();
} else if (document.msExitFullscreen) {
  document.msExitFullscreen();
}
}

const hiddenw = document.querySelector('#hiddenwrapper');
hiddenw.style.cursor = "none";



document.addEventListener('fullscreenchange', (event) => {
console.log(document.fullscreenElement);
var x = document.getElementById('closeButtonX');
var b = document.getElementById('body-x');
if (document.fullscreenElement) {
  console.log('is fullscreen');
  x.style.display = 'block';
  a = true;
  b.style.overflowX = 'hidden'
  document.querySelector("#cursor-id").classList.remove('cursor');
  scroll = {x: window.scrollX, y: window.scrollY};
  if(a){
    hiddenw.style.cursor = "pointer";
  } 
} else {
  console.log('is fullscreen');
  x.style.display = 'none';
  a = false;
  b.style.overflowX = 'unset'
  document.querySelector("#cursor-id").classList.add('cursor');
  if(!a){
    hiddenw.style.cursor = "none";
  } 
  setTimeout(() => {
    window.scrollTo(scroll.x, scroll.y);
  }, 200)
}
});

        const cursor = document.querySelector('.cursor');

      document.addEventListener('mousemove', e => {
          cursor.setAttribute("style", "top: "+(e.pageY - 10)+"px; left: "+(e.pageX - 10)+"px;")
      })


      

      





