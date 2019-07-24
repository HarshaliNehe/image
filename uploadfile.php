

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")  
{
    
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) 
        {
        $arr= array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];
    
        
        $ext = pathinfo($filename, PATHINFO_EXTENSION);   // check file extension
        if(!array_key_exists($ext, $arr)) die("Error: Please select a valid file format.");
    
        
        $maxsize = 5 * 1024 * 1024;   //  file size - 5MB maximum
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    

        if(in_array($filetype, $arr))//check myme  type of file
        
        {
            
            if(file_exists("upload/" . $filename))// Check  file exists before uploading 
            {
                echo $filename . " is already exists.";
            } 

            else
            {
                move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $filename);
               
                echo "Your file was uploaded successfully."."<br/>";
            
                echo " uploaded file name is :".$filename;
               
                 
            } 
        } 

        else
        {
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    }


    else
    {
        echo "Error: " . $_FILES["image"]["error"];
    }
}
?>
