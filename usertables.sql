SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `usertables` (
  `name` varchar(15) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `usertables` (`name`, `email`, `password`) VALUES
('KarthikRaja', 'karthik@gmail.com', '$2y$10$AUuDkh46S0tnHfypya2yQe1blzZhWb2Y20KcWwihBVdYIduQBQCtW');

ALTER TABLE `usertables`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;
