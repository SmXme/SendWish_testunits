<!DOCTYPE html>
<html>
	<head>
		<title>TEST GEOLOCALISATION</title>
	</head>
	
	<script src="https://use.fontawesome.com/03de1f66e2.js"></script>
	<body>
		<div>

			
		</div>
		<a id="myBtn" style="margin-left: 40%"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></a><input type="text" name="">
		<script>
			
		document.getElementById("myBtn").addEventListener("click",getLoc);
		function getLoc(){
			if(navigator.geolocation){
			navigator.geolocation.getCurrentPosition(function (position){
			console.log(position.coords.latitude);
			console.log(position.coords.longitude);
			});
		}
		}
		</script>
		<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
	</body>
</html>