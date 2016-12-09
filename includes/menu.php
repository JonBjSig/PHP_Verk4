<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<p><?php if ($currentPage != 'index.php') {echo '<a href="index.php">Home</a>';} else {echo 'Home';} ?></p>
<p><?php if ($currentPage != 'login.php') {echo '<a href="login.php">Log in</a>';} else {echo 'Log In';} ?></p>
<p><?php if ($currentPage != 'signup.php') {echo '<a href="signup.php">Sign Up</a>';} else {echo 'Sign Up';} ?></p>
<p><?php if ($currentPage != 'books.php') {echo '<a href="books.php">Books</a>';} else {echo 'Books';} ?></p>
<p><?php if ($currentPage != 'file_upload.php') {echo '<a href="file_upload.php">Upload</a>';} else {echo 'File Upload';} ?></p>