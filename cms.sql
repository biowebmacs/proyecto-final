-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2021 a las 11:59:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'PHP'),
(2, 'JavaScript'),
(3, 'Mysql'),
(4, 'Rush'),
(5, 'Phyton'),
(6, 'Errlan'),
(7, 'Go'),
(8, 'Art'),
(9, 'Java'),
(10, 'nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) DEFAULT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) DEFAULT NULL,
  `comment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(4, 1, 'Andrea Cano', 'andreacano@gmail.com', 'Me gusta PHP', NULL, '0000-00-00 00:00:00'),
(7, 1, 'Lucia cano', 'luciacano@gmail.com', 'PHP es lo mejor', NULL, '0000-00-00 00:00:00'),
(8, 1, 'Piero Cano', 'pierocano@gmail.com', 'Viva el PHP', NULL, '0000-00-00 00:00:00'),
(15, 1, 'Andrea Cano', 'andreacano@gmail.com', 'PHP es el mejor programa', NULL, '0000-00-00 00:00:00'),
(20, 1, 'Linda Cano', 'lindacano@gmail.com', 'PHP me cambio la vida', NULL, '0000-00-00 00:00:00'),
(21, 2, 'Xavier Castillo', 'xaviercastillo@gmail.com', 'PHP no me gusta mucho prefiero Java', NULL, '0000-00-00 00:00:00'),
(22, 2, 'Piero Cano', 'pierocano@gmail.com', 'JavaScript es muy complicado aprender', NULL, '0000-00-00 00:00:00'),
(23, 3, 'Alexandra Cano', 'alexandracano@gmail.com', 'Mysql me ayudado en muchas tareas en mi trabajo', NULL, '0000-00-00 00:00:00'),
(24, 3, 'Piero Cano', 'pierocano@gmail.com', 'la mejor BBDD que he conocido', NULL, '0000-00-00 00:00:00'),
(27, 3, 'linda cano', 'lindacano@gmail.com', 'Mysql es mejor que Oracle', NULL, '0000-00-00 00:00:00'),
(28, 3, 'linda cano', 'lindacano@gmail.com', 'Mysql es mejor que Oracle', NULL, '0000-00-00 00:00:00'),
(29, 2, 'Linda cano', 'lindacano@gmail.com', 'Mysql puede mejorar', NULL, '2021-01-02 00:42:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(1, 0, 'PHP', 'Miguel  Cano', '', '2021-01-03 23:57:39', '', 'PHP (acrónimo recursivo de PHP: Hypertext Preprocessor)', '', '', 'draft', 0),
(2, 0, 'JavaScript', 'Luis Cano', '', '0000-00-00 00:00:00', '', 'JavaScript (abreviado comúnmente JS) ', '', '', 'draft', 0),
(3, 0, 'Mysql', 'Juan Cano', '', '0000-00-00 00:00:00', '', 'MySQL es un sistema de gestión de bases de datos relacional.', '', '', 'draft', 0),
(4, 0, 'Java', 'Isabel Sandoval', '', '2021-01-02 02:20:43', '', 'Java el lenguaje original', '', '', '', 0),
(5, 0, 'Rush', 'Elena Llosa Lujan', '', '2021-01-03 03:29:30', '', 'Rush es un lenguaje nuevo y moderno', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) DEFAULT NULL,
  `user_lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text DEFAULT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22',
  `token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`, `token`) VALUES
(5, 'miguelcano', '$2y$12$UDKz5OQ4IPPnjs2bBk8hS.gMzMiqB5pLAidJnLM6Zo0dOGsv925vG', NULL, NULL, 'micki98pe@hotmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(6, 'luiscano', '$2y$12$SlnHc9UelenTSVFT1QmE1ua1YmmGt3GhaMOxQ0.XDYe5LN9KSIrG2', NULL, NULL, 'luiscano@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(7, 'juancano', '$2y$12$LX838j5xBQWqIpDxcdqDd.waLBKaWH4I1FAEMPH0IGAu4X36vUkJm', NULL, NULL, 'juancano@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(8, 'ruthcano', '$2y$12$xm.1FjkrupuPRik9tRkTW.jAGkdaCq6jOLXDXvYPlHn9NUCiE3Z1W', NULL, NULL, 'ruthcano@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(28, 'luisgarcia', '$2y$12$fUWJqfzRSvXzMWJXjPfpXO75Ba8bUiPJuVjISRJX/4s5bXNCvRaRm', NULL, NULL, 'macs.consult.ccg@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(30, 'AlexCano', '$2y$12$iPcTzZOo2UKY2uCtR9Bi8.pdot35i2Iq5ehLhif2hnudHk895sFsu', 'Alex', NULL, 'alexcano@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL),
(35, 'brendacano', '$2y$12$mpSemSkyqPS/RQ0s5JsZQeVrwiKYTK0FQ7.hVqwcLhMgfti2/ECDO', 'Brenda', NULL, 'brendacano@gmail.com', NULL, 'subscriber', '$2y$10$iusesomecrazystrings22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_online`
--

CREATE TABLE `users_online` (
  `id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `Fkcat` (`comment_post_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Fkcat` FOREIGN KEY (`comment_post_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
