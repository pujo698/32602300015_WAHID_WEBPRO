<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/CSS/crud.css'); ?>">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    
    <title>CRUD</title>
</head>
<body>
    <header>
        <nav>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Wahid Sandy Pujo Dzulhijayanto / Teknik Informatika A / Praktikum WEB Programming A</td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>32602100015</td>
                </tr>
            </table>
        </nav>
    </header>

    <?= $this->renderSection("content") ?>

</body>
</html>
