/* global $ */

function validateName(){
    
    var name;
    
    name = document.getElementById("username").value;

    if (name == ""){
        alert("Please Enter a Valid Name.");
    }
    else if (!name.match(/^[a-zA-Z]+$/)){
        alert('Letters only allowed.');
    }
    else{
        validateEmail();
    }

}

function validateEmail(){
    
    var email;
    
    email = document.getElementById("useremail").value;
    
    if (email == ""){
        alert("Please Enter a valid Email Address.")
    }
    else if (validateInputEmail(email) == false){
        alert("Please enter a valid Email Address");
    }
    else{
        validatePin();
    }
}

function validatePin(){
    
var pin;
    
    pin = document.getElementById("userpin").value;
    
    if (pin == ""){
        alert("Please enter your PIN.");
    }
    else if (pin.length < 4){
        alert("Your PIN must be 4 digits, no other characters permitted.");
    }
    else{
        enablebtnPurchase()
    }
}

function validateInputEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
    }
    
function enablebtnPurchase(){
    
    $('#btnPurchase').prop('disabled', false);
    }
    
function disablebtnPurchase() {
    
    $('#btnPurchase').prop('disabled', true);
    }