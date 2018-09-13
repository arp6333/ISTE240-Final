<?php 
    $title = "Leave a Comment";
    $url = "comments";
    $in = "intwo";
    include("header.php");
?>
    
<div class="content">
    <h1>Submit a Comment</h1>
    <form name="form" action="comments.php" onsubmit="return validateForm()" method="get">		
        Name: <input type="text" id="Name" name="name" />
        Comment: <input type="text" id="Comment" name="comment"/>
        <input type="submit" value="Submit a Comment"/>
    </form>

<?php
  	include "../../dbConn.php";
    error_reporting(0);
	if($conn){
      // Insert into table if name and comment are not blank after sanitizing
	  if(($_GET['name']!='') && ($_GET['comment']!='')){
        $name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
        $comment = filter_var($_GET['comment'], FILTER_SANITIZE_STRING);
		$stmt = $conn->prepare("INSERT INTO projectComments (name, comment) VALUES (?, ?)");
		$stmt->bind_param("ss", $name, $comment);
		$stmt->execute();
		$stmt->close();
	  }
	  $result = $conn->query('SELECT name, comment FROM projectComments');
      // Print all comments from the database
	  if($result){
          echo("<h1>Comments:</h1>");
          echo("<div class='table'><table>");
          while($row = $result->fetch_assoc()){
              echo("<tr><td>" . $row["name"] . " says</td><td>&quot;" . $row["comment"] . "&quot;</tr></td>");
          }
          echo("</table></div>");
      }
    }

    $home = false;
    include("footer.php");
?>
    
<script>
    // Validate the form for blank entries
    function validateForm(){
        var isTrue = true;
        var name = document.forms['form']['name'].value;
        if(name == ""){
            document.getElementById('Name').style.backgroundColor='#ffcccc';
            isTrue = false;
        }
        else{
            document.getElementById('Name').style.backgroundColor='none';
        }
        var comment = document.forms['form']['comment'].value;
        if(comment == ""){
            document.getElementById('Comment').style.backgroundColor='#ffcccc';
            isTrue = false;
        }
        else{
            document.getElementById('Comment').style.backgroundColor='none';
        }
        return isTrue;
    }
</script>