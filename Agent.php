<?php
/**
 *Agent Class. Should extend a Table class along with Customers to help generic functions be more useful
 *Constructor requires a properly formatted agent associative array
 *Will handle no agentId but I didnt bother to check for other columns so they better be there
 */
class Agent
{
  const TABLENAME = "agents";
  private $tableSize;
  private $agentId;
  private $agtFirstName;
  private $agtLastName;
  private $agtMiddleInitial;
  private $agtPhone;
  private $agtEmail;
  private $agtPosition;
  private $agencyId;
  private $agtPassword;

  function __construct($newAgent)
  {
    if(array_key_exists('AgentId', $newAgent)){
      $this->agentId = $newAgent["AgentId"];
      $this->tableSize = 9;
    }
    else {
      $this->tableSize = 8;
    }
    $this->agtFirstName = $newAgent["AgtFirstName"];
    $this->agtLastName = $newAgent["AgtLastName"];
    $this->agtMiddleInitial = $newAgent["AgtMiddleInitial"];
    $this->agtPhone = $newAgent["AgtBusPhone"];
    $this->agtEmail = $newAgent["AgtEmail"];
    $this->agtPosition = $newAgent["AgtPosition"];
    $this->agencyId = $newAgent["AgencyId"];
    $this->agtPassword = password_hash($newAgent["AgtPassword"], PASSWORD_DEFAULT);
  }
  //Getters
  public function getTableSize(){
    return $this->tableSize;
  }
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
  public function getAgtPosition(){
    return $this->agtPosition;
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
  public function setAgtPosition($newValue){
    $this->agtPosition = $newValue;
  }
  public function setAgencyId($newValue){
    $this->agencyId = $newValue;
  }
  public function setAgtPassword($newValue){
    $this->agtPassword = $newValue;
  }

  public function toString(){
    if($this->agentId == ""){
      return "$this->agtFirstName,$this->agtMiddleInitial,$this->agtLastName,$this->agtPhone,$this->agtEmail,$this->agtPosition,$this->agencyId,$this->agtPassword";
    }
    else{
      return "$this->agentId,$this->agtFirstName,$this->agtMiddleInitial,$this->agtLastName,$this->agtPhone,$this->agtEmail,$this->agtPosition,$this->agencyId,$this->agtPassword";
    }
  }
  public function colString(){
    if($this->agentId == ""){
      return "AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, AgtPassword";
    }
    else{
      return "AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, AgtPassword";
    }
  }
  public function getArray(){
    if($this->agentId == ""){
      return array(&$this->agtFirstName,&$this->agtMiddleInitial,&$this->agtLastName,&$this->agtPhone,&$this->agtEmail,&$this->agtPosition,&$this->agencyId,&$this->agtPassword);
    }
    else{
      return array(&$this->agentId,&$this->agtFirstName,&$this->agtMiddleInitial,&$this->agtLastName,&$this->agtPhone,&$this->agtEmail,&$this->agtPosition,&$this->agencyId,&$this->agtPassword);
    }
  }
}

?>
