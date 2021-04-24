const button = document.getElementById('send')

button.addEventListener('click', async () => {
    const response = await login()
    console.log(response)
})

async function login() {

    const username = document.getElementById('email').value
    const password = document.getElementById('password').value

    const response = await fetchLogin(username, password)

    return response
}

async function fetchLogin(username, password) {
    const url_origin = document.getElementById('baseurl')
    const login = await fetch(`${url_origin}/loginnew`, { 
        method : 'POST',
        body : { email : username, password : password },
        headers : { 'Content-Type' : 'application/json' }
    })
    const result = await login.json()
    return result
}
