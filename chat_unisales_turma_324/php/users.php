<?php 
    include_once "config.php";
    $query = "select * from users";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $retorno="";

    if($stmt->rowCount()==1){
        $retorno ='Não há ninguém online no momento';
    }elseif($stmt->rowCount()>1){
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($users as $usrs){
            if(!($usrs['unique_id'] == $_SESSION['unique_id'])){
                if($usrs['status'] == 'Online'){
                    $retorno .= "
                                <a href='chat.php?id=".$usrs['unique_id']."'>
                                    <div class='content'>
                                        <img src='php/images/".$usrs['image']."' alt=''>
                                        <div class='details'>
                                            <span>".$usrs['fname'].' '.$usrs['lname']."</span>
                                            <p>How are you, dude?</p>
                                        </div>
                                    </div>
                                    <div class='status-dot'><i class='fas fa-circle'></i></div>
                                </a>";
                }
         }
    }

    /* OFFLINE */
    foreach($users as $usrs){
        if(!($usrs['unique_id'] == $_SESSION['unique_id'])){
            if($usrs['status'] == 'Off'){
                $retorno .= "
                            <a href='chat.php?id=".$usrs['unique_id']."'>
                                <div class='content'>
                                    <img src='php/images/".$usrs['image']."' alt=''>
                                    <div class='details'>
                                        <span>".$usrs['fname'].' '.$usrs['lname']."</span>
                                        <p>How are you, dude?</p>
                                    </div>
                                </div>
                                <div class='status-dot offline'><i class='fas fa-circle'></i></div>
                            </a>";
            }
     }
}
    };
    echo $retorno;
    

?>