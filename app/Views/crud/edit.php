<?= $this->extend('layout/template') ?> <!-- Menggunakan layout template.php -->

<?= $this->section('content') ?> <!-- Awal section content -->

<main>
    <div class="title">
        <h1>Edit Data Mahasiswa</h1>
    </div>

    <div class="form">
        <form action="<?= base_url('crud/editan') ?>" method="POST">
            <?= csrf_field(); ?>

            <!-- Kirim NIM lama secara tersembunyi -->
            <input type="hidden" name="old_nim" value="<?= esc($edit['nim']) ?>">

            <!-- Form GANDA: Data Lama dan Baru -->
            <div class="form-row">
                <div class="form-left">
                    <h3>Data Lama</h3>
                    <div class="input">
                        <label for="nim">NIM</label>
                        <input type="text" value="<?= esc($edit['nim']) ?>" readonly>
                    </div>
                    <div class="input">
                        <label for="nama">Nama</label>
                        <input type="text" value="<?= esc($edit['nama']) ?>" readonly>
                    </div>
                    <div class="input">
                        <label for="prodi">Prodi</label>
                        <input type="text" value="<?= esc($edit['prodi']) ?>" readonly>
                    </div>
                    <div class="input">
                        <label for="universitas">Universitas</label>
                        <input type="text" value="<?= esc($edit['universitas']) ?>" readonly>
                    </div>
                    <div class="input">
                        <label for="no_hp">No. HP</label>
                        <input type="text" value="<?= esc($edit['nomor_handphone']) ?>" readonly>
                    </div>
                </div>

                <div class="form-right">
                    <h3>Data Baru</h3>
                    <div class="input">
                        <label for="nim">NIM Baru</label>
                        <input type="text" name="nim" id="nim" placeholder="NIM Baru">
                    </div>
                    <div class="input">
                        <label for="nama">Nama Baru</label>
                        <input type="text" name="nama" id="nama" placeholder="Nama Baru">
                    </div>
                    <div class="input">
                        <label for="prodi">Prodi Baru</label>
                        <input type="text" name="prodi" id="prodi" placeholder="Prodi Baru">
                    </div>
                    <div class="input">
                        <label for="universitas">Universitas Baru</label>
                        <input type="text" name="universitas" id="universitas" placeholder="Universitas Baru">
                    </div>
                    <div class="input">
                        <label for="no_hp">No. HP Baru</label>
                        <input type="text" name="no_hp" id="no_hp" placeholder="No. HP Baru">
                    </div>
                </div>
            </div>

            <div class="button">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?= $this->endSection() ?> <!-- Akhir section content -->
