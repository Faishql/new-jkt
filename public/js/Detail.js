const url_origin = document.getElementById('baseurl').value
const token = document.getElementById('token').value

async function getData() {
    let elemen = ''
    let no = 1
    const data = await get()
    data.data.forEach(element => elemen += element(no++,element));
    document.getElementById('list-data').innerHTML = elemen
}

function element(no,data) {
    return `
    <tr>
        <td>${no}</td>
        <td>0001</td>
        <td>LK1001</td>
        <td>6Kg</td>
        <td>1%</td>
        <td>2%</td>
        <td>7Kg</td>
        <td>Rp 120.000</td>
        <td>1-1-1999</td>
    </tr>
    `
}

async function get() {
    const process = await fetch(`${url_origin}/gabah/kering/data`)
    const result = await process.json()
    return result
}