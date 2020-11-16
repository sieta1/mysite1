<?php
ob_start();
session_start();
require_once '../../connect/connect.php';
if (isset($_GET['logout'])) {
	unset($_SESSION['id']);
	unset($_SESSION['admin']);
	unset($_SESSION['mail']);
	unset($_SESSION['name']);
	return header('Location: login.php');
}

if (isset($_POST['loginForm']))
{

	$mail 			= $_POST['mail'];
	$password 		= md5($_POST['password']);

	$check 			= $db->prepare("SELECT * FROM users
		WHERE mail ='$mail'
		AND password = '$password'
		AND admin = '1'");
	$check->execute();

	if ($check->rowCount() > 0)
	{
		$get 		= $check->fetch(PDO::FETCH_ASSOC);

		$_SESSION['name'] 		= $get['name'].' '.$get['surname'];
		$_SESSION['mail'] 		= $get['mail'];
		$_SESSION['id'] 		= $get['id'];
		$_SESSION['admin'] 		= $get['admin'];
		$_SESSION['date'] 		= $get['date'];
		$result 	= 1;
		return header('Location: ../index.php?result=1');

	}
	else
	{
		$result = 0;
		return header('Location: ../login.php?result=0');
	}
}

if (isset($_POST['updateUser']))
{
	$name = $_POST['name'];
	$id = $_POST['id'];
	$surname = $_POST['surname'];
	$mail = $_POST['mail'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$file = $_POST['file'];

	$update = $db->prepare("UPDATE users SET 
		name 	= :name,
		surname = :surname,
		mail 	= :mail
		WHERE
		id 		= :id");
	$update->execute([
		':name' => $name,
		':surname' => $surname,
		':mail' => $mail,
		':id'   => $id
	]);
	if ($update->rowCount() > 0) {
		return header('Location: ../profil.php?result=1');
	}else
	{
		return header('Location: ../profil.php?result=0');
	}
}
//To delete a user
if (isset($_GET['userId']))
{
	$id = $_GET['userId'];
	$delete = $db->prepare("DELETE FROM users WHERE id = '$id'");
	$delete->execute();
	if ($delete->rowCount() > 0)
	{
		return header('Location: ../users.php?result=1');
	}else{
		return header('Location: ../users.php?result=0');
	}
}

//Edit user..
if (isset($_GET['edit']))
{
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $mail = $_POST['mail'];
    $id = $_POST['id'];
    $check 			= $db->prepare("SELECT * FROM users
		WHERE mail ='$mail'
		AND password = '$password'
		AND admin = '1'");
    $check->execute();
    if ($_GET['edit']) {
        return header('Location: ../edit.php?edit=<?php echo $id; ?>');
    }else
    {
        return header('Location: ../users.php');
    }
}
//Edit user Son..

//To delete a blog
if (isset($_GET['blogId']))
{
    $id = $_GET['blogId'];
    $delete = $db->prepare("DELETE FROM users WHERE id = '$id'");
    $delete->execute();
    if ($delete->rowCount() > 0)
    {
        return header('Location: ../blogs.php?result=1');
    }else{
        return header('Location: ../blogs.php?result=0');
    }
}
?>