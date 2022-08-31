<?php 
    include_once('header.php');
?>
<body> 
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT Unisales 324</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nome</label>
                        <input type="text" name="first_name" placeholder="Nome" required>
                    </div>
                    <div class="field input">
                        <label>Sobrenome</label>
                        <input type="text" name="last_name" placeholder="Sobrenome" required>
                    </div>
                    </div>
                    <div class="field input">
                        <label>Email</label>
                        <input name="email" type="text" placeholder="Escreva seu e-mail" required>
                    </div>
                    <div class="field input password">
                        <label>Senha</label>
                        <input id="password" name="password" type="password" placeholder="Escreva sua senha" required>
                        <i class="fas fa-eye ative"></i>
                    </div>
                    <div class="field image">
                        <label>Selecione uma Imagem</label>
                        <input name="image" type="file" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Cadastrar conta">
                    </div>
                    
            </form>
            <div class="link">Já tem conta? <a href="login.php">Logar</a></div>
        </section>
    </div>

</body>
<script src="./javascript/script.js"></script>
<script src="./javascript/signup.js"></script>

</html>