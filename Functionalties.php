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




function Result()
{
    $k = $_POST["ksize"];
    $option1 = $_POST["Select_Operation1"];
    $option2 = $_POST["Select_Operation2"];
    $option3 = $_POST["Select_Operation3"];
    $option4 = $_POST["Select_operation4"];
 
    //Complement VS. Reverse Complement
    if($option1 == "Complement"){
        $seq = $_POST["seq1"];
        $result_complement = complement($seq);
        echo "Complement : ";
        echo $result_complement;
        
    }
    elseif($option1 == "Reverse Complement"){
        $seq = $_POST["seq1"];
        $result_revComplement = reverseComplement($seq);
        echo "Reverse Complement : ";
        echo $result_revComplement;
      
    }

    //Central Dogma
    if($option2 == "Transcribe"){
        $seq = $_POST["seq2"];
        $result_transcribe = transcription($seq);
        echo "Transcribe : ";
        echo $result_transcribe;
        
    }
    elseif($option2 == "Translation"){
        $seq = $_POST["seq2"];
        $result_translate = Translation($seq);
        echo "Translation : ";
        echo $result_translate;
       
    }
    elseif($option2 == "Reverse Transcribe"){
        $seq = $_POST["seq2"];
        $result_revTranc = reverseTranscription($seq);
        echo "Reverse Transcribe : ";
        echo $result_revTranc;
        echo " ";
        
    }

    //Calculation on Sequence
    if($option3 == "GC Content"){
        $seq = $_POST["seq3"];
        $result_gc = GC_Content($seq);
        echo "GC Content : ";
        echo $result_gc;
        echo " ";
        
    }
    elseif($option3 == "CpG Ratio"){
        $seq = $_POST["seq3"];
        $result_cpg = CpG_Ratio($seq);
        echo "CpG Ratio : ";
        echo $result_cpg;
        echo " ";
    }
    elseif($option3 == "Reverse Sequence"){
        $seq = $_POST["seq3"];
        $result_revSeq = reverseSequence($seq);
        echo "Reverse Sequence : ";
        echo $result_revSeq;
        echo " ";
        
    }

    //Kmers
    if($option4 == "kmers"){
        $seq = $_POST["seq4"];
        $result_kmer = kmers($seq, $k);
        echo "kmers : ";
        echo $result_kmer;
        echo " ";
        
    }
    elseif($option4 == "kmer Frequencies"){
        $seq = $_POST["seq4"];
        $result_kmerFreq = kmerFreq($seq, $k);
        echo "kmer Frequencies : ";
        echo $result_kmerFreq;
        echo " ";
        
    }
   
}



function complement($seq)
{
    $length = strlen($seq);
    $comp = "";
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == "A") {
            $comp = $comp . "T";
        } elseif ($seq[$i] == "T") {
            $comp = $comp . "A";
        } elseif ($seq[$i] == "C") {
            $comp = $comp . "G";
        } elseif ($seq[$i] == "G") {
            $comp = $comp . "C";
        } else {
            $comp = $comp . "N";
        }
    }
    return $comp;
}

function reverseComplement($seq)
{
    $comp = complement($seq);
    $revComp = strrev($comp);

    return $revComp;
}

function reverseSequence($seq)
{
    return strrev($seq);
}

function transcription($seq)
{
    $length = strlen($seq);
    $trans = "";
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == "T") {
            $trans = $trans . "U";
        } else {
            $trans = $trans . $seq[$i];
        }
    }
    return $trans;
}

function reverseTranscription($rna)
{
    $length = strlen($rna);
    $revTrans = "";
    for ($i = 0; $i < $length; $i++) {
        if ($rna[$i] == "U") {
            $revTrans = $revTrans . "T";
        } else {
            $revTrans = $revTrans . $rna[$i];
        }
    }
    return $revTrans;
}

function kmers($seq, $k)
{
    $length = strlen($seq);
    $kmer = '';
    $i = 0;
    while ($i < $length - $k + 1) {
        $mer = "";
        $j = $i;
        while ($j < $i + $k) {
            $mer = $mer . $seq[$j];
            $j++;
        }
        if ($i < $length - $k) {
            $kmer = $kmer . $mer . ",";
        } else {
            $kmer = $kmer . $mer;
        }
        $i = $i + 1;
    }
    return $kmer;
}

