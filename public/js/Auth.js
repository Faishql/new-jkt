const button = document.getElementById("send");
const url_origin = document.getElementById("baseurl").value;
const token = document.getElementById("token").value;
// const btnreg = document.getElementById('btnreg')

// btnreg.addEventListener('click', async () => {
//     const response = await register()
//     if (response.pesan == 'register berhasil') {
//         alert('register berhasil')
//         window.location.href = `${url_origin}/login`
//     }else{
//         alert('register gagal')
//     }
// })

button.addEventListener("click", async () => {
    const response = await login();
    if (response.pesan == "login sukses") {
        alert("login sukses");
        response.role === 2
            ? (window.location.href = `${url_origin}/admin`)
            : (window.location.href = `${url_origin}/home`);
    } else {
        alert("login gagal");
    }
});

async function login() {
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const response = await fetchLogin(email, password);
    return response;
}

async function register() {
    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const response = await fetchRegister(username, email, password);
    return response;
}

async function fetchLogin(email, password) {
    const login = await fetch(`${url_origin}/loginnew`, {
        method: "POST",
        body: JSON.stringify({ email: email, password: password }),
        headers: { "Content-Type": "application/json", "X-CSRF-Token": token },
    });
    const result = await login.json();
    return result;
}

async function fetchRegister(username, email, password) {
    const register = await fetch(`${url_origin}/register`, {
        method: "post",
        body: JSON.stringify({ email, username, password }),
        headers: { "Content-Type": "application/json", "X-CSRF-Token": token },
    });
    const response = await register.json();
    return response;
}
