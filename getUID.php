<?php
if(isset($_POST["UIDresult"])) {
    $UIDresult = $_POST["UIDresult"];
    $Write = "<?php $" . "UIDresult='" . $UIDresult . "'; " . "echo $" . "UIDresult;" . " ?>";
    echo "data received";
    file_put_contents('UIDContainer.php', $Write);
} else {
    echo "UIDresult is not set in the POST request.";
}
?>