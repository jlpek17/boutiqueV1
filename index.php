<?php
session_start();
include("functions.php");
?>


<!DOCTYPE html>
<html lang="fr">


<?php
include("head.php");
?>

<body>
    <div class="container-fluid" id="wrapper">
        <?php
        include("header.php");
        ?>
        <main>
            <h1 class="text-center">Best Sellers</h1>
            <div class="row">
                <?php
                    showArticles();
                ?>
            </div>
        </main>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

