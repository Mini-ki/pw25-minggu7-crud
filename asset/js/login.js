console.log("login.js loaded");
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('kolomLogin');
    const errorBox = document.getElementById('errorBox');
    const successIcon = document.getElementById('iconSignUpSukses');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
        
        const email = document.getElementById('emailLogin').value;
        const password = document.getElementById('passwordLogin').value;
        
        let isValid = email !== "" && password !== "";
        
        if (isValid) {
            successIcon.classList.add('show');
            setTimeout(() => {
                window.location.href = 'admin/dashboardAdmin.php';
            }, 2000); 
        } else {
            
            errorBox.classList.add('show');
            setTimeout(() => {
                errorBox.classList.remove('show');
            }, 2000); 
        }
    });
});
