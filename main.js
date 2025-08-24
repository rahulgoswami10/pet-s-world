const nameValid = () => {
    var name = document.getElementById("name").value;
    var nameRegex = /^[A-Z a-z]{3,30}$/;

    if (nameRegex.test(name)) {
        document.getElementById("errorName").innerHTML = "";
        document.getElementById("btn").disabled = false;
    } else {
        document.getElementById("errorName").innerHTML = "*Please enter a valid name!";
        document.getElementById("btn").disabled = true;
    }
}



const ageValid = () => {
    var age = document.getElementById("age").value;

    if (age >= 18 && age <= 60) {
        document.getElementById("errorAge").innerHTML = "";
        document.getElementById("btn").disabled = false;
    } else {
        document.getElementById("errorAge").innerHTML = "*Sorry! You aren't eligible";
        document.getElementById("btn").disabled = true;
    }
}


const emailValid = () => {
    var email = document.getElementById("email").value;
    var emailRegex = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    if (emailRegex.test(email)) {
        document.getElementById("errorEmail").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorEmail").innerHTML = "*Invalid email!!!";
        document.getElementById("btn").disable = true;
    }
}



const addressValid = () => {
    var address = document.getElementById("address").value;
    var addressRegex = /^(?![ -.&,_'":?!/])(?!.*[- &_'":]$)(?!.*[-.#@&,:?!/]{2})[a-zA-Z0-9- .#@&,_'":.?!/]+$/;

    if (addressRegex.test(address)) {
        document.getElementById("errorAddress").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorAddress").innerHTML = "*Please enter a valid address";
        document.getElementById("btn").disable = true;
    }
}


const createPassValid = () => {
    var createPassword = document.getElementById('createpass').value;
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (passwordRegex.test(createPassword)) {
        document.getElementById("errorCreatePass").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorCreatePass").innerHTML = "*Password must be at least 8 characters long,<br>and include at least one uppercase letter,<br>one lowercase letter, one number,<br>and one special character";
        document.getElementById("btn").disable = true;
    }
}


const confirmPassValid = () => {
    var createPass = document.getElementById('createpass').value;
    var confirmPass = document.getElementById('confirmpass').value;

    if (createPass == confirmPass) {
        document.getElementById("errorConfirmPass").innerHTML = "";
        document.getElementById("btn").disable = false;
    } else {
        document.getElementById("errorConfirmPass").innerHTML = "*Passwords do not match.";
        document.getElementById("btn").disable = true;
    }
}