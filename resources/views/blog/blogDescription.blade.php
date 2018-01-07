<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic AlgorithmStack Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{  asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/prettyPhoto.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/unslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template.css') }}" />


</head>
<body>

<div class="container-fluid">
	@include('navHeader')
	<div class="row">
		@include('leftBar')
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<h1>{{$blog->title}}</h1>
					{{$blog->blogContent}}
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
