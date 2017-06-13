<?php
	include_once "php/common/base.php";
    $pageTitle = "Reset Your Password";
?>

		<h2>Reset Your Password</h2>
		<p>Enter the email address you signed up with and we'll send 
		you a link to reset your password.</p>

		<form action="db-interaction/users.php" method="post">
			<div>
				<input type="hidden" name="action"
					value="resetpassword" />
				<input type="text" name="username" id="username" />
				<label for="username">Email</label><br /><br />
				<input type="submit" name="reset" id="reset"
					value="Reset Password" class="button" />
				<input type="hidden" name="token"
					value="<?php echo $_SESSION['token']; ?>" />
			</div>
		</form>
<?php
	include_once "php/common/close.php";
?>
