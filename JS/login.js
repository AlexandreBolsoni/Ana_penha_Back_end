document.addEventListener("DOMContentLoaded", function () {
    var loginForm = document.getElementById('loginForm');
    var cadastroForm = document.getElementById('cadastroForm');

    document.getElementById('formType').addEventListener('change', function () {
        if (this.value === 'login') {
            loginForm.style.display = 'block';
            cadastroForm.style.display = 'none';
        } else if (this.value === 'cadastro') {
            loginForm.style.display = 'none';
            cadastroForm.style.display = 'block';
        } else {
            loginForm.style.display = 'none';
            cadastroForm.style.display = 'none';
        }
    });
});