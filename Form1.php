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
      <form action="SelectResult.php" target="_blank" method="post">
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
          Sequence Processes
        </h1>
        <fieldset>
          <legend style="color: white">Sequence Selection</legend>
          <table>
            <tr>
              <td>
                <input
                  type="text"
                  id="Seqid"
                  name = "genesymbol"
                  placeholder="Enter Gene Symbol"
                  style="width:220px;"
                  required
                />
              </td>

              <td >
                <input list="genes1" placeholder="Select Gene Type" name="genetype"style="width:220px; " />
                <datalist id="genes1">
                  <option value="DNA"></option>
                  <option value="RNA"></option>
                  </datalist>
              </td>
            </tr>
          </table>
            <button class="btn" type="submit" onclick="btton1click()" style="margin-left:150px; width:200px">
              Show
            </button>          
          <p id="click1" style="color: rgb(255, 0, 0)"></p>
        </fieldset>
      </form>
    </div>

    <div id="coat2">
      <form action="processdone.php" target="_blank" method="post">
        <fieldset>
          <legend>Adding Sequence</legend>
          
          <a href="anemiadna&rna.php" style="text-decoration: none;">
          <button class="btn" type="button" style="margin-left:40px ;width:140px">Gene</button>
          </a>
          <a href="geneinformation.php" style="text-decoration: none;">
          <button class="btn" type="button">Gene Information</button>
          </a>
          <a href="symptom.php" style="text-decoration: none;">
          <button class="btn" type="button" style="width:140px">Symptoms</button>
          </a>
        </fieldset>

        <fieldset>
          <legend>Update Data</legend>
          <input list="genes2" placeholder="Select Table " id="in1" name="nameUpdate"/>
          <datalist id="genes2">
            <option value="anemiadna"></option>
            <option value="anemiarna"></option>
            <option value="geneinformation"></option></datalist>
          <input type="text" placeholder="Enter Column name" id="in2" name="attribute" />
          <input type="text" placeholder="Enter Value" id="in4" name="value"/>
          <input type="text" placeholder="Enter Condition" id="in3" name="condition"/>
          <button class="btn" type="submit" name="update" onclick="btton2click()" style="margin-left:200px; width:200px" >Update</button>
          <p id="p1"></p>
        </fieldset>

        <fieldset>
          <legend>Delete Data</legend>
          <input list="genes3" placeholder="Select Table " name="nameDelete"/>
          <datalist id="genes3">
            <option value="anemiadna"></option>
            <option value="anemiarna"></option>
            <option value="geneinformation"></option></datalist >
          <input type="text" placeholder="Enter ID " name="conditionDelete" />
          <button class="btn" type="submit" name="delete" style="margin-left:200px; width:200px ;margin-bottom:25px">Delete</button>
        </fieldset>
        <hr style="opacity: 0.05" />
        <br />
        <br />
        <br />
      </form>
    </div>
    <script src="Js.js"></script>
  </body>
</html>
