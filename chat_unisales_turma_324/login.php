<?php 
    include_once('header.php');
?>
<body> 
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT Unisales 324</header>
            <form action="#" autocomplete="off">
                <div class="error-txt">This is an error message.</div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input id="password" name="password" type="password" placeholder="Enter your password" required>
                        <i class="fas fa-eye ative"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
            </form>
            <div class="link">Not yet signed up? <a href="index.php">Signup now</a></div>
        </section>
    </div>

</body>
<script src="./javascript/script.js"></script>
<script src="./javascript/login.js"></script>
</html>