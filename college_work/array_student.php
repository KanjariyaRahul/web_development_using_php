<?php
 
 $student = [ ["RollNo" => 1,
                         "Name" => "rahul",
                        "Email" => "test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 2,
                         "Name" => "jay",
                        "Email" => "2test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 3,
                         "Name" => "abhay",
                        "Email" => "3test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 4,
                         "Name" => "hardik",
                        "Email" => "4test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 5,
                         "Name" => "paras",
                        "Email" => "5test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 6,
                         "Name" => "mehul",
                        "Email" => "6test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 7,
                         "Name" => "abc",
                        "Email" => "7test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 8,
                         "Name" => "rahul",
                        "Email" => "8test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 9,
                         "Name" => "rahul",
                        " Email" => "9test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 10,
                         "Name" => "rahul",
                        "Email" => "10test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 11,
                         "Name" => "rahul",
                        "Email" => "11test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 12,
                         "Name" => "rahul",
                        "Email" => "12test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 13,
                         "Name" => "rahul",
                        "Email" => "13test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 14,
                         "Name" => "rahul",
                        "Email" => "14test@test.com",
                         "Mobile" => 9265614292 ],

                    ["RollNo" => 15,
                         "Name" => "rahul",
                        "Email" => "15test@test.com",
                         "Mobile" => 1234567890 ],
 ];
  
 $arrLength = count($student);
 echo " $arrLength";
 echo "<br><br>";

 $position = 5;
 array_splice($student,$position,0 ,[["RollNo" => 16,
 "Name" => "rahul",
 "Email" => "15test@test.com",
 "Mobile" => 1234567890 ]]);

 unset ($student[15]);

foreach ($student as $res)
{
    print_r($res);
    echo "<br><br>";
}
 


                     
?>