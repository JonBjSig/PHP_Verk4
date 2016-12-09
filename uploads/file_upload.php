<?php include './includes/title.php';?>
<?php
	// set the maximum upload size in bytes
	$max = 3000;
	if (isset($_POST['upload'])) {
		// define the path to the upload folder
		$destination = '/upload_test/';
		require_once '../PhpSolutions/File/Upload.php';
		try {
			$loader = new Upload($destination);
			$loader->setMaxSize($max);
			$loader->upload();
			$loader->allowAllTypes(false);
			$result = $loader->getMessages();
		} catch (Exception $e) {
			echo $e->getMessage();
		}
}
?>
<!DOCTYPE HTML>
<header>
    <title>verk2<?php echo "&#8212;{$title}"; ?></title>
</header>
<body>
	<p>This is the upload page!</p>
    <p><?php require './includes/menu.php'; ?></p>
	<p>
		<?php
			if (isset($result)) {
				echo '<ul>';
				foreach ($result as $message) {
					echo "<li>$message</li>";
			}
				echo '</ul>';
			}
		?>
		<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
			<p>
				<label for="image">Upload image:</label>
				<input type="file" name="image[]" id="image" multiple>
			</p>
			<p>
				<input type="submit" name="upload" id="upload" value="Upload">
			</p>
		</form>
		<pre>
			<?php
				
			?>
		</pre>
	</p>
</body>
<footer>
	<?php require './includes/footer.php'; ?>
</footer>