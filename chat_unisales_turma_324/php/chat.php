<?php
    include_once('config.php');

    $query = "
    
    select * from (select * 
    from messages 
    where outgoing_id = :outgoing_id 
    and incomming_id = :incomming_id
    UNION ALL
    select * 
    from messages 
    where outgoing_id = :incomming_id
    and incomming_id = :outgoing_id 
    ) b order by data
    
    
    ";
    $stmt = $db->prepare($query);
    $stmt->bindValue(':outgoing_id', $_SESSION['unique_id']);
    $stmt->bindValue(':incomming_id', $_GET['id']);
    $retorno = "";
    $stmt->execute();

    $lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($lista as $msgs){
        if(isset($msgs['outgoing_id']) && isset($_SESSION['unique_id']) && $msgs['outgoing_id'] == $_SESSION['unique_id']){
            $retorno .= '
            <div class="chat outgoing">
                        <div class="details">
                            <p> '.$msgs['msg'].'</p>
                        </div>
                    </div>';
        }else{
            $retorno .= '
            <div class="chat incomming">
                        <div class="details">
                            <p> '.$msgs['msg'].'</p>
                        </div>
                    </div>';
        }
    }

    echo $retorno;

?>