const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');

hiddenElements.forEach((wrapper) => observer.observe(wrapper));

window.onscroll = function(){

    if(window.scrollY >= 500) { 
       document.getElementById('bubble').style.opacity = '1';
    }
    else if(window.scrollY < 500) {
        document.getElementById('bubble').style.opacity = '0';
    }
 
 }; 

let progress = document.getElementById('progressbar');
let totalHeight = document.body.scrollHeight - window.innerHeight;
function scrollBar(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progress.style.height = progressHeight + "%";
}

window.addEventListener('scroll', scrollBar);

var loader = document.getElementById("preloader");

function loadingScreen(){
    loader.style.display = "none";
}

window.addEventListener('load', loadingScreen);

document.body.classList.add('js-loading');

window.addEventListener("load", showPage);

function showPage() {
  document.body.classList.remove('js-loading');
}

var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 4000);
