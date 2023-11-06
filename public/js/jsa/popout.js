// File: popout.js

// Function to show the pop-up
function openDeletePopup() {
    document.getElementById('deletePopup').style.display = 'block';
  }
  
  // Function to hide the pop-up
  function closeDeletePopup() {
    document.getElementById('deletePopup').style.display = 'none';
  }
  
  // Function to cancel the delete action
  function cancelDelete() {
    document.getElementById('deletePopup').style.display = 'none';
  }
  
  // Function to confirm and delete user (add your logic here)
  function confirmDelete() {
    // Add your user deletion logic here
  
    // Then hide the pop-up
    document.getElementById('deletePopup').style.display = 'none';
  }
  
// Event listeners
document.getElementById('openDeletePopup1').addEventListener('click', openDeletePopup);
document.getElementById('openDeletePopup2').addEventListener('click', openDeletePopup);
document.getElementById('closeDeletePopup').addEventListener('click', closeDeletePopup);
document.getElementById('cancelDelete').addEventListener('click', cancelDelete);
document.getElementById('confirmDelete').addEventListener('click', confirmDelete);

  