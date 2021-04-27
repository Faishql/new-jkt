const idpenerimaan = 'INV'+makeid(10)
const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value
const addPenerimaan = document.getElementById('add')

addPenerimaan.addEventListener('click', async () => {
    const berat = document.getElementById('berat').value
    const bayar = document.getElementById('bayar').value

 
    const process = await insertData(`${url_origin}/detail/invoice`, 'post', { 
        berat: berat, bayar: bayar, kode_penerimaan: idpenerimaan
    },{
        'Content-Type' : 'application/json',
        'X-CSRF-Token' : token
    })

    process == 'sukses' ? alert('sukses') : alert('gagal')

})

async function gabahGlobal() {
    const data = await getGabah()
    displayData(data.data)
}

function formatRupiah(angka, prefix){
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
    split   		= number_string.split(','),
    sisa     		= split[0].length % 3,
    rupiah     		= split[0].substr(0, sisa),
    ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if(ribuan){
        separator = sisa ? '.' : ''
        rupiah += separator + ribuan.join('.')
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah
    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '')
}


function displayData(data) {
    let display = ''
    let no = 1
    data.forEach(res => display += elemen(res, no++))
    document.getElementById('list-data').innerHTML = display
}

function elemen(data, no) {
    return `<tr>
                <td>${no}</td>
                <td>${data.kode_penerimaan}</td>
                <td>${data.total_berat}</td>
                <td>${formatRupiah(data.total_bayar.toString(), 'Rp.')}</td>
                <td>
                    <a href="#add"><button onclick="document.getElementById('id01').style.display='block'"
                            class="button">Tambah</button></a>
                    <a href="detail.html"><button class="button">Detail</button></a>
                </td>
            </tr>`
}

try {
    document.getElementById('list-data').innerHTML = 'Loading Data ...'
}finally {
    setTimeout(function() {
        gabahGlobal()
    }, 3000)
}


function makeid(length) {
    var result = []
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    var charactersLength = characters.length
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)))
    }
    return result.join('')
}

async function insertData(url ,method, body, headers) {
    const fetch = await fetch(url, {
        method: method,
        body: JSON.stringify(body),
        headers: headers
    })
    const result = await fetch.json()
    return result
}

async function getGabah() {
    const get = await fetch('/gabah/get');
    const response = await get.json()
    return response
}



