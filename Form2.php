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
      <form action="result.php" target="_blank" method="post">
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
          Functions on Sequences 
        </h1>
        <fieldset>
            <legend>Complement VS. Reverse Complement  </legend>
            <input list="tables1" placeholder="Select Operation "  name= "Select_Operation1"/>
                <datalist id="tables1">
                  <option value="Complement"></option>
                  <option value="Reverse Complement"></option>
                  </datalist
                >       
            <input type="text" placeholder="Enter Sequence" name="seq1">

            <center>
            <button class="btn" type="submit" style="width:35%;">
                Get Result
            </button>        
            </center>
            
        </fieldset>
        <fieldset>
            <legend>Central Dogma</legend>

            <input list="tables2" placeholder="Select Operation "  name= "Select_Operation2"/>
                <datalist id="tables2">
                  <option value="Transcribe"></option>
                  <option value="Translation"></option>
                  <option value="Reverse Transcribe"></option>
                  </datalist
                >
            <input type="text" placeholder="Enter Sequence" name="seq2">
            <center>
            <button class="btn" type="submit" style="width:35%;">
                Get Result
          </button>

            </center>
            
        </fieldset>
        <fieldset>
            <legend>Calculation on Sequence</legend>
            <input list="tables3" placeholder="Select Operation " name= "Select_Operation3"/>
                <datalist id="tables3">
                  <option value="GC Content"></option>
                  <option value="CpG Ratio"></option>
                  <option value="Reverse Sequence"></option>
                  </datalist
                >

            <input type="text" placeholder="Enter Sequence" name="seq3">
            <center>
            <button class="btn" type="submit" style="width:35%;">
                Calculate
          </button> 
       
            </center>
            
        </fieldset>
        <fieldset>
            <legend>Kmers</legend>
            <input list="tables4" placeholder="Select Operation "  name= "Select_operation4"/>
                <datalist id="tables4">
                  <option value="kmers"></option>
                  <option value="kmer Frequencies"></option>
                  </datalist
                >
            <input type="number" placeholder="Enter Size K" name="ksize">
            <input type="text" placeholder="Enter Sequence" name ="seq4">
            
          <center>
          <button class="btn" type="submit" style="width:35%;">
                Show K-mers
          </button>
          </center> 
          
        </fieldset>
        
        <button class="btn" type="submit" style="width: 98%; margin: left 20pt;">Calculate</button>
       
        <hr style="opacity: 0.05" />
        <hr style="opacity: 0.05" />
        <hr style="opacity: 0.05" />
        <br />
        <br />
        <br />
        </form>
    </div>
    <script lang="PHP"></script>
  </body>
</html>
