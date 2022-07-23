<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Project Title</title>
  <style>
    #h1 {
      border-radius: 15px;
      background: #f8f6f5;
      padding: 20px;
      width: 400px;
      height: 750px;
      opacity: 0.9;
      margin-right: 200px;
      /* display:flex; */
      justify-content: center;
      align-items: center;
      font-family: cursive;
    }

    #chooseform {
      margin-left: 50px;
      margin-top: 300px;
      margin-bottom: 20px;
      font-size: 50px;
      font-weight: bold;

    }

    #chooseformbtn {
      margin-left: 20px;
      display: inline;

    }

    .btn {
      outline: none;
      height: 30px;
      border: none;
      cursor: pointer;
      display: inline-block;
      margin-top: 15pt;
      margin-left: 15pt;
      text-align: center;
      background-color: rgb(217, 74, 127);
      color: #fff;
      border-radius: 10px;
      box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
      font-size: 17px;
      opacity: 0.8;
      font-family: cursive;

    }
    #login {
    background-image: url("dna2.jpg");
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-size: 1537px 950px;

    font-family: cursive;
    color: #4A4A4A;
    display:flex;
    justify-content: center;
    align-items:center;
    min-height: 100vh;
    overflow: hidden;
    margin: 0;
    padding: 0;
    }
  </style>
</head>

<body id="login">

  <div style="margin-left:170px ; padding-left: 10px;" id="h1" >
    <div id="chooseform">Choose Form</div>
    <br>
    <div id="chooseformbtn">
      <a href="Form1.php" style="text-decoration: none;">
        <button class="btn" type="button" style="width: 150px; height: 60px;"> Database </button>
      </a>
      <a href="Form2.php" style="text-decoration: none;">
        <button class="btn" type="button" style="width: 150px; height: 60px;"> Operation </button>
      </a>
    </div>


  </div>
</body>

</html>