// menu bar 

// create html and css for menu at small Screens (nav-icons)
// add event listener to button click
// if button clicked, show menu bar, hide menu button
// if button clicked again, hide menu bar (display none), bring back menu button

const menu = document.querySelector('.nav-menu')
const close = document.querySelector('.fa-times-circle')

menu.addEventListener('click', () => {

    document.querySelector('.nav-icons').style.display ='inline-block';
    menu.style.display = 'none';

});

close.addEventListener('click', () => {

    document.querySelector('.nav-icons').style.display ='none';
    menu.style.display = 'block';

});

// text animation on the header text
// i think i would need to wrap every letter in a span or div
// then add translate/scale css to each one on page load and loop through till each appear?
// so a for loop with each letter as a .letter class and then .letter.length?

let header = document.querySelectorAll('.header-name')

window.addEventListener('load', () => {
    for (let i = 0; i < header.length; i++) {

        setTimeout( () => { header[i].style.opacity = '1'}, 100 * i);
        setTimeout( () => { header[i].style.transition = 'all 1s ease-out'}, 100 * i);
        
            if (i === header.length - 1) {

                //works because it's less than header.length

                for (let i = 0; i < header.length; i++) {

                    //removes the transition property after it's finished

                    setTimeout( () => { header[i].style.transition = ''}, 100 * i);
                    // console.log('working');

                };
            };
        
    };
});


// form validation
//if required fields have collected input then proceed (input.value = true?)
// else display "fill in required fields"
// also check the formatting of email and phone number fields
// if phone number/email format = true, proceed
// else "not a valid email/phone number"
// 'e' event is just to prevent default submission

const formSubmit = document.querySelector('#submit');
const form = document.querySelector('form');


form.addEventListener('submit', (e) => {

    let email = document.querySelector('.email input').value;
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!email.match(regex)) {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Invalid email address`
        // console.log(email);
        // test to see whether the email address actually shows up on failure

    }
});