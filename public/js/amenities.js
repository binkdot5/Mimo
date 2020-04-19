let eIcons = document.querySelectorAll('.eIcons');
let dIcons = document.querySelectorAll('.dIcons');
let p = document.querySelector('.iconVal');
let iconVal = p.innerHTML;

function disableIcons() {
    if (iconVal == "0") {
        eIcons.style.display = "none";

    } else {
        dIcons.style.display = "none";
    }
}

window.addEventListener('load', disableIcons);