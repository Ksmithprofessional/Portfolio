// menu bar 

// create html and css for menu at small Screens (nav-icons)
// add event listener to button click
// if button clicked, show menu bar, hide menu button
// if button clicked again, hide menu bar (display none), bring back menu button

const menu = document.querySelector('.nav-menu');
const close = document.querySelector('.fa-times-circle');

menu.addEventListener('click', () => {

    document.querySelector('.nav-icons').style.left ='0px';
    menu.style.display = 'none';

});

close.addEventListener('click', () => {

    document.querySelector('.nav-icons').style.left ='-100px';
    menu.style.display = 'block';

});

if(window.innerWidth > 767) {

    document.querySelector('.nav-icons').style.left ='0px';
};