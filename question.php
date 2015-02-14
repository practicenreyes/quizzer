<?php include 'database.php' ; ?>
<?php session_start() ; ?>
<?php 

	/*Get question*/

	$number = (int) $_GET['n'];

	$STH = $DBH->prepare("SELECT * FROM questions");
	$STH->execute();
	$total = $STH->rowCount();

	$STH = $DBH->prepare("SELECT * FROM questions WHERE question_number =:number");
	$STH->bindValue(':number', $number);
	$STH->execute();


	$question = $STH->fetch(PDO::FETCH_ASSOC);

	/*Get choices*/

	$STH = $DBH->prepare("SELECT * FROM choices WHERE question_number =:number");
	$STH->bindValue(':number', $number);
	$STH->execute();

?>
<?php include 'header.php'; ?>
	
	<div class="container questions">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="row">
					<div class="panel panel-default">
						<div class="panel-heading">
							Question <?php echo $number ?> of <?php echo $total ?>
						</div>
					</div>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h5><?php echo $question['text']; ?></h5>
						</div>
						<ul class="list-group">
							<form action="process.php" method="post">
								<?php while ($row = $STH->fetch(PDO::FETCH_ASSOC)) { ?>
									<li class="list-group-item">
										<div class="radio">
											<label>
												<input type="radio" name="choice" value="<?php echo $row['id'] ?>"><?php echo $row['text']; ?>
											</label>
										</div>
									</li>
								<?php } ?>
								<li class="list-group-item">
									<div class="text-right">
										<input class="btn btn-primary" type="submit" name="submit" value="Continuar">
										<input type="hidden" name="number" value="<?php echo $number; ?>">
										<input type="hidden" name="total" value="<?php echo $total; ?>">
									</div>
								</li>
							</form>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include 'footer.php'; ?>