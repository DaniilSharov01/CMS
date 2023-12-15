<!DOCTYPE html>
<html>
    <head>
        <title>Change template</title>
    </head>
    <body>
        <?php
        include 'config.php';
        ?>
        <h2>Template:<i> <?php echo $saturs; ?> </i></h2>
        <h2>Template list</h2>
        <form method="POST" action="update_cfg.php">
            <label for="template">Choose template: </label>
            <select name="template" required>
                <?php
                $templateFiles = glob('template/*.php');
                
                foreach($templateFiles as $templateFile){
                    $templateName = basename($templateFile);
                    echo "<option value='$templateName'> $templateName </option>";
                }
                ?>
            </select> <br>
            <input type="submit" value="Change template in cfg file">
        </form>
    </body>
</html>


