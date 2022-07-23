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
    <div id="coat2" style="width: 850px; padding: 20px; overflow-x: auto;">
        <div>
            <br />
            <br />
            <br />
            <h1 style="
            color: white;
            background-color: rgb(217, 74, 127);
            align-items: flex-start;
          ">
                Operation Result
            </h1>


            <?php


            $servername = "Localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "bloodissues";
            $message = "Connected Successfully";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $Genesymbol = $_POST["genesymbol"];
            $Genetype = $_POST["genetype"];

            if ($Genetype === "DNA") {
                $sql1 = "SELECT * FROM anemiadna WHERE GeneSymbol = '$Genesymbol' ";
                $sql2 = "SELECT * FROM geneinformation WHERE GeneSymbol = '$Genesymbol'";

                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);


                if ($row1['Type'] === 'sickle') {
                    $sql3 = "SELECT Symptom, AgeGroup FROM symptoms WHERE types = 'sickle'";
                    $result3 =  mysqli_query($conn, $sql3);
                } elseif ($row1['Type'] === 'Aplastic') {
                    $sql3 = "SELECT Symptom, AgeGroup FROM symptoms WHERE types = 'Aplastic'";
                    $result3 = mysqli_query($conn, $sql3);
                }
            }else if ($Genetype === "RNA") {
                $sql1 = "SELECT * FROM anemiarna WHERE GeneSymbol = '$Genesymbol' ";
                $sql2 = "SELECT * FROM geneinformation WHERE GeneSymbol = '$Genesymbol'";

                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

                $result2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($result2);


                if ($row1['Type'] === 'sickle') {
                    $sql3 = "SELECT Symptom, AgeGroup FROM symptoms WHERE types = 'sickle'";
                    $result3 =  mysqli_query($conn, $sql3);
                } elseif ($row1['Type'] === 'Aplastic') {
                    $sql3 = "SELECT Symptom, AgeGroup FROM symptoms WHERE types = 'Aplastic'";
                    $result3 = mysqli_query($conn, $sql3);
                }
            }


            echo "Gene Symbol : " . $row1['GeneSymbol'] . '<br>';
            echo "Sequence : " . $row1['Sequence'] . '<br>';
            echo "Type : " . $row1['Type'] . '<br>';

            echo "primarySource : " . $row2['primarySource'] . '<br>';
            echo "Genetype : " . $row2['Genetype'] . '<br>';
            echo "RefSeqStatus : " . $row2['RefSeqStatus'] . '<br>';
            echo "Organism : " . $row2['Organism'] . '<br>';
            echo "Location : " . $row2['Location'] . '<br>';
            echo "ExonCount : " . $row2['ExonCount'] . '<br>';
            echo "Summary : " . $row2['Summary'] . '<br>';
            
            
            ?>

            <table>
                <tr>
                    <th>Symptoms</th>
                    <th>Age Group</th>
                </tr>


                <?php  
                // include 'Database.php';
                if ($result3->num_rows > 0) {
                    while ($row3 = mysqli_fetch_assoc($result3)) {


                ?>
                        <tr>
                            <td><?php echo $row3['Symptom']; ?></td>
                            <td><?php echo $row3['AgeGroup']; ?></td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
            <hr style="opacity: 0.05" />
            <br />
            <br />
            <br />
        </div>
    </div>

</body>

</html>