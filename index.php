<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <style>
            #attributes .input-group-addon{
                min-width:60px;
            }
        </style>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $(document).ready(function(){
                
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="col-lg-4 col-lg-offset-4">
                <?php
                    new attribute_container;
                ?>
            </div>
        </div>
    </body>
</html>

<?php
    class attribute_container{
        protected $attributes = array('STR','CON','DEX','INT','LCK');
        
        public function __construct(){
            ?>
                <ul id="attributes" class="list-group" style="list-style-type:none;">
            <?php

            foreach($this->attributes AS $attribute){
                self::attribute_field($attribute);
            }
            
            ?>
                </ul>
            <?php
        }
        
        protected static function attribute_field($attribute){
            ?>
                <li class="attribute">
                    <div class="input-group">
                        <span class="input-group-addon"><?=$attribute?></span>
                        <input id="<?=$attribute?>" class="list-group-item form-control" type="text">
                    </div>
                </li>
            <?php
        }
    }
    
    