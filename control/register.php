<?php
if (isset ($_POST['submit'])) {
  //$name = $_POST['answer'];
            $q1 =  $_POST['q1'];
            $q2 = $_POST['q2'];
            $q3 =  $_POST['q3'];
            $q4 =  $_POST['q4'];
            $q5 =  $_POST['q5'];
            $q6 =  $_POST['q6'];
            $q7 =  $_POST['q7'];
            $q8 =  $_POST['q8'];
            $q9 =  $_POST['q9'];
            $q10 =  $_POST['q10'];
            $q11 =  $_POST['q11'];
            $q12 = $_POST['q12'];
            $q13 =  $_POST['q13'];
            $q14 =  $_POST['q14'];
            $q15 =  $_POST['q15'];
            $q16 =  $_POST['q16'];
            $q17 =  $_POST['q17'];
            $q18 =  $_POST['q18'];
            $q19 =  $_POST['q19'];
            $q20 =  $_POST['q20'];
            $q21 =  $_POST['q21'];
            $q22 = $_POST['q22'];
            $q23 =  $_POST['q23'];
            $q24 =  $_POST['q24'];
            $q25 =  $_POST['q25'];
            $q26 =  $_POST['q26'];
            $q27 =  $_POST['q27'];
            $q28 =  $_POST['q28'];
            $q29 =  $_POST['q29'];
            $q30 =  $_POST['q30'];
            $q31 =  $_POST['q31'];
            $q32 =  $_POST['q32'];



//condition statement for scoring:
//$question is the question that is answered item will appear
// the only answered
//first eigth answers =
            if ($q1 == "yes") {
            		$score1 = 1;} if ($q2 == "yes") {$score2 = 1;  }if ($q3 == "yes") {$score3 = 1;}
            if ($q4 == "yes") {$score4 = 1;}if ($q5 == "yes") {$score5 = 1;}
                  if ($q6 == "yes") {$score6 = 1;  }if ($q7 == "yes") {$score7 = 1;}if ($q8 == "yes") {$score8 = 1;}

            //2nd eight
            if ($q11 == "yes") {
            		$score11 = 1;} if ($q12 == "yes") {$score12 = 1;  }if ($q13 == "yes") {$score13 = 1;}
            if ($q14 == "yes") {$score14 = 1;}if ($q15 == "yes") {$score15 = 1;}
                  if ($q16 == "yes") {$score16 = 1;  }if ($q9 == "yes") {$score9 = 1;}if ($q10 == "yes") {$score10 = 1;}

            //3rd eight
            if ($q19 == "yes") {
            		$score19 = 1;} if ($q20 == "yes") {$score20 = 1;  }if ($q21 == "yes") {$score21= 1;}
            if ($q22 == "yes") {$score22 = 1;}if ($q23 == "yes") {$score23 = 1;}
                  if ($q24 == "yes") {$score24 = 1;  }if ($q17 == "yes") {$score17 = 1;}if ($q18 == "yes") {$score18 = 1;}
            //last eight

            if ($q25 == "yes") {
            		$score25 = 1;} if ($q26 == "yes") {$score26 = 1;  }if ($q27 == "yes") {$score27 = 1;}
            if ($q28 == "yes") {$score28 = 1;}if ($q29 == "yes") {$score29 = 1;}
                  if ($q30 == "yes") {$score30 = 1;  }if ($q31 == "yes") {$score31 = 1;}if ($q32 == "yes") {$score32 = 1;}

//score computation

              		$total1 =  $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8;
                  $total2 =  $score11 + $score12 + $score13 + $score14 + $score15 + $score16 + $score10 + $score9;
                  $total3 =  $score21 + $score22 + $score23 + $score24 + $score20 + $score19 + $score17 + $score18;
                  $total4 =  $score31 + $score32 + $score30 + $score29 + $score25 + $score26 + $score27 + $score28;


                       //condition
                        if (($total1 > $total2) AND ($total1 > $total3) AND ($total1 > $total4)) {
                          $type = "Reflector";
                          //echo $type;
                        }
                        else if (($total2 > $total1) AND ($total2 > $total3) AND ($total2 > $total4)){
                          $type = "Theorist";
                          //  echo $type;
                        }
                        else if (($total3 > $total1) AND ($total3 > $total2) AND ($total3 > $total4)){
                          $type = "Pragmatist";
                            //echo $type;
                        }
                        else if (($total4 > $total1) AND ($total4 > $total2) AND ($total4 > $total3)){
                          $type = "Activist";
                            //echo $type;
                        }

                        //pass pg_parameter_status

                        $id = rand(10,10000000);
                        $fname = mysqli_real_escape_string($con,$_POST['firstname']);
                        $lname = mysqli_real_escape_string($con,$_POST['lastname']);
                        $email = mysqli_real_escape_string($con,$_POST['email']);
                        $phoneno = mysqli_real_escape_string($con,$_POST['phoneno']);
                        $dob = mysqli_real_escape_string($con,$_POST['dob']);
                        $level = mysqli_real_escape_string($con,$_POST['level']);
                        $gender = mysqli_real_escape_string($con,$_POST['gender']);
                        $address = mysqli_real_escape_string($con,$_POST['address']);
                        $city = mysqli_real_escape_string($con,$_POST['city']);
                        $country = mysqli_real_escape_string($con,$_POST['country']);
                        $status = "active";

                        $filepath = 'image/';
                         //copy the file into the new path
                         copy($_FILES['upload']['tmp_name'], "".$filepath."".$_FILES['upload']['name']);
                         $picture = ("".$filepath."".$_FILES['upload']['name']);

                 $sql = " INSERT INTO user_student (student_id,firstname,lastname,email,phoneno,dob,level,gender,address,city,country,photo,type,status)

                 VALUES('$id',
                   '$fname',
                   '$lname',
                   '$email',
                   '$phoneno',
                   '$dob',
                   '$level',
                   '$gender',
                   '$address',
                   '$city',
                   '$country',
                   '$picture',
                   '$type',
                   '$status')";
                $query = mysqli_query($con,$sql);
                if ($query){
                  echo "succcesful";
                }
                else{
                  echo "not successful";
                }





  }
