-- Active: 1683256338287@@127.0.0.1@3306@uaspemweb
CREATE TABLE user_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    nim VARCHAR(50) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender ENUM('Laki-Laki', 'Perempuan')NOT NULL,
    aggree ENUM('Ya, ini benar data diri saya', 'Tidak, bukan data diri saya')NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;