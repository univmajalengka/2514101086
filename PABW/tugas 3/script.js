
let currentSlide = 0;
const slides = document.querySelectorAll(".hero-slide");
const dots = document.querySelectorAll(".hero-dots button");

function showSlide(index) {
    slides[currentSlide].classList.remove("active");
    dots[currentSlide].classList.remove("active");

    currentSlide = (index + slides.length) % slides.length;

    slides[currentSlide].classList.add("active");
    dots[currentSlide].classList.add("active");
}

function changeSlide(direction) {
    showSlide(currentSlide + direction);
}

// Banner berganti otomatis setiap 5 detik
setInterval(() => {
    showSlide(currentSlide + 1);
}, 5000);

// Geser daftar destinasi
function scrollDestinations(direction) {
    const list = document.getElementById("destinationList");

    list.scrollBy({
        left: direction * 300,
        behavior: "smooth"
    });
}

// Informasi tarif
function showTicket(destination) {
    alert(
        "Informasi tarif " + destination +
        " perlu dicek melalui sumber resmi agar harganya akurat."
    );
}

// Aktifkan titik banner pertama
if (dots.length > 0) {
    dots[0].classList.add("active");
}
