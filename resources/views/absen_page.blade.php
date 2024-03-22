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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="mx-auto col-lg-4 my-3">
            @if (session('pesan'))
                <div class="alert alert-success" role="alert">
                    <strong><i class="bi-bell"></i></strong> {{ session('pesan') }}
                </div>
            @endif
            <form action="{{ url('presensi') }}" method="post">
                @csrf
                <div id="my_camera" class="mx-auto" style="width:320px; height:240px;"></div>
                <input name="foto" required id="hasil" type="hidden" value="">
                <div class="d-flex justify-content-around mt-3">
                    <button type="button" onclick="batal()" class="btn btn-danger"><i
                            class="bi-arrow-counterclockwise"></i></button>
                    <button type="button" onclick="ambil_foto()" class="btn btn-success"><i
                            class="bi-camera"></i></button>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Pilih Keterangan</label>
                    <select required class="form-select" name="keterangan">
                        <option selected disabled>Select one</option>
                        <option value="masuk">Masuk</option>
                        <option value="keluar">Keluar</option>
                    </select>
                </div>
                <input name="lokasi" type="hidden" id="lokasi" required>
                <div style="height: 180px" id="map"></div>
                <button type="submit" class="btn btn-primary float-end my-3"><i class="bi-send"></i> Send</button>
            </form>
            <a href="{{ url('dashboard') }}" class="btn btn-warning bg-gradient mt-3">
                Dashboard
            </a>
        </div>
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
        Webcam.set({
            flip_horiz: true
        })
        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function(data_uri) {
                document.getElementById('my_result').innerHTML = '<img src="' + data_uri + '"/>';
            });
        }

        function ambil_foto() {
            Webcam.snap(function(data_uri) {
                document.getElementById('hasil').value = data_uri;
                Webcam.freeze()
            });
        }

        function batal() {
            document.getElementById('hasil').value = "";
            Webcam.unfreeze()
        }
    </script>
    <script>
        var map = L.map('map').setView([-2.966970, 104.748322], 18);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var circle = L.circle([-2.966970, 104.748322], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 20
        }).addTo(map);


        // lokasi pengguna

        if (navigator.geolocation) {
            var lokasi = navigator.geolocation.getCurrentPosition(tampilkanLokasi);
        } else {
            alert("berikan izin lokasi perangkat anda");
        }


        function tampilkanLokasi(position) {
            var marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
            let lokasi = document.getElementById('lokasi');
            lokasi.value = position.coords.latitude + ',' + position.coords.longitude
        }
    </script>
</body>

</html>
