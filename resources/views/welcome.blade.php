<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
		<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
		
		<!-- Scripts -->
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
		<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    </head>
    <body class="p-4">
	<div class="row">
		<div class="col-12">
			<div class="card">
			  <div class="card-body">
				<h3>WELCOME!</h3>
				<p>now is {{ now()->isoFormat("L LTS") }}</p>
				<p>Included:</p>
				<ul>
				<li><a href="https://jquery.com/" target="_blank">jQuery 3.5.1</a></li>
				<li><a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/" target="_blank">BootStrap 4.6</a></li>
				<li><a href="https://datatables.net/" target="_blank">DataTables 1.13.4</a></li>
				</ul>
			  </div>
			   <div class="card-footer text-muted">
			    PHP {{phpversion()}}, Laravel {{app()->version()}}
			  </div>
			</div>
		</div>
	</div>
	<div class="row mt-2">
		<div class="col-12">
			<a href="{{route('download_specs')}}" target="_blank" class="btn btn-info">Download PDF Informazioni tecniche</a>
		</div>
	</div>
	
    </body>
	
</html>
