<!-- footer -->
<div class="container-fluid mt-4" id="contact">
    <div class="row">
        <footer class="text-white text-center text-lg-start bg-dark text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!--Grid row-->
                <div class="row mt-4">
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">About company</h5>

                        <!-- <p>
                GET IN TOUCH

                
                
                
                Wdhowell@theafricanunion.com
                
                Scottsdale ARZ 85254
                
                FOLLOW US
              </p>

              <p>
                10632 N.
              </p>
              <p>
                Scottsdal Rd 401 ,
              </p>
              <p>
                Wdhowell@theafricanunion.com
              </p>
              <p>
                FOLLOW US
              </p> -->
                        <?php echo $about[0]->content; ?>


                        <div class="mt-4">
                            <!-- Facebook -->
                            <a type="button" class="btn btn-floating btn-primary btn-lg" href="<?php echo $social[0]->facebook; ?>"><i class="fab fa-facebook-f"></i></a>

                            <a type="button" class="btn btn-floating btn-primary btn-lg" href="<?php echo $social[0]->twitter; ?>"><i class="fab fa-twitter"></i></a>
                            <!-- Google + -->
                            <a type="button" class="btn btn-floating btn-primary btn-lg" href="<?php echo $social[0]->youtube; ?>"><i class="fab fa-youtube"></i></a>
                            <br>
                            <br>
                            <a href="https://www.paypal.com/donate/?hosted_button_id=GJJZ5DL2JSR9S" class="btn btn-floating btn-outline-warning btn-lg" target="_blank"><i class="fab fa-paypal"> </i> Donate</a>
                            <!-- Linkedin -->
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">



                        <ul class="fa-ul" style="margin-left: 1.65em;">
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-home"></i></span><span class="ms-2"><?php echo $address[0]->address; ?></span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2"><?php echo $address[0]->email; ?></span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2"><?php echo $address[0]->phone; ?></span>
                            </li>
                            <!-- <li class="mb-3">
                  <span class="fa-li"><i class="fas fa-print"></i></span><span class="ms-2">+ 01 234 567 89</span>
                </li> -->
                        </ul>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">WRITE US</h5>
                        <?php echo form_open('email'); ?>
                        <table class="table text-center text-white">
                            <tbody class="font-weight-normal">

                                <label for="email_contact" class="form-label">E-mail:</label>
                                <input type="text" class="form-control" id="email_contact" placeholder="Entrer e-mail" name="email" required>
                                <label for="objet_contact" class="form-label">Object</label>
                                <input type="text" class="form-control" id="objet_contact" placeholder="Entrer objet" name="objet" required>
                                <label for="message_contact" class="form-label">Message:</label>
                                <textarea name="content" class="form-control" id="message_contact" cols="30" rows="10" required></textarea>

                            </tbody>

                        </table>
                        <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">

                <a class="text-white" style="font-size: 13px;text-decoration:none" target="_blank" href="https://heureuxwebservice.com"> Made with <span style="color: #e25555;">&#9829;</span> THE AFRICAN UNION <?php echo date("Y"); ?> | heureuxwebservice.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>


</div>