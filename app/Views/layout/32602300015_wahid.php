<?= $this->extend('layout/main_layout') ?>

<?= $this->section('content') ?>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x"></i>
        </div>
        <div class="navbar-page">
            <ul type="none">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul>
                <li><i class="fa-brands fa-linkedin fa-lg"></i>Wahid Sandy Pujo Dzulhijayanto</li>
                <li><i class="fa-brands fa-instagram fa-lg"></i>Wahid Sandy Pujo Dzulhijayanto</li>
                <li><i class="fa-brands fa-facebook fa-lg"></i>Wahid Sandy Pujo Dzulhijayanto</li>
                <li><i class="fa-brands fa-square-whatsapp fa-lg"></i>Wahid Sandy Pujo Dzulhijayanto</li>
            </ul>
        </div>
    </div>

    <div class="banner">
        <span class="name">Wahid Sandy Pujo Dzulhijayanto</span><br>
        <span class="description">Mahasiswa lulusan teknik informatika Jurusan Teknik Informatika angkatan 2023</span>
    </div>

    <div class="about">
        <div class="about-me">
            <h2>Tentang Saya</h2>
            <span>web</span>
        </div>
        <div class="about-experience">
            <h3>Pengalaman / Project</h3>
            <table border="1" cellspacing="0">
                <tr>
                    <th rowspan="2">2023</th>
                    <th colspan="2">Aplikasi Web Menghitung Laba</th>
                </tr>
                <tr>
                    <th colspan="2">Project Individu</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Demak</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Web Developer</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">Mengembangkan aplikasi web untuk menghitung laba, memungkinkan pengguna memasukkan data penjualan dan biaya untuk mendapatkan laporan keuntungan yang akurat.</td>
                </tr>
                <tr>
                    <td colspan="3">Menggunakan HTML, CSS, JavaScript, dan backend framework untuk fungsionalitas perhitungan dan penyimpanan data.</td>
                </tr>
                <tr>
                    <th rowspan="2">2023</th>
                    <th colspan="2">Aplikasi Web Gym</th>
                </tr>
                <tr>
                    <th colspan="2">Project Kelompok</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Demak</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Front-end Developer</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">Berkontribusi dalam pengembangan aplikasi web untuk gym, termasuk fitur pendaftaran anggota, jadwal kelas, dan informasi instruktur.</td>
                </tr>
                <tr>
                    <td colspan="3">Fokus pada desain antarmuka pengguna dan pengalaman pengguna yang intuitif.</td>
                </tr>
                <tr>
                    <th rowspan="2">2024</th>
                    <th colspan="2">Daftar Menu Pesanan Makanan Berbasis Web</th>
                </tr>
                <tr>
                    <th colspan="2">Project Individu</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Demak</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Web Developer</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">Membangun aplikasi web untuk daftar menu pesanan makanan yang memungkinkan pelanggan melihat menu, memilih item, dan melakukan pemesanan secara online.</td>
                </tr>
                <tr>
                    <td colspan="3">Mengimplementasikan fitur keranjang belanja dan formulir pemesanan.</td>
                </tr>
                <tr>
                    <th rowspan="2">2024</th>
                    <th colspan="2">Aplikasi Hitung Kalori</th>
                </tr>
                <tr>
                    <th colspan="2">Project Individu</th>
                </tr>
                <tr>
                    <td></td>
                    <td>Demak</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Web Developer</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">Mengembangkan aplikasi web sederhana untuk menghitung asupan kalori harian berdasarkan data yang dimasukkan pengguna.</td>
                </tr>
                <tr>
                    <td colspan="3">Menyediakan antarmuka yang mudah digunakan untuk input makanan dan menampilkan total kalori.</td>
                </tr>
            </table>
        </div>
    </div>
<?= $this->endSection() ?>
