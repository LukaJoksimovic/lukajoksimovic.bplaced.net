<!DOCTYPE html>
<html lang="en">
 
    <?php
        include 'View\Components\header\header.php';
        include 'Controller/productActions.php';
    ?>

    <body>

        <?php include 'View\Components\navigation\nav.php'; ?>

        <div class="min">¨
            <!-- Section-->
        <section class="py-1">
        <div class="container">
                <div class=" text-center mt-5 ">
                    <h1> Kontaktformular</h1>
                    </div>
                        <div class="row ">
                            <div class="col-lg-7 mx-auto">
                                <div class="card mt-2 mx-auto p-4 bg-light">
                                    <div class="card-body bg-light">
                            
                                    <div class = "container">
                                        <form id="contact-form" role="form">


                                    <div class="controls">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_name">Vorname</label>
                                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_lastname">Nachname</label>
                                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_email">E-mail</label>
                                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="form_need">Please specify your need *</label>
                                                    <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                                                        <option value="" selected disabled>--Select Your Issue--</option>
                                                        <option >Request Invoice for order</option>
                                                        <option >Request order status</option>
                                                        <option >Haven't received cashback yet</option>
                                                        <option >Other</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="form_message">Message *</label>
                                                    <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                                        >
                                                    </div>

                                                </div>


                                            <div class="col-md-12">
                                                
                                                <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                                                    " value="Send Message" >
                                            
                                        </div>
                                
                                        </div>


                                </div>
                                </form>
                                </div>
                              </div>

                            </div>
                                <!-- /.8 -->
                        </div>
                        <!-- /.row-->
                </div>
            </div>
        </section>
        </div>
        
        
        <?php 
            include 'View/Components/footer/footer.php';
        ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Controller/js/scripts.js"></script>
    </body>
</html>
