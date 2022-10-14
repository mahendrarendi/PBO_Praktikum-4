<!--Nama : Nur Haslinda
    NIM  : 21091397035 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <link rel="stylesheet" type="text/css" href="prak4 no1.css"> 
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No.1</h2>
<?php
    class Orang {
        protected $nama,$umur;
        public function __construct($nama,$umur){
        $this->nama = $nama;
        $this->umur = $umur;
        }
    }

    class Dosen extends Orang   {
        private $nip;
        public function __construct($nama, $umur, $nip) {
            $this->nip = $nip;
            parent::__construct($nama, $umur);    
        }

        public function hasil() {
            return $this->nama . ' , umur ' . $this->umur. ' , NIP ' . $this->nip;
        }
    }

    $dosen1 = new Dosen('Dodik Arwin Dermawan', 44, 197801082000121001); 
    $dosen2 = new Dosen('I Gde Agung Sidhimantra', 27,202111096 );
    $dosen3 = new Dosen('Hafizhuddin Zul Fahmi', 27, 202110098);

    echo $dosen1->hasil();
        echo '<br> <br>';
    echo $dosen2->hasil();
        echo '<br> <br>';
    echo $dosen3->hasil();
        echo '<br> <br>';
?>
</div>
</body>
</html>