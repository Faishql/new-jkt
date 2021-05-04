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
        <td><a><button class="button" onClick="getmodal('${data.kode_penerimaan}')">kering</button></a></td>
    </tr>
    `
}

async function get() {
    const process = await fetch(`${url_origin}/gabah/kering/data`)
    const result = await process.json()
    return result
}