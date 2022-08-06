<?php 
    include_once('header.php');
?>
<body> 
    <div class="wrapper">
        <section class="form signup">
            <header>CHAT Unisales 324</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">This is an error message.</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="last_name" placeholder="Last Name" required>
                    </div>
                    </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input name="email" type="text" placeholder="Enter your email" required>
                    </div>
                    <div class="field input password">
                        <label>Password</label>
                        <input id="password" name="password" type="password" placeholder="Enter your password" required>
                        <i class="fas fa-eye ative"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input name="image" type="file" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    
            </form>
            <div class="link">Already signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>

</body>
<script src="./javascript/script.js"></script>
<script src="./javascript/signup.js"></script>

</html>