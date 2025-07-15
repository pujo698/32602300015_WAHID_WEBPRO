<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Tambah Data Mahasiswa</h1>
    </div>
    <div class="form">
        <form action="<?= base_url('crud/tambah'); ?>" method="post">
            <?= csrf_field(); ?> <!-- Proteksi CSRF -->
            
            <div class="input">
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" required>
            </div>
            <div class="input">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="input">
                <label for="prodi">Prodi</label>
                <input type="text" name="prodi" id="prodi" required>
            </div>
            <div class="input">
                <label for="universitas">Universitas</label>
                <input type="text" name="universitas" id="universitas" required>
            </div>
            <div class="input">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" name="no_hp" id="no_hp" required>
            </div>
            <div class="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection(); ?>
