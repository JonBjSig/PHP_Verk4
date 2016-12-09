<?php include './includes/title.php';?>
<!DOCTYPE HTML>
<header>
    <title>verk2<?php echo "&#8212;{$title}"; ?></title>
</header>
<main>
	<p>This is the log in page!</p>
    <p><?php require './includes/menu.php'; ?></p>
	<p><?php 
		if (!isset($_POST['name'])){
			include './includes/form.php'; 
		}
		else{
			$user = trim($_POST['name']);
			htmlspecialchars($user, ENT_QUOTES, 'UTF-8') . ' ' ;
			#$user = $_POST['name'];
			echo '<p>Greetings and salutations esteemed member!</p>';
			session_start();
			$_SESSION['name'] = $user;
		}
		?></p>
</main>
<body>
    <p>VERKEFNI 2!</p>
</body>
<footer>
	<?php require './includes/footer.php'; ?>
</footer>