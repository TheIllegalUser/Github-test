const scrollDownButton = document.getElementById('scroll-down-button');
const content = document.getElementById('content');

scrollDownButton.addEventListener('click', () => {
  // Remove the CSS that hides the overflow
  document.body.style.overflow = 'auto';
  // Scroll to the bottom of the content
  window.scrollTo({ top: content.clientHeight - 100, behavior: 'smooth' });
});

const form1 = document.querySelector('#part-1 form');
  const form2 = document.querySelector('#part-2 form');
  const form3 = document.querySelector('#part-3 form');
  const section1 = document.querySelector('#part-1');
  const section2 = document.querySelector('#part-2');
  const section3 = document.querySelector('#part-3');

  // Hide all form parts except the first one
  section2.style.display = 'none';
  section3.style.display = 'none';

  // When the user submits the first form part, hide it and show the second part
  form1.addEventListener('submit', function(event) {
    event.preventDefault();
    section1.style.display = 'none';
    section2.style.display = 'block';
  });

  // When the user submits the second form part, hide it and show the third part
  form2.addEventListener('submit', function(event) {
    event.preventDefault();
    section2.style.display = 'none';
    section3.style.display = 'block';
  });

  // When the user submits the third form part, submit the entire form
  form3.addEventListener('submit', function(event) {
    // Submit the entire form
  });


  