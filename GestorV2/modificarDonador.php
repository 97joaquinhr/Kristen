<?php
    require_once ("modelo.php");
modificarDonador($_POST["ed_email"],$_POST["ed_nom"], $_POST["ed_apellidoP"], $_POST["ed_apellidoM"],$_POST["ed_fechaN"], $_POST["ed_dir"], $_POST["ed_tel"], 'N/A', $_POST["ed_metodoPago"],$_POST["ed_obs"],$_POST["ed_usoCFDI"],$_POST["ed_RFC"]);    header("Location: donadores.php");
    ?>