<?php
      
      echo "<br>";
      echo "- Get user information by <b>Auto instantation</b>." . "<br>";
      $found_user = User::find_users_by_id(2);
      $user = User::instantation($found_user);
  
      echo $user->id;

      ?>