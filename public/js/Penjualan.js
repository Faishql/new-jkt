const selector = document.getElementById('selector')
const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value

async function getp() {
    const data = await fetch(`${url_origin}/penjualan/materi/customer`)
    return await data.json()
}

async function display() {
    let html = ''
    const data = await getp()
    data.data.forEach(res => html += ele(res))
    selector.innerHTML = html
}

function makeid(length) {
    var result = [];
    var characters =
        "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    var charactersLength = characters.length;
    for (var i = 0; i < length; i++) {
        result.push(
            characters.charAt(Math.floor(Math.random() * charactersLength))
        );
    }
    return result.join("");
}

function ele(res) {
    return `<option value="${res.id_customer}">${res.nama}</option>  `
}