function kmerFreq($seq, $k)
{
    $kmer = kmers($seq, $k);
    $kmerArr = explode(",", $kmer);
    $kmerCount = array_count_values($kmerArr);
    $maximum = max($kmerCount);
    $repeated = "";
    foreach ($kmerCount as $value) {
        if ($value == $maximum) {
            $key = array_search($value, $kmerCount);
            $repeated = $repeated . $key . " ";
            unset($kmerCount[$key]);
        }
    }
    return $repeated;
}

function GC_Content($seq)
{
    $count = 0;
    $length = strlen($seq);
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == "G" || $seq[$i] == "C" || $seq[$i] == "g" || $seq[$i] == "c") {
            $count = $count + 1;
        }
    }

    $result = ($count / $length) * 100;
    return round($result, 2);
}

//(number of C + number pf G)/length of sequence
function CpG_Ratio($seq)
{
    $countG = 0;
    $countC = 0;
    $length = strlen($seq);
    for ($i = 0; $i < $length; $i++) {
        if ($seq[$i] == "G" || $seq[$i] == "g") {
            $countG = $countG + 1;
        } else if ($seq[$i] == "C" || $seq[$i] == "c") {
            $countC = $countC + 1;
        }
    }

    $result = ($countC * $countG) / $length;
    return round($result, 2);
}

function Translation($seq)
{
    $transcribed = transcription($seq);
    $length = strlen($transcribed);
    $protein = "";
    for ($i = 0; $i < $length; $i = $i + 3) {
        if ($i == $length - 1 || $i == $length - 2) {
            break;
        } else {
            $str = $transcribed[$i] . $transcribed[$i + 1] . $transcribed[$i + 2];
            if ($str == "UUU" || $str == "UUC") {
                $protein = $protein . "F";
            } else if ($str == "UUA" || $str == "UUG" || $str == "CUU" || $str == "CUC" || $str == "CUA" || $str == "CUG") {
                $protein = $protein . "L";
            } else if ($str == "AUU" || $str == "AUC" || $str == "AUA") {
                $protein = $protein . "I";
            } else if ($str == "AUG") {
                $protein = $protein . "M";
            } else if ($str == "GUU" || $str == "GUC" || $str == "GUA" || $str == "GUG") {
                $protein = $protein . "V";
            } else if ($str == "UCU" || $str == "UCC" || $str == "UCA" || $str == "UCG" || $str == "AGU" || $str == "AGC") {
                $protein = $protein . "S";
            } else if ($str == "CCU" || $str == "CCC" || $str == "CCA" || $str == "CCG") {
                $protein = $protein . "P";
            } else if ($str == "ACU" || $str == "ACC" || $str == "ACA" || $str == "ACG") {
                $protein = $protein . "T";
            } else if ($str == "GCU" || $str == "GCC" || $str == "GCA" || $str == "GCG") {
                $protein = $protein . "A";
            } else if ($str == "UAU" || $str == "UAC") {
                $protein = $protein . "Y";
            } else if ($str == "UAA" || $str == "UAC" || $str == "UGA") {
                $protein = $protein . "*";
            } else if ($str == "CAU" || $str == "CAC") {
                $protein = $protein . "H";
            } else if ($str == "CAA" || $str == "CAG") {
                $protein = $protein . "Q";
            } else if ($str == "AAU" || $str == "AAC") {
                $protein = $protein . "N";
            } else if ($str == "AAG" || $str == "AAA") {
                $protein = $protein . "K";
            } else if ($str == "GAU" || $str == "GAC") {
                $protein = $protein . "D";
            } else if ($str == "GAA" || $str == "GAG") {
                $protein = $protein . "E";
            } else if ($str == "UGU" || $str == "UGC") {
                $protein = $protein . "C";
            } else if ($str == "UGG") {
                $protein = $protein . "W";
            } else if ($str == "CGU" || $str == "CGC" || $str == "CGA" || $str == "CGG" || $str == "AGA" || $str == "AGG") {
                $protein = $protein . "R";
            } else if ($str == "GGU" || $str == "GGC" || $str == "GGA" || $str == "GGG") {
                $protein = $protein . "G";
            }
        }
    }
    return $protein;
}

Result();

?>