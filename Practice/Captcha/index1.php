<?php
function captcha()
{
	$string = "Thisisasamplestringforcaptcha12345678910";
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
            document.getElementById("captcha1").innerHTML += string[0];
            document.getElementById("captcha2").innerHTML = "";
            document.getElementById("captcha2").innerHTML += string[1];
            document.getElementById("captcha3").innerHTML = "";
            document.getElementById("captcha3").innerHTML += string[2];
            document.getElementById("captcha4").innerHTML = "";
            document.getElementById("captcha4").innerHTML += string[3];
            document.getElementById("captcha5").innerHTML = "";
            document.getElementById("captcha5").innerHTML += string[4];
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
                        <div class="col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10 col-xs-8 col-xs-offset-2 col-lg-offset-3 col-lg-6" id="captcha">
                            <div id = "indent" style="color:black;font-family:Century Gothic;font-size:2em;text-align:center;letter-spacing:15px;">
                                <p id = "captcha1" style = "margin-left:30px;-webkit-transform:rotate(25deg);-moz-transform:rotate(25deg);float:left;display:inline;"></p>
                                <p id = "captcha2" style = "-webkit-transform:rotate(-25deg);-moz-transform:rotate(-25deg);float:left;display:inline;"></p>
                                <p id = "captcha3" style = "-webkit-transform:rotate(5deg);-moz-transform:rotate(5deg);float:left;display:inline;"></p>
                                <p id = "captcha4" style = "-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);float:left;display:inline;"></p>
                                <p id = "captcha5" style = "-webkit-transform:rotate(0deg);-moz-transform:rotate(0deg);float:left;display:inline;"></p>
                            </div>
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
