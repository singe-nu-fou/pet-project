<!DOCTYPE html>
<?php
    if(isset($_POST)){
        $to = 'nobody@example.com';
        $subject = 'the subject';
        $message = 'hello';
        $headers = array();
        $headers[] = "Content-type: text/plain; charset=iso-8859-1";
        $headers[] = "From: webmaster@example.com";
        $headers[] = "Reply-To: webmaster@example.com";
        $headers[] = "Subject: {$subject}";
        $headers[] = "X-Mailer: PHP/".phpversion();
        //mail($to, $subject, $message, $headers);
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <style>
            textarea{
                resize:none;
            }
            .row > div{
                padding-top:15px;
            }
        </style>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="col-lg-4 col-lg-offset-4">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-lg-6">
                        First Name<input type="text" name="name[first]" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        Last Name<input type="text" name="name[last]" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        Address 1<input type="text" name="address[address1]" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        Address 2<input type="text" name="address[address2]" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        City<input type="text" name="address[city]" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        State<input type="text" name="address[state]" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        Zip<input type="text" name="address[zip]" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2">
                        Phone<input type="text" name="phone[pre]" maxlength="3" class="form-control">
                    </div>
                    <div class="col-lg-2">
                        &nbsp;<input type="text" name="phone[N1]" maxlength="3" class="form-control">
                    </div>
                    <div class="col-lg-3">
                        &nbsp;<input type="text" name="phone[N2]" maxlength="4" class="form-control">
                    </div>
                    <div class="col-lg-5">
                        Budget
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input type="text" name="budget" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        How did you find out about us?<textarea name="about" class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-success pull-right">Contact Us!</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>