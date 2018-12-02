			<section class="main-content">
				<div class="description">
					<div id="description">
						<span class="descr-1"><?php echo $lang['description-1'] ?></span><span class="descr-mid">&middot;</span><span class="descr-break"><br /></span><span class="descr-2"><?php echo $lang['description-2'] ?></span>
					</div>
				</div>
				<div class="input-wrapper">
					<form method="post" action="">
						<input type="text" name="url" id="url" class="url divanim-slow" placeholder="<?php echo $lang['placeholder-url'] ?>">
						<button type="button" id="button" class="submit divanim-slow" onclick="shortenurl('<?php echo $lang['loading']; ?>','<?php echo $lang['ready']; ?>')" data-clipboard-text=" "><i id="button-ic" class="icon-unlink"></i></button>
						<div class="ref-buts">
							<button type="button" id="ref-settings" class="ref-settings button-theme divanim-slow"><i id="button-setting" class="icon-cog"></i></button>
							<button type="button" id="ref-reload" class="ref-reload button-theme divanim-slow"><i id="button-reload" class=""></i></button>
						</div>
						<div class="options">
							<input type="text" name="keyword" id="keyword" class="keyword divanim-slow" placeholder="<?php echo $lang['placeholder-key'] ?>">
						</div>
					</form>
				</div>
			</section>