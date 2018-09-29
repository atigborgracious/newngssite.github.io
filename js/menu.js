let menuWrapper = document.querySelector('.menu-wrapper');
let menuBtn = document.querySelector('.menu-button');

let closeMenu = function (e) {
  menuWrapper.classList.remove('opened');
  document.removeEventListener('click', closeMenu);
};

menuBtn.addEventListener('click', function(e) {
  menuWrapper.classList.toggle('opened');
  e.stopPropagation();
  document.addEventListener('click', closeMenu);
});