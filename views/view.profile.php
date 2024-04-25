<?php
require_once(__DIR__ . '/../views/partials/template.header.php');
require_once(__DIR__ . '/../views/partials/template.navbar.php');
require_once(__DIR__ . '/../views/partials/template.heading.php');
require_once(__DIR__ . '/../models/dao/UserDAO.php');

$userDAO = new UserDAO($pdo);
$userData = $userDAO->verifyToken(true);
?>

<?php require_once(__DIR__ . '/partials/template.footer.php'); ?>