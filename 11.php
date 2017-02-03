<?php

function a_capital($text) {
    $arr = explode('.', $text);
    $new_arr = array_diff($arr, array(''));
    $res = '';
    foreach ($new_arr as $key => $sentence) {
        $sentence = trim($sentence);
        if ($key != count($arr) - 1) {
            $res .= mb_strtoupper(mb_substr($sentence, 0, 1)) . mb_substr($sentence, 1) . ". ";
        } else {
            $res .= mb_strtoupper(mb_substr($sentence, 0, 1)) . mb_substr($sentence, 1) . ".";
        }
    }
    return $res;
}

?>

<html>
<head>
    <title>С большой буквы</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta charset="utf-8">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 align="center">Заглавные буквы в предложениях</h2>
            <br>
        </div>
    </div>
    <form action="" method="post" role="form">
        <div class="row">
            <div class="col-md-12">
                <fieldset class="form-group">
                    <textarea class="form-control" name="text" rows="3"></textarea>
                </fieldset>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </form>
    <div class="row">
        <?php
        if (!empty($_POST)) {
            echo "<div class=\"col-md-12 alert alert-success\">" . a_capital($_POST['text']) . "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>