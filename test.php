<pre>
    <?php
    include 'libs/load.php';
// echo __LINE__;
//     print("Server \n");
//     print_r($_SERVER);
//       print("Get \n");
//     print_r($_GET);
//       print("Post \n");
//     print_r($_POST);
//       print("Cookie \n");
//     print_r($_COOKIE);
//     print("File \n");
//     print_r($_FILES);

    if (signup("briyankan", "password", "briyankan@gmail.com", "0776176595")) {
        echo "Success";
    } else {
        echo "fail";
    }

    ?>
</pre>
