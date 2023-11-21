<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-area">
        <img src="../logo.png" alt="">
        <form action="output.php">
            <?php 
            if(isset($_REQUEST['name'])):?>
            <p class="outputText">ようこそ <?php echo $_REQUEST['name'];?>さん！</p>
          
            
           <?php endif; ?>
        </form>
    </div>
</body>
</html>