function submitLoginForm(event) {
    event.preventDefault(); // Prevent default form submission
    const spinner = document.getElementById('loading-spinner');
    spinner.style.display = 'inline-block'; // Show spinner
    document.getElementById('loginForm').submit(); // Submit the form
}
