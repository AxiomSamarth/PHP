<?php
function captcha()
{
	$string = "Thisisasamplestringforcaptcha";
	$string_shuffled = str_shuffle($string);
	return substr($string_shuffled,0,5);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sample form | Captcha</title>
	<meta charset="utf-8" />
    <link href="style.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <script src="Scripts/jquery-2.1.4.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

    <script type="text/javascript">
        function captcha()
        {
            var string = "<?php echo captcha(); ?>";
            document.getElementById("captcha1").innerHTML = "";
            document.getElementById("captcha1").innerHTML += string;
        }
        
    </script>
</head>
<body onload="captcha()">
    <div id="banner">
        <div class="container-fluid">
            <div class="jumbotron text-center">
                <h1>This is a sample captcha generation template by CrazyCoder</h1>
            </div>
        </div>
    </div>
    <div id="form">
        <div class="container">
            <h2 class="text-center">Enter the credentials</h2>
            <div class="row">
                <div class="col-sm-6">
                    <form>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" id="form-group-input" placeholder="Username">
                    </div>
                    <div class="form-group has-feedback">
                        <input type="password" class="form-control" id="form-group-input" placeholder="Password">
                    </div>
                     <div class="form-group has-feedback">
                        <input type="text" class="form-control" id="form-group-input" placeholder="Enter Captcha">
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 col-xs-4" id="captcha">
                            <p class="text-center" id="captcha1" style="text-indent:13px;color:black;font-family:Century Gothic;font-size:2em;text-align:center;letter-spacing:15px;">
                                
                            </p>
                        </div>
                    </div>
                   
                    <div class="text-center">
                        <button type="submit" class="btn btn-info text-center">Submit</button>
                        <button type="submit" class="btn btn-primary text-center" onclick="captcha();">Refresh Captcha</button>
                    
                    </div>
                    </form>
                </div>
                <div class="col-sm-6" id="address">
                    <div class="row">
                        <div class="col-lg-offset-1 col-lg-11 col-xs-offset-4 col-xs-8">
                                <h2>Address :</h2>
                                <h3>Shri S M Deyagond,</h3>
                                <h3>'Patanjali' Bldg, #42,</h3>
                                <h3>Sanmati Nagar, Kelageri Road,</h3>
                                <h3>Dharwad - 580008</h3>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
