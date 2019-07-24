<!DOCTYPE html>
    <html lang="en">
		<head>
			<link rel="stylesheet" href="uploadfile.css">
    			<meta charset="UTF-8">
    				<title>File Upload Form</title>
		</head>
		
	<body bgcolor="	#008080">
		<main>
			
			<center>
				<fieldset>
		  		   <h2>Upload File</h2>

						<form action="uploadfile.php" method="post" enctype="multipart/form-data">
       						<h3>
       							 <lable>Filename:</lable>

       							 <input type="file" name="image" id="fileSelect"><br><br>
       							 <input type="submit" name="submit" value="click to Upload"><br><br>
       						</h3>

         						
   					 </form>
    			</fieldset>
    
			</center>
		</main>
	</body>

</html>



