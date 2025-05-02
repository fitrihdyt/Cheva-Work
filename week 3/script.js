document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    
    form.addEventListener("submit", function (event) {
        event.preventDefault();
        
        const namaLengkap = document.getElementById("nama_lengkap").value.trim();
        const email = document.getElementById("email").value.trim();
        const nomorHp = document.getElementById("nomor_hp").value.trim();
        const password = document.getElementById("password").value.trim();
        const konfirmasiPass = document.getElementById("konfirmasi_pass").value.trim();
        
        if (!namaLengkap || !email || !nomorHp || !password || !konfirmasiPass) {
            alert("Semua bidang harus diisi!");
            return;
        }
        
        if (password !== konfirmasiPass) {
            alert("Password dan konfirmasi password tidak sesuai!");
            return;
        }
        
        const userData = {
            namaLengkap,
            email,
            nomorHp,
            password, 
        };
        
        console.log("Data Pengguna Terdaftar:", userData);
        alert("Registrasi berhasil!");
        
        form.reset();
    });
});