<?php

class Validate{
    
    private $error;
    
    public $liczError;
    
    function __construct() {
        $this->error='';
        $this->liczError=0;
    }
    
    
    function puste($ciag,$pole){
        
        if(!(trim($ciag))){
            
            $this->AddError("Field $pole must be filled.");
            $this->liczError++;
            
        }
    }
    
    
    function znakiOK($ciag,$pole){
        //sprawdzic
        if(preg_match('/^[a-zA-Z]+$/', $ciag) !=1){
            $this->AddError("$pole can be filled only with letters");
            $this->liczError++;
            
        }
        
    }
    
    function minIloscZnakow($ciag, $pole, $min){
        if(strlen(trim($ciag)) < $min){
            $this->AddError(" $pole cannot be shorter then $min numbers");
            $this->liczError++;
        }
    }
    
    function maxIloscZnakow($ciag, $pole, $max){
        if(strlen(trim($ciag)) >= $max){
            $this->AddError("Field $pole cannot be longer then $max signs");
            $this->liczError++;
        }
    }
    
    function weryfikacjaMaila($ciag,$pole){
        if(!filter_var($ciag,FILTER_VALIDATE_EMAIL)){
            
            $this->AddError("$pole is invalid");
            $this->liczError++;
        }
    }
    
    function isChecked($pole){
        $this->AddError("Please tick $pole. It's a must!");
            $this->liczError++;
    }
    
    function AddError($text){
        
        $this->error.=$text.'<br>';
            
    }
    
    function __destruct() {
        if(!empty($this->error)){
            echo '<div class="error">'.$this->error.'</div>';
    }
    
    }
    
    
    
}