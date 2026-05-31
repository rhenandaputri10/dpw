CREATE DATABASE IF NOT EXISTS akademik;
USE akademik;

-- Tabel Dosen
CREATE TABLE IF NOT EXISTS t_dosen (
    idDosen INT AUTO_INCREMENT PRIMARY KEY,
    namaDosen VARCHAR(50),
    noHPdosen VARCHAR(25)
);

-- Tabel Mahasiswa
CREATE TABLE IF NOT EXISTS t_mahasiswa (
    npm INT PRIMARY KEY,
    namaMhs VARCHAR(50),
    prodi VARCHAR(25),
    alamat VARCHAR(70),
    noHPmhs VARCHAR(25)
);

-- Tabel Mata Kuliah
CREATE TABLE IF NOT EXISTS t_matakuliah (
    kodeMatkul INT PRIMARY KEY,
    namaMatkul VARCHAR(70),
    sks INT,
    jam INT
);

-- Data Dosen
INSERT INTO t_dosen (namaDosen, noHPdosen) VALUES
('Luthfiyah Dwi Setia, S.Kom., M.Kom.', '081288752610'),
('Angger Binuko Paksi, M.Kom', '081238749763'),
('Rahmania Kumalasari, S.Kom., M.Kom. ', '081383620486'),
('Mochamat Bayu Aji, M.Kom.', '081283746729'),
('Dr. Nanik Nurhayati, S.Ag., M.Pd.', '081391362811'),
('Tri Septianto, S.Kom., M.Kom.', '081282734891'),
('Muhammad Syaeful Fajar, SPd., M.Kom.', '081382301288'),
('Hery Maryanto, S.Pd., M.Kom.', '081219008955');

-- Data Mahasiswa
INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHPmhs) VALUES
(253307031, 'Habibah Prima Risqullah', 'Teknologi Informasi', 'Jl. Merdeka No. 10, Jakarta', '081234567890'),
(253307032, 'Cindy Eka Ramadani', 'Teknologi Informasi', 'Jl. Pahlawan No. 25, Surabaya', '082345678901'),
(253307033, 'Alfi Mariani', 'Teknologi Informasi', 'Jl. Sudirman No. 5, Bandung', '083456789012'),
(253307034, 'Fikka Dwy Ayu Mutoharoh', 'Teknologi Informasi', 'Jl. Sumatra No. 5, Pacitan', '083456783476'),
(253307035, 'Nadin', 'Teknologi Informasi', 'Jl. Hercules No. 5, Bekasi', '083923718273');

--Data Mata Kuliah
INSERT INTO t_matakuliah (kodeMatkul, namaMatkul, sks, jam) VALUES
(101, 'Manajemen Proyek Teknologi Informasi', 2, 2),
(102, 'Desain dan Pemrograman Web', 3, 5),
(103, 'UI/UX Design', 2, 2),
(104, 'Pemrograman Berbasis Obyek', 3, 5),
(105, 'Pendidikan Agama Islam', 2, 2),
(106, 'Komputasi Matematika', 2, 2),
(107, 'Sistem Komunikasi Optic', 3, 5),
(108, 'Sistem Operasi', 2, 2);