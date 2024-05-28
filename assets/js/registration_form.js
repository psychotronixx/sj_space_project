var reg_email = document.getElementById('reg_email');
var reg_pass = document.getElementById('reg_pass');
var form_name = document.getElementById('personal_data_checkbox');
var reg_checkbox = document.getElementById('reg_checkbox');

function register(event){
    event.preventDefault();    
    
    let x = true;
    if(reg_username.value.length > 2){reg_username.style.borderColor = 'white';}
    else{reg_username.style.borderColor = 'red'; x = false;}

    if(reg_email.value.length > 6 && reg_email.value.includes('@') && reg_email.value.includes('.')){reg_email.style.borderColor = 'white';}
    else{reg_email.style.borderColor = 'red'; x = false;}

    if(reg_pass.value.length > 6){reg_pass.style.borderColor = 'white';}
    else{reg_pass.style.borderColor = 'red'; x = false;}

    if(form_name.checked){reg_checkbox.style.borderColor = 'white';}
    else{reg_checkbox.style.color = 'red'; x = false;}

    if(x){
        window.location.href = './thankyou.html';
    }
    else{setTimeout(err, 10);}
}

function err(){
    alert('Wrong Input');
}