<?php

class UsersView extends Users{

    public function showUser($name){

        $results = $this->getUser($name);
        echo "Full name: " . $results[0]['users_firstname'] . " ". $results[0]['users_lastname'];
        echo "<br>";
        echo "Birthday: " .$results[0]['users_dateofbirth'];

    }

}