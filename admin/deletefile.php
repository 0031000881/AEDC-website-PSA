<?php
include "config.php";
if (isset($_GET["id"])) {
    $id = intval($_GET["id"]);
    $query = mysqli_query($connection, "SELECT filename FROM uploads WHERE id=$id");
    $file = mysqli_fetch_assoc($query);

    if ($file) {
    unlink("uploads/" . $file["filename"]); // Delete the file
    mysqli_query($connection, "DELETE FROM uploads WHERE id=$id"); // Remove from DB
    }
}
header("Location: upload_files.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Delete_Files - SB Admin</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> -->
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php include "./pageElements/nav.php" ?>
            <div id="layoutSidenav">
                <?php include "./pageElements/sidebar.php" ?>
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Files To Delete</h1>
                            <ol class="breadcrumb mb-4">
                                <li class="breadcrumb-item active">Files To Delete</li>
                            </ol>
                        </div>
                    </main>
                </div>
            </div>
        <?php include "./pageElements/footer.php" ?>
        <?php include "./scripts.php"; ?>
    </body>