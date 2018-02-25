<?php
    class request {
        private $_method;
        private $_tiempo;
        private $_querystring;
        private $_path;

        
        public __construct() {
            $this->_method=$_SERVER['REQUEST_METHOD'];
            $this->_tiempo=$_SERVER['REQUEST_TIME'];
            $this->_querystring=$_SERVER['QUERY_STRING'];
            $this->_path=$_SERVER['REQUEST_URI'];
        }

        public __destruct() {
            $this->_method=null;
            $this->_tiempo=null;
            $this->_querystring=null;
            $this->_path=null;
        }
    }
?>