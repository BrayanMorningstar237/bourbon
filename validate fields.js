$error_fname = false;
$error_lname = false;
 $error_num = false;
$error_email = false;
 $error_uname = false;
$error_pass = false;
     function validateName(x, y) {
         $input1 = x;
         $input2 = y;
         $letters = /[Aa-zZ]/g;
         $nums = /[0-9]/g;
      if ($input1.val().length < 1) {
             $error_lname = false;
            $input1.next().addClass("error");
         } else {
             if ($input1.val().match($letters)){
                if ($input1.val().match($nums) || $input1.val().match($letters).length < 3 ) {
                    $input1.next().addClass("error");
                    $input1.next().text("No numbers allowed and must be more than 3 letters");
                    $error_lname = false;
                } else {
                    $error_lname = true;
                    $input1.next().addClass("errorRemoval");
                    setTimeout(function() {
                        $input1.next().removeClass("error");
                        $input1.next().removeClass("errorRemoval");
                        $input1.next().text("Please enter a valid last name that has letters");
                    },500);
                }
            } else {
               $input1.next().text("Please enter a valid last name that has letters");
            }
         }
 if ($input2.val().length < 1) {
             $error_fname = false;
            $input2.next().addClass("error");
         } else {
             if ($input2.val().match($letters)){
                if ($input2.val().match($nums) || $input2.val().match($letters).length < 3 ) {
                    $input2.next().addClass("error");
                    $input2.next().text("No numbers allowed and must be more than 3 letters");
                    $error_fname = false;
                } else {
                    $error_fname = true;
                    $input2.next().addClass("errorRemoval");
                    setTimeout(function() {
                        $input2.next().removeClass("error");
                        $input2.next().removeClass("errorRemoval");
                        $input2.next().text("Please enter a valid first name that has letters");
                    },500);
                }
            } else {
               $input2.next().text("Please enter a valid first name that has letters");
            }
         }
     }
    /*For email and phone number*/

 function validate2(x,y) {
        $emailaddress = x;
       $number = y;
        $numscheck = /[0-9]/g;
       /*Check if phone number is exactly 9 digits*/
       if ($number.val().length > 0) {
      if ($number.val().match($numscheck).length < 9 || $number.val().match($numscheck).length > 9) {
          $number.next().addClass("error");
          $number.next().text("Please enter a 9 digits phone number");
           $error_num = false;
          } else {
              //number already exist check
               $.ajax({ 
                url: 'checkuser_login.php', 
				type: 'post',
				data: {'check_user_number': $number.val()},
				success: function(response){
            if (response == "no match") {
              $number.next().addClass("errorRemoval");
              setTimeout(function() {
                   $number.next().removeClass("error");
              $number.next().removeClass("errorRemoval");
              },500);
                $error_num = true;
                    } else {
                      $number.next().text("This number has already been used."); 
                    $number.next().addClass("error");
                     $error_num = false;
                    }
                }
        });
          //end number exist
              
          }
      } else {
           $number.next().addClass("error");
          $number.next().text("Please enter a phone number");
           $error_num = false;
      }
       /*Check if email is in the right format*/
       if ($emailaddress.val().length > 0) {
           
           $emailcheck = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
           if ($emailaddress.val().match($emailcheck)) {
               //CHECK EMAIL existence
               $.ajax({ 
                url: 'checkuser_login.php', 
				type: 'post',
				data: {'email': $emailaddress.val()},
				success: function(response){
                    if (response == "no match") {
         $emailaddress.next().addClass("errorRemoval");
                $error_email = true;
               setTimeout(function() {
              $emailaddress.next().removeClass("error");
            $emailaddress.next().removeClass("errorRemoval");
              },500);
                    } else {
    $emailaddress.next().text("This email is already in use."); 
    $emailaddress.next().addClass("error");
        $error_email = false;
                        
                    }
                }
        });
               //end check email existence
           } else {
               $emailaddress.next().addClass("error");
               $emailaddress.next().text("Please enter a proper email address e.g example@gmail.com");
               $error_email = false;
           }
       } else {
           $emailaddress.next().addClass("error");
          $emailaddress.next().text("Please enter an email address");
           $error_email = false;
       }
   }


/*Validation for username and password*/

    function validate4(x,y) {
        $username = x;
        $password = y;
            $letters = /[Aa-zZ]/g;
         $nums = /[0-9]/g;
      if ($username.val().length < 1) {
             $error_uname = false;
            $username.next().addClass("error");
         } else {
             if ($username.val().match($letters)){
                 if ($username.val().length > 20 || $username.val().length < 3) {
                     $username.next().addClass("error");
                    $username.next().text("Username must be between 3-20 characters");
                    $error_uname = false;
                 } else {
                if ($username.val().match($letters).length < 4 ) {
                    $username.next().addClass("error");
                    $username.next().text("Username must contain more than 3 letters");
                    $error_uname = false;
                } else {
                    
                     $.ajax({ 
                url: 'checkuserinfo.php',
				type: 'post',
				data: {'checkusername': $username.val()},
				success: function(response){
                    if(response == "true") {
                  $username.next().addClass("error");
                    $username.next().text("Username already taken...Please try another name.");
                       $error_uname = false;
                    } else {
                        $error_uname = true;
                        $username.next().addClass("errorRemoval");
                    setTimeout(function() {
                        $username.next().removeClass("error");
                        $username.next().removeClass("errorRemoval");
                        $username.next().text("Please enter a valid username that has letters");
                    },500);
                    }
                 
				}
			}); 
                    
                }
                     }
            } else {
               $username.next().text("Please enter a valid username that has letters");
            }
         }
        if ($password.val().length < 1) {
            $password.next().addClass("error");
            $error_pass = false;
        } else {
            if($password.val().match($letters)) {
                 if($password.val().match($nums)) {
                     if ($password.val().length < 8) {
                $password.next().addClass("error");
                $password.next().text("Password must be up to 8 characters");
                $error_pass = false;
                     } else {
                $error_pass = true;
                     $password.next().addClass("errorRemoval");
                    setTimeout(function() {
                        $password.next().removeClass("error");
                        $password.next().removeClass("errorRemoval");
                    },500);
                         }
            } else {
                 $password.next().addClass("error");
                $password.next().text("Password must include numbers");
                $error_pass = false;
            }
            } else {
               $password.next().addClass("error");
                $password.next().text("Password must include letters");
                $error_pass = false;
            }
           
            
        }
    }
/*validate birthday,gender,job*/
     function validateBGJ(x,y,z) {
      $bday = x;
      $gender = y;
      $job = z;
          if ($bday.val()) {
              $bday.next().addClass("errorRemoval");
               setTimeout(function() {
              $bday.next().removeClass("error");
              $bday.next().removeClass("errorRemoval");
              },500);
          } else {
              $bday.next().addClass("error");
          }
      if ($gender.val() && $gender.val() !== "Gender") {
              $gender.next().addClass("errorRemoval");
               setTimeout(function() {
              $gender.next().removeClass("error");
              $gender.next().removeClass("errorRemoval");
              },500);
          } else {
              $gender.next().addClass("error");
          }
      if ($job.val() && $job.val().length < 31) {
              $job.next().addClass("errorRemoval");
               setTimeout(function() {
              $job.next().removeClass("error");
              $job.next().removeClass("errorRemoval");
              $job.next().text("Please enter your job."); 
              },500);
          } else {
              $job.next().addClass("error");
              $job.next().text("Please enter your job.");
              if ($job.val().length > 30) {
                 $job.next().text("Maximum charaters of 30"); 
              }
              
          }
      }
/*end of validale BGJ*/