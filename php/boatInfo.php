<?php
$id = $_POST["id"];

switch ($id) {
    case 1:
        $res["title"] = "Lenkrad";
        $res["description"] = "Das Lenkrad ist aus edlen Materialien gefertigt";
        $res["image"] = "../assets/img/Bilder/Lenkrad.jpg";
        echo json_encode($res);
    break;

    case 2:
        $res["title"] = "Motor";
        $res["description"] = "Die drei Aussenbordermotoren sorgen für eine schnelle Beschleunigung";
        $res["image"] = "../assets/img/Bilder/aussenbordmotorn.png";
        echo json_encode($res);
    break;

    case 3:
        $res["title"] = "Bug";
        $res["description"] = "Sehen Sie die schöne agronomische form des Bugs";
        $res["image"] = "../assets/img/Bilder/bug.png";
        echo json_encode($res);
    break;

    case 4:
        $res["title"] = "hardtop";
        $res["description"] = "Regen und Sonne macht Ihnen so keine Probleme mehr";
        $res["image"] = "../assets/img/Bilder/Hardtop.jpg";
        echo json_encode($res);
    break;

    case 5:
        $res["title"] = "Ledersitze";
        $res["description"] = "Die besten Ledersitze des Jahres 2021";
        $res["image"] = "../assets/img/Bilder/WeissStuhl1.jpg";
        echo json_encode($res);
    break;
}
?>