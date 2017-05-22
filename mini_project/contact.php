<?php include 'includes/header.php'; ?>
<?php 
    //if the user submitted the form
$errorEmail = '';
$errorName = $errorMessage = '';

$fullName = $phone = $email = $message = '';



    if(isset($_POST['submit'])){
        $fullName = $_POST['full_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(strlen( trim($fullName)) == 0 ){
            $errorName = "Full name is required!";
        }

         if(strlen( trim($email)) == 0 ){
            $errorEmail = "E-mail is required!";
        } else if(filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE){
            $errorEmail = "Email not valid!";
        }

         if(strlen( trim($message)) == 0 ){
            $errorMessage = "Message is required!";
        }

    //no validation errors
    //send the email

        if(empty($errorName) && empty($errorMessage) && empty($errorEmail)){
            require 'helper.php';
        
            $emailMessage = "The user $fullName with $email has sent you the following: <br><br>".$message;
            $mailSuccess = sendMail($email, $fullName, "Contact from webpage", $emailMessage);
            
            $fullName = $phone = $email = $message = '';

        }
    }



    // if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // }
?>


    <!-- Page Content -->
    <div class="container">

    <?php
        if (isset($mailSuccess)) {

            $class = ($mailSuccess['error'] == true) ? 'alert-danger' : 'alert-success';
            echo "<div class='alert $class'>{$mailSuccess['message']}</div>";
        }
    ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    3481 Melrose Place<br>Beverly Hills, CA 90210<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" method="POST" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" value="<?php echo $fullName; ?>" name="full_name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"><?php echo $errorName; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" name="phone" value="<?php echo $phone; ?>" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="email" required data-validation-required-message="Please enter your email address."><p class="help-block"><?php echo $errorEmail; ?></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" name="message" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"><?php echo $message; ?></textarea><p class="help-block"><?php if(isset($errorMessage)) {echo $errorMessage; } ?></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <?php include 'includes/footer.php'; ?>
