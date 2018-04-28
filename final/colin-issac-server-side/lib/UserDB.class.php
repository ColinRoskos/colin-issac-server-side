<?php


class UserDB{
    private $pdo = null;
    private static $baseSQL = "SELECT UserID, Username, Password FROM user ";

    //todo

    public function __construct($connection){
        $this->pdo = $connection;
    }

    public function findByUserName($username)
    {
        $sql = self::$baseSQL . " WHERE Username=?";
        $statement = DatabaseHelper::runQuery($this->pdo, $sql, Array($username));
        return $statement->fetch();
    }

    public function createUser($username, $password){

            $sql = "INSERT INTO user (Username, Password) Values (:Username, :Password)";

            try{
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':Username', $username);
                $stmt->bindValue(':Password', $password);

                $stmt->execute();
            }catch (PDOException $e) {
                echo "Error: " . $e.getMessage() ;
            }

    }



}

 ?>
