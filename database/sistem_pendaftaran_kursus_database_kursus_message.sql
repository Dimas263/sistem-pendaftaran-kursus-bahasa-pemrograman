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
    auto_increment = 4;

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (1, 'login_berhasil', 'selamat, login berhasil', 'Lanjutkan untuk masuk ke halaman utama', 'https://img.icons8.com/color/128/000000/checked--v1.png', 'source/home');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (2, 'login_gagal', 'Maaf login gagal<br>username atau password salah!', 'Coba kembali dan masukan akun dengan benar', 'https://img.icons8.com/fluency/128/000000/delete-sign.png', 'source/home');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_message (id_message, jenis, titles, subtitles, images, routes) VALUES (3, 'keluar_app', 'Pengalaman yang baik bersama anda', 'Anda telah keluar dari aplikasi, sampai jumpa kembali', 'https://img.icons8.com/emoji/96/000000/hugging-face.png', 'source/home');
