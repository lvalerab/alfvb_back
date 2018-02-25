<?php
    class routeController extends request {
        
        private $_inject=[];
        private $_routes=null;

        public function __construct($inject,$jsonRoute) {
            parent::__construct();
            $this->_inject=$inject;
            $this->_routes=json_decode($jsonRoutes,true);
        }

        public function __destruct() {
            unset($this->_inject);
            parent::__destruct();
        }

        public function Resolve() {
            if(isset($this->_routes)) {
                //Buscamos la ruta indicada
                if(isset($this->_routes[$this->_path])) {
                    if(isset($this->_routes[$this->_path]['controller'])) {
                        $controller=eval('new '.$this->_routes[$this->_path]['controller'].'()');
                        $controller->SetInjects($this->_inject);
                        $controller->Response();
                    }
                }
            } else {
                $response=new response();
                $response->NoCacheHeader();
                $response->SetResponseCode(404,"No se ha encontrado el mapa de rutas");                
                $response->GetResponse();
            }
        }
    }
?>