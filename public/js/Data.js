const idpenerimaan = 'INV' + makeid(12)
const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value
const addPenerimaan = document.getElementById('add')
const add = document.getElementById('global')

add.addEventListener('click', async () => {
    const nama_gabah = document.getElementById('nama').value
    const kode = idpenerimaan.toUpperCase()

    try {
        add.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Loading'
        await insertData(`${url_origin}/gabah/add`, 'POST', { nama: nama_gabah, kode: kode }, { 
            'Content-Type': 'application/json',
            'X-CSRF-Token' : token
        })
    } catch (error) {
        add.innerHTML = 'error'
        setTimeout(() => {
            add.innerHTML = 'input'
        }, 5000)
    } finally {
        await gabahGlobal()
        add.innerHTML = 'success'
        setTimeout(() => {
            add.innerHTML = 'input'
        }, 2000)
        document.getElementById('nama').value = ''
    }
})

addPenerimaan.addEventListener('click', async () => {
    const berat = document.getElementById('berat').value
    const bayar = document.getElementById('bayar').value
    const id = document.getElementById('kodepenerimaan').value

    try {
        addPenerimaan.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Loading'
        await insertData(`${url_origin}/detail/invoice`, 'POST', {
            berat: berat, bayar: bayar, kode_penerimaan: id
        }, {
            'Content-Type': 'application/json',
            'X-CSRF-Token': token
        })
    } catch (error) {
        addPenerimaan.innerHTML = 'error'
        setTimeout(() => {
            addPenerimaan.innerHTML = 'input'
        }, 5000)
    }finally{
        addPenerimaan.innerHTML = 'success'
        setTimeout(() => {
            addPenerimaan.innerHTML = 'input'
        }, 2000)
        clearForm()
    }

})

function clearForm() {
    document.getElementById('berat').value = ''
    document.getElementById('bayar').value = ''
    document.getElementById('kode').value = ''
}

async function gabahGlobal() {
    const data = await getGabah()
    displayData(data.data)
}

function formatRupiah(angka, prefix) {
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    // tambahkan titik jika yang di input sudah menjadi angka ribuan
    if (ribuan) {
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
                    <a><button id="modal" onClick="getmodal('${data.kode_penerimaan}')"
                            class="button" value="${data.kode_penerimaan}">Tambah</button></a>
                    <a><button class="button">Detail</button></a>
                    <a><button class="button" onClick="getmodal2('${data.kode_penerimaan}')">kering</button></a>
                </td>
            </tr>`

}

function getmodal(kode) {
    document.getElementById('id01').style.display = 'block'
    document.getElementById('kodepenerimaan').value = kode
}

function getmodal2(kode) {
    document.getElementById('id02').style.display = 'block'
    document.getElementById('kodepenerimaan').value = kode
}
function getmodal3() {
    document.getElementById('id03').style.display = 'block'
}

gabahGlobal()

function makeid(length) {
    var result = []
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'
    var charactersLength = characters.length
    for (var i = 0; i < length; i++) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)))
    }
    return result.join('')
}

async function insertData(url, method, body, headers) {
    const process = await fetch(url, {
        method: method,
        body: JSON.stringify(body),
        headers: headers
    })
    const result = await process.json()
    return result
}

async function getGabah() {
    const get = await fetch('/gabah/get');
    const response = await get.json()
    return response
}



