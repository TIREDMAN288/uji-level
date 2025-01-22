
const sidebar = document.querySelector('.sidebar');
const mainContent = document.querySelector('.main-content');
const toggleButton = document.createElement('div');

toggleButton.classList.add('navbar-toggle');
toggleButton.innerHTML = '☰';
document.querySelector('.navbar').prepend(toggleButton);

toggleButton.addEventListener('click', () => {
  sidebar.classList.toggle('closed');
  mainContent.classList.toggle('full');

  
});