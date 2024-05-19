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
    document.body.style.backgroundImage = `url('${selectedBackground}')`;
}

// Event listener for the button
document.getElementById('setBackgroundButton').addEventListener('click', setBackground);

// Set random background image when loading website
window.onload = function() {
    const select = document.getElementById('backgroundSelect');
    // Check that we are on the home.html page
    if (window.location.pathname.endsWith('privacy.html')) {
        const homeBackground = backgrounds[2]; // Picture 3
        document.body.style.backgroundImage = `url('${homeBackground}')`;
        select.value = homeBackground;
    } else if (window.location.pathname.endsWith('index.html')) {
        const homeBackground = backgrounds[1]; // Picture 2
        document.body.style.backgroundImage = `url('${homeBackground}')`;
        select.value = homeBackground;
    } else {
        const randomBackground = getRandomBackground();
        document.body.style.backgroundImage = `url('${randomBackground}')`;
        select.value = randomBackground;
    }
}

// Set random background image when loading website
//window.onload = function() {
//    const randomBackground = getRandomBackground();
//    document.body.style.backgroundImage = `url('${randomBackground}')`;
    // Set the dropdown menu to the random image
//    const select = document.getElementById('backgroundSelect');
//    select.value = randomBackground;
//}