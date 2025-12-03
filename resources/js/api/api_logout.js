document.addEventListener("DOMContentLoaded", initApp);

function initApp() {
    if (!document.getElementById('formLogout')) return;
    // Initialize any authentication-related functionality here
    const formLogout = document.getElementById("formLogout");

    // Form submit event
    formLogout.addEventListener("submit", (e) => {
        e.preventDefault();
        apiLogout();
    });

}

// Function to handle API logout
async function apiLogout() {
    try {
        const response = await axios.post('/logout');
        // Optionally, redirect to login page or homepage after logout
        window.location.href = response.data.redirect;
    } catch (error) {
        console.error("Logout failed:", error);
    }
}
