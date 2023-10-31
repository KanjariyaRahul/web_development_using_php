<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="./css/style.css">
  <title>Responsive Contact Form HTML | CSS</title>
</head>
<body>
<div class="contact-form">
    <div class="first-container">
      <section class="container">
        <form action="Registration_Code.php" class="form" method="POST">

          <div class="column">
            <div class="input-box">
              <label>First Name</label>
              <input type="text" name="first_name" placeholder="Enter first name" required />
            </div>
            <div class="input-box">
              <label>Middle Name</label>
              <input type="text" name="middle_name" placeholder="Enter middle name" required />
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label>Last Name</label>
              <input type="text" name="last_name" placeholder="Enter last name" required />
            </div>

            <div class="input-box">
              <label>Email Address</label>
              <input type="email" name="email" placeholder="Enter email address" required />
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label>Phone Number</label>
              <input type="text" name="mobileno" placeholder="Enter phone number" required  pattern="+91[0-9]{10}" />
            </div>
            <div class="input-box">
              <label>Password</label>
              <input type="text" name="password" placeholder="Enter password" required />
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label>City</label>
              <input type="text" name="city" placeholder="Enter your city" required />
            </div>
            <div class="input-box">
              <label>State</label>
              <input type="text" name="state" placeholder="Enter your state" required />
            </div>
          </div>

          <div class="column">
            <div class="input-box">
              <label>Country</label>
              <input type="text" name="country" placeholder="Enter your country" required />
            </div>
            <div class="input-box">
              <label>Education</label>
              <input type="text" name="education" placeholder="Enter education" required />
            </div>
          </div>
  <div class="gender-box">
    <h3>Gender</h3>
    <div class="gender-option">
      <div class="gender">
        <input type="radio" id="male" name="gender" value="male" checked />
        <label for="check-male">male</label>
      </div>
      <div class="gender">
        <input type="radio" id="female" name="gender"  value="female"/>
        <label for="check-female">Female</label>
      </div>
      <div class="gender">
        <input type="radio" id="other" name="gender" value="other" />
        <label for="check-other">Other</label>
      </div>
    </div>
  </div>

  <input type="submit" value="Submit" name="submit" class="button" />

  </form>
  </section>
  </div>
  <div class="second-container">
    <div class="text">
      
      <h2>
        Join with us
      </h2>
    </div>
  </div>
</body>

</html>