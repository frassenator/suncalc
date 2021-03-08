<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<title>SunCalc AR</title>
		<link rel="stylesheet" href="css/style.css">
		<!--<script src="js/suncalc-master/suncalc.js"></script>
		<script>
			var timeAndDate = new Date();
			var latitude = 59.345160;
			var longitude = 17.962420;
			var position = SunCalc.getPosition(/*Date*/ timeAndDate, /*Number*/ latitude, /*Number*/ longitude)
			
			console.log(position);
		</script>-->
		<!--<script src="js/src/gps-camera-debug.js"></script>
		<script src="js/src/gps-camera-position.js"></script>
		<script src="js/src/gps-camera-rotation.js"></script>
		<script src="js/src/gps-entity-place.js"></script>-->
		<script src='https://aframe.io/releases/0.9.2/aframe.min.js'></script>
		<script src="https://raw.githack.com/jeromeetienne/AR.js/master/aframe/build/aframe-ar.min.js"></script>
		<script src="https://raw.githack.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"></script>
		<script>THREEx.ArToolkitContext.baseURL = 'https://raw.githack.com/jeromeetienne/ar.js/master/three.js/'</script>
	</head>
	<body>		
			<a-scene vr-mode-ui="enabled: false" embedded arjs="sourceType: webcam; debugUIEnabled: true;">
				<a-text value="Hej fisen." look-at="[gps-camera]" color="#000000" scale="120 120 120" gps-entity-place="latitude: 59.345160; longitude: 17.962420;"></a-text>
				<a-camera gps-camera rotation-reader> </a-camera>
			</a-scene>
	</body>
</html>