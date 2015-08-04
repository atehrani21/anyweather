<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	
	<title>AnyWeather - Get Weather Anywhere</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		html,body{
			height:100%;
			margin:0;
			padding:0;
		}
		.container{
			background-image:url("background.jpg");
			width:100%;
			height:100%;
			background-size:cover;
			background-position:center;
			color:#FFFFFF;
			padding-top:100px;
		}
		.center{
			text-align:center;
		}
		p{
			padding-top:15px;
			padding-bottom:15px;
		}
		.button{
			margin-top:20px;
			margin-bottom:20px;
		}
		.alert{
			display:none;
		}
	</style>
	
  </head>
  <body>
  
	<div class="container">
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3 center">
				
					<h1>AnyWeather - Get Weather Anywhere</h1>
					<p class="lead">Enter your city below to get the forecast!</p>
					<form>
						<div class="form-group">
							<input type="text" name="city" class="form-control" id="city" placeholder="Ex. New York, London, Paris..." />
						</div>
						<input id="findMyWeather" type="submit" name="submit" value="Find My Weather" class="button btn btn-success btn-lg" />
					</form>
					<div id="success" class="alert alert-success">
						Success
					</div>
					<div id="fail" class="alert alert-danger">
						Could not find weather data for that city. Please try again.
					</div>
					<div id="nocity" class="alert alert-danger">
						Please enter a city.
					</div>
				
			</div>
			
		</div>	
	
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> 
	
	<script>
		$(".contentContainer").css("min-height",$(window).height());
		
		$("#findMyWeather").click(function(event){
			event.preventDefault();
			$(".alert").hide();
			if($("#city").val()!=""){
			$.get("scraper.php?city="+$("#city").val(), function(data){
				if(data==""){
					$("#fail").fadeIn();
				}else{
					$("#success").html(data).fadeIn();
				}
			});
			}	else{
				$("#nocity").fadeIn();
			}
		});
	</script>
  </body>
</html>