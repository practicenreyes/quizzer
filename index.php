<?php include 'database.php'; ?>
<?php 

	// Get total questions

	$STH = $DBH->prepare("SELECT * FROM questions");

	$STH->execute();

	$total = $STH->rowCount();

 ?>
<?php include 'header.php'; ?>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<h2>Test your PHP knowledge</h2>
					<p>This is a multiple choice quiz to test you knowledge of PHP</p>
					<div class="row">
						<div class="col-xs-5">
							<ul class="list-group">
								<li class="list-group-item"><strong>Number of Questions:</strong> <?php echo $total ?></li>
								<li class="list-group-item"><strong>Type:</strong> Multiple Choice</li>
								<li class="list-group-item"><strong>Estimated Time:</strong> <?php echo $total * .5 ?> Minutes</li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<a href="question.php?n=1" class="btn btn-lg btn-primary">Start Quizz!</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include 'footer.php'; ?>