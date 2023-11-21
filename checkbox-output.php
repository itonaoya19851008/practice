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
        <div class="wrapper">
            
            <?php
            if(isset($_REQUEST['mail'])): ?>
            <p>お買い物情報のメールをお送りいたします。</p>
            <?php else: ?>
            <p>お買い物情報のメールはお送りしません。</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>