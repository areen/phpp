<html>
	<head>
		<meta charset="UTF-8">
		<title>Example of Twitter Bootstrap 3 Accordion</title>
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>	
	
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script src="./ajax.js"></script>	

		<script>
		$(".openpanel").on("click", function() {
			$("#panel3").collapse('show');
		});
		$(".closepanel").on("click", function() {
			$("#panel3").collapse('hide');
		});

		/* ensure any open panels are closed before showing selected */
		$('#accordion').on('show.bs.collapse', function () {
			$('#accordion .in').collapse('hide');
		});
		</script>

	</head>
	<body>
		<h1>areen</h1>
		<h1>areen</h1>


<?php
	 include_once('confg.php');

   // $ID_i = mysql_real_escape_string($_POST["ID"]);
   // $Password_i = mysql_real_escape_string($_POST["Password"]);

    $sql_txt = "SELECT DISTINCT student_id, mark_first, course_name, student_name FROM stdinfo WHERE student_id = '2009974109' AND student_password ='1234' ";
    $result = mysql_query($sql_txt);
    if ($result == FALSE) {
        die(mysql_error());
    }
    while ($row = mysql_fetch_array($result)) {
     	echo	"<div class='panel-group' id='accordion'>";
						echo"	<div class='panel panel-default'>";
							echo"	<div class='panel-heading'>";
									echo"<h4 class='panel-title'>";
						             echo"   <a class='accordion-toggle' data-toggle='collapse' data-parent='#accordion' href='#panel1'>". $row["course_name"]."</a>";
									echo"</h4>";
							echo"	</div>";
							echo"	<div id='panel1' class='panel-collapse collapse'>";
								echo"	<div class='panel-body'>";
						          echo"   First ". $row["mark_first"]."</div>
								</div>
						    </div>";
		                
		                 
						
					
    }
?>
	</body>
	
	
</html>