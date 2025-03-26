const Ehilang = document.querySelector('.list');

document.querySelector('#hamburger-menu').onclick = () => {
    Ehilang.classList.toggle('active')
};

let ReportBody = document.body;
const darkmMode = () => {
    console.log('Masuk dark mode');
    ReportBody.classList.toggle("dark");

}

