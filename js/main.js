// text animation on the header text
// i think i would need to wrap every letter in a span or div
// then add translate/scale css to each one on page load and loop through till each appear?
// so a for loop with each letter as a .letter class and then .letter.length?
// this top version uses the array created to loop through and create the typewriter effect
// whereas the second version is what i made first using each letter as it's own span and looping through those
const text = 'My name is Karl Smith';
const typewriter1 = Array.from(text);
let header1 = document.querySelector('.header-border')
// let header2 = document.querySelector('.inline-name')
let header = document.querySelector('.header-name')

function writeName1 () {

    for (let i = 0; i < typewriter1.length; i++) {

        setTimeout( () => {
            header1.innerHTML += typewriter1[i];
        }, 150 * i);
    }
};

window.addEventListener('load', () => {

    writeName1();

    setTimeout( () => { header.style.opacity = '1'}, 3300);
    setTimeout( () => { header.style.transition = 'all 1s ease-out'}, 3300);
    setTimeout( () => { header.style.transition = ''}, 3400);
        
});

// window.addEventListener('load', () => {
//     for (let i = 0; i < header.length; i++) {

//         setTimeout( () => { header[i].style.opacity = '1'}, 100 * i);
//         setTimeout( () => { header[i].style.transition = 'all 1s ease-out'}, 100 * i);
        
//             if (i === header.length - 1) {

//                 //works because it's less than header.length

//                 for (let i = 0; i < header.length; i++) {

//                     //removes the transition property after it's finished

//                     setTimeout( () => { header[i].style.transition = ''}, 100 * i);
//                     // console.log('working');

//                 };
//             };
        
//     };
// });


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
    let emailStar = document.querySelector('.e-star')
    let enquiryEmailField = document.querySelector('input[id="email"]');
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(!email.match(regex)) {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Invalid email address`;
        emailStar.style.color = 'red';
        enquiryEmailField.style.border = '1px solid red';
        // console.log(email);
        // test to see whether the email address actually shows up on failure

    } else if(email === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';
        enquiryEmailField.style.border = '1px solid red';

    } else {

        emailStar.style.color = 'black';
        enquiryEmailField.style.border = 'unset';
    }
});

form.addEventListener('submit', (e) => {

    let name = document.querySelector('.fname input').value;
    let Star = document.querySelector('.name-star');
    let enquiryNameField = document.querySelector('input[id="fname"]');

    if(name === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';
        enquiryNameField.style.border = '1px solid red';

    } else {

        Star.style.color = 'black';
        enquiryNameField.style.border = 'unset';
    }
});

form.addEventListener('submit', (e) => {

    let message = document.querySelector('.message textarea').value;
    let Star = document.querySelector('.mess-star');
    let enquiryMessageField = document.querySelector('textarea[id="message"]');

    if(message === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';
        enquiryMessageField.style.border = '1px solid red';

    } else {

        Star.style.color = 'black';
        enquiryMessageField.style.border = 'unset';
    }
});

// form.addEventListener('submit', (e) => {

//     let email = document.querySelector('.email input').value;
//     let Star = document.querySelector('.e-star');

//     if(email === '') {

//         e.preventDefault();
//         document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
//         Star.style.color = 'red';

//     }
// });

//scroll to form on post page reload

// function scrollToForm() {

//     const form = document.querySelector('form');

//     form.scrollIntoView({behavior: "smooth"});
// }