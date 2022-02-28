document.querySelector('.menu-burger, .menu-items').addEventListener('click', function() {
document.querySelector('.menu-items').classList.toggle('fs');
document.querySelector('.menu-bg').classList.toggle('fs');
document.querySelector('.menu-burger').classList.toggle('fs');
document.querySelector('.menu-burger').innerHTML== "☰" ? document.querySelector('.menu-burger').innerHTML='✕' : document.querySelector('.menu-burger').innerHTML='☰';
  });

