<pre>
<?php
    class cipher{
        public $alphabet;
        public $atbash;
        public $A1Z26;
        //public $caesar = array('X','Y','Z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W');
        
        public function __construct(){
            $this->alphabet = range('A','Z');
            $this->atbash = array_reverse($this->alphabet);
            $this->A1Z26 = array_flip($this->alphabet);
        }
        
        public function mask($code,$decode = false,$key = 'A'){
            return ($decode === false) ? ord($code) : chr($code);
        }
        
        public function A1Z26($message,$decode = false){
            $array = array();
            
            foreach((($decode === true) ? explode('|',$message) : str_split($message)) AS $code){
                switch($decode){
                    case true:
                        $code = $this->mask($code,true);
                        echo $this->alphabet[$code].'<br>';
                        if(array_key_exists(strtoupper($code),$this->alphabet)){
                            //$array[] = $this->mask($this->A1Z26[strtoupper($code)],true);
                        }
                        elseif(in_array($code,$this->alphabet)){
                            $array[] = $this->mask($this->alphabet[$code],true);
                        }
                        else{
                            $array[] = $code;
                        }
                        break;
                    case false:
                        if(in_array(strtoupper($code),$this->alphabet)){
                            $array[] = $this->mask($this->A1Z26[strtoupper($code)]);
                        }
                        elseif(array_key_exists($code,$this->alphabet)){
                            $array[] = $this->mask($this->alphabet[$code]);
                        }
                        else{
                            $array[] = $this->mask($code);
                        }
                        break;
                }
            }
            
            return implode((($decode === true) ? '' : '|'),$array);
        }
    }
    //echo (ord(strtoupper('A')) - ord('A') + 1);
    $cipher = new cipher;
    $var = $cipher->mask($cipher->A1Z26['Z']);
    echo $var.'<br>';
    echo $cipher->mask($var,true).'<br>';
    echo $cipher->alphabet[$cipher->mask($var,true)];
    //$var = $cipher->A1Z26('HI THERE!');
    //echo $cipher->A1Z26($var,true);