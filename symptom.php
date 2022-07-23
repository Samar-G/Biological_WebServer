<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <title>Project Title</title>
    <link rel="stylesheet" href="style2.css" type="text/css" />
  </head>
  <body id="login">
    <div id="coat2">
      <form action="processdone.php" name="seq" target="_blank" method="post">
        <br />
        <br />
        <br />
        <h1
          style="
            color: white;
            background-color: rgb(217, 74, 127);
            align-items: flex-start;
          "
        >
          Adding to Table 
        </h1>
        <fieldset>
            <legend>Add to Table </legend>
            <table>
            <tr>
              <td>
                <input type="text" placeholder="Enter Symptom" name="symptom" />
              </td>
              <td>
              <input type="text" placeholder="Enter type" name="type"/>
              </td>
            </tr>
            <tr>
              <td>
                <input type="text" placeholder="Enter AgeGroup" name="agegroup" />
              </td>
            </tr>

          </table>
          <center>
          <button class="btn" type="submit" name="Symp" style="width:30%">ADD</button>
          </center>
          
        </fieldset>
      </form>
    </div>
  </body>
</html>
