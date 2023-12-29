const speed = 250;
const heroTitle = document.querySelector('#animatedTitle');
const delay = 800;

function typeEffect(element, speed) {
    const text = element.innerHTML;
    element.innerHTML = "";

    let i = 0;

    setTimeout(function () {
        element.classList.add('_active');

        const timer = setInterval(function () {
            if (i < text.length) {
                element.append(text.charAt(i));
                i++;
            } else {
                clearInterval(timer);
            }
        }, speed);
    }, delay);
}

typeEffect(heroTitle, speed);


