<?php session_start() ?>
<?php include 'header.php'; ?>

	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<h2>You're Done!</h2>
					<p>Congrats! You have completed the test</p>
					<p>Final Score: <?php echo $_SESSION['score'] ; ?></p>
					<div class="row">
						<div class="col-xs-4">
							<a href="question.php?n=1" class="btn btn-lg btn-primary">Take Again</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>