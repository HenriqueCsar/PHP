const form = document.querySelector('.form form'),
continueBtn = form.querySelector(".button input"),
ErrorText = form.querySelector(".error-txt");

form.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = ()=> {
    let ajax = new XMLHttpRequest();
    ajax.open('POST', 'php/login.php', true);
    ajax.onload = ()=>{
        if(ajax.readyState === XMLHttpRequest.DONE){
            if(ajax.status === 200){
                let data = ajax.response;
                if(data=='success'){
                    location.href='users.php';
                    
                }else{
                    ErrorText.textContent = data;
                    ErrorText.style.display = 'block';
                }
            }
        }

    };
    let formdata = new FormData(form);
    ajax.send(formdata);
}