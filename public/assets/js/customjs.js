$(document).ready(function() {
    // Show modal when logout span is clicked
    $('#logoutBtn').on('click', function(e) {
        e.preventDefault(); // Prevent default action
        $('#logoutModal').modal('show'); // Show the modal
    });
});
