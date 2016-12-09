<?php include './includes/title.php';?>
<?php
	#use classes\fileupload;
	// set the maximum upload size in bytes
	$max = 1920 * 1080;
	if (isset($_POST['upload'])) {
		// define the path to the upload folder
		$destination = './upload_test/';
		require_once './classes/fileupload.php';
		try {
			$loader = new fileupload($destination);
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
		
		<?php
			try {
				session_start();
				$name = $_SESSION['name'];
			}
			catch (exception $e){
				echo 'Please log in before uploading files';
			}
			if (isset($name)) {?>
				<form action="" method="post" enctype="multipart/form-data" id="uploadImage">
					<p>
						<label for="image">Upload image:</label>
						<input type="file" name="image[]" id="image" multiple>
					</p>
					<p>
						<input type="submit" name="upload" id="upload" value="Upload">
					</p>
				</form>
				<form method="post" action="">
				<select name="delpic" id="delpic">
					<option value="">Select an image to delete</option>
						<?php
							$files = new FilesystemIterator('./upload_test');
							$images = new RegexIterator($files,  '/\.(?:jpg|png|gif)$/i');
							foreach ($images as $image) {
								$filename = $image->getFilename();
						?>
					<option value="<?= $filename; ?>"><?= $filename; ?></option>
					<?php } ?>
				</select>
				<p>
					<input name="send" type="submit" value="DELETE">
				</p>
				</form>
					<?php
					if (isset($_POST['delpic'])){
						try{
							$delpic = $_POST['delpic'];
							unlink('./upload_test/'.$delpic);
							echo 'File deleted: '.$delpic;
							unset($_POST['delpic']);
							header("Refresh:0");
						}
						catch (exception $e){
							echo 'Failed to delete file';
						}
					}
				?>

			<?php }
			else {
				echo 'Please log in before uploading files';
			}
		?>
	</p>
	<p>

	</p>
</body>
<footer>
	<?php require './includes/footer.php'; ?>
</footer>