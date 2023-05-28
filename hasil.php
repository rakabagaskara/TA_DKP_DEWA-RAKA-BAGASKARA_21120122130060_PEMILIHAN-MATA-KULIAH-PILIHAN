<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas Akhir Praktikum DKP</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
    </head>

    <body>
      <header>
            <h2 class="text-center">
                Tugas Akhir Praktikum DKP
                <img src="https://pelajarinfo.id/wp-content/uploads/2021/06/Universitas-Diponegoro-Semarang-Logo.png" alt="Universitas Diponegoro" class="logo" width="50px" height="50px" style="position: absolute; top: 16px; right: 38px;">
            </h2>
      </header>
      <div class="wrapper">
            <div class="container bg-white">
                  <h2 class="container-header text-center">Hasil Data</h2>
                  <table class="form">
                    <tr>
                      <td>Nama</td> 
                      <td>: <?php 
                        $nama = $_POST['nama'];
                        if (preg_match('/^[A-Za-z\s]+$/', $nama)) {
                          echo $nama;
                          } else {
                          echo "Invalid data";
                        }
                    ?></td> 
                    </tr>
                    <tr>
                      <td>NIM</td> 
                      <td>: <?php 
                        $nim = $_POST['nim'];
                        if (ctype_digit($nim) && strlen($nim) <= 14) {
                          echo $nim;
                          } else {
                          echo "Invalid data";
                        }
                    ?></td> 
                    </tr>
                    <tr>
                      <td>Jurusan</td> 
                      <td>: <?php 
                        $jurusan = $_POST['jurusan'];
                        if (preg_match('/^[A-Za-z\s]+$/', $jurusan)) {
                          echo $jurusan;
                          } else {
                          echo "Invalid data";
                        }
                    ?></td> 
                    </tr>
                    <tr>
                      <td>Semester</td> 
                      <td>: <?php 
                        $Semester = $_POST['Semester'];
                        if ($Semester >= 1 && $Semester <= 7) {
                          echo "Semester ".$Semester;
                        } else {
                          echo "Invalid data";
                        }
                    ?></td> 
                    </tr>
                    <tr>
                      <td>
                        Mata kuliah pilihan yang anda pilih adalah : <br>
                        <?php 
                        if (isset($_POST['matkul'])) {
                          $matkul = $_POST['matkul'];
                          if (is_array($matkul)) {
                            foreach ($matkul as $m) {
                              echo $m."<br/>";
                            }
                          } else {
                            echo $matkul;
                          }
                        }
                        ?>
                      </td>
                    </tr>
                  </table>
                  <button onclick="goBack()" class="btn btn-primary">Back</button>
                  <script>
                      function goBack() {
                      window.history.back();
                    }
                  </script>
            </div>
      </div>      
     </body>
</html>
