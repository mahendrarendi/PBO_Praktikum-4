<!--Nama : Nur Haslinda
    NIM  : 21091397035-->

<?php 
    require_once 'prak4 no2.php';
?>

<html lang="id">
<head>
    <link rel="stylesheet" href="prak4 no2.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal No.2</h2>
<div class="form">
    <form action="" method="post">
            <input type="number" name="input1"> 
            <input type="number" name="input2">
            <input type="number" name="input3">
            <button type="submit" name="submit">Submit</button>
          </form>
        </div>

          <?php 
                if (isset($_POST['submit']))    {
                        if (!$_POST['input3'])  {
                            $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                            echo $value1->average(0);
                        } else  {
                            $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                            echo $value1->average($_POST['input3']);
                            }
                    }
            ?>
</div>
</body>
</html>