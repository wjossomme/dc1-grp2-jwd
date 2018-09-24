<?php

require_once 'model/database.php';
$photo_id = $_POST ["photo_id"];
$contenu = $_POST["contenu"];

insertCommentaire($contenu, $photo_id);

header("Location: photo.php?id=" . $photo_id);
