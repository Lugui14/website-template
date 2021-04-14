const hamburger = document.querySelector('.hamburger')
const hamburgericon = document.querySelector('i');
const sidebar = document.querySelector('.sidebar');
const listel = document.querySelectorAll('.list-el');

hamburger.addEventListener('click', ()=> {
  sidebar.classList.toggle('active');
  hamburgericon.classList.toggle('fa-times');
});

listel.forEach(index=> {
  index.addEventListener('click', ()=> {
    sidebar.classList.toggle('active');
    hamburgericon.classList.toggle('fa-times');
  });
})

