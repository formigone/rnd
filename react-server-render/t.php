<!doctype html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Server rendering react</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="appContainer"></div>


<?php

$v = new V8Js();
$js = file_get_contents('node_modules/react/dist/react-with-addons.js').PHP_EOL;
$js .= file_get_contents('bundle.js');


$v->executeString($js);

?>

<script src="node_modules/react/dist/react-with-addons.js" charset="UTF-8"></script>
<script src="bundle.js" charset="UTF-8"></script>

</body>
</html>
