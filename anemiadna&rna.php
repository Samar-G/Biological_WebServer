<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <title>Project Title</title>
  <link rel="stylesheet" href="style2.css" />
</head>

<body id="login">
  <div id="coat2">
    <form action="processdone.php" name="seq" target="_blank" method="post">
      <br />
      <br />
      <br />
      <h1 style="
            color: white;
            background-color: rgb(217, 74, 127);
            align-items: flex-start;
          ">
        Adding to Table
      </h1>
      <fieldset>
        <legend>Add to Table </legend>
        <table>
          <tr>
            <td>
              <input type="text" placeholder="Enter Sequence" name="sequence" />
            </td>
            <td>
              <input type="text" placeholder="Enter GeneSymbol" name="genesymbol" style="width:210px;"required />
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" placeholder="Enter Type" name="type" />
            </td>
            <td>
              <input list='genename' name="genetype" placeholder="Select Gene Type" style="width:210px;">
              <datalist id="genename">
                <option value="DNA"></option>
                <option value="RNA"></option>
              </datalist>
            </td>
          </tr>

        </table>
        <center>
        <button class="btn" type="submit" name="add" style="width:150px;margin-right:40px " >ADD</button>
        </center>
      </fieldset>
      <?php if (isset($_GET['error3'])) { ?>

        <p class="error3" style="text-align: center; background: rgb(217, 74, 127);; 
        padding: 10px; 
        font-weight: bold; 
        width: 50%; margin: auto; text-align: center; 
        border-radius: 5px;"><?php echo $_GET['error3']; ?></p>

      <?php } ?>
    </form>
  </div>
</body>

</html>