<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>

			<div class="s-12 l-9">
				<div class="box">
					<section>
						<article role="line">
							<header>
								<h2><?php $plxShow->lang('ERROR'); ?></h2>
							</header>
							<section>
								<p><?php $plxShow->erreurMessage(); ?></p>
							</section>
						</article>
					</section>
				</div>

<?php include 'footer.php'; ?>
