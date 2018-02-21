-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 08:30 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `a_user` int(11) NOT NULL,
  `a_profil` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_admprofil` (`a_profil`),
  KEY `fk_admuser` (`a_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `a_user`, `a_profil`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `adresse` varchar(255) NOT NULL,
  `adresse2` varchar(255) NOT NULL,
  `boite_postale` int(11) NOT NULL,
  `ville` varchar(32) NOT NULL,
  `pays` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adresse`
--

INSERT INTO `adresse` (`ID`, `adresse`, `adresse2`, `boite_postale`, `ville`, `pays`) VALUES
(1, '18, Rue Al-Adarissa', 'Hassan', 10000, 'Rabat', 'Maroc');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE IF NOT EXISTS `cabinet` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `raison` varchar(32) NOT NULL,
  `adresse_ID` int(11) NOT NULL,
  `adresse_mail` varchar(120) NOT NULL,
  `numtel_fixe` int(11) NOT NULL,
  `numtel_mobile` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`ID`, `raison`, `adresse_ID`, `adresse_mail`, `numtel_fixe`, `numtel_mobile`) VALUES
(1, 'Cabinet Dentaire Al Adarissa', 1, 'cd_aladarissa@gmail.com', 520321108, 650581108);

-- --------------------------------------------------------

--
-- Table structure for table `dossier_medical`
--

CREATE TABLE IF NOT EXISTS `dossier_medical` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `INTERVENTION_ID` int(11) NOT NULL,
  `ALLERGIE_ID` int(11) NOT NULL,
  `RESULTAT_ID` int(11) NOT NULL,
  `NOTES_ID` int(11) NOT NULL,
  `COMPTE_RENDUS_ID` int(11) NOT NULL,
  `FILM_RADIO_ID` int(11) NOT NULL,
  `IMAGES_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_dosmedinterv` (`INTERVENTION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `etat_facture`
--

CREATE TABLE IF NOT EXISTS `etat_facture` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(16) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
  `ID` int(11) NOT NULL,
  `DATE` int(11) NOT NULL,
  `MONTANT` float NOT NULL,
  `PAIEMENT_TYPE_ID` int(11) NOT NULL,
  `ETAT_FACTURE_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_factetatfact` (`ETAT_FACTURE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intervention`
--

CREATE TABLE IF NOT EXISTS `intervention` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(255) NOT NULL,
  `TYPE_INTERV_ID` int(11) NOT NULL,
  `FACTURE_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE IF NOT EXISTS `medecin` (
  `ID` int(11) NOT NULL,
  `ADMIN_ID` int(11) NOT NULL,
  `PROFIL_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_medprofil` (`PROFIL_ID`),
  KEY `fk_medadmin` (`ADMIN_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`ID`, `ADMIN_ID`, `PROFIL_ID`, `USER_ID`) VALUES
(1, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MEDECIN_ID` int(11) NOT NULL,
  `DOSSIER_MEDICAL_ID` int(11) NOT NULL,
  `PROFIL_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_patprofil` (`PROFIL_ID`),
  KEY `fk_patmedecin` (`MEDECIN_ID`),
  KEY `fk_patdosmed` (`DOSSIER_MEDICAL_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ADMIN_ID` int(11) NOT NULL,
  `PROFIL_ID` int(11) NOT NULL,
  `LOGIN` varchar(20) NOT NULL,
  `PASS` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_persadmin` (`ADMIN_ID`),
  KEY `fk_persprofil` (`PROFIL_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse_id` int(11) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `numtel_fixe` int(11) NOT NULL,
  `numtel_mobile` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_profiladr` (`adresse_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`ID`, `nom`, `prenom`, `date_naissance`, `adresse_id`, `nss`, `numtel_fixe`, `numtel_mobile`, `email`) VALUES
(1, 'Elhaj', 'Mahmoud', '1992-07-07', 1, '272242', 548903537, 650571109, 'mahmoud.el31@gmail.fr'),
(2, 'Aziz', 'Abdel', '1982-08-04', 1, '124252', 520113246, 650522314, 'aziz_abdel.532487@gmail.fr');

-- --------------------------------------------------------

--
-- Table structure for table `rendez_vous`
--

CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `patient_ID` int(11) NOT NULL,
  `note` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `pass` char(40) NOT NULL,
  `type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `login`, `pass`, `type`) VALUES
(1, 'admin', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'ADMIN'),
(2, 'aziz_abdel', 'root', 'NORM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
