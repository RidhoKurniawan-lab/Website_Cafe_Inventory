import axios from "axios";
import { setValidation, clearValidation } from "../validation.js";
document.addEventListener("DOMContentLoaded", initApp);

function initApp() {
    if (!document.getElementById('formLogin')) return;
    // Initialize any authentication-related functionality here
    const formLogin = document.getElementById("formLogin");

    // Form submit event
    formLogin.addEventListener("submit", (e) => {
        e.preventDefault();
        apiAuthenticate(formLogin);
    });
}

// Function to handle API authentication
async function apiAuthenticate(formLogin) {
    const formData = new FormData(formLogin);
    const data = Object.fromEntries(formData.entries());
    try {
        const response = await axios.post('/login', data, {
            headers: { 'Content-Type': 'multipart/form-data' }
        });
        window.location.href = response.data.redirect;
    } catch (error) {
        clearValidation();
        setValidation(error.response.data.errors);
        return;
    }
}

