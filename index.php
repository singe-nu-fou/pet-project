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
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <script>
            $(document).ready(function(){
                $('#train').click(function(){
                    if($('#A').is(':visible')){
                        $('#A').slideUp();
                        $('#B').slideDown();
                        $('#train').addClass('btn-danger').removeClass('btn-default');
                    }
                    else{
                        $('#B').slideUp();
                        $('#A').slideDown();
                        $('#train').addClass('btn-default').removeClass('btn-danger');
                    }
                });
            });
        </script>
        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="col-lg-3">
                <div class="row">
                </div>
                <div class="row">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <button type="button" class="btn btn-default form-control" data-toggle="modal" data-target="#itemModal">Items</button>
                            <button type="button" class="btn btn-default form-control" id="train">Train</button>
                            <button type="button" class="btn btn-default form-control">Sleep</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="col-lg-12" id="A" style="height:60vh;background-color:green;">
                </div>
                <div class="col-lg-12" id="B" style="height:60vh;background-color:red;display:none;">
                </div>
            </div>
        </div>
        <div class="modal fade" id="itemModal" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body" style="height:60vh;overflow-y:auto;">
                        <ul class="list-group">
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                            <li class="list-group-item">Placeholder</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success pull-right">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    