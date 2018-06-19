-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 19 2018 г., 07:44
-- Версия сервера: 5.7.19-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- База данных: `urist`
--

TRUNCATE TABLE `card`;
TRUNCATE TABLE `connected_servise`;
TRUNCATE TABLE `files`;
TRUNCATE TABLE `password_resets`;
TRUNCATE TABLE `priority_task`;
TRUNCATE TABLE `project`;
TRUNCATE TABLE `role`;
TRUNCATE TABLE `servise`;
TRUNCATE TABLE `status_project`;
TRUNCATE TABLE `status_task`;
TRUNCATE TABLE `subdvision`;
TRUNCATE TABLE `task`;
TRUNCATE TABLE `user`;

--
-- Дамп данных таблицы `priority_task`
--

INSERT INTO `priority_task` (`id`, `Description`, `Private`, `created_at`, `updated_at`) VALUES
(1, 'Не важная', NULL, NULL, NULL),
(2, 'Текущая', NULL, NULL, NULL),
(3, 'Важная', NULL, NULL, NULL);

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`id`, `Name`, `Deadline`, `Comment`, `created_at`, `updated_at`, `Status_project_id`, `User_id`) VALUES
(1, 'Проект 1-1', '1970-01-01 00:00:00', 'Первый проект первого подразделения', '2018-06-19 04:33:18', '2018-06-19 04:33:18', 2, 3),
(2, 'Проект 2-1', '1970-01-01 00:00:00', 'Первый проект второго подразделения', '2018-06-19 04:34:11', '2018-06-19 04:34:11', 1, 6),
(3, 'Проект 2-2', '1970-01-01 00:00:00', 'Второй проект второго подразделения. Создал руководитель подразделения.', '2018-06-19 04:39:02', '2018-06-19 04:44:30', 2, 5);

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Администратор', NULL, NULL),
(2, 'Руководитель подразделения', NULL, NULL),
(3, 'Руководитель проекта', NULL, NULL),
(4, 'Сотрудник', NULL, NULL);

--
-- Дамп данных таблицы `status_project`
--

INSERT INTO `status_project` (`id`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Новый', NULL, NULL),
(2, 'В работе', NULL, NULL),
(3, 'Завершен', NULL, NULL);

--
-- Дамп данных таблицы `status_task`
--

INSERT INTO `status_task` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Новая', NULL, NULL),
(2, 'В работе', NULL, NULL),
(3, 'Завершена', NULL, NULL);

--
-- Дамп данных таблицы `subdvision`
--

INSERT INTO `subdvision` (`id`, `Name`, `Description`, `created_at`, `updated_at`) VALUES
(1, 'Подразделение №2', '', '2018-06-19 04:23:45', '2018-06-19 04:23:45'),
(2, 'Подразделение №5', '', '2018-06-19 04:27:55', '2018-06-19 04:27:55');

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `remember_token`, `Email`, `Name`, `Sename`, `Otchestvo`, `Pol`, `created_at`, `updated_at`, `Role_id`, `Subdvision_id`) VALUES
(1, 'admin', '$2y$10$kzzN6.z6EVk3kBufUfzlvOYZ1HDvLRFqFOmqJmS6EmAyhWaYWsdEu', 'dEQIWoT2TRXzYjiLfZe26WmVPsqIgNg0KKMX9pEqSycCAUozc22KpWPTZvgh', NULL, 'Администратор', NULL, NULL, NULL, NULL, NULL, 1, NULL),
(2, 'user1-1', '$2y$10$cUPlyx89Da0weMcqJbJGsuuEre58WTiCWoli76nUhIjA1yh6NLvkm', 'D6Tv21jwyd9JxiYGOKLUl2vqlCTzBvtXjBprg7Uvgw6WCjjf2QAuzVbsiwvD', 'user1-1@em.ru', 'Пользователь 1-1', NULL, NULL, 'male', '2018-06-19 04:23:45', '2018-06-19 04:25:47', 2, 1),
(3, 'user1-2', '$2y$10$QQ6EQUYAskbec4jpEz.Q1eg84bZPb8jo1ZXZQIwg3Fn6IOcv9ISp6', '7lDNlYa7mtLBEIkJMypwUvFAKDIiaHhR2CM6xCBnnXdhpx6CfylUedu9Q93j', 'user1-2@em.ru', 'Пользователь 1-2', NULL, NULL, 'male', '2018-06-19 04:25:18', '2018-06-19 04:25:18', 3, 1),
(4, 'user1-3', '$2y$10$DgC..wc3XmjRDHRxJQf2wew0LKYBeljq2Yxkjvj6taooizGFMknIS', 'bBrJymWa6F2QSTKdwIRhCzqzm4FgjZg3KdynJ63hGkKuNh4TESuq0AkUWCdu', 'user1-3@em.ru', 'Пользователь 1-3', NULL, NULL, 'male', '2018-06-19 04:26:27', '2018-06-19 04:26:27', 4, 1),
(5, 'user2-1', '$2y$10$vJO9K4ONKBSm/xF5VC29ceLJbMVAL.dPLXRCFaxtDaxglZLmkuy52', 'l526I8Jr6E6ucyz1ZRdQCx28zE3A4nVXmLmSfFBjMCRpuiZ0eWfcO6ggWBIS', 'user2-1@em.ru', 'Пользователь 2-1', NULL, NULL, 'male', '2018-06-19 04:27:55', '2018-06-19 04:30:29', 2, 2),
(6, 'user2-2', '$2y$10$KhNuoD0lCChUzlD91c3aXeIS2www9alBKEvkQ.93fVcZ31/L6cdEq', 'aCWMIFGholKUuf75ANozfbEsI0yT5L4sOIUCvKMD4cWTNGozPNvnHoa2qtc0', 'user2-2@em.ru', 'Пользователь 2-2', NULL, NULL, 'male', '2018-06-19 04:30:58', '2018-06-19 04:30:58', 3, 2),
(7, 'user2-3', '$2y$10$UQcBen5OenPjeHHrRtSisudNTLs.p0wEvtSBi8J2KCoLLLUr4mzvS', NULL, 'user2-3@em.ru', 'Пользователь 2-3', NULL, NULL, 'male', '2018-06-19 04:31:31', '2018-06-19 04:31:31', 4, 2);
