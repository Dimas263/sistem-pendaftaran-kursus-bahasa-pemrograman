create table kursus_user
(
    id_user  varchar(36) default (uuid()) not null
        primary key,
    nama     varchar(50)                  not null,
    npm      char(8)                      not null,
    password varchar(40)                  not null,
    role     enum ('mahasiswa', 'admin')  not null
);

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_user (id_user, nama, npm, password, role) VALUES ('39d444c5-18f4-11ed-8141-f430b99f2825', 'Dimas Dwi Putra', '51418957', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'admin');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_user (id_user, nama, npm, password, role) VALUES ('39d4643d-18f4-11ed-8141-f430b99f2825', 'Desy Wahyu Romadhani', '51418783', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'mahasiswa');
