create table kursus_info
(
    id_info           varchar(36) default (uuid()) not null
        primary key,
    nama_kursus       varchar(50)                  not null,
    keterangan_kursus text                         not null,
    mulai_kursus      date                         not null,
    berakhir_kursus   date                         not null,
    status_kursus     enum ('buka', 'tutup')       not null
);

INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_info (id_info, nama_kursus, keterangan_kursus, mulai_kursus, berakhir_kursus, status_kursus) VALUES ('5313fea1-18ef-11ed-8141-f430b99f2825', 'Fundamental Web', 'Introduction Web Programming, Go, J2EE, Java, .NET Frameword, C#, CSS, ASP.NET, Ujian', '2022-08-01', '2022-08-31', 'buka');
INSERT INTO `sistem-pendaftaran-kursus-database`.kursus_info (id_info, nama_kursus, keterangan_kursus, mulai_kursus, berakhir_kursus, status_kursus) VALUES ('e4ed8e36-1908-11ed-8141-f430b99f2825', 'Fundamental Desktop', 'Introduction Programming, Delphi, .NET, Visual Basic, Java, Oracle PL/SQL, Ujian', '2022-08-01', '2022-08-31', 'buka');
