const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value

async function getData() {
    let elemen = ''
    let no = 1
    const data = await get()
    console.log(data.data.length)
    if (data.data.length == 0) { 
        document.getElementById('list-data').innerHTML = 'data not found' 
    } else {
        data.data.forEach(elements => elemen += element(no++, elements))
        document.getElementById('list-data').innerHTML = elemen
    }
}

getData()

function element(no, data) {
    return `
    <tr>
        <td>${no}</td>
        <td>${data.kode_penerimaan}</td>
        <td>${data.nama_gabah}</td>
        <td>${data.total_berat}</td>
        <td>${data.total_bayar}</td>
        <td>${data.tgl_data}</td>
    </tr>
    `
}

async function get() {
    const process = await fetch(`${url_origin}/gabah/kering/data`)
    const result = await process.json()
    return result
}

const selep = document.getElementById('selep')

selep.addEventListener('click', async () => {
    const kode = document.getElementById('kodepe').value
    const tanggal = document.getElementById('tanggal').value

    try {
        selep.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Loading'
        await fetch(`${url_origin}/gabah/giling`, {
            method: 'POST',
            body: JSON.stringify({ kode: kode, tgl: tanggal}),
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-Token': token
            }
        })
    } catch (error) {
        console.log(error)
    } finally {
        selep.innerHTML = 'input'
    }
})

function getmodal(kode) {
    document.getElementById('id02').style.display = 'block'
    document.getElementById('kodepe').value = kode
}