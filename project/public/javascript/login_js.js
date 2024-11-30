let body = document.querySelector('body'); 
let isHoldingClick = false;

// Handle mouse down event
document.onmousedown = function(e) {
    isHoldingClick = true;
    createAndAppendElement(e);
}

// Handle mouse up event
document.onmouseup = function() {
    isHoldingClick = false;
}

// Handle mouse move event
document.onmousemove = function(e){
    if (isHoldingClick) {
        createAndAppendElement(e);
    }
    // Adjust background position based on mouse movement
    body.style.backgroundPositionX = e.pageX / -4 + 'px';
    body.style.backgroundPositionY = e.pageY / -4 + 'px';
}

// Get the container and buttons
const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

// Toggle container class on button click
registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// Remove alert after 3 seconds on DOM content loaded
document.addEventListener('DOMContentLoaded', () => {
    const alert = document.querySelector('.alert');
    if (alert) {
        setTimeout(() => {
            alert.remove(); // Remove alert from DOM after 3 seconds
        }, 3000); // Matches the animation duration
    }
});
