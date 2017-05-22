<!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->

<!--<script src="js/jqBootstrapValidation.js"></script> -->
    <script src="js/contact_me.js"></script>

<?php 
    $phpSelf = $_SERVER['PHP_SELF'];
    $phpSelfElements = explode('/', $phpSelf);
 
    // var_dump($phpSelfElements);

    if ( $phpSelfElements [ count ($phpSelfElements) -1 ] == 'index.php' ){ 
?> 
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script> 
    
<?php } ?>
</body>

</html>