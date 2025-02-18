$(document).ready(function(){

    $('.fa-bars').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });

    $(window).on('scroll load',function(){
        $('.fa-bars').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if($(Window).scrollTop()  >  30){
            $('header').addClass('header-active');
        }else{
            $('header').removeClass('header-active');
        }
    });

    
});

document.getElementById('userForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default submission

    // Create a FormData object from the form
    const formData = new FormData(this);

    // Send the form data to save_data.php using Fetch
    fetch('save_data.php', {
      method: 'POST',
      body: formData
    })
    .then(response => response.text())
    .then(data => {
      console.log(data);
      alert(data); // Show feedback to the user
    })
    .catch(error => {
      console.error('Error:', error);
      alert('An error occurred while saving data.');
    });
  });


// main.js

document.addEventListener('DOMContentLoaded', function() {
    // Map each section key to its content.
    const sectionContent = {
      ambulance: {
        title: "Ambulance Services",
        description: "When emergencies strike, every second counts. Our dedicated ambulance service is available 24/7, providing swift, reliable, and professional transportation to the nearest medical facility. Learn more about our services and how we ensure your safety."
      },
      emergency: {
        title: "Emergency Rooms",
        description: "In times of crisis, you need fast, reliable, and professional care. Our Emergency Rooms operate around the clock to provide immediate attention for a wide range of urgent health conditions."
      },
      checkups: {
        title: "Free Check-ups",
        description: "Regular checkups are essential for early detection of potential health issues. Our free check-up initiatives ensure you receive the preventive care you need at no cost."
      },
      diabetes: {
        title: "Diabetes Care",
        description: "We are dedicated to helping you manage diabetes effectively so you can lead a healthy, active life. Our experts provide personalized care and guidance to maintain your optimal health."
      },
      vaccine: {
        title: "COVID-19 Vaccine",
        description: "Our healthcare team is committed to keeping you safe with our COVID-19 vaccination program, ensuring that you stay informed and protected."
      },
      epidemic: {
        title: "Prevent Epidemic",
        description: "We are committed to protecting our community by offering essential information and services to prevent the spread of infectious diseases. Explore our strategies and initiatives here."
      }
    };
  
    // Get references to the modal elements.
    const modal = document.getElementById("modal");
    const modalTitle = document.getElementById("modalTitle");
    const modalDescription = document.getElementById("modalDescription");
    const closeModal = document.getElementById("closeModal");
  
    // Function to open the modal with specific content.
    function openModal(sectionKey) {
      const content = sectionContent[sectionKey];
      if (content) {
        modalTitle.textContent = content.title;
        modalDescription.textContent = content.description;
        modal.classList.remove("hidden");
      } else {
        console.error("No content found for section:", sectionKey);
      }
    }
  
    // Attach click events to all learn-more buttons.
    const learnMoreButtons = document.querySelectorAll(".learn-more-button");
    learnMoreButtons.forEach(function(button) {
      button.addEventListener("click", function(e) {
        e.preventDefault();
        // Support both data-section and data-section-id attributes.
        const sectionKey = button.dataset.section || button.dataset.sectionId;
        openModal(sectionKey);
      });
    });
  
    // Close modal when clicking the close button.
    closeModal.addEventListener("click", function() {
      modal.classList.add("hidden");
    });
  
    // Optional: Close modal when clicking outside the modal content.
    window.addEventListener("click", function(e) {
      if (e.target === modal) {
        modal.classList.add("hidden");
      }
    });
  });
  