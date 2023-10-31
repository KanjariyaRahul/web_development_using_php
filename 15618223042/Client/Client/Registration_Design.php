<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="style.css">
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      outline: none;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      background: #f2f2f2;
    }

    .contact-form {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: space-between;
      background: #fff;

    }
    .contact-form .first-container {
      display: flex;
      width: 50%;
      justify-content: center;
      align-items: center;
    }
    .contact-form .second-container {
      display: flex;
      width: 50%;
      justify-content: center;
      align-items: center;
      background-image: linear-gradient(-45deg, #7578f8d5, #501acf);
      transition: 1s ease-in-out;
      z-index: 6;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      border-top-left-radius: max(50vw, 50vh);
    }
      .container {
      position: relative;
      max-width: 700px;
      width: 80%;
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
    }

  
    .form .input-box {
      width: 100%;
      margin-top: 10px;
    }

    .form .input-box :focus {
      border: rgb(130, 106, 251)1px solid;
    }

    .input-box label {
      color: #333;
    }

    .form :where(.input-box input, .select-box) {
      position: relative;
      height: 50px;
      width: 100%;
      outline: none;
      font-size: 1rem;
      color: #707070;
      margin-top: 8px;
      border: 1px solid #ddd;
      border-radius: 6px;
      padding: 0 15px;
    }

    .input-box input:focus {
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
    }

    .form .column {
      display: flex;
      column-gap: 15px;
    }

    .form .gender-box {
      margin-top: 15px;
    }

    .gender-box h3 {
      color: #333;
      font-size: 1rem;
      font-weight: 400;
      margin-bottom: 8px;
    }

    .form :where(.gender-option, .gender) {
      display: flex;
      align-items: center;
      column-gap: 50px;
      flex-wrap: wrap;
    }

    .form .gender {
      column-gap: 5px;
    }

    .gender input {
      accent-color: rgb(130, 106, 251);
    }

    .form :where(.gender input, .gender label) {
      cursor: pointer;
    }

    .gender label {
      color: #707070;
    }

    .address :where(input, .select-box) {
      margin-top: 15px;
    }

    .select-box select {
      height: 100%;
      width: 100%;
      outline: none;
      border: none;
      color: #707070;
      font-size: 1rem;
    }

    .button {
      height: 50px;
      width: 100%;
      color: #fff;
      font-size: 1rem;
      font-weight: 400;
      margin-top: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: all 0.2s ease;
      background: rgb(130, 106, 251);
    }

    .form button:hover {
      background: rgb(88, 56, 250);
    }
    .text h2 {
    color: #fff;
    font-size: 3.5rem;
    font-weight: 800;
    margin-left: 200px;
    margin-top: 100px;
    
}

    /*Responsive*/
    
    @media screen and (max-width:800px) {
      
      .contact-form {
        height: auto;
        justify-content: center;
        width: 100%;
      }
      .contact-form .second-container{
        width: 500px;
        height: 200px;
        justify-content: center;
        border-bottom-right-radius: 0;
        border-top-left-radius: 0;
      }
      .text h2 {
        margin-right: 180px;
        font-size: 1.5rem;
        font-weight: 800;
        
      }
    }
    @media screen and (max-width:700px) {
      
      .contact-form {
        flex-direction: column-reverse;
      }
      
      .contact-form .first-container {
        width: 90%;
        margin: auto;
        padding: 20px 0;
      }
      .contact-form .second-container{
        width: 500px;
        height: 200px;
      }
      
    }
    @media screen and (max-width: 500px) {
      .contact-form {
        height: auto;
        justify-content: center;
        width: 100%;
      }
      .container{
          width: 80%;
      }
      .form .column {
        flex-wrap: wrap;
      }

      .form :where(.gender-option, .gender) {
        row-gap: 15px;
      }
      .contact-form .second-container{
        width: 375px;
        height: 200px;
        justify-content: center;
        border-bottom-right-radius: 0;
        border-top-left-radius: 0;
      }
      
      .text h2 {
        justify-content: center;
        font-size: 1.5rem;
        font-weight: 800;
        
      }
    }
  </style>
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