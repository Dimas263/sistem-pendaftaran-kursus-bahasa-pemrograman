create table kursus_user
(
    id_user  varchar(36) default (uuid()) not null
        primary key,
    nama     varchar(50)                  not null,
    npm      char(8)                      not null,
    password varchar(40)                  not null,
    role     enum ('mahasiswa', 'admin')  not null
);

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_user (id_user, nama, npm, password, role) VALUES ('39d444c5-18f4-11ed-8141-f430b99f2825', 'Dimas Dwi Putra', '51418957', 'e1464d010324a8ffa9c59d6f57531ef9ca9acb90', 'mahasiswa');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_user (id_user, nama, npm, password, role) VALUES ('39d4643d-18f4-11ed-8141-f430b99f2825', 'Desy Wahyu Romadhani', '51418783', 'b10346bc3a973980e8e02852065ed5a6f1969ec7', 'mahasiswa');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_user (id_user, nama, npm, password, role) VALUES ('f20b9717-1f75-11ed-9f8e-f430b99f2825', 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');
