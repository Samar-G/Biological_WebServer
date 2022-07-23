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
      <h1 style="
            color: white;
            background-color: rgb(217, 74, 127);
            align-items: flex-start;
          ">
        Adding to Table
      </h1>
      <fieldset>
        <!--("GeneSymbol", "primarySource","Genetype", "RefSeqStatus", "Organism", "Location", "ExonCount", "Summary")-->
        <legend>Add to Table </legend>
        <input type="text" name="GeneSymbol" placeholder="Gene Symbol" required />
        <input type="text" name="primarySource" placeholder="Primary Source" />
        <input type="text" name="Genetype" placeholder="Gene Type" />

        <label for="RefSeqStatus">RefSeq Status:</label><br>
        &nbsp;
        <input type="Radio" name="RefSeqStatus" id="REVIEWED" value="REVIEWED" style="width:auto;display: inline; ">
        <label for="REVIEWED">REVIEWED</label>
        &nbsp;&nbsp;
        <input type="Radio" name="RefSeqStatus" id="UNREVIEWED" value="UNREVIEWED" style="width:auto; display: inline;">
        <label for="UNREVIEWED">UNREVIEWED</label>

        <input type="text" name="Organism" placeholder="Organism" />
        <input type="text" name="Location" placeholder="Location" />
        <input type="text" name="ExonCount" placeholder="Exon Count" />
        <input type="text" name="Summary" placeholder="Summary" />
        <center>
        <button class="btn" type="submit" name="GeneInfo" style="width:30%;">ADD</button>
        </center>
        
      </fieldset>
      <?php if (isset($_GET['error3'])) { ?>

        <p class="error3" style="text-align: center; background: rgb(217, 74, 127);; 
        padding: 10px; 
        font-weight: bold; 
        width: 50%; margin: auto; text-align: center; 
        border-radius: 5px;"><?php echo $_GET['error3']; ?></p>
      <?php } ?>
      <br>
      <br>
      <br>
    </form>
  </div>
</body>

</html>