<?php

$name = $jurusan = $hitam = $hitam1 = "";
$nameerr = $jurusanerr = $hitamerr = $hitam1err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameerr = "Wajib diisi";
    }else{
        $name = $_POST["name"];
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["jurusan"])){
        $jurusanerr = "Error hitam";
    }else{
        $jurusan = $_POST["jurusan"];
    }
}



$success = ($_SERVER["REQUEST_METHOD"] == "POST" && !$nameerr && !$jurusanerr && !$hitamerr);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color: antiquewhite;
        padding: 40px;
    }

    .card {
        background-color: rgb(250, 251, 251);
        width: 100%;
        max-width: 350px;
        margin: auto;
        padding: 28px 24px;
        border-radius: 10px;

    }

    .field{

        margin-bottom: 18px;

    }

    input{
        width: 92%;
        padding: 10px 12px;
        border-radius: 5px;
        font-size: 14px;
    }

    select{
        background-color: white;
        width: 100%;
        padding: 10px 12px;
        border-radius: 5px;
        font-size: 14px;
    }

    label{
        display: block;
        font-size: 24px;
        margin-bottom: 6px;
    }

    button{
        width: 100%;
        background-color: #65a744;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 6px;
      
    }

    .submit{
        background-color: aqua;
    }

    /* .card h1 {
        text-align: center;-- Text I
    } */

    .button{

    }

    .error{
        color: red;
        font-size: 13px;
    }
    .result{
        margin-top: 24px;
    }

    .result h2{
        margin-top: 0;
        color: #65a744;
    }

    .result p{
        font-size: 18px;
        margin: 8px 0;
    }
    

    
</style>
<body>
    <div class="card">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h1>FORM INPUT</h1>
            <div class="field">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" placeholder="John Doe" value="<?php echo htmlspecialchars($name); ?>">
                <span class="error"><?php echo $nameerr ? "* $nameerr": "";?></span>
                
            </div>
            <div class="field">
                <label for="jurusan">Masukkan Jurusan:</label>
                <input type="text" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?php echo htmlspecialchars($jurusan); ?>">
                <span class="error"><?php echo $jurusanerr ? "* $jurusanerr": "";?></span>
            </div>
             <button type="submit">kirim data</button>
        </form>
    </div>

    <?php if($success){ ?>
    <div class="card result">
        <h2>Data berhasil dikirim</h2>
        <p><b>Nama:</b> <?php echo htmlspecialchars($name); ?></p>
        <p><b>Jurusan:</b> <?php echo htmlspecialchars($jurusan); ?></p>
        <p><b>Hitam:</b> <?php echo htmlspecialchars($hitam); ?></p>
    </div>
    <?php } ?>
</body>
</html>