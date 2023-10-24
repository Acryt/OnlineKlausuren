<div class="first-screen">
	<div class="wrapper first-screen__dual">
		<div class="first-screen__part">
			<h1>
				<?php
				if (is_category()) {
					echo single_term_title();
				} else {
					echo '<span>Ghostwriter</span> für Online-Klausuren oder Online-Prüfungen';
				}
				?>
			</h1>
		</div>
		<img class="first-screen__img" src="<?php echo URI . IMG . 'mid/27.svg' ?>" alt="">
	</div>
</div>