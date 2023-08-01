const password = document.getElementById("password");
const showPasswordBtn = document.getElementById("show-password");

function showPassword() {
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

showPasswordBtn.addEventListener("click", showPassword);
