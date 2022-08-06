const users = document.querySelector('.users .users-list');

setInterval(()=>{
    let ajax = new XMLHttpRequest();
    ajax.open('GET', 'php/users.php', true);
    ajax.onload = ()=>{
        if(ajax.readyState === XMLHttpRequest.DONE){
            if(ajax.status === 200){
                let data = ajax.response;
                users.innerHTML = data;
            }
        }

    };
    ajax.send();
}, 500);