
// show validation for all input
export function setValidation(error) {
    Object.keys(error).forEach((field) => {
        const errorMessages = document.querySelector(`p[id="validation-${field}"]`);
        if (errorMessages) {
            errorMessages.textContent = error[field][0];
        }
    });
}

// clear validation for all input
export function clearValidation() {
    const errorMessages = document.querySelectorAll('p[id^="validation-"]');
    errorMessages.forEach((msg) => {
        msg.textContent = '';
    });
}
