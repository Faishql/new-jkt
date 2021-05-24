const URL_ORIGIN = document.getElementById("baseurl").value;
const token = document.getElementById("token").value;
const inv = "INV" + makeid(12);

const addPenjualan = () => {
    const tgl = document.querySelector("input[name=tgl]").value;
    const customer = document.querySelector("select[name=customeradd]").value;

    fetch(`${URL_ORIGIN}/penjualan/action/add`, {
        method: "post",
        body: JSON.stringify({
            tgl: tgl,
            customer: customer,
            inv: inv.toUpperCase(),
        }),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": token,
        },
    })
        .then((res) => {
            getGlobal();
        })
        .catch((err) => {});
};

// function add detail penjualan
const addDetail = () => {
    const barang = document.querySelector("select[name=barang]").value;
    const jumlah = document.querySelector("input[name=jumlah]").value;
    const tothar = document.querySelector("input[name=tothar]").value;
    const invo = document.getElementById("inv").value;
    const tgl = document.querySelector("input[name=tanggal]").value;

    fetch(`${URL_ORIGIN}/penjualan/action/addDetail`, {
        method: "post",
        body: JSON.stringify({
            barang: barang,
            customer: document.getElementById("customer").value,
            jumlah: jumlah,
            tothar: tothar,
            inv: invo,
            tgl: tgl,
        }),
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-Token": token,
        },
    })
        .then((res) => {
            getDetail(invo, document.getElementById("customer").value);
            getGlobal();
            document.getElementById("id03").style.display = "none";
        })
        .catch((err) => {});
};

// function get detail penjualan
const getDetail = async (inv, customer) => {
    document.getElementById("id01").style.display = "block";
    document.getElementById("customer").value = customer;
    document.getElementById("inv").value = inv;
    let html = "";
    const pro = await fetch(`${URL_ORIGIN}/penjualan/invoice/${inv}`);
    const data = await pro.json();
    await data.data.forEach((element) => (html += elementHtml(element)));
    document.getElementById("list-detail").innerHTML = html;
    document.getElementById("cetak").addEventListener("click", function () {
        printInv(inv);
    });
};

// function render ui detail penjualan
const elementHtml = (res) => {
    return `
    <tr>
        <td>${res.namab}</td>
        <td>${res.namac}</td>
        <td>${res.jumlah}</td>
        <td>${res.harga}</td>
    </tr> `;
};

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

const getGlobal = async () => {
    let inner = "";
    const process = await fetch(`${URL_ORIGIN}/penjualan/action/getAll`);
    const data = await process.json();
    await data.data.forEach((res) => (inner += element(res)));
    document.getElementById("list-data").innerHTML = inner;
};

const element = (res) => {
    return `
    <tr>
        <td>01</td>
        <td>${res.invoice_penjualan}</td>
        <td>${res.total_harga}</td>
        <td>${res.tanggal_penjualan}</td>
        <td>
            <button class="icons-button" id="modal" onclick="getDetail('${res.invoice_penjualan}', '${res.customer}')"><img src="${URL_ORIGIN}/assets/plus.svg" alt=""></button>
        </td>
     </tr>`;
};

const selectBarang = async () => {
    let selectorBarang = "";
    const process = await fetch(`${URL_ORIGIN}/penjualan/materi/barang`);
    const data = await process.json();
    await data.data.forEach((res) => (selectorBarang += elementBarang(res)));
    document.getElementById("barangSelect").innerHTML = selectorBarang;
};

const elementBarang = (res) => {
    return `<option value="${res.id_barang}">${res.nama}</option>`;
};

const selectCustomer = async () => {
    let selectorCustomer = `<option value="0">Umum</option>`;
    const process = await fetch(`${URL_ORIGIN}/penjualan/materi/customer`);
    const data = await process.json();
    await data.data.forEach(
        (res) => (selectorCustomer += elementCustomer(res))
    );
    document.getElementById("customerSelect").innerHTML = selectorCustomer;
};

const elementCustomer = (res) => {
    return `<option value="${res.id_customer}">${res.nama}</option>`;
};

const modalGlobal = async () => {
    document.getElementById("id02").style.display = "block";
    await selectCustomer();
};

const modalAdd = async () => {
    document.getElementById("id03").style.display = "block";
    await selectBarang();
};

const printInv = (inv) => {
    window.location.href = `${URL_ORIGIN}/penjualan/invoice/print/${inv}`;
};

getGlobal();