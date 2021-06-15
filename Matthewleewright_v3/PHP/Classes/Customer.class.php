<?php

/**
 * Customer short summary.
 *
 * Customer description.
 * This is the Customer class where all the customer's information is instantiated.
 *
 * @version 1.0
 * @author Matthew Wright
 */
class Customer{

    // Customer Properties
    private $firstName = "";
    private $lastName = "";
    private $email = "";
    private $phoneNumber = "";

    //setters and getters
    public function setFirstName($afirstName){
        $this->firstName = $afirstName;
    }// end setFirstName
    public function getFirstName(){
        return $this->firstName;
    }// end getFirstName

    public function setLastName($alastName){
        $this->lastName = $alastName;
    }// end setLastName
    public function getLastName(){
        return $this->lastName;
    }// end getLastName

    public function setEmail($anEmail){
        $this->$anEmail = $anEmail;
    }// end setEmail
    public function getEmail(){
        return $this->email;
    }// end getEmail

    public function setPhoneNumber($aphoneNumber){
        $this->phoneNumber = $aphoneNumber;
    }// end setPhoneNumber
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }// end getPhoneNumber

    public function __construct($aFirstName, $aLastName, $anEmail, $aPhoneNumber = null){
        $this->setFirstName($aFirstName);
        $this->setLastName($aLastName);
        $this->setEmail($anEmail);
        $this->setPhoneNumber($aPhoneNumber);
    }// end parameterized constructor

    //display method for testing
    public function display(){
        echo "First Name: " . $this->getFirstName() . "<br/>";
        echo "Last Name: " . $this->getLastName()  . "<br/>";
        echo "Email: " . $this->getEmail()  . "<br/>";
        echo "Phone #: " . $this->getPhoneNumber()  . "<br/>";
    }// end display

}// end class Customer