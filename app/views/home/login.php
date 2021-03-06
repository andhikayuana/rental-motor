<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?=$this->configMain['name'];?></title>

    <link rel="shortcut icon" href="<?=$this->uri->baseUri;?>assets/images/motor.ico">

    <!-- Bootstrap Core CSS -->
    <link href="<?=$this->uri->baseUri;?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">SI Rental Motor</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" id="frm_login" name="frm_login" method="post" action="<?=$url;?>">
                            <fieldset>
                                <div>
                                    <?=(isset($error))?'<div class="alert alert-danger" role="alert">'.$error.'</div>':'';?>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" value="1" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>