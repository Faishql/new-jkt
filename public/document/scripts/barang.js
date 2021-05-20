const modalBarang = document.getElementById("modalBarang");
const origin = document.getElementById("baseurl").value;
const urlBarang = `${origin}/admin/barang/getup/`;

modalBarang.onclick = () => {
    const id = document.getElementById("id_barang").value;
    fetch(urlBarang + id)
        .then((res) => res.json())
        .then((res) => res.data)
        .then((res) => {
            document.querySelector("input[name=namabarang]").value = res.nama;
            document.querySelector("input[name=satuan]").value = res.satuan;
            document.querySelector("input[name=kemasan]").value = res.kemasan;
            document.querySelector("input[name=jenis]").value = res.jenis;
            document.querySelector("input[name=harga]").value = res.hrg_jual;
        });
};
