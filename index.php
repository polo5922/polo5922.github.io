<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>polo5922 project</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div id="banniere">
      <h1>polo5922 projects</h1>
    </div>
    <div id="MainSceen">
      <ul>
        <?php
        $dir = new DirectoryIterator("project/");
        foreach ($dir as $fileinfo) {
            if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                echo $fileinfo->getFilename().'<br>';
            }
        }
         ?>
        <a href="CodeIdle/index.html"><li>CodeIdle</li></a>
      </ul>
    </div>
  </body>
</html>
