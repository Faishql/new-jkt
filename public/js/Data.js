const idpenerimaan = makeid(10)

function makeid(length) {
    var result = []
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    var charactersLength = characters.length
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * haractersLength)))
    }
    return result.join('')
}

async function fetchData(url ,method, body, headers) {
    const fetch = await fetch(url, {
        method: method,
        body: JSON.stringify(body),
        headers: headers
    })
    const result = await fetch.json()
    return result
}

async function postData() {
    const url = `${url_origin}/postdata`
    const body = { username, password, email }
    const process = await fetchData(url, 'post', body, {
        'Content-Type': 'application/json',
        'X-CSRF-Token': token
    })
    return process
}

