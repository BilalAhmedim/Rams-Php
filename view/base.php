<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Site</title>
    <link rel="stylesheet" href="./../styles.css">
</head>
<?php include 'view/templates/navigation.php' ?>

<?php
if ($_SERVER["REQUEST_URI"] == '/Contact') {
    include 'view/templates/contact.html';
} elseif ($_SERVER["REQUEST_URI"] == '/About') {
    include 'view/templates/about.html';
} elseif ($_SERVER["REQUEST_URI"] == '/' || $_SERVER["REQUEST_URI"] == '/Home') {
    include 'view/templates/home.html';
} elseif ($_SERVER["REQUEST_URI"] == '/Login') {
    include 'view/templates/login.php';
} else {
    include '404.html';
}
?>

<?php include 'view/templates/footer.html' ?>
<script src="./../assets/js/custom.js"></script>
<body>

</html>