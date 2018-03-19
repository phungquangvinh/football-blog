<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
session_start();
echo $_SESSION['ten'];

?>
<!doctype html>
<html>
    <head>
        <title>Error 404</title>
    </head>
    <body>
        <p>Bạn không đủ quyền truy cập vào trang này!</p>
        <a href="../../">Quay lại trang chủ!</a>
    </body>
</html>