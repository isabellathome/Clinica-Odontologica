<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
 
	<script src="src/components/sweetalert.js"></script>
</head>
<body>
 
	<script>
		function alerta(type, title, mensagem){
			Swal.fire({
			  type: type,
			  title: title,
			  text: mensagem,
			  showConfirmButton: false,
			  timer: 1500
			});
		}
 
		alerta("success", false, "Testando..");
	</script>

</body>
</html>