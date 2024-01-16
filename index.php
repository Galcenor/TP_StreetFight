<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php include './view/home/navbar.php'; ?>
    <?php include './Models/personnages.php'; ?>

    <?php 
        if (isset($_POST['create'])) {
            $createController = new CreateController();
            $createController->index();
        }
        else if (isset($_GET['create'])) {
            include './view/others/create.php';
        }
        else if (isset($_GET['test'])) {
            include './view/others/test.php';
        } 
        else if (isset($_GET['list'])) {
            include './view/others/list.php';
            $listController = new ListController();
            $listController->index();
        }
        else {
            include './view/home/homepage.php';
        }
    ?>
</body>
    <!-- <script src="./assets/javascript/script.js"></script> -->
</html>