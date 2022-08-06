<?php
include_once("config.php");

if(!empty($_POST['email']) && !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['password'])){
   
   if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
      //Check email already exist in the database

      $query = "select * from users where email = :email";
      
      $stmt = $db->prepare($query);
      $stmt->bindValue(':email', $_POST['email']);
      $stmt->execute();

      $email_db = $stmt->fetch(PDO::FETCH_ASSOC);
      if($email_db){echo 'Existe no banco';}
      else{
         if(isset($_FILES['image'])){
            $img_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ['png', 'jpeg', 'jpg'];

            if(in_array($img_ext, $extensions)){
               $time = time();


               $new_img_name = $time.$img_name;

               if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                  $random_id = rand(time(), 1000000000);
                  $status = 'Online';

                  $query = "INSERT INTO users(unique_id, fname, lname, email, password, image, status) 
                                       VALUES ({$random_id},:first_name,:last_name,:email,:password,'{$new_img_name}','{$status}')";
      
                  $stmt = $db->prepare($query);
                  $stmt->bindValue(':first_name', $_POST['first_name']);
                  $stmt->bindValue(':last_name', $_POST['last_name']);
                  $stmt->bindValue(':email', $_POST['email']);
                  $stmt->bindValue(':password', $_POST['password']);
                  $rows = $stmt->execute();

                  if($rows){
                     $query = "select * from users where email = :email";
                     $stmt = $db->prepare($query);
                     $stmt->bindValue(':email', $_POST['email']);
                     $stmt->execute();

                     $user_db = $stmt->fetch(PDO::FETCH_ASSOC);
                     $_SESSION['unique_id'] = $user_db['unique_id'];
                     echo "success";

                  }else{
                     echo 'The insert of the data in database failed : rows-57';
                  }


               }

            }else{
               echo 'Please select an image file - jpeg, jpg or png!';
            }
         }else{
            echo 'Please select an image';
         }
      };


   }else{
      echo $_POST['email']." - Não é um email válido";
   }


}else{
   echo 'Por favor - Preencha todos os dados.';
};

?>