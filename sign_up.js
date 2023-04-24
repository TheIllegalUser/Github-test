const scrollDownButton = document.getElementById('scroll-down-button');
const content = document.getElementById('content');

scrollDownButton.addEventListener('click', () => {

  document.body.style.overflow = 'none';

  window.scrollTo({ top: content.clientHeight - 100, behavior: 'smooth' });
});
