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
            
        $query2 = "select * from messages where incomming_id = :incomming_id and outgoing_id = :outgoing_id order by data desc"; 
        $stmt2 = $db->prepare($query2);
        $stmt2->bindValue(':incomming_id', $usrs['unique_id']);
        $stmt2->bindValue(':outgoing_id', $_SESSION['unique_id']);
        $stmt2->execute();
        $ultima_mensagem = $stmt2->fetch(PDO::FETCH_ASSOC);

            if(!($usrs['unique_id'] == $_SESSION['unique_id'])){
                if($usrs['status'] == 'Online'){
                    $retorno .= "
                                <a href='chat.php?id=".$usrs['unique_id']."'>
                                    <div class='content'>
                                        <img src='php/images/".$usrs['image']."' alt=''>
                                        <div class='details'>
                                            <span>".$usrs['fname'].' '.$usrs['lname']."</span>
                                            <p>{$ultima_mensagem['msg']}</p>
                                        </div>
                                    </div>
                                    <div class='status-dot'><i class='fas fa-circle'></i></div>
                                </a>";
                }
         }
    }

    /* OFFLINE */
    foreach($users as $usrs){

        $query2 = "select * from messages where incomming_id = :incomming_id and outgoing_id = :outgoing_id order by data desc"; 
        $stmt2 = $db->prepare($query2);
        $stmt2->bindValue(':incomming_id', $usrs['unique_id']);
        $stmt2->bindValue(':outgoing_id', $_SESSION['unique_id']);
        $stmt2->execute();
        $ultima_mensagem = $stmt2->fetch(PDO::FETCH_ASSOC);


        if(!($usrs['unique_id'] == $_SESSION['unique_id'])){
            
            if($usrs['status'] == 'Off'){
                $retorno .= "
                            <a href='chat.php?id=".$usrs['unique_id']."'>
                                <div class='content'>
                                    <img src='php/images/".$usrs['image']."' alt=''>
                                    <div class='details'>
                                        <span>".$usrs['fname'].' '.$usrs['lname']."</span>
                                        <p>{$ultima_mensagem['msg']}</p>
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