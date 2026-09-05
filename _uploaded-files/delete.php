<?php

    $fileRecibe = !empty($file = $_GET['file']);
    $flag = $_GET['flag'];

    if ($fileRecibe) {
        if (file_exists($file) && $flag == "true"){
            unlink($file);
            $txt = "Se ha eliminado correctamente el archivo: ". $file;
        } elseif (!file_exists($file)) {
            $txt ="No se ha encontrado en el servidor el archivo: ". $file;
        }else{
            $deleteFile = true;
        }
    } else {
        $txt = "Ningun archivo para borrar";
    }

?>
<style>
    .container {
    width: 500px;
    height: fit-content;
    border: 1px solid;
    padding: 100px;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    }

    .container img {
        margin-bottom: 50px;
    }
</style>
<div class="container">
    <img src="../img/muntanto-logo-dark-mode-text-uix-ux-web-desing.svg" alt="Mutanto"  title="Mutanto">
    <div>
        <?php if($deleteFile){ ?>
        <form id="form" name="form" action="delete.php?file=<?php echo( $_GET['file'])?>&flag=true" method="post">
            <span>Desea elimnar el archivo: <?php echo( $_GET['file'])?> ?</span><br> 
            <button type="submit" id="butt" name="butt"  value="Submit">Si</button>       
        </form>
        <?php } ?>
    </div>
    <span><?php echo($txt)?></span>
</div>