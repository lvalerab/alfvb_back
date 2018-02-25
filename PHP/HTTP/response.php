<?php
    class response {

        private $_HEADERS=[];
        private $_ENVELOP="";
        private $_ResponseCode=200;
        private $_ResponseText="OK";

        public function __construct() {
            //Headers por defecto            
        }

        /**
         * Establece que la respuesta no sea cacheada por los navegadores
         *
         */
        public function NoCacheHeader() {
            $this->_HEADERS['Cache-control']="no-cache, must-revalidate";
            $this->_HEADERS['Expires']="Sat, 26 Jul 1997 00:00:00 GMT";        
        }

        /**
         * Establece el tipo mime y la codificación del retorno
         * @param $mime Tipo mime
         * @param $charset Codificación del texto a devolver
         */
        public function SetType($mime="text/json",$charset="utf-8") {
            $_HEADERS['Content-type']=$mime.'; charset='.$charset;            
        }

        /**
         * Establece el código de respuesta y el texto de la respuesta
         * @param $code Código de respuesta soportado por el protocolo http
         * @param $text Texto de la respuesta
         */
        public function SetResponseCode($code,$text) {
            $this->_ResponseCode=$code;
            $this->_ResponseText=$text;
        }

        public function __destruct() {
            unset($this->_HEADERS);
        }

        
        /**
         * Imprime el resultado, almacenado en el envelop
         */
        public function GetResponse() {
            //seteamos los headers;
            foreach($this->_HEADERS as $head => $valor) {
                header($head.":".$valor);
            };
            header(isset($_SERVER['SERVER_PROTOCOL']?$_SERVER['SERVER_PROTOCOL']:"HTTP/1.0").' '.$this->_ResponseCode.' '.$this->_ResponseText);            
            echo $this->_ENVELOP;
            exit;
        }
    }
?>