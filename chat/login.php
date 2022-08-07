<?php 
    include_once('header.php');
?>
<body> 
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT Unisales 324</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Escreva seu e-mail" required>
                    </div>
                    <div class="field input">
                        <label>Senha</label>
                        <input id="password" name="password" type="password" placeholder="Escreva sua senha" required>
                        <i class="fas fa-eye ative"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Logar">
                    </div>
            </form>
            <div class="link">Ainda não tem cadastro? <a href="index.php">Cadastrar</a></div>
        </section>
    </div>

</body>
<script src="./javascript/script.js"></script>
<script src="./javascript/login.js"></script>
</html>