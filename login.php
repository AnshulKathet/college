<?php
	require_once "include/header.php";
?>
    <!-- latest_coures_area_start  -->
    <div class="admission_area">
        <div class="admission_inner">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-7">
                        <div class="admission_form">
                            <h3>Login Panel</h3>
                            <form action="log.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="email" name="email"  required  placeholder="jhon@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single_input">
                                            <input type="password" name="pass" required  >
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="apply_btn">
                                            <button class="boxed-btn3" type="submit">Login</button>
                                             <button class="boxed-btn3" onclick="window.location.href='reg.php'" style="float:right;">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ latest_coures_area_end -->




  <?php 
  
	require_once "include/footer.php";

?>