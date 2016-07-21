<?php include 'app/include/header.php'; ?>

<form id='login' action='#' method='post'>
	<div id="frame" name="frame">
		<div id="content_middle_align" name="content_middle_align">
			<table align="center" valign="middle" style="border: 1px solid;">
				<tr>
					<td><h2>Login</h2>
					</td>
				</tr>
				<tr>
					<td><label for='lblmessage' class='validation_message'><?=$this->data['validation_message']?></label>
					</td>
				</tr>
				<tr>
					<td><label for='lblusername'>Username</label> <font color='red'>*</font>
					</td>
				</tr>
				<tr>
					<td><input type='text' id='username' name='username' value='<?=$this->data["username"]?>' maxlength='50' />
					</td>
				</tr>
				<tr>
					<td>&nbsp;
					</td>
				</tr>
				<tr>
					<td><label for='lblpassword'>Password</label> <font color='red'>*</font>
					</td>
				</tr>
				<tr>
					<td><input type='password' id='password' name='password' maxlength='50' />
					</td>
				</tr>
				<tr>
					<td>&nbsp;
					</td>
				</tr>
				<tr>
					<td><input type='checkbox' id='remember' name='remember' <?=$this->data["remember"] ?> />
						<label for='lblremember'>Remember me</label>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
						<a href="#">Lost your password<a>
					</td>
				</tr>
				<tr>
					<td>&nbsp;
					</td>
				</tr>
				<tr>
					<td>
						<input type='submit' id='submit' name='submit' value='Login' />
						<input type='hidden' name='attemp' value='<?=$this->data["attemp"]?>' />
					</td>
				</tr>
				<tr>
					<td>&nbsp;
					</td>
				</tr>
			</table>
		</div>	
	</div>
</form>

<?php include 'app/include/footer.php'; ?>