document.addEventListener("DOMContentLoaded", initApp);

function initApp() {
    if (!document.getElementById('password-wrapper')) return;

    // Initialize any authentication-related functionality here
    const passwordWrapper = document.getElementById("password-wrapper");

    //initialize function
    togglePassword(passwordWrapper);
}

// Function to toggle password visibility
function togglePassword(passwordWrapper) {
    const passwordInput = passwordWrapper.querySelector("#password");
    const passwordToggle = passwordWrapper.querySelector("#password-toggle");

    passwordToggle.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.classList.remove("fa-eye");
            passwordToggle.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            passwordToggle.classList.remove("fa-eye-slash");
            passwordToggle.classList.add("fa-eye");
        }
    });
}


