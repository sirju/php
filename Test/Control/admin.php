<html>
<head>
<link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
<script src="./bootstrap/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

</head>

<body>
<?php
session_start();
echo $_SESSION["sname"];
?>
<table border="1" width="100%">
<tr><td><img src="yellowflower.jpg" class="rounded-circle" style ="width:100%;height:100%" ></td>
<td colspan="2"> <img src="flower.jpg" style = "width:100%; height:60%" >
</td>

</tr>

<tr><th><a href="?page=home">Home</a></th>
<th><a href="?page=about">About Us</a></th>
<th><a href="?page=contact">Contact Us</a></th>
</tr>

<tr class="myStyle"><td><p>Hi, <br>I am srijana Jha<br> working at neosphere as academic counsellor.<br>
neosphere, one of the best and recognized IT Training Institute in Nepal provides world-class IT training programs 
and certifications to students and working professionals. The training and certifications at neosphere 
aid in setting benchmarks of experience and expertise that will help you stand out among others. 
We have the advanced, latest and the most pioneering courses to choose from, with ever-evolving
 techniques while providing training to you. Our students master the skills for IT Infrastructure 
 Management, followed with On-Job industry training and allowances. Our training prepares students
  for inspiring careers in technical support, facility management, graphics and animation projects,
   marketing management and back-office operations relevant to programming, designing, animation, 
   networking, etc. Our proficiency lies in identifying your talent, understanding your ability,
    analysing your needs and training you to reach the peak of technical excellence. </p></td>
<td colspan="2">
    <?php 
    $page="";
    if(isset($_GET["page"])){

        $page = $_GET["page"];
    } 
        if($page == 'chome'){
            include("chome.php");

        }else if($page== 'contact'){
            include("contact.php");
        }
        //else if($page== 'about'){
           // include("about.php");
       // }
        else{
            include("chome.php");
        }
    
    ?>
</td></tr>
<tr height="180"> <td colspan="3"><img src="yellowflower.jpg" style ="width:100%;height:100%" ></td></tr>

</table>
</body>
</html>
