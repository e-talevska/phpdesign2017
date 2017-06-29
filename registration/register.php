<?php
session_start();
//var_dump($_SESSION);
$errors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
//remove the values from session
//we need these to be valid only request
unset($_SESSION['errors'], $_SESSION['values']);
// var_dump($errors);
?>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form method="POST" action="process_register.php" enctype="multipart/form-data">
            <div>
                <input required value="<?php echo isset($errors['username']) ? $errors['username'] : ''; ?>" type="text" name="username" placeholder="Username">
                <p class="error"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>             
            </div>
            <div>
                <input required type="password" name="password" placeholder="Password">
                <p class="error"></p>             
            </div>
            <div>
                <input required type="text" name="firstname" placeholder="First Name">
                <p class="error"></p>             
            </div>
            <div>
                <input required type="text" name="lastname" placeholder="Last Name">
                <p class="error"></p>             
            </div>
               <div>
                <input required type="date" name="dob" placeholder="Date of birth">
                <p class="error"></p>             
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone">
                <p class="error"></p>             
            </div>
            <div>
                <input required type="email" name="email" placeholder="Email">
                <p class="error"></p>             
            </div>
            <div>
                <?php $gender = isset($values['gender']) ? $values['gender'] : ''; ?>
                <select name="gender">
                    <option <?php if($gender == '') { echo ('selected = ""'); } ?> value="">Select gender</option>
                    <option <?php if($gender == 'm') { echo 'selected = ""'; } ?> value="m">Male</option>
                    <option <?php if($gender == 'f') { echo 'selected = ""'; } ?> value="f">Female</option>
                    <option <?php if($gender == 'other') { echo 'selected = ""'; } ?>value="other">Other</option>                
                </select>   
                <p class="error"></p> 
            </div>
            <div>
                <input required type="file" accept="image/*" name="profile">
                <p class="error"></p>             
            </div>
            <div>
                <button type="submit" name="register">Submit</button>
            </div>
        </form>
      <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
      <script>
          $(function(){
              $('form').validate({
                  submitHandler: function(form) {
                      event.preventDefault();
                      var formData = new FormData(form);
                      formData.append("ajax", 1);
                   $.ajax({
                       method: "POST",
                       url: "process_register.php",
                       contentType: false,
                       processData: false,
                       data: formData,
                       dataType: "json",
                       success: function(data){
                           if)data.success == true) {
                               location.href = data.location;
                           } else {
                               //console.log(data.errors);
                               var errors = Object.getOwnPropertyNames(data.errors);
                               errors.forEach(function(propertyName){
                                   $("[name='"+propertyName+"']")
                                             .next('.error')
                                             .text(data.errors[propertyName]);
                               });
                           }
                       },
                       error: function(error){
                           console.log(error);
                       }
                   });
                }
              });
          });
      </script>
    </body>
</html>