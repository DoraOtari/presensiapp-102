<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="mx-auto col-lg-4">
            <div id="my_camera" class="mx-auto" style="width:320px; height:240px;"></div>
            <input id="hasil" type="text" value="">
            <div class="d-flex justify-content-around mt-3">
                <button class="btn btn-danger"><i class="bi-arrow-counterclockwise"></i></button>
                <button onclick="ambil_foto()" class="btn btn-success"><i class="bi-camera"></i></button>
            </div>
        </div>
	    <div id="my_result"></div>
        <a href="javascript:void(take_snapshot())">Take Snapshot</a>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="{{ asset('webcam.js') }}"></script>
    <script language="JavaScript">
		Webcam.attach( '#my_camera' );
		
		function take_snapshot() {
			Webcam.snap( function(data_uri) {
				document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
			} );
		}

        function ambil_foto(){
            Webcam.snap( function(data_uri) {
		    document.getElementById('hasil').value = data_uri;
            Webcam.freeze()
	        } );
        }
	</script>
</body>

</html>
