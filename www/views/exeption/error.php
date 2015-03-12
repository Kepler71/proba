<?php
switch ($e['codeError']) {
    case '404':
        header("HTTP/1.0 404 Not Found");
        break;
    case '403':
        header('HTTP/1.0 403 Forbidden');
        break;
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Что-то пошло не так</title>
</head>

<h3>Внимание:</h3>
<p><?php echo $e['massageError']; ?></p>
</body>
</html>