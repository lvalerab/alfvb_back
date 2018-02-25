<?php
    class apiController {

        private $_request;
        private $_response;
        private $_injects;

        /**
         * Constructor básico que obtiene un request
         */
        public function __construct($request) {
            $this->_request=$request;
            $this->_response=$response;
        }

        /**
         * Establece la inyección de dependecias del objeto
         */
        public function SetInjects($injects) {
            $this->_injects=$injects;
        }

        /**
         * Imprime el response seteado (Se debe sobreescribir)
         */
        public function Response() {

        }
    }
?>