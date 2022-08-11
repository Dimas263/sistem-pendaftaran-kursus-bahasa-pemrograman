create table kursus_mahasiswa
(
    id_mahasiswa  varchar(36) default (uuid())        not null
        primary key,
    nama          varchar(50)                         not null,
    npm           char(8)                             not null,
    kelas         varchar(5)                          not null,
    berkas_krs    varchar(25)                         not null,
    nama_kursus   varchar(25)                         not null,
    status_kursus enum ('verifikasi', 'unverifikasi') not null
);

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_mahasiswa (id_mahasiswa, nama, npm, kelas, berkas_krs, nama_kursus, status_kursus) VALUES ('d2e87810-190d-11ed-8141-f430b99f2825', 'Desy Wahyu Romadhani', '51418783', '4IA24', 'KRS1.pdf', 'Fundamental Dekstop', 'verifikasi');
