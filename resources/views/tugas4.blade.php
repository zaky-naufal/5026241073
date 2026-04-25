<!DOCTYPE html>
<html lang="en">

<head>
    <title>Survei Keracunan MBG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Website Pelaporan Makanan MBG </h1>
        <p>Silahkan isi identitas anda dan keluhan di bawah ini</p>

        <div class="form-group">
            <label for="usr">Nama Lengkap</label>
            <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="pwd">Asal Sekolah</label>
            <input type="password" class="form-control" id="pwd">
        </div>

        <div class="form-group">
            <label for="comment">Detail Keluhan</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>

         <h3>Lampirkan gambar menu anda </h3>
        <div class="form-group">
            <input type="file" class="form-control-file border" name="file">

            <h3>
                Apa lauk anda hari itu?
            </h3>
        </div>

        <div class="checkbox">
            <label><input type="checkbox" value="">Ayam</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" value="">Ikan </label>
        </div>

        <div class="checkbox">
            <label><input type="checkbox" value="">Tahu Tempe </label>
        </div>
        <div class="checkbox disabled">
            <label><input type="checkbox" value="" disabled>Sawit</label>
        </div>


        <h3>
            Apa sayur anda hari itu?
        </h3>


        <form>
            <label class="checkbox-inline">
                <input type="checkbox" value="">Bayam
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="">Kangkung
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="">Timun jelita
            </label>
        </form>

        <div>
            <h3>
                Manakah dari keempat lauk itu yang bermasalah?
            </h3>


            <div class="radio">
                <label><input type="radio" name="optradio" checked>Ayam</label>
            </div>
            <div class="radio">
                <label><input type="radio" name="optradio">Ikan</label>
            </div>

            <div class="radio">
                <label><input type="radio" name="optradio">Tahu tempe</label>
            </div>

            <div class="radio disabled">
                <label><input type="radio" name="optradio" disabled>Sawit</label>
            </div>

            <h3>
                Manakah dari ketiga sayur tersebut yang bermasalah?
            </h3>

            <form>
                <label class="radio-inline">
                    <input type="radio" name="optradio" checked>Bayam
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Kangkung
                </label>
                <label class="radio-inline">
                    <input type="radio" name="optradio">Timun Jelita
                </label>
            </form>
        </div>

        <div class="form-group">
            <h3>Pilih rating menu hari ini : </h3>
            <select class="form-control" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </select>

        </div>
        <div>
        <button type="submit" class="btn btn-primary">Submit</button>


        </div>div>


    </div>





</body>

</html>
