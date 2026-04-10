<!Doctype html>
<html>
    <head>
        <tittle>File upload and download</tittle>
    </head>
    <body>
        <h2>Upload File</h2>
        <form action="upload.php"
        method="post" enctype="multipart/form-data">
            <input type="file" name="file" required><br><br>
            <button type="submit">Upload</button>
    </form>
    <?php
    if(isset($_FILES['file'])){
        $uploadDir ="uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFile=$uploadDir .$filename;
        if(move_uploaded_file($_FILES["file"]["temp_name"],$targetFile)){
            echo "<h3>File uploaded successfully!</h3>";
            echo "<p>File Name: $fileName</p>";
            echo "<a href='download.php? file=$filename'><button>Download File</button></a>";
        }else{
                echo "File upload Failed.";
            }
    }
    ?>
    </body>
</html>