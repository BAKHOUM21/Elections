<?php 

	include '../modele.php';
	$model = new Election();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id);

	if ($delete) {
		echo "<script>alert('delete successfully');</script>";
		echo "<script>window.location.href = 'listeCandidat.php';</script>";
	}

 ?>