
			<div class="logo">
				<a href="./../menu.php" class="button-menu"><img src="./../images/SMK-logo.png"></a>
				<h1 class="logo-texte"><span class="Maj-logo">S</span>aint     <br>
					<span class="Maj-logo">M</span>aximilien<br>
					<span class="Maj-logo">K</span>olbe</h1>
			</div>
			
			<nav>
				<ul>
					<?php foreach($header as $line):?>
						<li><a href="<?= $line ;?>" class='button_navigation'><span><?= $buttons[$line]; ?></span></a></li>
					<? endforeach ?>
				</ul>
			</nav>