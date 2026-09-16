document.getElementById('formAgenda').addEventListener('submit', function(event) {
let tanggal = document.getElementById('tanggal').value;
let aktivitas = document.getElementById('aktivitas').value.trim();

if (tanggal === "" || aktivitas === "") {
alert("Peringatan: Kolom Tanggal dan Aktivitas tidak boleh kosong!");
event.preventDefault(); 
}
});