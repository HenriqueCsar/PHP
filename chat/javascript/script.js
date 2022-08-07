const PasswrdBtn = document.querySelector(".form .field #password"),
Iconeye = document.querySelector(".form .field i");

Iconeye.onclick = ()=>{
    if(PasswrdBtn.type=='password'){
        PasswrdBtn.type='text';
        Iconeye.classList.remove("ative");

    }else{
        PasswrdBtn.type='password';
        Iconeye.classList.add("ative");

    }
};