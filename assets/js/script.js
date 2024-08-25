const menuCloseCheck = document.getElementById('btn-menu-hero');
const menuCloseBtn = document.querySelectorAll('.js-close-menu');
menuCloseBtn.forEach((element) => {
  element.addEventListener('click', () => {
    menuCloseCheck.checked = false;
  })
})