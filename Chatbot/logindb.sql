
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(2, 'How are you ?', 'I am not good. How can I help you?'),
(3, 'what is your name||whats your name||who are you', 'My name is Aresa.'),
(4, 'what should I call you', 'You can call me by my name Aresa.'),
(5, 'Where are your from', 'I have been developed under custody of Hadi. I dont belong to any country or place.'),
(6, 'Bye||See you later||Have a Good Day||tata', 'Sad to see you are going. Have a nice day'),
(8, 'who developed you|| who created you || who own you', 'I am developed/created by Hadi Karnib. I am Here to help you with your queries.  '),
(10, 'I want to ask about professors of first year.', 'Professors of GEU are amazing.\r\nI m listing names of few\r\nchemistry-Arunima nayak mam\'\r\nfirst year b'),
(11, 'hi', 'hello, how can i assist you today :D'),
(13, 'hello', 'hiiii:D how may i assist you');

-- --------------------------------------------------------

--
-- Table structure for table `invalid`
--

CREATE TABLE `invalid` (
  `id` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invalid`
--

INSERT INTO `invalid` (`id`, `messages`) VALUES
(1, 'dijh'),
(2, 'dijh'),
(3, 'dijh'),
(4, 'sd'),
(5, 'a'),
(6, 'anbasfnsdkghb nlegyfbnyfudkgajhg'),
(7, 'afc');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `image`) VALUES
(8, 'hadi', '1234', ''),
(9, 'hadii', '12345', ''),
(10, 'haidar', '121212', ''),
(11, 'kawthar', '$2y$10$8KbJVHWgvZGa4znAzHCHp.F1VS9FfdToE5JPLS9mc4.QlyUCeYFKO', ''),
(12, 'fakher', '$2y$10$TPE1BqSvh2zghGz5eKkqauIOdO.7xN32wXGDNSU9YzzIUO46Fx0xy', ''),
(13, 'hadiii', '$2y$10$UnR5SP52iTaKus5D76doDeVS7Atx3A0QlJ.h9wFQuaNQVRRCmjGEy', ''),
(14, 'kawthar1', '$2y$10$O9Y5G9kpawAOVD/PDG5Ay.rltgHzVQuMhA2aDdPWfg4J35.AYhoB2', 'image/'),
(15, 'kawthar12', '$2y$10$UExjB5wG7A.50/W17IPRC.ZK0yh7KNms3dbtG1Vzl.J7pDHv8oWcm', 'image/'),
(16, 'hadi1', '123', 'image/IMG_3363.JPG'),
(17, 'hadi12', '$2y$10$imL3Ny1nrTHlQPjKYmww4Onvvw5mv909CK9Zc3B0Jj2.tlFr0cx8.', 'image/IMG_3363.JPG'),
(18, 'hihi', '$2y$10$R96JcYqKwtFGlBpqztLp9eK.SHDRSwHtl.ECQqXHetxwnB11ErfwG', 'image/me5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
