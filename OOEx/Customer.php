<?php
  /**
   *
   */
  class Customer
  {
    private $CustomerId;
    private $CustFirstName;
    private $CustLastName;
    private $CustAddress;
    private $CustCity;
    private $CustProv;
    private $CustPostal;
    private $CustCountry;
    private $CustHomePhone;
    private $CustBusPhone;
    private $CustEmail;
    private $AgentId;
    private $CustUserId;
    private $CustPassword;
    private $unHashedPass;

    function __construct($CustomerId, $CustFirstName, $CustLastName)
    {
      $this->CustomerId = $CustomerId;
      $this->CustFirstName = $CustFirstName;
      $this->CustLastName = $CustLastName;
    }

    public function getCustomerId(){
      return $this->CustomerId;
    }
    public function setCustomerId($new){
      $this->CustomerId = $new;
    }
    public function getCustFirstName(){
      return $this->CustFirstName;
    }
    public function setCustFirstName($new){
      $this->CustFirstName = $new;
    }
    public function getCustLastName(){
      return $this->CustLastName;
    }
    public function setCustLastName($new){
      $this->CustLastName = $new;
    }
    public function getCustAddress(){
      return $this->CustAddress;
    }
    public function setCustAddress($new){
      $this->CustAddress = $new;
    }
    public function getCustCity(){
      return $this->CustCity;
    }
    public function setCustCity($new){
      $this->CustCity = $new;
    }
    public function getCustProv(){
      return $this->CustProv;
    }
    public function setCustProv($new){
      $this->CustProv = $new;
    }
    public function getCustPostal(){
      return $this->CustPostal;
    }
    public function setCustPostal($new){
      $this->CustPostal = $new;
    }
    public function getCustCountry(){
      return $this->CustCountry;
    }
    public function setCustCountry($new){
      $this->CustCountry = $new;
    }
    public function getCustHomePhone(){
      return $this->CustHomePhone;
    }
    public function setCustHomePhone($new){
      $this->CustHomePhone = $new;
    }
    public function getCustBusPhone(){
      return $this->CustBusPhone;
    }
    public function setCustBusPhone($new){
      $this->CustBusPhone = $new;
    }
    public function getCustEmail(){
      return $this->CustEmail;
    }
    public function setCustEmail($new){
      $this->CustEmail = $new;
    }
    public function getAgentId(){
      return $this->AgentId;
    }
    public function setAgentId($new){
      $this->AgentId = $new;
    }
    public function getCustUserId(){
      return $this->CustUserId;
    }
    public function setCustUserId($new){
      $this->CustUserId = $new;
    }
    public function getCustPassword(){
      return $this->CustPassword;
    }
    public function setCustPassword($new){
      $this->CustPassword = $new;
    }
    public function getunHashedPass(){
      return $this->unHashedPass;
    }
    public function setunHashedPass($new){
      $this->unHashedPass = $new;
    }
  }


?>
