<!DOCTYPE>
<html>
    <head>
    	<title>Maryland Meshnet</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/icon_16.png">
    </head>
    <body>
    	<div class="center">
        	<?php require("header.php"); ?>
            <div class="sidebar">
            	hai, bitches.
            </div>
            <div class="wrap">
            	<?php
					include_once "blog/markdown.php";
					$files = glob('blog/posts/*.{md}', GLOB_BRACE);
					foreach (array_reverse($files) as $file) {
						$name = substr($file, 6,-3);
						$contents = file_get_contents($file);
						
						$lines = explode("\n", $contents);
						$date = $lines[0];
						$time = $lines[1];
						$author = $lines[2];

						$lines[0] = "";
						$lines[1] = "";
						$lines[2] = "";
						$contents = implode("\n", $lines);
						
						echo '<div class="post" id="'.$name.'">';
						echo '<div class="date">'.$date.'</div>';
						echo '<div class="time">'.$time.'</div>';
						echo Markdown($contents);
						echo '<div class="author">Posted by '.$author.'.</div>';
						echo '</div>';
						break;
					}
				?>
            </div>
            <hr>
            <?php require("footer.php"); ?>
        </div>        
    </body>
</html>