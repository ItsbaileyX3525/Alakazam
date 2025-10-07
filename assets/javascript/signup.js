const form = document.getElementById("signupForm");
const submitButton = document.getElementById("signupButton")

submitButton.addEventListener("click", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    const res = await fetch("/includes/signup.inc.php", {
        method: "POST",
        body: formData
    });

    if (!res.ok) {
        console.log("Error: ", res.status);
        return 1
    };

    const data = await res.json();
    window.location.href = "/account";
})