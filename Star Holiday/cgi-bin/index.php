<?php 
session_start();
include('db.php');


if (isset($_REQUEST['register'])) { 
    extract($_REQUEST);

    if ($db->Insert("registered_members","agency_name='$agency_name',email='$email',agency_logo='$agency_logo',trade_license='$trade_license',contact_person='$contact_person',cp_email='$cp_email',cp_email_2='$cp_email_2',cp_phone='$cp_phone', cp_phone_2='$cp_phone_2', office_address='$office_address', home_address='$home_address', admin_name='$admin_name', admin_email='$admin_email',password='$password' , admin_mobile='$admin_mobile',types_business='$types_business '")) {

        header("index.php");
        echo "
        <script>
        alert(\"Registration Success\");
    </script>";
    
        }
    else{       
      echo "
        <script>
        alert(\"Registration Fail\");
    </script>";
    }
}

if(isset($_REQUEST['submit'])){
    extract($_REQUEST);
    //$password=sha1($password);

if($db->getById("registered_members","*","admin_email='$admin_email' AND password='$password'")!=false){
        $info=$db->getById("registered_members","*","admin_email='$admin_email' AND password='$password'");

         $_SESSION['agency_name']=$info['agency_name'];
        $_SESSION['agency_logo']=$info['agency_logo'];
        $_SESSION['admin_name']=$info['admin_name'];
       
        $_SESSION['id']=$info['id'];
        $mysqli = new mysqli("localhost", "root", "", "star_holiday");
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        $_SESSION['avatar'] = $avatar_path;

        

        header("location:main_page/index.php");
    }
    else{
         echo "
        <script>
        alert(\"Invalid Email/Password\");
    </script>";
    
    }
}


if (isset($_REQUEST['send_message'])) { 
    extract($_REQUEST);

    if ($db->Insert("messages","name='$s_name',phone_number='$s_p_number',email='$s_email',message='$message'")) {

        header("index.php");
        echo "
        <script>
        alert(\"Message  Sent Success!\");
    </script>";
        }
    else{       
        echo "
        <script>
        alert(\"Message  Sent Fail!\");
    </script>";
    }
}

if (isset($_REQUEST['submit_forgot_password'])) { 
    extract($_REQUEST);

    if ($db->Insert("forgot_password","email='$fp_email'")) {
        
         header("index.php");
        echo "
        <script>
        alert(\"Email  Sent Success!\");
    </script>";
        }
    else{       
        echo "
        <script>
        alert(\"Email  Sent Fail!\");
    </script>";
    }
}



include('header.php');
?>
 
<!-- home section -->
    <section id="home">
            <div id="page-wrapper">
                <section id="content" class="Login-content"  >
                    <div class="container">
                        <div id="main">
                            <br>
                                <br>
                                <br>
                                <br> 
                                
                                
                                <br>
                                <br>                               
                            <div class="row" style="background: #00C7CE;padding: 20px;border-radius: 25px; opacity: 0.6; filter: alpha(opacity=60);color: #FFFFFF;font-size: 15px">
                                <?php 
                                include("bookingForm.php");
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- products section -->
        <?php 
            include('sections.php');
         ?>

        <!-- contact section -->
        <?php 
            include('contact.php');
         ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="ContactMessage" class="collapse">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
    									<input type="text" placeholder="Name" name="s_name" class="form-control" required />
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <input type='tel'  title='Phone Number (Format: +88(01)9999-9999)' placeholder="Phone Number" name="s_p_number" class="form-control" required />
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <input type="Email" placeholder="Email" name="s_email" class="form-control" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="2" name="message" placeholder="Message" required  ></textarea>
                                        </div>
                                    </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <button name="send_message">Send</button>

                                               <!--  <input type="button" name="send_message" value="Send" > --> <!-- onclick="fnSubmitEnquiryForm();" -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
        </section>
        <!-- footer -->
        <?php 
            include('footer.php');
         ?>
    </div>
    <!--angular JS-->
    <script src="js/angular.min.js"></script>
    <script src="js/moment-with-locales.min.js"></script>
    
    <script src="Scripts/JQuery6edb?v=E0t_Cb0RIlCpbC7YL_I_ifyKzB7NwKPM15EMpV278no1"></script>
    <script src="Scripts/Validation-en1caa?v=vQOQOEaGKQ0_OTb2Bqc9MM4kX18XrM4_zx-uM4uv9BA1"></script>
    <script src="Scripts/Jsee33?v=Lbmg0CB2aYfCVcXuYp2y7pq7nE9GLLABrvhiIRsrIJk1"></script>
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="js/select2.min.js"></script>
    <script type="text/javascript">
        enableChaser = 0; //disable chaser
    </script>

    <div id="Forgot_pass" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <form id="ForgotPassword">
                        <div id="dvforgotpwdmsg" style="display:none">
                        </div>
                        <div class="row" id="dvforgotpwd">
                            <form method="post" action="">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="fp_email" id="emailid" placeholder="Enter Your Email ID">
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-default" name="submit_forgot_password">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal For Registration -->
    <script src="js/api.js" async defer></script>

    <div id="Register" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal-reg-head">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Register Here</h4>
                </div>
            <div class="modal-body">

                <form action="index.php" class="login-form" id="frmregister" method="post" enctype="multipart/form-data">
                   <!--  <input name="__RequestVerificationToken" type="hidden" value=""/> --> 

                    <h4 class="soto-reg-head">Agency Information</h4>
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label>Agency Name</label>
                              <input  name="agency_name" placeholder="Agency name" minlength="6" type="text" required style="width: 100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" placeholder="Enter Your Email" minlength="6" type="email" required style="width: 100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label>Agency Logo</label>
                                <input name="agency_logo" accept="image/*" type="file" required style="width: 100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="form-group">
                                <label>Trade Licence</label>
                                <input name="trade_license" placeholder="Enter trade license" minlength="5" type="text" required  style="width: 100%"/>
                            </div>
                        </div>
                    </div>
                    
                        <h4 class="soto-reg-head">Optional Information</h4>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Contact Person</label>
                                <input  name="contact_person" placeholder="Contact person name" minlength="6" type="text" style="width: 100%"/>
                            </div>
                            <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Email Address 1</label>
                                <input name="cp_email" placeholder="Enter your email address" minlength="6" type="email" style="width: 100%"/>
                            </div>
                        </div>                     
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Email Address 2</label>
                                <input name="cp_email_2" placeholder="Enter your email address" minlength="6" type="email" style="width: 100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input name="cp_phone" placeholder="Enter Phone No" minlength="6" type='tel' title='Phone Number (Format: +88(01)9999-9999)' style="width: 100%"/>
                            </div>
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Phone number 2</label>
                                <input name="cp_phone_2" placeholder="Enter Phone No 2" type='tel' title='Phone Number (Format: +88(01)9999-9999)' minlength="6" style="width: 100%"/>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Home Address</label>
                                <input name="home_address" placeholder="Enter Home Address" minlength="6" type="textarea" style="width: 100%" />
                            </div>
                        </div> 
                        <div class="col-xs-12 col-md-4">
                            <div class="form-group">
                                <label>Office Address</label>
                                <input name="office_address" placeholder="Enter Home Address" minlength="6" type="textarea" style="width: 100%"/>
                            </div>
                        </div>                        
                        </div>
                        <h4 class="soto-reg-head">Admin Information</h4>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label>Admin Name</label>
                                    <input name="admin_name" placeholder="Enter Name" minlength="6" type="text" required  style="width: 100%"/>
                                </div>
                            </div>                            
                       
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label>Admin Email Address</label>
                                        <input name="admin_email" placeholder="Enter your email address" minlength="6" type="email" style="width: 100%"/>
                                    </div>
                                </div>
                                 </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" placeholder="Enter Password" type="password" minlength="6"  style="width: 100%"/>
                                    </div>
                                </div>  
                                <div class="col-xs-12 col-md-6">
                                    <div class="form-group">
                                        <label>Admin Mobile Number </label>
                                        <input name="admin_mobile" placeholder="Enter mobile number" type='tel' title='Phone Number (Format: +88(01)9999-9999)' minlength="6"  style="width: 100%"/>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="row">
                                 <div class="col-xs-12 col-md-12" multiple>
                                    <label>What Types of business want's to do with us? </label>
                                    <input name="types_business" value="Ticketing (online/offline)" placeholder="Enter Password" type="checkbox" />Ticketing (online/offline) <br>
                                    <input name="types_business" value="Hotel Booking" placeholder="Enter Password" type="checkbox" />Hotel Booking <br>
                                    <input name="types_business" value="Hajj" placeholder="Enter Password" type="checkbox" />Hajj <br>
                                    <input name="types_business" value="Omrah" placeholder="Enter Password" type="checkbox" />Omrah <br>
                                    <input name="types_business" value="Tourism" placeholder="Enter Password" type="checkbox" />Tourism
                                    
                                 </div>
                            </div>
                            
                            <br>
                            <!-- <button type="button" name="register" class="btn btn-default" value="REGISTER">  --><button name="register">REGISTER</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>


<!-- login -->
<div id="loginFormR" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header modal-reg-head">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Login </h4>
                </div>
            <div class="modal-body">             

                <form action="index.php" class="login-form" id="LoginForm" method="post">
                    <input data-val="true" data-val-required="The Member field is required." id="Member" name="Member" type="hidden" value="True" />
                        <div class="input-group form-group">
                            <span class="input-group-addon">
                                <span class="fa fa-user"></span>
                            </span>
                            <input class="form-control validate[required]" id="Staff_UserName" name="admin_email" placeholder="User Name/Email Address " style="width: 100% !important;" type="text" value="" />
                        </div>
                        <div class="input-group" style="margin-top:10px;">
                            <span class="input-group-addon" id="basic-addon1">
                                <span class="fa fa-lock" style="font-size:16px;"></span>
                            </span>
                            <input class="form-control validate[required]" id="Staff_Password" name="password" placeholder="Password" style="width: 100% !important;" type="password" />
                        </div>
                        <br />
                        
                        <button style="width:100%;" type="submit" class="btn btn-default " name="submit" value="Login">Login</button><br />
                        <br />                                                
                        <h4 class="hal_loginbottom">
                             <a style="cursor:pointer;" class="pull-right sotolink" data-toggle="modal" data-target="#Forgot_pass">Forgot password?</a>
                                <a style="cursor:pointer;" class="pull-left sotolink" data-toggle="modal" data-target="#Register">Register</a>
                        </h4>
                        <h4 class="hal_loginbottom" style="margin-top:0 !important;">
                                    <a class="pull-right sotolink">
                                        <span class="fa fa-phone"></span>&nbsp; +8800000000
                                    </a>
                                    <a class="pull-left sotolink">
                                        <span class="fa fa-envelope"></span>&nbsp;contact@starholiday.com
                                    </a>
                        </h4>
                </form>
            </div> 
        </div>
    </div>
</div>


    <!--Session Expire-->
    <!-- **************************Model POPUP meg********************************-->
    <!-- Modal -->
    <div id="popupfailure" class="modal fade Failure" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="color:#000 !important" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="hpopupfailure"></h4>
                </div>
            </div>
        </div>
    </div>
    <div id="popupsuccess" class="modal fade Msg" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="color:#000 !important" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="hpopsuccess"></h4>
                </div>
            </div>
        </div>
    </div>
    <!--**************************************************************************-->
</body>
</html>
