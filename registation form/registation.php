<html>
<head>
    <title>Registation form</title>
</head>

<body>
    <form action="registation_code.php" method="Post">

        <table border="1" width="40%" height="600px" align="center" bgcolor="#222222">

            <tr align="center"  bgcolor="Aquamarine">
                <th colspan="2">
                    <img src="./logo.png" alt="" style="width: 100px; height: 100px ; margin: 0 auto ; margin-bottom: -35px; ">
                    <font size="10"> Registation Form </font>
                </th>
            </tr>


            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>First Name</label></th>
                <th><input type="text" name="first_name"  placeholder="Enter Your  Last Name"></th>
            </tr>

            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>Last Name</label></th>
                <th><input type="text" name="last_name"  placeholder="Enter Your  Last Name"></th>
            </tr>

            <tr>
                <th>
                    <font color="Aquamarine"><label>Email</label></th>
                <th><input type="email" name="email" placeholder="Enter Your Email"></th>
            </tr>


            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>Mobile No.</label></th>
                <th><input type="number" name="mobile_no" placeholder="Enter Your Mobile No"></th>
            </tr>


            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>Address</label></th>
                <th><input type="text" name="address" placeholder="Enter Your Address"></th>
            </tr>
            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>Hobbies</label></th>
                <th>
                <input type="checkbox" id="music" name="hobbies[]" value="music" active="checked" >
                <label for="music" style="color: white">MUSIC</label>
                <input type="checkbox" id="dans" name="hobbies[]" value="dans">
                <label for="dans" style="color: white">DANS</label><br>
                <input type="checkbox" id="cricket" name="hobbies[]" value="cricket">
                <label for="cricket" style="color: white">CRICKET</label>
                <input type="checkbox" id="trawling" name="hobbies[]" value="trawling">
                <label for="trawling" style="color: white">TRAWLING</label><br>
            </tr>
            <tr>
                <th>
                    <font color="Aquamarine">
                        <label>Gender</label></th>
                <th>
                <input type="radio" id="male" name="gender" value="male" active="checked">
                <label for="male" style="color: white">MALE</label>
                <input type="radio" id="female" name="gender" value= "female">
                <label for="female" style="color: white">FEMALE</label><br>
                
            </tr>


            <tr align="center" bgcolor="Aquamarine">
                <th colspan="2" >
                    <input type="submit" name="submit" style="width: 150px ; height: 40px;  font-size: 16px;">
                </th>
            </tr>

        </table>
    </form>

</body>

</html>