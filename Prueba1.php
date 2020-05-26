<?php
$permitidos= array('jpg', 'png', 'gif', 'jpeg');
if(isset($_POST['sumbit']))
{
    if(getimagesize($_FILES['image']['tmp_name'])== False)
    {?>
        <div class="alert alert-success">
        Seleccione una imagen...
    </div>
    <?php }else if(!in_array(($_FILES['userImage']['type']),$permitidos)){?>
        <div class="alert alert-success">
        Tipo de archivo no valido...
    </div>
    <?php }else{
        $image= addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);?>
        <div class="alert alert-success">
        Su Producto se ah agregado correctamente.
    </div>
    <?php }
}

var_dump($_FILES);
?>

<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>
    <form name="frmImage" enctype="multipart/form-data" action=""
        method="post" class="frmImageUpload">
        <label>Upload Image File:</label><br /> <input name="userImage"
            type="file" class="inputFile" /> <input type="submit"
            value="Submit" class="btnSubmit" />
    </form>
    </div>
</BODY>
</HTML>