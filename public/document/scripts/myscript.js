const modalBarang = document.getElementById("modal");
const origin = document.getElementById("baseurl").value;
const urlBarang = `${origin}/admin/barang/getup/`;

modalBarang.onclick(() => {
    const id = document.getElementById("id_barang").value;
    fetch(url + id)
        .then((res) => res.json())
        .then((res) => res.data)
        .then((res) => {
            document.getElementsByName("namabarang").value = res.nama;
            document.getElementsByName("satuan").value = res.satuan;
            document.getElementsByName("kemasan").value = res.kemasan;
            document.getElementsByName("jenis").value = res.jenis;
            document.getElementsByName("harga").value = res.hrg_jual;
        });
});
