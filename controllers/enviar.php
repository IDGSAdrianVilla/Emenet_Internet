<?php
	if (!empty($_POST['nombre']) && !empty($_POST['celular']) && !empty($_POST['localidad']) && !empty($_POST['mensaje'])) {
		$mensaje = 'Mi nombre es: '.$_POST["nombre"].'%0AMi n&uacute;mero celular es: '.$_POST["celular"].'%0ASoy de la localidad de: '.$_POST["localidad"].'%0A%0AMi duda es: '.$_POST["mensaje"];
		header('Location: https://wa.me/527225311131?text='.$mensaje);
	}else{
		if (!empty($_POST['nombre']) && !empty($_POST['localidad']) && !empty($_POST['mensaje'])) {
			$mensaje = 'Mi nombre es: '.$_POST["nombre"].'%0ASoy de la localidad de: '.$_POST["localidad"].'%0A%0AMi duda es: '.$_POST["mensaje"];
			header('Location: https://wa.me/527225311131?text='.$mensaje);
		}else{
			if (!empty($_POST['nombre']) && !empty($_POST['mensaje'])) {
				$mensaje = 'Mi nombre es: '.$_POST["nombre"].'%0A%0AMi duda es: '.$_POST["mensaje"];
				header('Location: https://wa.me/527225311131?text='.$mensaje);
			}else{
                $mensaje = '';
                header('Location: https://wa.me/527225311131?text='.$mensaje);
			}
		}
	}
?>