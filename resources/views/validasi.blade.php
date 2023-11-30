<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aray Validasi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;900&display=swap" rel="stylesheet">

    <script>
        function validateForm(){
            var nrp = document.getElementById("nrp");
            var msg = document.getElementById("msg");

            //cek hanya invalid
            if(nrp.value==""){
                nrp.focus();
                nrp.placeholder = "Contoh: 5026221194";
                alert("NRP Harus diisi!");
                return false;
            }

            if(isNaN(nrp.value)==true){
                nrp.focus();
                nrp.placeholder = "Contoh: 5026221194";
                alert("Masukkan NRP 10 digit angka, anda memasukkan sebuah huruf");
                return false;
            }

            if(nrp.value.length!=10){
                nrp.focus();
                nrp.placeholder = "Contoh: 5026221194";
                msg.innerHTML = "NRP Harus 10 Digit Angka"
                return false;
            }
        }
    </script>

</head>
<body>
    <div class="container">
        <div class="jumbotron">
            Form validasi adalah mencegah pengiriman data ke server jika ada yang invalid/tidak sesuai contraint database
        </div>
        <script>
            function validate(){
                console.log("baris 25");
                return false;
                console.log("baris 27");
                return true;
                console.log("baris 29");
                return false;
            }
        </script>
        <form action="https://google.com" method="get" onsubmit="return validateForm();" >
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" class="form-control" id="nrp">
                <div id="msg" class="text-danger">

                </div>
            </div>
            <input type="submit" value="DAFTAR" class="btn btn-primary">
            <input type="reset" value="ULANGI" class="btn btn-warning">
        </form>
    </div>

</body>
</html>
