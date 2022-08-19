create table kursus_message
(
    id_message int auto_increment
        primary key,
    jenis      varchar(100) not null,
    titles     text         not null,
    subtitles  text         not null,
    images     varchar(200) not null,
    routes     text         null
)
    auto_increment = 10;

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (1, 'login_berhasil', 'selamat, login berhasil', 'Lanjutkan untuk masuk ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/home');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (2, 'login_gagal', 'Maaf login gagal<br>username atau password salah!', 'Coba kembali dan masukan akun dengan benar', 'https://img.icons8.com/fluency/128/000000/delete-sign.png', 'source/home');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (3, 'keluar_app', 'Pengalaman yang baik bersama anda', 'Anda telah keluar dari aplikasi, sampai jumpa kembali', '', 'source/home');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (4, 'kursus_hapus', 'selamat, data kursus berhasil dihapus', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_kursus');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (5, 'kursus_update', 'selamat, data kursus berhasil diupdate', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_kursus');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (6, 'kursus_add', 'selamat, data kursus berhasil ditambahkan', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_kursus');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (7, 'mahasiswa_hapus', 'selamat, data mahasiswa berhasil dihapus', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_mahasiswa');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (8, 'mahasiswa_update', 'selamat, data mahasiswa berhasil diupdate', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_mahasiswa');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (9, 'mahasiswa_add', 'selamat, data mahasiswa berhasil ditambahkan', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/admin_mahasiswa');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (10, 'mahasiswa_daftar', 'Selamat, anda berhasil mendaftar kursus, tunggu beberapa saat, proses verifikasi 1x24 jam', 'Lanjutkan untuk kembali ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/mahasiswa');
