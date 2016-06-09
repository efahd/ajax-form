<?php
    include ("dbconnect.php");
    //echo "checkphp";
    if(isset($_POST['submit1']))
    {
        $c_n=addslashes($_POST['comp_name']);
        $c_addr=addslashes($_POST['comp_addr']);
        $type_sector=addslashes($_POST['type_sector']);
        $in=$conn->query("INSERT INTO eval_form(comp_name,comp_addr,type_sector) VALUES ('$c_n','$c_addr','$type_sector')");
        if($in){
                echo "<div class='out1'>";
                echo "Your Company Name: ".$c_n."</br>";
                echo "The Address: ".$c_addr."</br>";
                echo "Your Company Sector: ".$type_sector."</br>";
                echo "</div>";
        }//endif
        //print_r($_POST);
    }//endif
    if(isset($_POST['submit2']))
    {
        $c_a1=addslashes($_POST['A1']);
        $c_a2=addslashes($_POST['A2']);
        $c_a3=addslashes($_POST['A3']);
        $c_a4=addslashes($_POST['A4']);
        $total = $c_a1+$c_a2+$c_a3+$c_a4;

        $in=$conn->query("INSERT INTO prog_out(a1,a2,a3,a4,total_score) VALUES ('$c_a1','$c_a2','$c_a3','$c_a4','$total')");
        if($in){
                echo "<div class='out2'>";
                echo "PART A COMPLETE!";
                echo "</br> Total Score For Part A : ".$total;
                echo "</div>";
        }//endif
        //print_r($_POST);
    }//endif
    if(isset($_POST['submit3']))
    {
        $c_b1=addslashes($_POST['B1']);
        $c_b2=addslashes($_POST['B2']);
        $c_b3=addslashes($_POST['B3']);
        $c_b4=addslashes($_POST['B4']);
        $c_b5=addslashes($_POST['B5']);
        $c_b6=addslashes($_POST['B6']);
        $c_b7=addslashes($_POST['B7']);
        $c_b8=addslashes($_POST['B8']);
        $c_b9=addslashes($_POST['B9']);
        $total = $c_b1+$c_b2+$c_b3+$c_b4+$c_b5+$c_b6+$c_b7+$c_b8+$c_b9;
        $in=$conn->query("INSERT INTO plo(b1,b2,b3,b4,b5,b6,b7,b8,b9,total_score) VALUES ('$c_b1','$c_b2','$c_b3','$c_b4','$c_b5','$c_b6','$c_b7','$c_b8','$c_b9','$total')");
        if($in){
                echo "<div class='out3'>";
                echo "PART B COMPLETE!";
                echo "</br> Total Score For Part B : ".$total;
                echo "</div>";
        }//endif
        //print_r($_POST);
    }//endif
    if(isset($_POST['submit4']))
    {
        $s=addslashes($_POST['suggest']);
        $c=addslashes($_POST['comment']);
        $i=addslashes($_POST['issues']);
        $in=$conn->query("INSERT INTO part_c(suggest,comment,issues) VALUES ('$s','$c','$i')");
        if($in){
                echo "<div class='out4'>";
                    echo "PART C COMPLETE! </br>";
                    echo "You Suggest: ".$s."</br>";
                    echo "You Comment: ".$c."</br>";
                    echo "Your Issues: ".$i."</br>";
                echo "</div>";
        }//endif
        //print_r($_POST);
    }//endif
    if(isset($_POST['submit5']))
    {
        $s=addslashes($_POST['suggest']);
        $c=addslashes($_POST['comment']);
        $i=addslashes($_POST['issues']);
        $in=$conn->query("INSERT INTO part_d(suggest,comment,issues) VALUES ('$s','$c','$i')");
        if($in){
                echo "<div class='out5'>";
                    echo "PART D COMPLETE! </br>";
                    echo "You Suggest: ".$s."</br>";
                    echo "You Comment: ".$c."</br>";
                    echo "Your Issues: ".$i."</br>";
                echo "</div>";
        }//endif
        //print_r($_POST);
    }//endif
    //print_r($_POST);
 ?>