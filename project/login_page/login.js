function submitForm() {
    let email= document.getElementById('email');
    let password= document.getElementById('password');
  
    if(email.value=="ufarwa@gmail.com" && password.value=="Ufarwa@1234"){
        window.location.href = "./hello.php";
        return false; 
    }
    return true; 
  }