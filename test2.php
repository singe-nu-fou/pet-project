<?php
    class Template{
        private $breadcrumbs = array();

        public function getBreadcrumbNavigation(){

        }
    }

    class Webpage{
        public $anchorText, $myUrl;

        public function __construct(){
            $template = new Template();
        }
    }
?>