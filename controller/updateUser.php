<?php
	$msjUpdate = '';
        $msjUpdateModal = '';
        require_once 'model/user.php';
        
    if(isset($_POST['updateUser'])){
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
    
    if(isset($_POST['updateUserModal'])){
        $temp = tmpfile();
            $dir_subida = '/opt/lampp/htdocs/cheyproducciones/upload/';
            $target_file = $dir_subida . basename($_FILES["fileToUploadImg"]["name"]);
            $id = $_POST['id'];
            $active_modal = $_POST['visible_modal'];
            $title_modal = $_POST['titleModal'];
            $text_modal = $_POST['textModal'];
            $user->setActivateModal($active_modal);
            $user->setTextModal($text_modal);
            $user->setTitleModal($title_modal);
            $fileType = pathinfo($target_file, PATHINFO_EXTENSION);
            if ($fileType == 'jpg' or $fileType == 'png') {
                if (move_uploaded_file($_FILES['fileToUploadImg']['tmp_name'], $target_file)) {
                    $msjUpdateModal = "Se a creado el modal";
                    $modal_url = '/cheyproducciones/upload/' . basename($_FILES["fileToUploadImg"]["name"]);
                    $modal_save = Users::createModal($id, $active_modal, $title_modal, $text_modal, $modal_url);
                } else {
                    $msjUpdateModal = 'Error al crear el modal';
                    echo $_FILES['fileToUploadImg']['error'];
                }
            } else {
                $msjCdUploads = 'Error subir solo videos de formato mpg, avi, mp4';
            }
}
    
?>