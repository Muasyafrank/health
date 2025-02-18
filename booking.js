document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('bookingForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        const formData = new FormData(this);

        // Send an AJAX POST request to the PHP script
        fetch('process_booking.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                // Redirect to the payment page after successful submission
                window.location.href = 'payment.html';
            } else {
                alert("An error occurred while saving your details.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while submitting the form.");
        });
    });
});