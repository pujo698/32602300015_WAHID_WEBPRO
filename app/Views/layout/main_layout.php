<!-- app/Views/layout/template.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS Lokal -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">

    <title>situsku</title>
</head>
<body>
    <header>
        <h1>Selamat Datang di Website Saya</h1>
    </header>

    <nav>
        <a href="<?= base_url('/profil') ?>">Home</a>
        <a href="<?= base_url('/profilku') ?>">Profil</a>
        <a href="<?= base_url('/skill') ?>">Skill</a>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>&copy; 2025 - Wahid Sandy Pujo Dzulhijayanto</p>
    </footer>
</body>
</html>
