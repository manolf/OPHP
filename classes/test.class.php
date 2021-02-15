<?php


class Test extends Dbh
{

    public function getUsers()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['users_firstname'] . '<br>';
        }
    }

    //PREPARED STATEMENTS
    public function getUsersStmt($firstname, $lastname)
    {
        $sql = "SELECT * FROM users WHERE users_firstname = ? and users_lastname = ?";
        //prepare not query
        $stmt = $this->connect()->prepare($sql);

        //saver if the ? are replaced here and not early in the sql
        $stmt->execute([$firstname, $lastname]); //has to be chronological

        $names = $stmt->fetchAll();

        foreach ($names as $name) {
            echo $name['users_dateofbirth'] . '<br>';
        }
    }

    public function setUsersStmt($firstname, $lastname, $birthday)
    {
        $sql = "INSERT INTO users (users_firstname, users_lastname, users_dateofbirth) VALUES (?, ?, ?)";

        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$firstname, $lastname, $birthday]);
    }
}
