<?php
            $userfile = fopen("credentials.txt", "r");
            $x = 1;
            while(($line=fgets($userfile))!==false){
                $user = explode(",", $line);
                echo '<p class="lead" style="font-weight:bold">'. $x++." ". $user[0] .'</p>';

            }
            fclose($userfile);
            ?>