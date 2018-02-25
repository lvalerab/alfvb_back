<?php
    class JSONResponse extends response {

        public function __construct() {
            parent::__construct();
            //Header por defecto
            $this->NoCacheHeader();
            $this->SetType('text/json','utf-8'); //Por defecto el type text/json
            
        }

        public function __destruct() {
            parent::__destruct();
        }

        public SetJsonTxt($text) {
            $this->_ENVELOP=$text;
        }

        public SetObject($object) {
            $this->_ENVELOPE=json_encode($object,JSON_FORCE_OBJECT);
        }

        public SetArray($array) {
            $this->_ENVELOPE=json_encode($array);
        }

    }
?>