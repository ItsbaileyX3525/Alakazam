const form = document.getElementById("loginForm");
const submitButton = document.getElementById("submitButton")

submitButton.addEventListener("click", async (e) => {
    e.preventDefault();
    var formData = new FormData(form);

    const res = await fetch("/includes/login.inc.php", {
        method: "POST",
        body: formData
    });

    if (!res.ok) {
        console.log("Error: ", res.status);
    }

    const data = await res.json();
    window.location.href = "/account";
})