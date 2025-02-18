document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('paymentForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        const formData = new FormData(this);

        // Send an AJAX POST request to the PHP script
        fetch('process_payment.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.message === "Payment successful!") {
                alert("Payment successful! Your details have been saved."); // Confirmation popup
                this.reset(); // Reset the form
            } else {
                alert("An error occurred while processing your payment.");
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert("An error occurred while submitting the form.");
        });
    });
});