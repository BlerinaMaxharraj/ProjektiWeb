<?php
class validate{
    private $_passed=false,
            $_errors=array(),
            $_db=null;

    public function __construct(){
        $this ->_db=db::getInstance();

    }

    public function check($source,$items =array()){
        foreach($items as $item => $rules){
            foreach($rules as $rule => $rule_val){
               
                $value = trim($source[$item]);
                $item = escape($item);
                if($rule==='required' && empty($value)){
                    $this->addError("$item eshte i detyruar!");
                } else if(!empty($value)){
                    switch($rule){
                        case 'min':
                            if(strlen($value) < $rule_val){
                                $this->addError("$item Duhet te jete minimum {$rule_val} karaktere");
                            }
                        break; 
                        case 'max':
                            if(strlen($value) > $rule_val){
                                $this->addError("$item Duhet te jete maximum {$rule_val} karaktere");
                            }    
                        break;
                        case 'matches':
                            if($value!=$source[$rule_val]){
                                $this ->addError("{$rule_val} Duhet te jete i njejte me $item");
                            }
                        break;
                        case 'unique':
                            $check = $this->_db->get($rule_val, array($item, '=', $value));
                            if($check->count()) {
                                $this->addError("$item egziston");

                            }
                        break;
                    }
                }
            }

        }
        if(empty($this->_errors)){
            $this->_passed=true;
        }
        return $this;
    }

    private function addError($error){
        $this->_errors[]=$error;

    }
    
    public function errors(){
        return $this->_errors;
    }
    
    public function passed(){
        return $this->_passed;
    }
}