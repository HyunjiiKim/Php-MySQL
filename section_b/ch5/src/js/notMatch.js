
    const pwd = document.getElementById('pwd').value;
    const pwd_c = document.getElementById('pwd_c').value;
    document.getElementById('signupForm').addEventListener('submit',function(event){
       
        console.log('Password: ',pwd);
        console.log('Confirm Password: ',pwd_c);

        if(pwd!==pwd_c){
            event.preventDefault();
            alert('Password don\'t mach');
        };
    });
