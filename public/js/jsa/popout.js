// Fungsi untuk menampilkan pop-up
function openDeletePopup() {
    document.getElementById('deletePopup').style.display = 'block';
  }
  
  // Fungsi untuk menyembunyikan the pop-up
  function closeDeletePopup() {
    document.getElementById('deletePopup').style.display = 'none';
  }
  
  // Fungsi untuk batalkan aksi hapus
  function cancelDelete() {
    document.getElementById('deletePopup').style.display = 'none';
  }
  
  // Fungsi untuk konfitmmasi dan hapus data
  function confirmDelete() {
    document.getElementById('deletePopup').style.display = 'none';
  }
  
// Event listeners
document.getElementById('openDeletePopup1').addEventListener('click', openDeletePopup);
document.getElementById('openDeletePopup2').addEventListener('click', openDeletePopup);
document.getElementById('closeDeletePopup').addEventListener('click', closeDeletePopup);
document.getElementById('cancelDelete').addEventListener('click', cancelDelete);
document.getElementById('confirmDelete').addEventListener('click', confirmDelete);

  