let body = document.querySelector('body'); 
let isHoldingClick = false;

document.onmousedown = function(e) {
    isHoldingClick = true;
    createAndAppendElement(e);
}

document.onmouseup = function() {
    isHoldingClick = false;
}

document.onmousemove = function(e){
    if (isHoldingClick) {
        createAndAppendElement(e);
    }
    body.style.backgroundPositionX = e.pageX/-4 + 'px';
    body.style.backgroundPositionY = e.pageY/-4 + 'px';
}

const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});
