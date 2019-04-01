
<style>
    .myStyle{
        background-color:gray;
        font-size: 14px;
        font-family:Verdana, Geneva, sans-serif	;
    }
</style>


<table border="1" width="100%">
<tr><td><img src="yellowflower.jpg" style = "width:100%; height:50%"></td>
<td colspan="2"></td>

</tr>
<tr><th><a href="?page=home">Home</a></th>
<th><a href="?page=about">About Us</a></th>
<th><a href="?page=contact">Contact Us</a></th>
</tr>

<tr class="myStyle"><td></td>
<td colspan="2">
    <?php 
    $page="";
    if(isset($_GET["page"])){

        $page = $_GET["page"];
    } 
        if($page == 'home'){
            include("home.php");

        }else if($page== 'contact'){
            include("contact.php");
        }
        else if($page== 'about'){
            include("about.php");
        }
        else{
            include("home.php");
        }
    
    ?>
</td></tr>
<tr height="180"> <td colspan="3">Footer</td></tr>

</table>

