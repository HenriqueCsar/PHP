<?php
    include_once('config.php');

    // $query = "select * from users where email = :email and password = :password";

    if(!empty($_POST['email']) && !empty($_POST['password'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $query = "select * from users where email = :email and password = :password";

            $stmt = $db->prepare($query);
            $stmt->bindValue(':email', $_POST['email']);
            $stmt->bindValue(':password', $_POST['password']);

            $stmt->execute();
            $email_db = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($email_db){
                $_SESSION['unique_id']=$email_db['unique_id'];

                
                $query = "update users set status = 'Online' where unique_id = :unique_id";
                $stmt = $db->prepare($query);
                $stmt->bindValue(':unique_id', $_SESSION['unique_id']);
                $stmt->execute();

                echo 'success';
            }else{
                echo 'A senha ou e-mail incorreto.';
            }
        }else{
            echo "'{$_POST['email']}'".' - não é um e-mail válido.';
        }
    }else{
        echo 'Por favor preencha todos os campos';
    }
?>