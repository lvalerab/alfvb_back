<?php
    class response {

        private $_HEADERS=[];
        private $_ENVELOP="";

        function __construct() {
            $this->_HEADERS['Cache-control']="no-cache, must-revalidate";
            $this->_HEADERS['Expires']="Sat, 26 Jul 1997 00:00:00 GMT";
        }

        function SetType(mime="text/json",charset="utf8") {
            $_HEADERS['Content-type']=mime;
            $_HEADERS['']
        }

        function __destruct() {

        }
    }
?>