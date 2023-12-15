<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['template'])){
        $selectedTemplate = $_POST['template'];
        $configFile = 'config.php';
        $configContents = file_get_contents($configFile);

        $newContents = preg_replace("/\\\$saturs\s*=\s*'template\/[^']*'/", "\$saturs = 'template/$selectedTemplate'", $configContents);
        
        file_put_contents($configFile, $newContents);
    }
}
    header('Location: template_changed.php');
    exit;
?>