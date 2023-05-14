<?php

//Elo Ix
if($_GET["ixContent"] == "") {
    include "../Ix/page/dashboard.php";
}

else if($_GET["ixContent"] == "create-folder") {
    include "../Ix/page/create-folder.php";
}

else if($_GET["ixContent"] == "upload-document") {
    include "../Ix/page/upload-document.php";
}

else if($_GET["ixContent"] == "list-data") {
    include "../Ix/page/list-data.php";
}

else if($_GET["ixContent"] == "view-document") {
    include "../Ix/page/view-document.php";
}