<?php
	$msjUpdate = '';
    if(isset($_POST['updateUser'])){
    	require_once 'model/user.php';
		$id = $_POST['id'];
    	$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$url_instagram = $_POST['url_instagram'];
		$url_facebook = $_POST['url_facebook'];
		$url_youtube = $_POST['url_youtube'];
		$user->setName($name);
		$user->setEmail($email);
		$user->setPhone($phone);
		$user->setUrlInstagram($url_instagram);
		$user->setUrlFacebook($url_facebook);
		$user->setUrlYoutube($url_youtube);
		$user::update($name, $email, $phone, $url_instagram, $url_facebook, $url_youtube, $id);
		$msjUpdate = 'El usuario ha sido modificado';
    }
?>