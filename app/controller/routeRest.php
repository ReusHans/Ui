<?php

//Elo Rest
if($_GET["page"] == "") {
    include "../Rest/page/dashboard.php";
}

else if($_GET["page"] == "create-folder") {
    include "../Rest/page/create-folder.php";
}

else if($_GET["page"] == "upload-document") {
    include "../Rest/page/upload-document.php";
}

else if($_GET["page"] == "list-data") {
    include "../Rest/page/list-data.php";
}

else if($_GET["page"] == "view-document") {
    include "../Rest/page/view-document.php";
}