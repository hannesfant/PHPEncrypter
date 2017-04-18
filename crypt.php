<?php
$text = $_POST["text"];
$action = $_POST["action"];

if (isset($_POST["key"])) {
  $secret_key = $_POST["key"];
} else {
  $secret_key = "superSecretKey";
}

$secret_iv = "verySecretInitializationVector";
$key = hash("sha256", $secret_key);
$iv = substr(hash('sha256', $secret_iv), 0, 16);

if ($action == "decrypt") {
  $output = openssl_decrypt(base64_decode($text), "AES-256-CBC", $key, 0, $iv);
  header("Location: index.php?msg=" . $output);
} else {
  $output = openssl_encrypt($text, "AES-256-CBC", $key, 0, $iv);
  $output = base64_encode($output);
  header("Location: index.php?enMsg=" . $output);
}
?>
