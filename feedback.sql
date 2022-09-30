SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `userfeedback` (
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `userfeedback` (`name`, `email`, `message`) VALUES
('KarthikRaja', '2001.3.12kaarthik@gmail.com', 'wow, it works!!');

COMMIT;
