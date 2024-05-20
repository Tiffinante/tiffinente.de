// Background
// Array with the paths to the background images
const backgrounds = [
    "./assets/img/backgrounds/marek-piwnicki-wgsu3WzFZ5c-unsplash.jpg",
    "./assets/img/backgrounds/marek-piwnicki-zbowrjiVx2c-unsplash.jpg",
    "./assets/img/backgrounds/marek-piwnicki-ZuI0QS361bg-unsplash.jpg"
];

// Function that selects a random image from the array
function getRandomBackground() {
    const randomIndex = Math.floor(Math.random() * backgrounds.length);
    return backgrounds[randomIndex];
}

// Function that sets the selected background image
function setBackground(event) {
    event.preventDefault(); // Prevents the page view from changing (without this line the page scrolls up)
    const select = document.getElementById('backgroundSelect');
    const selectedBackground = select.value;
    const backgroundDiv = document.getElementById('background');
    backgroundDiv.style.backgroundImage = `url('${selectedBackground}')`;
}

// Event listener for the button
document.getElementById('setBackgroundButton').addEventListener('click', setBackground);

// Set random background image when loading website
window.onload = function() {
    const select = document.getElementById('backgroundSelect');
    const backgroundDiv = document.getElementById('background');
    // Check that we are on the home.html page
    if (window.location.pathname.endsWith('privacy.html')) {
        const homeBackground = backgrounds[2]; // Picture 3
        backgroundDiv.style.backgroundImage = `url('${homeBackground}')`;
        select.value = homeBackground;
    /*
    } else if (window.location.pathname.endsWith('index.html') || window.location.pathname.endsWith('')) {
        const homeBackground = backgrounds[1]; // Picture 2
        backgroundDiv.style.backgroundImage = `url('${homeBackground}')`;
        select.value = homeBackground;
    */
    } else {
        const randomBackground = getRandomBackground();
        backgroundDiv.style.backgroundImage = `url('${randomBackground}')`;
        select.value = randomBackground;
    }
}
// !Background



// Scroll Button
var myButton = document.getElementById("upButton");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        myButton.style.display = "block";
    }
    else {
        myButton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
// !Scroll Button



//