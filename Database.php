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


function Insert($conn)
{
    if (isset($_POST['add'])) {
        $sequence = $_POST['sequence'];
        $genesymbol = $_POST['genesymbol'];
        $type = $_POST['type'];
        $genename = $_POST['genetype'];

        if ($genename === 'DNA') {
            $selectgenesample = "SELECT * FROM anemiadna WHERE GeneSymbol = '$genesymbol'";
        } elseif ($genename === 'RNA') {
            $selectgenesample = "SELECT * FROM anemiarna WHERE GeneSymbol = '$genesymbol'";
        }

        $result = mysqli_query($conn, $selectgenesample);

        if (mysqli_num_rows($result) === 0) {
            if ($genename === 'DNA') {
                $sql = "INSERT INTO anemiadna VALUES('$sequence', '$genesymbol', '$type')";
                $result = mysqli_query($conn, $sql);
            } elseif ($genename === 'RNA') {
                $sql = "INSERT INTO anemiarna VALUES('$genesymbol', '$sequence', '$type')";
                $result = mysqli_query($conn, $sql);
            }
            exit();
        } else {
            header("Location: anemiadna&rna.php?error3=GeneSymbol Already Exist!");
            exit();
        }
    }
    if (isset($_POST['GeneInfo'])) {
        $genesymbol = $_POST['GeneSymbol'];
        $primary = $_POST['primarySource'];
        $genetype = $_POST['Genetype'];
        $refseq = $_POST['RefSeqStatus'];
        $organism = $_POST['Organism'];
        $location = $_POST['Location'];
        $exoncount = $_POST['ExonCount'];
        $summary = $_POST['Summary'];

        $selectgenesample = "SELECT * FROM geneinformation WHERE GeneSymbol = '$genesymbol'";
        $result = mysqli_query($conn, $selectgenesample);

        if (mysqli_num_rows($result) === 0) {
            $sql = "INSERT INTO geneinformation VALUES('$genesymbol', '$primary', '$genetype', '$refseq', '$organism', '$location', '$exoncount','$summary')";
            $result = mysqli_query($conn, $sql);
            exit();
        } else {
            header("Location: geneinformation.php?error3=GeneSymbol Already Exist!");
            exit();
        }

        
    }
    if (isset($_POST['Symp'])) {
        $symptom = $_POST['symptom'];
        $agegroup = $_POST['agegroup'];
        $symptype = $_POST['type'];

        $sql = "INSERT INTO symptoms (Symptom, AgeGroup, types) VALUES('$symptom', '$agegroup', '$symptype')";
        $result = mysqli_query($conn, $sql);
    }
}

Insert($conn);


function Update_Delete($conn)
{
    if (isset($_POST['update'])) {
        Update($conn);
    } elseif (isset($_POST['delete'])) {
        Delete($conn);
    }
}

Update_Delete($conn);

function Update($conn)
{
    $where = $_POST["condition"];
    $attribute = $_POST["attribute"];
    $value = $_POST["value"];
    $tablename = $_POST['nameUpdate'];

    $sql = "UPDATE $tablename SET $attribute = '$value' WHERE  GeneSymbol = '$where'";
    $result = mysqli_query($conn, $sql);
}



function Delete($conn)
{
    $delete = $_POST["conditionDelete"];
    $delete_table_name = $_POST["nameDelete"];

    $sql = "DELETE FROM $delete_table_name WHERE GeneSymbol = '$delete'";
    $result = mysqli_query($conn, $sql);
}
