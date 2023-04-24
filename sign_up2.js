let formscrollers = document.getElementsByClassName('formscroller');
let formscroll = document.querySelector('.form-scroll');

Array.from(formscrollers).forEach(function(formscroller) {
  formscroller.addEventListener('click', function() {
    formscroll.scrollBy({ top: 254, left: 0, behavior: 'smooth' });
  });
});