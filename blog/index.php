		<?php require("../header.php"); ?>
            <div class="wrap">
            	
                <?php
					include_once "markdown.php";
					$files = glob('posts/*.{md}', GLOB_BRACE);
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
					}
				?>
                
            </div>
            <hr>
           <?php require("../footer.php"); ?>