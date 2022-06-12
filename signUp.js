function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }

  function onChange() {
    const password = document.querySelector('input[name=upassword]');
    const confirm = document.querySelector('input[name=cupassword]');
    const email = document.querySelector('input[name=uname]');
    const nickname = document.querySelector('input[name=uemail]');
    // if (confirm.value === password.value) {
    //   confirm.setCustomValidity('');
    // } else {
    //   confirm.setCustomValidity('Passwords do not match');
    // }
    re = "^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$";
    if( re.test(password) ){
      confirm.setCustomValidity('Password must be Minimum eight characters, at least one letter, one number and one special character')
    }
    else if( ! (confirm.value === password.value) ){
      confirm.setCustomValidity('Passwords do not match');
    }
    else if( !( nickname.value.match("/^\w{6,9}$/") ) ){
      confirm.setCustomValidity("Name or alias Must bhe of 6-9 charachters with no space")
    } 
    else if( !( email.value.match('/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/') ) ){
      confirm.setCustomValidity("Not a valid email")
    } 
    else {
      confirm.setCustomValidity('');
    }

  }