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