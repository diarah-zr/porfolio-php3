
<?php

    $hasEmpty = false;
        foreach($_POST as $value){
            if(empty($value)){
                $hasEmpty = true;
                break;

            }
        }
    

?>
<!--         # Vérifier s'il y a un champ vide
 -->