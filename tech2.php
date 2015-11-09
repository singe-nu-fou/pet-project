<?php
    class Template{
        private $breadcrumbs = array();

        public function getBreadcrumbNavigation(){

        }
    }

    class Webpage extends Template{
        public $anchorText, $myUrl;

        public function __construct(){
            $this->getBreadcrumbNavigation();
        }
    }
?>