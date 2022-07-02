//ver si ya cargo el DOM
document.addEventListener('DOMContentLoaded', function() {
  //add evern listener to the button
  document.getElementById('mobile-nav-btn').addEventListener('click', toggleMenu);
  function toggleMenu() 
  {
    let menu = document.querySelector('#mobile-nav ul');  
    if (menu.classList.contains('show')) {
      menu.classList.remove('show');
      menu.classList.add('hide');
    }else{
      menu.classList.remove('hide');
      menu.classList.add('show');
    }
  }
});