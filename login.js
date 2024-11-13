function showForm(formType) {
    const loginForm = document.getElementById("login-form");
    const cadastroForm = document.getElementById("cadastro-form");
    const tabBtns = document.querySelectorAll(".tab-btn");

    if (formType === 'login') {
        loginForm.style.display = "block";
        cadastroForm.style.display = "none";    
        tabBtns[0].classList.add("active");
        tabBtns[1].classList.remove("active");
    } else if (formType === 'cadastro') {
        loginForm.style.display = "none";
        cadastroForm.style.display = "block";
        tabBtns[1].classList.add("active");
        tabBtns[0].classList.remove("active");

} 
}

