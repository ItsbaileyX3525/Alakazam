const ghibliImage = document.getElementById("ghibli-image");
const currentlyLikes = localStorage.getItem("studio") || "ghibli";
const DOL = new Audio("/assets/audio/DOL.mp3")
const switchText = document.getElementById("switch-text");

const ghibliImages = [
    "/assets/images/ghibli/ghibli-1.gif",
    "/assets/images/ghibli/ghibli-2.gif",
    "/assets/images/ghibli/ghibli-3.gif",
    "/assets/images/ghibli/ghibli-4.gif",
    "/assets/images/ghibli/ghibli-5.gif",
    "/assets/images/ghibli/ghibli-6.gif",
    "/assets/images/ghibli/ghibli-7.gif",
    "/assets/images/ghibli/ghibli-8.gif",
]

const toeiImages = [
    "/assets/images/toei/toei-1.gif",
    "/assets/images/toei/toei-2.gif",
    "/assets/images/toei/toei-3.gif",
    "/assets/images/toei/toei-4.gif",
    "/assets/images/toei/toei-5.gif",
    "/assets/images/toei/toei-6.gif",
    "/assets/images/toei/toei-7.gif",
    "/assets/images/toei/toei-8.gif",
    "/assets/images/toei/toei-9.gif",
]

function changeGifs() {
    if (currentlyLikes === "ghibli") {
        localStorage.setItem("studio", "toei");
        window.location.reload();
    } else {
        localStorage.setItem("studio", "ghibli");
        window.location.reload();
    }
}

function loadGhibli() {
    if (currentlyLikes == "ghibli") {
        ghibliImage.src = ghibliImages[Math.floor(Math.random() * ghibliImages.length)];
        switchText.innerHTML = "Like Toei Animations instead? <a href='#' onclick='changeGifs()'>Click here</a>"
    } else {
        var chosen = toeiImages[Math.floor(Math.random() * toeiImages.length)];
        ghibliImage.src = chosen
        switchText.innerHTML = "Like Studio Ghibli instead? <a href='#' onclick='changeGifs()'>Click here</a>"
        if (chosen === "/assets/images/toei/toei-1.gif" || chosen === "/assets/images/toei/toei-9.gif") {
            document.addEventListener("click", () => {
                document.body.appendChild(DOL)
                if (DOL.paused) {
                    DOL.play()
                }
            })
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    loadGhibli()
})