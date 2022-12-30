<?php
        
    if(isset($_SESSION['mensaje'])) { ?>

        <p class='mensaje'>
            <?php 
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            ?>
        </p>
        <?php 
    }
?>