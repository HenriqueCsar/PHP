<?php 
    include_once('php/config.php');

    if(!isset($_SESSION['unique_id'])){
        header('Location: login.php');
    };
    $query = "select * from users where unique_id = :unique_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':unique_id', $_SESSION['unique_id']);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<? include_once('header.php'); ?>

<body> 
    <div class="wrapper">
        <section class="users">
            <header>
                <div class="content">
                    <img src="php/images/<?= $user['image']?>" alt="">
                    <div class="details">
                        <span><?=$user['fname']?> <?=$user['lname']?></span>
                        <p><?=$user['status']?></p>
                    </div>

                </div>
                <a href="php/logout.php" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input type="text" placeholder="Enter name to search...">
                <button><i class="fas fa-search"></i></button>
                </span>
            </div>
            <div class="users-list">
                
            </div>
            
        </section>
    </div>

</body>
<script src="javascript/users.js"></script>

</html>