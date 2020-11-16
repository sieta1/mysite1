<?php
require_once 'connect/connect.php';
?>
<link rel="stylesheet" type="text/css" href="insert.css">



<?php
if (isset($_POST['yorumForm']))
{
	$blog_id = $_POST['blog_id'];
	$user_id = $_POST['user_id'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];

	$yourmEkle = $db->prepare('INSERT INTO comments(blog_id, user_id, subject, text) VALUES(?, ?, ?, ?)');
	$kontrol = $yourmEkle->execute([$blog_id, $user_id, $subject, $text]);

	echo $kontrol ? 'Başarılı' : 'Hata';
}
elseif (isset($_POST['cevapForm']))
{
	$comment_id = $_POST['comment_id'];
	$user_id = $_POST['user_id'];
	$subject = $_POST['subject'];
	$text = $_POST['text'];

	$ansEkle = $db->prepare('INSERT INTO answer(comment_id, user_id, subject, text) VALUES(?, ?, ?, ?)');
	$ansKontrol = $ansEkle->execute([$comment_id, $user_id, $subject, $text]);

	echo $ansKontrol ? 'Başarılı' : 'Hata';
}
	?>

<?php
	$yorumlarr = $db->prepare("SELECT * FROM comments");
	$yorumlarr->execute();
	while ($yorumm = $yorumlarr->fetch(PDO::FETCH_ASSOC))
	{ 
?>
		<ul>
			<li><?php echo $yorumm['subject']; ?><a href="insert.php?id_y=<?php echo $yorumm['id']; ?>">dsdsa</a></li>
			<ul>
<?php
					$cek_id = $yorumm['id'];
					$cevapToo = $db->prepare("SELECT * FROM answer WHERE comment_id = $cek_id ");
					$cevapToo->execute();
					while ($cevapTooo = $cevapToo->fetch(PDO::FETCH_ASSOC))
					{ 
?>
							<li><?php echo $cevapTooo['subject']; ?></li>
<?php
					}
?>
			</ul>
		</ul>
<?php	
	}
?>
<?php
		$yorumID = '';
		if (isset($_GET['id_y']))
		{
			$yorumID = $_GET['id_y'];
			$buttonName = 'cevapForm';
		}
		else
		{
			$buttonName = 'yorumForm';
		}
?>

	<form method="POST">
		<input type="hidden" name="comment_id" value="<?php echo $yorumID ?>">
		<input type="hidden" name="blog_id" value="1"><br/>
		<input type="hidden" name="user_id" value="1"><br/>
		<input type="text" name="subject" value="PHP SİETSİ Ör."><br/>
		<textarea name="text" rows="5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea><br/>
		<button name="<?php echo $buttonName; ?>" type="submit">Gönder</button>
	</form>