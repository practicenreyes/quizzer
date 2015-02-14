<?php include 'database.php' ; ?>

<?php include 'header.php' ; ?>

	<div class="container questions">
		<div class="row">
			<div class="col-xs-6 col-xs-offset-3">
				<div class="row">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3>Add A Question</h3>
						</div>
						<ul class="list-group">
							<form class="form-horizontal" action="" method="post">
								<li class="list-group-item">
									<div class="form-group">
										<label for="question_number" class="col-xs-4 control-label">Question Number:</label>
										<div class="col-xs-2">
											<input type="number" class="form-control" name="question_number"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="question_text" class="col-xs-4 control-label">Question Text:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="question_text"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="choice1" class="col-xs-4 control-label">Choice #1:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="choice1"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="choice2" class="col-xs-4 control-label">Choice #2:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="choice2"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="choice3" class="col-xs-4 control-label">Choice #3:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="choice3"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="choice4" class="col-xs-4 control-label">Choice #4:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="choice4"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="choice5" class="col-xs-4 control-label">Choice #5:</label>
										<div class="col-xs-8">
											<input type="text" class="form-control" name="choice5"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<label for="correct_choice" class="col-xs-4 control-label">Correct Choice Number:</label>
										<div class="col-xs-2">
											<input type="number" class="form-control" name="correct_choice"> 
										</div>
									</div>
								</li>
								<li class="list-group-item">
									<div class="form-group">
										<div class="col-xs-offset-2 col-xs-10">
											<input class="btn btn-primary" type="submit" name="submit" value="Submit">
										</div>
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

<?php include 'footer.php' ; ?>