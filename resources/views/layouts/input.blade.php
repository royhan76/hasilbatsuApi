<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA</title>
</head>

<body>

    <div class="container">
        <h1>INPUT DATA</h1>
        {{-- <h1>Membuat Form dengan Bootstrap | www.malasngoding.com</h1> --}}
        <form class="form-horizontal" action="/create" method="POST" action="/action_page">
            
            <input type="hidden", name="_token", value="{{ csrf_field() }}">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Judul:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Deskripsi:</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" id="deskripsi" cols="90" rows="7"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Pertanyaan:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama">Jawaban:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat">Referensi:</label>
                <div class="col-sm-10">
                    <textarea name="deskripsi" id="deskripsi" cols="90" rows="7"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-danger">Simpan</button>

        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
