<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" 
integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="">Form Mahasiswa</h1>
                <hr>
                <?php
                require_once "BsForm.php";
                $formMhs = new BsForm();
                $formMhs->setInputText('nama', 'nama', 'Nama');
                $formMhs->setInputText('nim', 'nim', 'NIM');
                $formMhs->setInputText('prodi', 'prodi', 'Program Studi');
                $formMhs->setInputText('fakultas','fakultas', 'Fakultas');
                $formMhs->setButton('Simpan');
                $formMhs->showForm();
                ?> 
         </div>
        </div>
    </div>
    
</body>
</html>