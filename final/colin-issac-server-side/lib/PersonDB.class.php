<?php


class PersonDB{
    private $pdo = null;
    private static $baseSQL = "SELECT FName, LName,StreetAddress, CityAddress,
            StateAddress, ZipAddress, CountryAddress, PhoneNumber FROM person ";

    //todo

    public function __construct($connection){
        $this->pdo = $connection;
    }

    public function createPerson($UserID, $fName,
			                     $lName,
			                     $address,
			                     $city,
			                     $state,
                                 $zipCode,
                                 $country,
                                 $phone){

            $sql = "INSERT INTO person (UserID_FK, FName, LName, StreetAddress, CityAddress, StateAddress, ZipAddress, CountryAddress, PhoneNumber) Values (:UserID, :FName, :LName, :StreetAddress, :CityAddress, :StateAddress, :ZipAddress, :CountryAddress, :PhoneNumber)";

            try{
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':UserID', $UserID);
                $stmt->bindValue(':FName', $fName);
                $stmt->bindValue(':LName', $lName);
                $stmt->bindValue(':StreetAddress', $address);
                $stmt->bindValue(':CityAddress', $city);
                $stmt->bindValue(':StateAddress', $state);
                $stmt->bindValue(':ZipAddress', $zipCode);
                $stmt->bindValue(':CountryAddress', $country);
                $stmt->bindValue(':PhoneNumber', $phone);

                $stmt->execute();
            }catch (PDOException $e) {
                echo "Error: " . $e.getMessage() ;
            }catch (Exception $e){
                echo "Error: " . $e.getMessage();
            }

    }



}

 ?>
