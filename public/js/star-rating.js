const radios = document.getElementsByName("rating");
const stars = document.querySelectorAll(".star");
let ok = true;


radios.forEach((radio) =>
    radio.addEventListener("change", () => {
        if (radio.checked) {
            console.log('radio value: ', radio.value)
            renderStars(radio.value - 1);
    
        }
    })
);

function renderStars(index) {
    for (let i = index; i >= 0; i--) {
        stars[i].classList.add("text-yellow-400");
        stars[i].classList.remove("text-gray-300");
    }
    for (let i = index + 1; i < stars.length; i++) {
        stars[i].classList.remove("text-yellow-400");
        stars[i].classList.add("text-gray-300");
    }
}
