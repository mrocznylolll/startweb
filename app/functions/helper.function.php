<?php
function showStatusIcon($status){
    if($status==0){
        return "<i class='fa fa-minus' aria-hidden='true'></i>";
    }
    else{
        return "<i class='fa fa-plus' aria-hidden='true'></i>";
    }
}


function showMessage($messageType, $messageText){
    if($messageType=="succes"){
        echo '<div class="alert alert-primary" role="alert">'.$messageText."</div>";
    }
    else{
        echo '<div class="alert alert-danger" role="alert">'.$messageText."</div>";
    }
    

       
   
    
}
?>