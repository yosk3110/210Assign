<?php
/**
 *
 */
class Agent extends AnotherClass
{
  private $agentId;
  private $agtFirstName;
  private $agtLastName;
  private $agtMiddleInitial;
  private $agtPhone;
  private $agtEmail;
  private $agencyId;
  private $agtPassword;

  function __construct($newAgent)
  {
    this->agentId = $newAgent[0];
    this->agtFirstName = $newAgent[1];
    this->agtLastName = $newAgent[2];
    this->agtMiddleInitial = $newAgent[3];
    this->agtPhone = $newAgent[4];
    this->agtEmail = $newAgent[5];
    this->agencyId = $newAgent[6];
    this->agtPassword = password_hash($newAgent[7], PASSWORD_DEFAULT);
  }
  //Getters
  public function getAgentId(){
    return $this->agentId;
  }
  public function getAgtFirstName(){
    return $this->agtFirstName;
  }
  public function getAgtLastName(){
    return $this->agtLastName;
  }
  public function getAgtMiddleInitial(){
    return $this->agtMiddleInitial;
  }
  public function getAgtPhone(){
    return $this->agtPhone;
  }
  public function getAgtEmail(){
    return $this->agtEmail;
  }
  public function getAgencyId(){
    return $this->agencyId;
  }
  public function getAgtPassword(){
    return $this->agtPassword;
  }
  //Setters
  public function setAgentId($newValue){
    $this->agentId = $newValue;
  }
  public function setAgtFirstName($newValue){
    $this->agtFirstName = $newValue;
  }
  public function setAgtLastName($newValue){
    $this->agtLastName = $newValue;
  }
  public function setAgtMiddleInitial($newValue){
    $this->agtMiddleInitial = $newValue;
  }
  public function setAgtPhone($newValue){
    $this->agtPhone = $newValue;
  }
  public function setAgtEmail($newValue){
    $this->agtEmail = $newValue;
  }
  public function setAgencyId($newValue){
    $this->agencyId = $newValue;
  }
  public function setAgtPassword($newValue){
    $this->agtPassword = $newValue;
  }

  public function toString(){
    return "$this->agentId,$this->agtFirstName,$this->agtMiddleInitial,$this->agtLastName,$this->agtPhone,$this->agtEmail,$this->agencyId,$this->agtPassword"
  }
}

?>
