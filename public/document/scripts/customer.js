const origin = document.getElementById("baseurl").value;
const urlCustomer = `${origin}/admin/customer/getup/`;
const modalCustomer = document.getElementById("modalCustomer");

modalCustomer.onclick = () => {
    const id = document.getElementById("id_customer").value;
    fetch(urlCustomer + id)
        .then((res) => res.json())
        .then((res) => res.data)
        .then((res) => {
            document.querySelector("input[name=nama]").value = res.nama;
            document.querySelector("input[name=alamat]").value = res.alamat;
            document.querySelector("input[name=no]").value = res.no_telp;
        });
};
