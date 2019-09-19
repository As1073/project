<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
		<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/animate.js"></script>
        <script type="text/javascript" src="js/logic.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link href="css/animate.css" rel="stylesheet" />
    	<link href="css/font-awesome.min.css" rel="stylesheet" />
		<script type="text/javascript" >
			$(document).ready(function(e) {
				
				//to open forget password model on click of click here link
                $("#forgotPwd").click(function(){
					$("#loginForm").modal('hide');
				});
            });
		</script>
    </head>
<body>
	 <nav class="navbar navbar-inverse" style="border: 2px #a94442 solid;box-shadow:-1px -1px 20px 3px black;">
                <div class="container-fluid yy">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" style="color:#ff5722">Match Finder</a>
                </div>
        
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#" style="color:#a94442">Home</a></li>
                         <li><a href="#" style="color:#a94442" onClick="goToAbt();">About Us</a></li>
                         <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#a94442">Apply Online<span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="#" style="color:#a94442" data-toggle="modal" data-target="#applicationForm">Fill Form</a></li>
                                <li><a href="#" style="color:#a94442" data-toggle="modal" data-target="#checkStatusForm" id="chkStatus">Check Status</a></li>
                            </ul>
                        </li>
                        <li><a href="#" style="color:#a94442" onClick="goToCont();">Contact Us</a></li>
                        <li><a href="#" style="color:#a94442" data-toggle="modal" data-target="#loginForm">Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
</body>


<!------------------------------------LOGIN MODAL--------------------------------------------------->

	<div class="modal fade" id="loginForm" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header xyz">
            <button type="button" class="close" onClick="toggleFullScreen()"><span aria-hidden="true" class="glyphicon glyphicon-fullscreen"></span></button>
            <h3 class="modal-title text-info text-uppercase x">User Login</h3>
          </div>
          <div class="modal-body x yy" style="background-color:#FFC;text-align:center">               
          	<form id="loginForm">
            <div class="row">
            	<div class="col-md-8 col-md-offset-2 form-group">
                	<label for="uid">User ID</label>
                	<input type="text" name="uid" id="uid" class="form-control" placeholder="Enter UserId" onFocus="this.placeholder=''" onBlur="this.placeholder='Enter UserId'"/>
                </div>
            </div>
            <br>
            <div class="row">
            	<div class="col-md-8 col-md-offset-2 form-group">
                	<label for="pwd">Password</label>
                	<input type="password" name="pwd" id="pwd" class="form-control" placeholder="Enter Password" onFocus="this.placeholder=''" onBlur="this.placeholder='Enter Password'"/>
                </div>
            </div>
            <br>
          
            <div class="row">
            	<div class="col-md-12" style="text-align:center">
                	<p>Forgot Password?<a href="#" data-toggle="modal" data-target="#forgotPwdForm" id="forgotPwd" name="forgotPwd">Click Here</a></p>
                </div>
            </div>
            <div class="row">
            	<div class="col-md-2 col-md-offset-5">
            		<span id="load4"></span>
                </div>
           	</div> 
             </form>         
          </div>
          <div class="modal-footer x" style="text-align:center">
            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="this.form.reset();">Close</button>
            <input type="button" class="btn btn-danger" value="Login" id="login" name="login"></input>
          </div>
        
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal login Form -->


<!--------------------------------------------------FORGET PASSWORD MODAL------------------------------------------------>


<div class="modal fade" id="forgotPwdForm" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header xyz">
            <button type="button" class="close" data-dismiss="modal" onClick="this.form.reset();"                mmmmmmmmmmmmmmmm ><span aria-hidden="true" class="glyphicon glyphicon-plus-sign"></span></button>
            <h3 class="modal-title text-info text-uppercase x">Forgot Password</h3>
          </div>
          <div class="modal-body x yy" style="background-color:#FFC;text-align:center">               
          	<form id="PwdForm">
            <div class="row">
            	<div class="col-md-8 col-md-offset-2 form-group">
                	<label for="Reguid">Enter Registered User ID</label>
                	<input type="text" name="Reguid" id="Reguid" class="form-control" placeholder="Enter Username" onFocus="this.placeholder=''" onBlur="this.placeholder='Enter Username'"/>
                </div>
            </div>            
            <div class="row">
            	<div class="col-md-2 col-md-offset-5">
            		<span id="load4"></span>
                </div>
           	</div> 
            </form>         
          </div>
          <div class="modal-footer x" style="text-align:center">
            <button type="button" class="btn btn-default" data-dismiss="modal" onClick="this.form.reset();">Close</button>
            <input type="button" class="btn btn-danger" value="Send Email" id="btnEmail" name="btnEmail"></input>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal forgot Pwd Form -->
    
<!--------------------------------------------------------------------------------------------------------------------->

</html>