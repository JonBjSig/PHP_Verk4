<?php include './includes/title.php';?>
use classes\book
use classes\book2
<!DOCTYPE HTML>
<header>
    <title>verk2<?php echo "&#8212;{$title}"; ?></title>
</header>
<main>
	<p>This is the books page!</p>
    <p><?php require './includes/menu.php'; ?></p>
	<p><?php include './includes/bookform.php';?></p>
	<?php
		if (isset($_POST['bookname'] and isset($_POST['bookprice'])){
			$bookname = trim($_POST['bookname']);
			$bookprice = trim($_POST['bookprice']);
			htmlspecialchars($bookname, ENT_QUOTES, 'UTF-8') . ' ' ;
			htmlspecialchars($bookprice, ENT_QUOTES, 'UTF-8') . ' ' ;
			if (isset($_POST['bookpublisher']){
				$bookpublisher = trim($_POST['bookpublisher']);
				htmlspecialchars($bookpublisher, ENT_QUOTES, 'UTF-8') . ' ' ;
				$newbook = new book2($bookname, $bookprice, $bookpublisher);
			}
			else{
				$newbook = new book($bookname, $bookpublisher);
				#síðan hægt að gera eitthvað með $newbook
			}
		}
		#svo líka harðkóðað það sem sett var fyrir í verkefninu:
		$efnafraedi = new book('Efnafræði 101', 6000);
		$staerdfraedi = new book('Stærðfræði 503', 5500);
		$islenska = new book('Íslenska 303', 6500);
	?>
</main>
<body>
    <p>VERKEFNI 2!</p>
</body>
<footer>
	<?php require './includes/footer.php'; ?>
</footer>