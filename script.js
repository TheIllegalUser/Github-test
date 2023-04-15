const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
    if (entry.isIntersecting) {
    entry.target.classList.add('show');
    observer.unobserve(entry.target);
    }
    });
    }, {
    threshold: 0.25 
    });
    
    const animatedElements = document.querySelectorAll('.hidden');
    
    animatedElements.forEach((element) => observer.observe(element));

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
    }, 10000);

