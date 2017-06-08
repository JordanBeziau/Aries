document.addEventListener('DOMContentLoaded', () => {

  let open = document.querySelector('.open');
  const links = document.querySelectorAll('dt');

  const openDt = function () {
    for (var i = 0; i < links.length; i++) {
        if (this == links[i]) {
          this.className = '';
          this.nextElementSibling.className = 'open';
        } else {
          links[i].className = 'clickable';
          links[i].nextElementSibling.className = '';
        }
    }
  };

  for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('mouseup', openDt);
  }

});
