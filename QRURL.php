<form action="QRURL.php" method="POST">
    <input type="text" name="url" required/>
    <br/>
    <input type="submit" value="Enviar" />
</input>


<?php
if (isset($_REQUEST['url'])){  //Verificamos si se ha enviado la url

$url = $_POST['url'];

$qr = "http://api.qrserver.com/v1/create-qr-code/?data=".$url."&size=100x100";

echo "<img src=".$qr."></iframe>";


}

?>




