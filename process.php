<?php include 'database.php' ?>
<?php session_start(); ?>
<?php 

	if (!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	}

	if (isset($_POST['submit'])) {
		$number = $_POST['number'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		$total = $_POST['total'];

		$STH = $DBH->prepare("SELECT * FROM choices WHERE question_number = :number AND is_correct=1");
		$STH->bindValue(':number', $number);

		$STH->execute();

		$result = $STH->fetch(PDO::FETCH_ASSOC);

		$correct_choice = $result['id'];

		if ($correct_choice == $selected_choice) {
			$_SESSION['score']++;
		}

		if ($number == $total) {
			header("Location: final.php");
			exit();
		} else {
			header("Location: question.php?n=".$next);
		}

	}

 ?>