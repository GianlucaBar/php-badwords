<?php
    $badword = $_GET["badword"];
    $paragrafo = 'Mi piace molto mangiare pane e salame.';

    $censored = str_replace($badword, "***", $paragrafo);
?>

<p> <?php echo $censored ?> </p>