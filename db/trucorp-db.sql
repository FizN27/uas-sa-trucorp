CREATE TABLE `users` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL
);

INSERT INTO `users` (`id`, `nama`, `alamat`, `jabatan`) VALUES
(1, 'Arnold', 'Alamat1', 'Boss'),
(2, 'Bernard', 'Alamat2', 'Manager'),
(3, 'Carlson', 'Alamat3', 'Employee'),
(4, 'Dominic', 'Alamat4', 'Employee');