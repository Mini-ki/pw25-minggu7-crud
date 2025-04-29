document.getElementById('kolomSignUp').addEventListener('submit', function(submit) {
    let errorMsg = [];
    
    let firstName = document.getElementById('firstName').value.trim();
    let lastName = document.getElementById('lastName').value.trim();
    let email = document.getElementById('email').value.trim();
    let password = document.getElementById('password').value.trim();
    let confirmPassword = document.getElementById('confirmPassword').value.trim();

    let isValid = true;

    if (firstName === '') {
        document.getElementById('errorFirstName').innerText = 'First Name is required!';
        isValid = false;
    } else if (!/^[A-Za-z\s]+$/.test(firstName)) {
        document.getElementById('errorFirstName').innerText = 'Name Must Only Contain Letters!';
        isValid = false;
    }
    
    if (lastName === '') {
        document.getElementById('errorLastName').innerText = 'Last Name is required!';
        isValid = false;
    } else if (!/^[A-Za-z\s]+$/.test(lastName)) {
        document.getElementById('errorLastName').innerText = 'Name Must Only Contain Letters!';
        isValid = false;
    }

    if (email === '' || !/^\S+@\S+\.\S+$/.test(email)) {
        document.getElementById('errorEmail').innerText = 'Please Enter a Valid Email Address!';
        isValid = false;
    }

    if (password === '') {
        console.log('cek');
        document.getElementById('errorPassword').innerText = 'Password is Required!';
        isValid = false;
    } else if (!/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/.test(password)) {
        console.log('a');
        document.getElementById('errorPassword').innerText = 'Password Must be at Least 8 Characters Long and Include a Letter, a Number, a Special Character (e.g. !@#$%)';
        isValid = false;
    }

    if (confirmPassword === '' || confirmPassword !== password) {
        document.getElementById('errorConfirmPassword').innerText = 'Confirm password does not match the entered password!';
        isValid = false;
    }

    console.log(isValid);
    submit.preventDefault();
    if (isValid) {
        console.log('cek');
        document.getElementById('iconSignUpSukses').classList.add('show');
        setTimeout(() => {
            document.getElementById('kolomSignUp').submit(); 
        }, 2000);
    }

});
