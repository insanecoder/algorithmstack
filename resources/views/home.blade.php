<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic AlgorithmStack Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <link rel="stylesheet" href="/css/style.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<!-- What is container-fluid  !-->

<div class="container-fluid">
	<nav class="navbar navbar-inverse">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	        </button>
	        <a href="#" class="navbar-brand">Algorithm Stack</a>
	    </div>
	    <!-- Collection of nav links, forms, and other content for toggling -->
	    <div id="navbarCollapse" class="collapse navbar-collapse">
	        <ul class="nav navbar-nav">
	            <li class="active"><a href="#">Home</a></li>
	            <li><a href="#">Profile</a></li>
	            <li class="dropdown">
	                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
	                <ul class="dropdown-menu">
	                    <li><a href="#">Inbox</a></li>
	                    <li><a href="#">Drafts</a></li>
	                    <li><a href="#">Sent Items</a></li>
	                    <li class="divider"></li>
	                    <li><a href="#">Trash</a></li>
	                </ul>
	            </li>
	        </ul>
	        <form class="navbar-form navbar-right">
	            <div class="input-group">
	                <input type="text" class="form-control" placeholder="Search">
	                <span class="input-group-btn">
	                    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	                </span>
	            </div>
	        </form>
	        <ul class="nav navbar-nav navbar-right">
	            <li><a href="#">Login</a></li>
	        </ul>
    	</div>
	</nav>

	<div class="row">
		<div class="col-md-2 mt2">
			<div class="panel-group">

				  	<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#demo_java">Java</a>
					      </h4>
					    </div>

						<div id="demo_java" class="collapse">
							<ul class="list-group">
							  <li class="list-group-item">Thread</li>
							  <li class="list-group-item">Second item</li>
							  <li class="list-group-item">Third item</li>
							</ul>
						</div>
					</div>



					<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" href="#demo_python">Python</a>
					      </h4>
					    </div>

						<div id="demo_python" class="collapse">
							<ul class="list-group">
							  <li class="list-group-item">Thread Python</li>
							  <li class="list-group-item">Second item</li>
							  <li class="list-group-item">Third item</li>
							</ul>
						</div>
					</div>



			</div>
		</div>

		<div class="col-md-8">
			<div class="panel panel-default">
			  <div class="panel-body">
			  	<h1>Greedy Algo</h1><br>
			  	asgdjhadjhsabdfjasdf
			  	gdfgdsfgsdfgsdfg
			  	dfgdsfgsdfgsdf
			  	dfgsdfgdsfgsdfgsdgdf
			  </div>
			</div>


			<div class="panel panel-default">
			  <div class="panel-body">
			  	<h1>Greedy Algo</h1><br>
			  	asgdjhadjhsabdfjasdf
			  	gdfgdsfgsdfgsdfg
			  	dfgdsfgsdfgsdf
			  	dfgsdfgdsfgsdfgsdgdf
			  </div>
			</div>

		</div>

		<div class="col-md-2 mt2 bg-info text-center" style="height: 150px;">
			This is an ad
		</div>

	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>