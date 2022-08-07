<?php
    include_once('php/config.php');

    if(!isset($_SESSION['unique_id'])){
        header('Location: login.php');
    };


    $query = "select * from users where unique_id = :unique_id";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':unique_id', $_GET['id']);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    include_once('header.php');

?>
<body> 
    <div class="wrapper">
        <section class="chat-area">
            <header>
                <div class="back-icon"><a href="users.php" ><i class="fas fa-arrow-left"></i></a></div>
                <div class="content">
                    <img src="php/images/<?=$user['image']?>" alt="">
                    <div class="details">
                        <span><?=$user['fname']?> <?=$user['lname']?></span>
                        <p><?=$user['status']?></p>
                    </div>

                </div>
            </header>
            <div class="chat-box">
                
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="msg" placeholder="O que está pensando?">
                <input type="text" name="outgoing_id" value="<?=$_SESSION['unique_id']?>" hidden>
                <input type="text" name="incomming_id" value="<?=$user['unique_id']?>" hidden>
                <button><i class="fa-brands fa-telegram"></i></button>
            </form>
        </section>
    </div>

</body>
<script src="./javascript/chat.js"></script>
</html>