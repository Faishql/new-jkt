const tombolFilter = document.getElementById('filter')
const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value
const tgl1 = document.getElementById('tgl1').value
const tgl2 = document.getElementById('tgl2').value

tombolFilter.addEventListener('click', async () => {
    try {
        document.getElementById('list-data').innerHTML = '<div class="loader"></div>'
        await display()
    } catch(e) {
        document.getElementById('list-data').innerHTML = 'error'
    }
})

/** function get data from route **/
async function getFilter() {
    const data = await fetch(`${url_origin}/filter`, {
        body: JSON.stringify({ tgl2: tgl2, tgl1: tgl1 }),
        headers: { 'Content-Type': 'application/json', 'X-CSRF-Token': token }
    })

    return await data.json()
}

async function display() {
    let html = ''
    let no = 1
    const data = await getFilter()
    data.data.forEach(res => {
        res.length == 0 ? html += 'data not found' : html += htmldata(res, no++)
    })
    document.getElementById('list-data').innerHTML = html
}

function htmldata(res, no) {
    return `
        <tr>
            <td>${no}</td>
            <td>${res.nama_gabah}</td>
            <td>${res.total_berat} kg</td>
            <td>${formatRupiah(res.total_bayar.toString(), 'Rp.')}</td>
            <td>
                <a><button id="modal" onClick="getmodal('${res.kode_penerimaan}')"
                        class="button" value="${res.kode_penerimaan}"><img src="${url_origin}/assets/cart-add.svg"></button></a>
                <a><button class="button" onClick="getmodal4('${res.kode_penerimaan}')"><img src="${url_origin}/assets/info.svg"></button></a>
            </td>
        </tr>
    `
}