const form = document.querySelector('form'),
btn = document.querySelector('form button'),
chat_box = document.querySelector('.chat-box');


form.onsubmit = (e) =>{
    e.preventDefault();
}


btn.onclick = () =>{
    
    let ajax = new XMLHttpRequest();
    ajax.open('POST', 'php/insert_chat.php', true);
    ajax.onload = () =>{

        if(ajax.readyState === XMLHttpRequest.DONE){
            if(ajax.status === 200){
                data = ajax.response;
            }
        }

    };

    let formData = new FormData(form);
    ajax.send(formData);
    form[name='msg'].value = '';
};


//***ATUALIZAR MENSAGENS */

setInterval(()=>{
    let ajax = new XMLHttpRequest();
    ajax.open('GET', 'php/chat.php?id='+form[name='incomming_id'].value, true);
    ajax.onload = ()=>{
        if(ajax.readyState === XMLHttpRequest.DONE){
            if(ajax.status === 200){
                let data = ajax.response;
                chat_box.innerHTML = data;
            }
        }

    };
    ajax.send();
}, 500);