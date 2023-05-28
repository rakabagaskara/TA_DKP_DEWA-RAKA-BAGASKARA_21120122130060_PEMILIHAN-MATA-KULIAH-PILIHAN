<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tugas Akhir Praktikum DKP</title>
     <link rel="stylesheet" href="css/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
               <h2 class="container-header text-center">Pengisian Data</h2>
               <form class="form" action="hasil.php" method="post" id="form">
                    <?php
                    class FormGroup {
                        private $label;
                        private $name;
                        private $pattern;

                        public function __construct($label, $name, $pattern) {
                            $this->label = $label;
                            $this->name = $name;
                            $this->pattern = $pattern;
                        }

                        public function render() {
                            echo '<div class="form-group form-book">';
                            echo '<label for="' . $this->name . '">' . $this->label . ' :</label>';
                            echo '<input type="text" id="' . $this->name . '" name="' . $this->name . '" pattern="' . $this->pattern . '" required>';
                            echo '</div>';
                        }
                    }

                    $formGroups = array(
                        new FormGroup('Nama', 'nama', '[A-Za-z\s]+'),
                        new FormGroup('NIM', 'nim', '[0-9]{1,14}'),
                        new FormGroup('Jurusan', 'jurusan', '[A-Za-z\s]+')
                    );

                    foreach ($formGroups as $formGroup) {
                        $formGroup->render();
                    }
                    ?>
                    <br>
                    <div class="form-group form-book">
                         <label for="Semester">Semester</label>
                         <select class="form-select" aria-label="Default select example" name="Semester" id="Semester">
                              <option selected disabled>Pilih Semester</option>
                              <option value="1">Semester 1</option>
                              <option value="2">Semester 2</option>
                              <option value="3">Semester 3</option>
                              <option value="4">Semester 4</option>
                              <option value="5">Semester 5</option>
                              <option value="6">Semester 6</option>
                              <option value="7">Semester 7</option>
                         </select>
                    </div>
                    <br>
                    <div class="form-group form-book">
                         <label for="matkul">Mata Kuliah Pilihan</label>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul1" value="Dasar Komputer dan Pemrograman">
                              <label class="form-check-label" for="matkul1">Dasar Komputer dan Pemrograman</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul2" value="Algoritma dan Pemrograman">
                              <label class="form-check-label" for="matkul2">Algoritma dan Pemrograman</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul3" value="Pemrograman Perangkat Bergerak">
                              <label class="form-check-label" for="matkul3">Pemrograman Perangkat Bergerak</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul3" value="Sistem Basis Data">
                              <label class="form-check-label" for="matkul3">Sistem Basis Data</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul3" value="Sistem Tertanam">
                              <label class="form-check-label" for="matkul3">Sistem Tertanam</label>
                         </div>
                         <div class="form-check">
                              <input class="form-check-input" type="radio" name="matkul" id="matkul3" value="Pengolahan Sinyal">
                              <label class="form-check-label" for="matkul3">Pengolahan Sinyal</label>
                         </div>
                    </div>
                    <div class="form-group form-book">
                         <button class="btn btn-primary">Submit</button>
               </br>
                         <button onclick="removeData()" class="btn btn-primary">Clear</button>
                    <script>
                         function removeData() {
                              var form = document.getElementById("form");
                              form.reset();
                         }
                    </script>
                    </div>
               </form>
          </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-X9q2PjzrSm/AH25Yfu4YYh9t9pEDQYQbcFMvySwIW6Vj+dByLPLUx7oHmR01kwvx" crossorigin="anonymous"></script>
</body>
</html>
