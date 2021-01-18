<?php 
session_start();
include('db.php');

if (isset($_REQUEST['send_message'])) { 
    extract($_REQUEST);

    if ($db->Insert("messages","name='$s_name',phone_number='$s_p_number',email='$s_email',message='$message'")) {

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
       <!--  -->

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
    <script>
        (function () {
            angular.module('app', []).constant('config', {
                dataUri: ""
            });
        })();
    </script>
    <script src="Scripts/JQuery6edb?v=E0t_Cb0RIlCpbC7YL_I_ifyKzB7NwKPM15EMpV278no1"></script>
    <script src="Scripts/Validation-en1caa?v=vQOQOEaGKQ0_OTb2Bqc9MM4kX18XrM4_zx-uM4uv9BA1"></script>
    <script src="Scripts/Jsee33?v=Lbmg0CB2aYfCVcXuYp2y7pq7nE9GLLABrvhiIRsrIJk1"></script>
    <link href="css/select2.min.css" rel="stylesheet" />
    <script src="js/select2.min.js"></script>
    <script type="text/javascript">
        enableChaser = 0; //disable chaser
    </script>

    
    <!-- Modal For Registration -->
    <script src="js/api.js" async defer></script>

    



<!-- login -->



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
