<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="<?= base_url('crud/tambah'); ?>">
            <button>Tambah Data</button>
        </a>
    </div>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Prodi</th>
                    <th>Universitas</th>
                    <th>No HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($mahasiswa)) : ?>
                    <tr>
                        <td colspan="7" style="text-align: center;">Tidak ada data</td>
                    </tr>
                <?php else : ?>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $s) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($s['nama']); ?></td>
                            <td><?= esc($s['nim']); ?></td>
                            <td><?= esc($s['prodi']); ?></td>
                            <td><?= esc($s['universitas']); ?></td>
                            <td><?= esc($s['nomor_handphone']); ?></td>
                            <td class="action">
                                <a href="<?= base_url('crud/edit/' . $s['nim']); ?>">
                                    <button class="btn-update">Update</button>
                                </a>
                                <a href="<?= base_url('crud/hapus/' . $s['nim']); ?>" onclick="return confirm('Yakin ingin menghapus NIM <?= $s['nim']; ?>?')">
                                    <button class="btn-delete">Delete</button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>
