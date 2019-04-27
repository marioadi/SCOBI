<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title>SCOBI</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Tabela -->
    <link rel="stylesheet" href="datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<body>
	<!-- Inicio Header -->
	<div class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="col-xs-12 col-sm-6">
						<img class="pull-left" src="img/Logo-AST.png" width="50" height="50" />
					</div>
					<div class="col-xs-12 col-sm-6">
						<p class="text-right">SCOBI</p>
						<small class="pull-right">Sistema de Gerenciamento de bibliotecas</small>
					</div>
				</div>		
			</div>
		</div>
	</div>
	<!-- Fim Header -->
	<!-- Inicio Busca -->
	<!-- <div class="container mar-top-40 mar-bot-40">
		<div class="row">
	        <div class="col-sm-6 col-sm-offset-3">
	            <div id="custom-search-input">
	                <div class="input-group col-md-12">
	                    <input type="text" class="form-control" placeholder="Buscar" />
	                    <span class="input-group-btn">
	                        <button class="btn" type="button">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
	                </div>
	            </div>
	        </div>
		</div>
	</div> -->
	<!-- Fim Busca -->
	<!-- Inicio Tabela -->
	<div class="container container-table mar-top-50">
		<div class="table-responsive">
				<table id="example1" class="table table-hover table-bordered table-mod" 
				style="box-shadow: 0 3px 0px 0 rgba(0, 0, 0, 0.1), 0 0 5px 0 rgba(0, 0, 0, 0.19);">
					<thead>
						<tr class="active">
							<th> Assunto </th>
							<th> Título</th>
							<th> Autor </th>
							<th> CDD </th>
							<th> Cutter </th>
							<th> ISBN </th>
							<th> Editora </th>
							<th> Notas </th>
							<th> Serie </th>
							<th> Referencias </th>
							<th> Remissivas </th>
						</tr>	
					</thead>

					<tbody>
						<?php
						$sql_livros = $pdo->query("SELECT ASSUNTO, TITULO, AUTOR, CDD, CUTTER, ISBN, EDITORA, NOTAS, SERIE, REFERENCIAS,REMISSIVAS FROM consulta_livros LIMIT 0,10");
							if($sql_livros->rowCount() > 0){
								foreach ($sql_livros->fetchAll() as  $livros) {
									$assunto = $livros['ASSUNTO'];
									$titulo = $livros['TITULO'];
									$autor = $livros['AUTOR'];
									$cdd = $livros['CDD'];
									$cutter = $livros['CUTTER'];
									$isbn = $livros['ISBN'];
									$editora = $livros['EDITORA'];
									$notas = $livros['NOTAS'];
									$serie = $livros['SERIE'];
									$referencia = $livros['REFERENCIAS'];
									$remissiva = $livros['REMISSIVAS'];				
						?>
						<tr>
							<td> <?php echo $assunto; ?> </td>
							<td> <?php echo $titulo; ?> </td>
							<td> <?php echo $autor; ?> </td>
							<td> <?php echo $cdd; ?> </td>
							<td> <?php echo $cutter; ?> </td>
							<td> <?php echo $isbn; ?> </td>
							<td> <?php echo $editora; ?> </td>
							<td> <?php echo $notas; ?> </td>
							<td> <?php echo $serie; ?> </td>
							<td> <?php echo $referencia; ?> </td>
							<td> <?php echo $remissiva; ?> </td>
						</tr>
						<?php
								}
							}
						?>
					</tbody>
				</table>	
		</div>
	</div>
	<!-- Fim Tabela -->
	<!-- Inicio Footer -->
	<!-- <div class="footer">
		<p id="text-footer" class="text-center"> AST Solutions &copy; - <small> MarioDev</small></p>
	</div> -->
	<!-- Fim Footer -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Tabela -->
    <script src="datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

	<script>
	  $(document).ready(function() {
		$('#example1').DataTable( {
		  'paging'    : true,
		  'lengthChange': true,
		  'searching'   : true,
		  'ordering'    : true,
		  'info'        : true,
		  'autoWidth'   : false,
		} );		
	} );
	</script>

</body>
</html>