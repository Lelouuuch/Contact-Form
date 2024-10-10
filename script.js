// script.js
document.getElementById('contactForm').addEventListener('submit', function(event) {
    let age = document.getElementById('age').value;
    
    if (age < 0 || age > 120) {
        alert('Please enter a valid age.');
        event.preventDefault();
    }
});
