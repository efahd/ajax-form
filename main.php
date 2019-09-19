<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Evaluation Form</title>
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/animate-popup.js"></script>
    <script type="text/javascript" src="js/form.js"></script>
    <link rel="stylesheet" type="text/css" href="css/load.css">
    <style>
        *   {
            margin: 0;
            padding: 0;
            font-family: "Trebuchet MS","Myriad Pro",Arial,sans-serif;
        }
        .out1, .out2, .out3, .out4, .out5 {
            color:forestgreen; border:1px solid black;
        }
        #q1{background:cyan;}#q2{background:lightgreen;}#q3{background:magenta;}#q4{background:,yellow;}
        .out1, .out2, .out3, .out4, .out5 {background:white; color:forestgreen; border:1px solid black;}
        input:disabled {
            background: #FF9E9E;
        }
        #popup {position:absolute; right:0; top:10%; border:1px solid black;}
        img {width:30%;position:fixed;left:0%;bottom:0%;opacity:0;z-index:1000}
    </style>
    
</head>
<body>
    <div>Testing new lines</div>
    <!--<div id="popup" style="position:absolute; right:0; top:10%; border:1px solid black;">
        <img id="football" src="images/crackman.gif" style="width:30%;position:fixed;left:0%;bottom:0%;opacity:0;z-index:1000" />
    </div>-->
    <div id="page-wrap">
        <!-- TOP QUESTION -->
        <h2>ACADEMIC ADVISORY PANEL EVALUATION FORM</h2>
        <div id="q1">
            <form action="p.php" name="1st" id="1st" method="post">
                <table border="0">
                    <tr>
                        <td>Company Name :</td>
                        <td><input type="text" name="comp_name" size=50 required></td>
                    </tr>
                    <tr>
                        <td>Company Address : </td>
                        <td><input type="text" name="comp_addr" size=50 required></td>
                        </tr>	
                    <tr>
                        <td>Type of company sector :</td>
                        <td><select name="type_sector" required>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                                <option value="Government-Linked Company">Government-Linked Company</option>
                            </select>
                        </td>
                        <td>
                            <input type="submit" name="submit1" value="submit"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- PART A -->
        <div div="q2"> 
            <form action="p.php" name="2nd" id="2nd" method="post"> 
                <b>PART A:Programme Outcome(PO)</b><br/>
                <br/>
                    Please rate our PO and PLO appropriately based on this range:
                <br/>
                    (5 - EXCELLENT, 4 – GOOD, 3- SATISFACTORY, 2- AVERAGE, 1 –WEAK)
                <br/>
                <br/>
                    Based on the current academic programme structure we offered to students, at the end 
                    student should be able:
                <br/>
                <br/>
                    1.Graduates who can obtain creative and innovative solutions to computing problems and 
                    provide quality computing services to industries
                <br />
                    <input type="radio" name="A1" value="1" checked/>1
                    <input type="radio" name="A1" value="2" />2
                    <input type="radio" name="A1" value="3" />3
                    <input type="radio" name="A1" value="4" />4
                    <input type="radio" name="A1" value="5" />5
                <br />
                    2.Graduates who can demonstrate entreprenuership skills
                <br />
                    <input type="radio" name="A2" value="1" />1
                    <input type="radio" name="A2" value="2" />2
                    <input type="radio" name="A2" value="3" />3
                    <input type="radio" name="A2" value="4" />4
                    <input type="radio" name="A2" value="5" />5
                <br />
                    3.Graduates who can act professionally and ethically as a leader as well as team player
                <br/>
                    <input type="radio" name="A3" value="1" />1
                    <input type="radio" name="A3" value="2" />2
                    <input type="radio" name="A3" value="3" />3
                    <input type="radio" name="A3" value="4" />4
                    <input type="radio" name="A3" value="5" />5
                <br />
                    4.Graduates who can pursue successful career and professional development
                <br/>
                    <input type="radio" name="A4" value="1" />1
                    <input type="radio" name="A4" value="2" />2
                    <input type="radio" name="A4" value="3" />3
                    <input type="radio" name="A4" value="4" />4
                    <input type="radio" name="A4" value="5" />5
                <br /> 
                <br /><br />  
                    <!--<input type="submit" name="Save" value=" Save " onclick="Save">-->
                    <input type="submit" name="submit2" id="submit2" value="submit">
            </form>
        </div>
        <!-- PART B -->         
       <div id="q3">
            <form action="p.php" name="3rd" id="3rd" method="post">
                <b>PART B: Programme Learning Outcome (PLO) </b><br/>
                    1.Ability to demonstrate an understanding of fundamentals of Information Technology concept
                <br />
                    <input type="radio" name="B1" value="1" />1
                    <input type="radio" name="B1" value="2" />2
                    <input type="radio" name="B1" value="3" />3
                    <input type="radio" name="B1" value="4" />4
                    <input type="radio" name="B1" value="5" />5
                <br />
                
                    2.Ability to design and develop usable applications for organizations and communities
                <br />
                    <input type="radio" name="B2" value="1" />1
                    <input type="radio" name="B2" value="2" />2
                    <input type="radio" name="B2" value="3" />3
                    <input type="radio" name="B2" value="4" />4
                    <input type="radio" name="B2" value="5" />5
                <br />
                
                    3.Ability to propose creative solutions in information technologies for organizations and communities
                <br/>
                    <input type="radio" name="B3" value="1" />1
                    <input type="radio" name="B3" value="2" />2
                    <input type="radio" name="B3" value="3" />3
                    <input type="radio" name="B3" value="4" />4
                    <input type="radio" name="B3" value="5" />5
                <br />
                
                    4.Ability to communicate ideas effectively in written an oral form
                <br/>
                    <input type="radio" name="B4" value="1" />1
                    <input type="radio" name="B4" value="2" />2
                    <input type="radio" name="B4" value="3" />3
                    <input type="radio" name="B4" value="4" />4
                    <input type="radio" name="B4" value="5" />5
                <br />
                
                    5.Ability to work independently or in a team on projects
                <br/>
                    <input type="radio" name="B5" value="1" />1
                    <input type="radio" name="B5" value="2" />2
                    <input type="radio" name="B5" value="3" />3
                    <input type="radio" name="B5" value="4" />4
                    <input type="radio" name="B5" value="5" />5
                <br />
                
                    6.Ability to appreciate ethical standards and practices in professional work<br/>
                    <input type="radio" name="B6" value="1" />1
                    <input type="radio" name="B6" value="2" />2
                    <input type="radio" name="B6" value="3" />3
                    <input type="radio" name="B6" value="4" />4
                    <input type="radio" name="B6" value="5" />5
                <br />
                
                    7.Ability to apply information technology knowledge for life-long learning<br/>
                    <input type="radio" name="B7" value="1" />1
                    <input type="radio" name="B7" value="2" />2
                    <input type="radio" name="B7" value="3" />3
                    <input type="radio" name="B7" value="4" />4
                    <input type="radio" name="B7" value="5" />5
                <br />
                
                    8.Ability to apply managerial and entrepreneurship skills<br/>
                    <input type="radio" name="B8" value="1" />1
                    <input type="radio" name="B8" value="2" />2
                    <input type="radio" name="B8" value="3" />3
                    <input type="radio" name="B8" value="4" />4
                    <input type="radio" name="B8" value="5" />5
                <br />
                
                    9.Ability to demonstrate leadership skills<br/>
                    <input type="radio" name="B9" value="1" />1
                    <input type="radio" name="B9" value="2" />2
                    <input type="radio" name="B9" value="3" />3
                    <input type="radio" name="B9" value="4" />4
                    <input type="radio" name="B9" value="5" />5
                <br /> <br /><br />  
                    <input type="submit" name="submit3" value="submit">
                <br/><br/> 
            </form>
       </div>
        <!-- PART C -->        
        <div id="q4">
            <form action="p.php" name="4th" id="4th" method="post">
                <b>PART C (Matters to highlight - suggestion, comment, issue on the above PART A)</b><br/>
                <table border="0">
                    <tr>
                        <td>Suggestion :</td>
                        <td><input type="text" name="suggest" size=100/></td>
                    </tr>
                    <tr>
                        <td>Comment : </td>
                        <td><input type="text" name="comment" size=100 /></td>
                        </tr>	
                    <tr>
                        <td>Issues : </td>
                        <td><input type="text" name="issues" size=100 /></td>
                    </tr>
                </table>
                    <input type="submit" name="submit4" value="submit ">
                <br/><br/>
            </form>
        </div>
        <!-- PART D -->        
        <div id="q5">
            <form action="p.php" name="5th" id="5th" method="post">
                <b>PART D (Matters to highlight - suggestion, comment, issue on the above PART B)</b><br/>
                <table border="0">
                    <tr>
                        <td>Suggestion :</td>
                        <td><input type="text" name="suggest" size=100/></td>
                    </tr>
                    <tr>
                        <td>Comment : </td>
                        <td><input type="text" name="comment" size=100 /></td>
                        </tr>	
                    <tr>
                        <td>Issues : </td>
                        <td><input type="text" name="issues" size=100 /></td>
                    </tr>
                </table>  
                    <input type="submit" name="submit5" value="submit ">
                <br/><br/>
            </form>
        </div>
    </div>
</body>
</html>