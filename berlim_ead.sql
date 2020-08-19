-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2020 às 16:19
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `berlim_ead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(70) DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `loginAtivo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`, `loginAtivo`) VALUES
(1, 'Marcilio', 'marcilio@teste.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(2, 'Alex Ricardo', 'alex.ricardo1999@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `loginAtivo` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `nome`, `email`, `senha`, `loginAtivo`) VALUES
(1, NULL, 'taciianabarbosa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, NULL, 'j.victor24.bjj@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(3, NULL, 'marialves1997@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(4, NULL, 'larifigueiras@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(5, NULL, 'elbert.jorge@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(6, NULL, 'juliannalirapessoa@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(7, NULL, 'rubensrufino___@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(8, NULL, 'henriqueffjr@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(9, NULL, 'cecbrennand@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(10, NULL, 'belaalencarbarros@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(11, NULL, 'alicesdamota@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(12, NULL, 'kellenroberta2001@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(13, NULL, 'lilianesantospp@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(14, NULL, 'silvanatorquato@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(15, NULL, 'victorhugo.cg@icloud.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(16, NULL, 'heloisac013@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(17, NULL, 'waleskaribeiro3@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(18, NULL, 'diegobraga.silva@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(19, NULL, 'annakrolina@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(20, NULL, 'efraimdjunior@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(21, NULL, 'rodrigomied@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(22, NULL, 'rafaelacostb@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(23, NULL, 'marinagoncalvesmcz@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(24, NULL, 'brunolerin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(25, NULL, 'larissavdsbarbosa1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(26, NULL, 'amandaswallon@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(27, NULL, 'camilacirne@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(28, NULL, 'ramosfelipesa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(29, NULL, 'cleamcoliveira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(30, NULL, 'matheusar01@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(31, NULL, 'belneta@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(32, NULL, 'bruno_cabral@outlook.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(33, NULL, 'pedro.fillipe@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(34, NULL, 'thaismatiasarq@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(35, NULL, 'susannefarias@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(36, NULL, 'anafbarrosoliveira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(37, NULL, 'dfdmcorreia@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(38, NULL, 'fernnandagomes.fg@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(39, NULL, 'dudaaflima@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(40, NULL, 'kalyenne.antero@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(41, NULL, 'rebeccadantascarneiro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(42, NULL, 'joana.nigro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(43, NULL, 'vanessafalcao.ms@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(44, NULL, 'nathaliaademeloo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(45, NULL, 'camila.emerenciano@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(46, NULL, 'costphillip@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(47, NULL, 'julie.alencar@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(48, NULL, 'georgepassos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(49, NULL, 'marianasoliveira@uol.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(50, NULL, 'alessandra.demoraes94@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(51, NULL, 'jacisobrinho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(52, NULL, 'carolbloback@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(53, NULL, 'igoreaf96@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(54, NULL, 'symone.m.c.78@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(55, NULL, 'vinicius_freitas_@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(56, NULL, 'sarah.thaysa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(57, NULL, 'larissageorgiasilva@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(58, NULL, 'alexandra.morais@uol.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(59, NULL, 'joelli_azevedo@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(60, NULL, 'jaciarac.pestana@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(61, NULL, 'suzana_097@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(62, NULL, 'joyce.kataryne16@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(63, NULL, 'mayarammoura@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(64, NULL, 'gabrielfcdiniz@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(65, NULL, 'ellidabelarmino1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(66, NULL, 'lauracavalcanti1995@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(67, NULL, 'digitais.tgt@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(68, NULL, 'elton_souza_007@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(69, NULL, 'biancadantas.cg@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(70, NULL, 'marinacavalcantih@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(71, NULL, 'tete.limatorres7@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(72, NULL, 'clara_cavalcanti@live.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(73, NULL, 'allan_henrique1994@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(74, NULL, 'amandhafarias00@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(75, NULL, 'luisagsaraujo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(76, NULL, 'anoca.medeiros@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(77, NULL, 'lira.fiamma@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(78, NULL, 'carolinas25@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(79, NULL, 'silvataisantos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(80, NULL, 'milena.costamota@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(81, NULL, 'wilsonettorj@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(82, NULL, 'karolbrasileiro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(83, NULL, 'nicolemaria_2016@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(84, NULL, 'ourocap2002@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(85, NULL, 'peedro.feitosa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(86, NULL, 'eduardasiqueira88@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(87, NULL, 'amandakariinee@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(88, NULL, 'dianelysales@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(89, NULL, 'nevesg063@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(90, NULL, 'heitorgpina@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(91, NULL, 'leonardo1592@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(92, NULL, 'luciana.abgusmao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(93, NULL, 'raissacardeal1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(94, NULL, 'sabbacavalcanti@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(95, NULL, 'jornalistauiara@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(96, NULL, 'jacquelinecmarinho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(97, NULL, 'ramonniellysm@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(98, NULL, 'anndradejessica@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(99, NULL, '4ndradevinicius@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(100, NULL, 'mariliaaraujocampos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(101, NULL, 'luiz.victor.mc@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(102, NULL, 'alfredo_tavares@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(103, NULL, 'pedro.fillipe@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(104, NULL, 'betobarese@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(105, NULL, 'pedrocostaln@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(106, NULL, 'rikleviomelo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(107, NULL, 'paulrfalcao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(108, NULL, 'jfdeazevedo@outlook.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(109, NULL, 'contatosilviomelo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(110, NULL, 'renathamonteiro@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(111, NULL, 'bruno_cabral@outlook.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(112, NULL, 'dyegohenriquec@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(113, NULL, 'pedroafonsopub@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(114, NULL, 'mateusaugustoleitemaciel@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(115, NULL, 'viniciusmirandadavid@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(116, NULL, 'diegobraga.silva@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(117, NULL, 'heloisac013@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(118, NULL, 'suelenaugusto1@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(119, NULL, 'sarinha.up@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(120, NULL, 'mclarahferreira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(121, NULL, 'alicesdamota@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(122, NULL, 'nanee_gomes@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(123, NULL, 'anaakessia@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(124, NULL, 'allan_henrique1994@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(125, NULL, 'pedrogm_0@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(126, NULL, 'juliannalirapessoa@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(127, NULL, 'brunabeatriz.irenejulia@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(128, NULL, 'saramcsilva2.1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(129, NULL, 'daniela.amorim1234@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(130, NULL, 'marialves1997@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(131, NULL, 'mguelleone@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(132, NULL, 'cayari07@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(133, NULL, 'gabriellaestevao@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(134, NULL, 'crisaraujopub@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(135, NULL, 'luizamaiapereira1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(136, NULL, 'thaya876@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(137, NULL, 'patriciaggomes3@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(138, NULL, 'tenoriorafaella@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(139, NULL, 'wagnermetas@me.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(140, NULL, 'sheylaflorencio@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(141, NULL, 'carolbloback@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(142, NULL, 'suzanahrsouza@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(143, NULL, 'luansales.silva@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(144, NULL, 'rannahferraz@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(145, NULL, 'mari_souuza@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(146, NULL, 'priscillaroquekill@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(147, NULL, 'heitormendesds@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(148, NULL, 'andreza.casantos86@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(149, NULL, 'meduardadornelles@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(150, NULL, 'brunasousa.ms@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(151, NULL, 'madubravo13@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(152, NULL, 'deborahferre99@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(153, NULL, 'dudaaflima@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(154, NULL, 'garbas_neto@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(155, NULL, 'guitluna@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(156, NULL, 'anafbarrosoliveira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(157, NULL, 'ainoancf@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(158, NULL, 'wilsonettorj@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(159, NULL, 'jgalvao95@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(160, NULL, 'artur@pensouemobra.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(161, NULL, 'clara.loyo@grupomoura.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(162, NULL, 'tarciofonseca@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(163, NULL, 'roberto_alvesf@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(164, NULL, 'vanessapessoa.rp@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(165, NULL, 'cayari07@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(166, NULL, 'taciianabarbosa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(167, NULL, 'thamiresgusmaao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(168, NULL, 'barbaralopesnogueiraa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(169, NULL, 'alyssonmanso@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(170, NULL, 'andersonrafaelanjos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(171, NULL, 'andrelimaesilvag@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(172, NULL, 'daniela.amorim1234@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(173, NULL, 'mguelleone@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(174, NULL, 'contatobiacavalcanti@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(175, NULL, 'saramcsilva2.1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(176, NULL, 'brunabeatriz.irenejulia@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(177, NULL, 'contatoewertoneduardo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(178, NULL, 'sillas.silva98@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(179, NULL, 'pedroalbuquerque66@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(180, NULL, 'juliannalirapessoa@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(181, NULL, 'pedrogm_0@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(182, NULL, 'villacosta.carol@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(183, NULL, 'mateuswalkmmer6@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(184, NULL, 'nanee_gomes@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(185, NULL, 'sarinha.up@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(186, NULL, 'kellenroberta2001@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(187, NULL, 'yurisaintt@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(188, NULL, 'heloisac013@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(189, NULL, 'diegobraga.silva@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(190, NULL, 'gcpestanaum@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(191, NULL, 'lourencolpb@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(192, NULL, 'stephaniemillena1@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(193, NULL, 'luanyluiza.m@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(194, NULL, 'ammanda.soares@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(195, NULL, 'suelenaugusto1@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(196, NULL, 'brunau.m@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(197, NULL, 'xeniacirne1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(198, NULL, 'pedroafonsopub@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(199, NULL, 'dyegohenriquec@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(200, NULL, 'paulrfalcao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(201, NULL, 'betobarese@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(202, NULL, 'guitluna@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(203, NULL, 'verbalizecom@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(204, NULL, 'larycorreia175@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(205, NULL, 'deborahferre99@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(206, NULL, 'madubravo13@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(207, NULL, 'karolinaaferraz@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(208, NULL, 'brunasousa.ms@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(209, NULL, 'meduardadornelles@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(210, NULL, 'rebeccadantascarneiro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(211, NULL, 'joana.nigro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(212, NULL, 'henrifarias_al@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(213, NULL, 'heitormendesds@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(214, NULL, 'luansales.silva@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(215, NULL, 'suzanahrsouza@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(216, NULL, 'sheylaflorencio@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(217, NULL, 'wladimyr19@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(218, NULL, 'wagnermetas@me.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(219, NULL, 'carol@upagenciaonline.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(220, NULL, 'larissarocha2080@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(221, NULL, 'luiz.victor.mc@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(222, NULL, 'luizamaiapereira1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(223, NULL, 'clarissaaraujo09@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(224, NULL, '4ndradevinicius@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(225, NULL, 'belcaldas@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(226, NULL, 'jeniffer.oliveira.j@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(227, NULL, 'bmedeirosgermano@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(228, NULL, 'renanferreiraa4@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(229, NULL, 'mateusleitemelo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(230, NULL, 'henrique_carvalhooo@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(231, NULL, 'matheus72moreira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(232, NULL, 'melaineandrade123@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(233, NULL, 'digitais.tgt@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(234, NULL, 'pedronjordao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(235, NULL, 'viniciusmirandadavid@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(236, NULL, 'ramonniellysm@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(237, NULL, 'larissamoneta@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(238, NULL, 'tenoriorafaella@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(239, NULL, 'mclarahferreira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(240, NULL, 'andreza.casantos86@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(241, NULL, 'mariliaaraujocampos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(242, NULL, 'silvataisantos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(243, NULL, 'cleytonphotografia@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(244, NULL, 'carlos@shopping-guararapes.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(245, NULL, 'falecomjordy@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(246, NULL, 'thiago.cvinicius@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(247, NULL, 'clara.amorim@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(248, NULL, 'itenasci@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(249, NULL, 'contatojuniorlima1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(250, NULL, 'cida.levino@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(251, NULL, 'eduarda@maunaprodutora.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(252, NULL, 'juliana.jna93@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(253, NULL, 'paollita@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(254, NULL, 'irenefoliveira@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(255, NULL, '13fatinharocha@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(256, NULL, 'clara.amorim@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(257, NULL, 'aliceem.95@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(258, NULL, 'raissacardeal1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(259, NULL, 'luisamacielmonteiro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(260, NULL, 'savanahalbuquerque@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(261, NULL, 'emilly_belarmino@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(262, NULL, 'henrifarias_al@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(263, NULL, 'ghenriquer@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(264, NULL, 'joana.nigro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(265, NULL, 'camila.emerenciano@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(266, NULL, 'joana.nigro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(267, NULL, 'vanessafalcao.ms@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(268, NULL, 'pedronjordao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(269, NULL, 'daniel3398@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(270, NULL, 'amandhafarias00@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(271, NULL, 'clarajaborandy@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(272, NULL, 'rafaelacostb@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(273, NULL, 'cayari07@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(274, NULL, 'juliannalirapessoa@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(275, NULL, 'pedroalbuquerque66@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(276, NULL, 'sillas.silva98@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(277, NULL, 'elbert.jorge@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(278, NULL, 'mateusleitemelo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(279, NULL, 'lorenagmaropo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(280, NULL, 'ammanda.soares@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(281, NULL, 'contatoewertoneduardo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(282, NULL, 'contatobiacavalcanti@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(283, NULL, 'alyssonmanso@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(284, NULL, 'daniela.amorim1234@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(285, NULL, 'Jeankarlos.123@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(286, NULL, 'larifigueiras@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(287, NULL, 'saramcsilva2.1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(288, NULL, 'brunau.m@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(289, NULL, 'aninhabarretofrancaab@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(290, NULL, 'barbaralopesnogueiraa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(291, NULL, 'larissavdsbarbosa1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(292, NULL, 'andersonrafaelanjos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(293, NULL, 'thamiresgusmaao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(294, NULL, 'taciianabarbosa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(295, NULL, 'carolbloback@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(296, NULL, 'larissarocha2080@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(297, NULL, 'gcpestanaum@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(298, NULL, 'larissamoneta@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(299, NULL, 'injanewetrust@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(300, NULL, 'waleskaribeiro3@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(301, NULL, 'heloisac013@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(302, NULL, 'bmedeirosgermano@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(303, NULL, 'victorhugo.cg@icloud.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(304, NULL, 'annakrolina@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(305, NULL, 'silvanatorquato@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(306, NULL, 'jeniffer.oliveira.j@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(307, NULL, 'lilianesantospp@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(308, NULL, 'yurisaintt@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(309, NULL, 'rafalcaognr@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(310, NULL, 'suzana_097@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(311, NULL, 'gabrielfcdiniz@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(312, NULL, 'camaroteg@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(313, NULL, 'ingryd.dblv@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(314, NULL, 'ellidabelarmino1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(315, NULL, 'caio.andrada@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(316, NULL, 'pradoluisfelipe@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(317, NULL, 'renanferreiraa4@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(318, NULL, 'thalison.luiz2507@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(319, NULL, 'financeiro.tgt0@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(320, NULL, 'belneta@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(321, NULL, 'kalyenne.antero@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(322, NULL, 'liannakarlaog@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(323, NULL, 'leencka07@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(324, NULL, 'garbas_neto@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(325, NULL, 'lesliemelosoares@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(326, NULL, 'tete.limatorres7@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(327, NULL, 'thaismatiasarq@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(328, NULL, 'lucenafilipe1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(329, NULL, 'renathamonteiro@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(330, NULL, 'matheus72moreira@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(331, NULL, 'marinacavalcantih@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(332, NULL, 'biancadantas.cg@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(333, NULL, 'mayarammoura@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(334, NULL, 'camilacirne@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(335, NULL, 'rodrigomied@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(336, NULL, 'efraimdjunior@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(337, NULL, 'stephaniemillena1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(338, NULL, 'luanyluiza.m@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(339, NULL, 'wladimyr19@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(340, NULL, 'jacisobrinho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(341, NULL, 'marialalarosa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(342, NULL, 'jaciarac.pestana@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(343, NULL, 'fernandoturzamkt@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(344, NULL, 'luisagsaraujo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(345, NULL, 'ielisonsbarbosa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(346, NULL, 'nathaliaademeloo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(347, NULL, 'anoca.medeiros@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(348, NULL, 'georgepassos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(349, NULL, 'alicehcunha@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(350, NULL, 'igoreaf96@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(351, NULL, 'symone.m.c.78@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(352, NULL, 'marcoslira18@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(353, NULL, 'vinicius_freitas_@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(354, NULL, 'sarah.thaysa@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(355, NULL, 'lee.silva07@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(356, NULL, 'real.shepard@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(357, NULL, 'bianca.infinitocriativo@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(358, NULL, 'greicyvaz99@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(359, NULL, 'petrus.rangel@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(360, NULL, 'elghacarolyne@outlook.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(361, NULL, 'eduardamenezesc@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(362, NULL, 'silvataisantos@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(363, NULL, 'thllins18@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(364, NULL, 'lrenata@emidiapubli.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(365, NULL, 'mariajussania@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(366, NULL, 'wallacelucasm@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(367, NULL, 'alexandre@aleixocomunicacao.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(368, NULL, 'gabiimelo28@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(369, NULL, 'helenameiradf@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(370, NULL, 'elizete.nordeste@ftpi.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(371, NULL, 'mirellaamonteiro@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(372, NULL, 'tatianahgc1@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(373, NULL, 'helenarecife@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(374, NULL, 'dulcehelenasampaio@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(375, NULL, 'marlondiego17@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(376, NULL, 'djair@aleixocomunicacao.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(377, NULL, 'contato.erasmoneto@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(378, NULL, 'eduardamonteiro1995@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(379, NULL, 'tatiolima@yahoo.com.br', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(380, NULL, 'vinipts@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(381, NULL, 'niedja.carvalho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(382, NULL, 'renassentia@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(383, NULL, 'anabarbaramouraa@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(384, NULL, 'amandakariinee@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(385, NULL, 'deborapereira1005@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(386, NULL, 'santosjessicav@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(387, NULL, 'leonardo1592@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(388, NULL, 'luciana.abgusmao@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(389, NULL, 'marianaellencarvalho@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(390, NULL, 'raissacardeal1@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0),
(391, NULL, 'steffanyandrade_@hotmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `img` varchar(60) DEFAULT NULL,
  `dataAula` varchar(20) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `link` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id`, `titulo`, `img`, `dataAula`, `hora`, `link`, `descricao`, `idCurso`) VALUES
