// Background
const backgrounds = [
    "./assets/img/backgrounds/marek-piwnicki-wgsu3WzFZ5c-unsplash.jpg",
    "./assets/img/backgrounds/marek-piwnicki-zbowrjiVx2c-unsplash.jpg",
    "./assets/img/backgrounds/marek-piwnicki-ZuI0QS361bg-unsplash.jpg"
];

function getRandomBackground() {
    const randomIndex = Math.floor(Math.random() * backgrounds.length);
    return backgrounds[randomIndex];
}

function setBackground(event) {
    event.preventDefault();
    const select = document.getElementById('backgroundSelect');
    const selectedBackground = select.value;
    const backgroundDiv = document.getElementById('background');
    backgroundDiv.style.backgroundImage = `url('${selectedBackground}')`;
}

document.getElementById('setBackgroundButton').addEventListener('click', setBackground);

window.onload = function() {
    const select = document.getElementById('backgroundSelect');
    const backgroundDiv = document.getElementById('background');
    if (window.location.pathname.endsWith('privacy.html')) {
        const homeBackground = backgrounds[2];
        backgroundDiv.style.backgroundImage = `url('${homeBackground}')`;
        select.value = homeBackground;
    } else {
        const randomBackground = getRandomBackground();
        backgroundDiv.style.backgroundImage = `url('${randomBackground}')`;
        select.value = randomBackground;
    }
}
// !Background


// Scroll Button
document.addEventListener("DOMContentLoaded", function() {
    var upButton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction();
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            upButton.classList.add("show");
            upButton.classList.remove("hide");
        } else {
            if (!upButton.classList.contains("hide")) {
                upButton.classList.add("hide");
                upButton.addEventListener('animationend', function() {
                    if (upButton.classList.contains("hide")) {
                        upButton.classList.remove("show");
                    }
                }, { once: true });
            }
        }
    }
    upButton.onclick = function() {
        topFunction();
    };
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
});
// !Scroll Button


// Scroll-triggered Animation

// !Scroll-triggered Animation
