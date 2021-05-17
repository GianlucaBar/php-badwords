<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badword</title>
</head>
<body>

<?php
    $badword = $_GET["badword"];
    $paragrafo = 'Mi piace molto mangiare pane e salame.';

    $censored = str_replace($badword, "***", $paragrafo);
?>

<p> <?php echo $censored ?> </p>

</body>
</html>