<section id="faq" class="faq">
	<div class="wrapper">
		<h2>FAQ zur Ghostwriting Online-Klausur</h2>
		<p class="center">Bitte bedenken Sie, dass auch eine schnelle und professionelle Online-Hilfe für die Prüfung
			keine
			Garantie für eine hervorragende Note ist, wenn die Arbeit mündlich verteidigt und erläutert werden muss. Von
			Ihnen wird verlangt, dass Sie die Grundlagen des Fachs kennen, die Notation der Formeln verstehen, sich Ihrer
			Fähigkeiten sicher sind, die wichtigsten Lehrbücher nennen können (ggf. Formeln und Definitionen nachschlagen)
			usw.</p>
		<div class="faq__cont">
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq01">
				<label class="faq__question" for="faq01">Wo kann ich etwas über Autoren lesen?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<?php
			foreach (carbon_get_theme_option('cf_faq_accrd') as $k => $v) {
				foreach ($v['cf_faq_qa'] as $kt => $vt) {
					?>
					<div class="faq__item">
						<input class="faq__check" type="checkbox" name="faq" id="<?php echo $k . $kt ?>">
						<label class="faq__question" for="<?php echo $k . $kt ?>">
							<?php echo $vt['cf_faq_quest']; ?>
						</label>
						<div class="faq__answer">
							<div class="faq__item-cont"><?php echo $vt['cf_faq_answer']; ?></div>
						</div>
					</div>
					<?php
				}
			}
			?>
			<!-- <div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq02">
				<label class="faq__question" for="faq02">Was ist eine Online Klausur?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq03">
				<label class="faq__question" for="faq03">Warum schreibt man Klausuren?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq04">
				<label class="faq__question" for="faq04">Wie schreibe ich gute Klausuren?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq05">
				<label class="faq__question" for="faq05">Wie kann ich eine Online-Prüfung bestehen?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq06">
				<label class="faq__question" for="faq06">Wie funktioniert die Klausurhilfe?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div>
			<div class="faq__item">
				<input class="faq__check" type="checkbox" name="faq" id="faq07">
				<label class="faq__question" for="faq07">Wie teuer ist das Nutzen von Ghostwritern für Online-Prüfungen?</label>
				<div class="faq__answer">
					<p>Sie können eine unverbindliche Anfrage stellen und unsere Manager nennen Ihnen weitere geeignete
						Autoren für Ihr Anliegen. Über Ghostwriter und deren Arbeitsweise können Sie sich auch auf der <a
							href="https://ug-gwc.de/unsere-autoren/">https://ug-gwc.de/unsere-autoren/</a> informieren.</p>
				</div>
			</div> -->
		</div>
	</div>
</section>