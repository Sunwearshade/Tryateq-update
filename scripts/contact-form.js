document.getElementById("contact-form").addEventListener("submit", function (event) {
    event.preventDefault(); 
    
    document.getElementById("contact-form").style.display = "none";

    document.getElementById("success-message").classList.remove("hidden");
});
