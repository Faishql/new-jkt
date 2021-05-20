const origin = document.getElementById("baseurl").value;
const modalUser = document.getElementById("modalUser");
const urlUser = `${origin}/admin/user/`;

modalUser.onclick = function () {
    const id = this.getAttribute("data-id");
    console.log(id);
    const form = document.getElementById("editUser");
    form.action = `${origin}/user/${id}`;
    fetch(urlUser + id)
        .then((res) => res.json())
        .then((res) => res.data)
        .then((res) => {
            document.querySelector("input[name=username]").value = res.name;
            document.querySelector("input[name=email]").value = res.email;
        });
};
