<?php


class PaymentInfoDB{
    private $pdo = null;
    private static $baseSQL = "SELECT BillingFName, BillingLName,
                BillingStreetAddress, BillingCityAddress,
                BillingStateAddress, BillingZipAddress,
                BillingCountryAddress, CreditCardNumber,
                CreditCardExpiration, CreditCardCVV FROM paymentinfo ";


    public function __construct($connection){
        $this->pdo = $connection;
    }

    public function createPaymentInfo($UserID, $fName,
			                     $lName,
			                     $address,
			                     $city,
			                     $state,
                                 $zipCode,
                                 $country,
                                 $ccNumber,
                                 $ccExpireYear,
                                 $ccExpireMonth,
                                 $ccCvv){

            $sql = "INSERT INTO paymentinfo (UserID_FK, BillingFName, BillingLName,
                        BillingStreetAddress, BillingCityAddress,
                        BillingStateAddress, BillingZipAddress,
                        BillingCountryAddress, CreditCardNumber,
                        CreditCardExpiration, CreditCardCVV)
                    Values (:UserID, :BillingFName, :BillingLName,
                        :BillingStreetAddress, :BillingCityAddress,
                        :BillingStateAddress, :BillingZipAddress,
                        :BillingCountryAddress, :CreditCardNumber,
                        :CreditCardExpiration, :CreditCardCVV)";

            try{
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(':UserID', $UserID);
                $stmt->bindValue(':BillingFName', $fName);
                $stmt->bindValue(':BillingLName', $lName);
                $stmt->bindValue(':BillingStreetAddress', $address);
                $stmt->bindValue(':BillingCityAddress', $city);
                $stmt->bindValue(':BillingStateAddress', $state);
                $stmt->bindValue(':BillingZipAddress', $zipCode);
                $stmt->bindValue(':BillingCountryAddress', $country);
                $stmt->bindValue(':CreditCardNumber', $ccNumber);
                $stmt->bindValue(':CreditCardExpiration', Date("MM/YYYY", strtotime($ccExpireMonth .'/0/' . $ccExpireYear)));
                $stmt->bindValue(':CreditCardCVV', $ccNumber);

                $stmt->execute();
                echo "in PaymentInfoDB executed <br>";
            }catch (PDOException $e) {
                echo "Error: " . $e.getMessage() ;
            }catch (Exception $e){
                echo "Error: " . $e.getMessage();
            }

    }



}

 ?>
