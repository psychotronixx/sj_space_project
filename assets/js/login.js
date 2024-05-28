var reg_email = document.getElementById('reg_email');
var reg_pass = document.getElementById('reg_pass');

function register(event){
    event.preventDefault();    
    
    let x = true;
    if(reg_email.value.length > 6 && reg_email.value.includes('@') && reg_email.value.includes('.')){reg_email.style.borderColor = 'white';}
    else{reg_email.style.borderColor = 'red'; x = false;}

    if(reg_pass.value.length > 6){reg_pass.style.borderColor = 'white';}
    else{reg_pass.style.borderColor = 'red'; x = false;}

    if(!x){
        setTimeout(err, 10);
    }
}

function err(){
    alert('Wrong Input');
}