(1, 'aula1', '6306927575e95b7057148c.jpeg', '12/11/2020', '20h', 'https://youtu.be/JF7F2uDvDBY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `hashtag` varchar(150) DEFAULT NULL,
  `descricao` text NOT NULL,
  `idProfessor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome`, `img`, `hashtag`, `descricao`, `idProfessor`) VALUES
(1, 'GESTÃO DE REDE SOCIAL - INSTAGRAM', '20504878485e95b760dc07a.jpeg', 'marketing1,marketing2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 2),
(2, 'GOOGLE ADS', '9838563615e95c463605ef.jpeg', '', '  ', 3),
(3, 'INSTAGRAM E FACEBOOK ADS', '13830993035e95c5956909f.jpeg', '', '  ', 3),
(4, 'PLANEJAMENTO DIGITAL', '16396198685e95c57f5a922.jpeg', '', '  ', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursoalunos`
--

CREATE TABLE `cursoalunos` (
  `id` int(11) NOT NULL,
  `idAluno` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursoalunos`
--

INSERT INTO `cursoalunos` (`id`, `idAluno`, `idCurso`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1),
(50, 50, 1),
(51, 51, 1),
(52, 52, 1),
(53, 53, 1),
(54, 54, 1),
(55, 55, 1),
(56, 56, 1),
(57, 57, 1),
(58, 58, 1),
(59, 59, 1),
(60, 60, 1),
(61, 61, 1),
(62, 62, 1),
(63, 63, 1),
(64, 64, 1),
(65, 65, 1),
(66, 66, 1),
(67, 67, 1),
(68, 68, 1),
(69, 69, 1),
(70, 70, 1),
(71, 71, 1),
(72, 72, 1),
(73, 73, 1),
(74, 74, 1),
(75, 75, 1),
(76, 76, 1),
(77, 77, 1),
(78, 78, 1),
(79, 79, 1),
(80, 80, 1),
(81, 81, 1),
(82, 82, 1),
(83, 83, 1),
(84, 84, 1),
(85, 85, 1),
(86, 86, 1),
(87, 87, 1),
(88, 88, 1),
(89, 89, 1),
(90, 90, 1),
(91, 91, 1),
(92, 92, 1),
(93, 93, 1),
(94, 94, 1),
(95, 95, 1),
(96, 96, 2),
(97, 97, 2),
(98, 98, 2),
(99, 99, 2),
(100, 100, 2),
(101, 101, 2),
(102, 102, 2),
(103, 103, 2),
(104, 104, 2),
(105, 105, 2),
(106, 106, 2),
(107, 107, 2),
(108, 108, 2),
(109, 109, 2),
(110, 110, 2),
(111, 111, 2),
(112, 112, 2),
(113, 113, 2),
(114, 114, 2),
(115, 115, 2),
(116, 116, 2),
(117, 117, 2),
(118, 118, 2),
(119, 119, 2),
(120, 120, 2),
(121, 121, 2),
(122, 122, 2),
(123, 123, 2),
(124, 124, 2),
(125, 125, 2),
(126, 126, 2),
(127, 127, 2),
(128, 128, 2),
(129, 129, 2),
(130, 130, 2),
(131, 131, 2),
(132, 132, 2),
(133, 133, 2),
(134, 134, 2),
(135, 135, 2),
(136, 136, 2),
(137, 137, 2),
(138, 138, 2),
(139, 139, 2),
(140, 140, 2),
(141, 141, 2),
(142, 142, 2),
(143, 143, 2),
(144, 144, 2),
(145, 145, 2),
(146, 146, 2),
(147, 147, 2),
(148, 148, 2),
(149, 149, 2),
(150, 150, 2),
(151, 151, 2),
(152, 152, 2),
(153, 153, 2),
(154, 154, 2),
(155, 155, 2),
(156, 156, 2),
(157, 157, 2),
(158, 158, 2),
(159, 159, 2),
(160, 160, 2),
(161, 161, 2),
(162, 162, 2),
(163, 163, 2),
(164, 164, 2),
(165, 165, 3),
(166, 166, 3),
(167, 167, 3),
(168, 168, 3),
(169, 169, 3),
(170, 170, 3),
(171, 171, 3),
(172, 172, 3),
(173, 173, 3),
(174, 174, 3),
(175, 175, 3),
(176, 176, 3),
(177, 177, 3),
(178, 178, 3),
(179, 179, 3),
(180, 180, 3),
(181, 181, 3),
(182, 182, 3),
(183, 183, 3),
(184, 184, 3),
(185, 185, 3),
(186, 186, 3),
(187, 187, 3),
(188, 188, 3),
(189, 189, 3),
(190, 190, 3),
(191, 191, 3),
(192, 192, 3),
(193, 193, 3),
(194, 194, 3),
(195, 195, 3),
(196, 196, 3),
(197, 197, 3),
(198, 198, 3),
(199, 199, 3),
(200, 200, 3),
(201, 201, 3),
(202, 202, 3),
(203, 203, 3),
(204, 204, 3),
(205, 205, 3),
(206, 206, 3),
(207, 207, 3),
(208, 208, 3),
(209, 209, 3),
(210, 210, 3),
(211, 211, 3),
(212, 212, 3),
(213, 213, 3),
(214, 214, 3),
(215, 215, 3),
(216, 216, 3),
(217, 217, 3),
(218, 218, 3),
(219, 219, 3),
(220, 220, 3),
(221, 221, 3),
(222, 222, 3),
(223, 223, 3),
(224, 224, 3),
(225, 225, 3),
(226, 226, 3),
(227, 227, 3),
(228, 228, 3),
(229, 229, 3),
(230, 230, 3),
(231, 231, 3),
(232, 232, 3),
(233, 233, 3),
(234, 234, 3),
(235, 235, 3),
(236, 236, 3),
(237, 237, 3),
(238, 238, 3),
(239, 239, 3),
(240, 240, 3),
(241, 241, 3),
(242, 242, 3),
(243, 243, 3),
(244, 244, 3),
(245, 245, 3),
(246, 246, 3),
(247, 247, 3),
(248, 248, 3),
(249, 249, 3),
(250, 250, 3),
(251, 251, 3),
(252, 252, 3),
(253, 253, 3),
(254, 254, 3),
(255, 255, 3),
(256, 256, 3),
(257, 257, 3),
(258, 258, 3),
(259, 259, 3),
(260, 260, 3),
(261, 261, 4),
(262, 262, 4),
(263, 263, 4),
(264, 264, 4),
(265, 265, 4),
(266, 266, 4),
(267, 267, 4),
(268, 268, 4),
(269, 269, 4),
(270, 270, 4),
(271, 271, 4),
(272, 272, 4),
(273, 273, 4),
(274, 274, 4),
(275, 275, 4),
(276, 276, 4),
(277, 277, 4),
(278, 278, 4),
(279, 279, 4),
(280, 280, 4),
(281, 281, 4),
(282, 282, 4),
(283, 283, 4),
(284, 284, 4),
(285, 285, 4),
(286, 286, 4),
(287, 287, 4),
(288, 288, 4),
(289, 289, 4),
(290, 290, 4),
(291, 291, 4),
(292, 292, 4),
(293, 293, 4),
(294, 294, 4),
(295, 295, 4),
(296, 296, 4),
(297, 297, 4),
(298, 298, 4),
(299, 299, 4),
(300, 300, 4),
(301, 301, 4),
(302, 302, 4),
(303, 303, 4),
(304, 304, 4),
(305, 305, 4),
(306, 306, 4),
(307, 307, 4),
(308, 308, 4),
(309, 309, 4),
(310, 310, 4),
(311, 311, 4),
(312, 312, 4),
(313, 313, 4),
(314, 314, 4),
(315, 315, 4),
(316, 316, 4),
(317, 317, 4),
(318, 318, 4),
(319, 319, 4),
(320, 320, 4),
(321, 321, 4),
(322, 322, 4),
(323, 323, 4),
(324, 324, 4),
(325, 325, 4),
(326, 326, 4),
(327, 327, 4),
(328, 328, 4),
(329, 329, 4),
(330, 330, 4),
(331, 331, 4),
(332, 332, 4),
(333, 333, 4),
(334, 334, 4),
(335, 335, 4),
(336, 336, 4),
(337, 337, 4),
(338, 338, 4),
(339, 339, 4),
(340, 340, 4),
(341, 341, 4),
(342, 342, 4),
(343, 343, 4),
(344, 344, 4),
(345, 345, 4),
(346, 346, 4),
(347, 347, 4),
(348, 348, 4),
(349, 349, 4),
(350, 350, 4),
(351, 351, 4),
(352, 352, 4),
(353, 353, 4),
(354, 354, 4),
(355, 355, 4),
(356, 356, 4),
(357, 357, 4),
(358, 358, 4),
(359, 359, 4),
(360, 360, 4),
(361, 361, 4),
(362, 362, 4),
(363, 363, 4),
(364, 364, 4),
(365, 365, 4),
(366, 366, 4),
(367, 367, 4),
(368, 368, 4),
(369, 369, 4),
(370, 370, 4),
(371, 371, 4),
(372, 372, 4),
(373, 373, 4),
(374, 374, 4),
(375, 375, 4),
(376, 376, 4),
(377, 377, 4),
(378, 378, 4),
(379, 379, 4),
(380, 380, 4),
(381, 381, 4),
(382, 382, 4),
(383, 383, 4),
(384, 384, 4),
(385, 385, 4),
(386, 386, 4),
(387, 387, 4),
(388, 388, 4),
(389, 389, 4),
(390, 390, 4),
(391, 391, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `loginAtivo` tinyint(1) NOT NULL,
  `bloqueado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `email`, `senha`, `loginAtivo`, `bloqueado`) VALUES
(2, 'Paulo Filho', 'email@email.com.br', NULL, 0, 0),
(3, 'Isabela Andrade', 'email@email.com.br', NULL, 0, 0),
(4, 'Tiago Moura', 'email@email.com.br', NULL, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProfessor` (`idProfessor`);

--
-- Índices para tabela `cursoalunos`
--
ALTER TABLE `cursoalunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAluno` (`idAluno`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT de tabela `aula`
--
ALTER TABLE `aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `cursoalunos`
--
ALTER TABLE `cursoalunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`id`);

--
-- Limitadores para a tabela `cursoalunos`
--
ALTER TABLE `cursoalunos`
  ADD CONSTRAINT `cursoalunos_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `cursoalunos_ibfk_2` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
