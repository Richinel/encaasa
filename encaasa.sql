-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 01 okt 2016 om 22:58
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `encaasa`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vraag` text NOT NULL,
  `antwoord` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Gegevens worden geëxporteerd voor tabel `faq`
--

INSERT INTO `faq` (`id`, `vraag`, `antwoord`) VALUES
(1, 'Wat is beschermingsbewind?', 'Bewindvoering, ook wel beschermingsbewind genoemd, is een wettelijke maatregel die bedoeld is voor meerderjarige personen die door hun lichamelijke of geestelijke toestand tijdelijk of blijvend niet (meer) in staat zijn om hun financi&euml;le belangen te behartigen.'),
(2, 'Wanneer is beschermingsbewind mogelijk?', 'Volgens de wet is bewindvoering bedoeld voor mensen, die vanwege hun lichamelijke of geestelijke toestand niet in staat zijn om hun eigen financi&euml;n te regelen. Voor sommige mensen is bewindvoering tijdelijk, maar over het algemeen is het voor onbepaalde tijd. De kantonrechter is degene die beoordeelt of bewindvoering noodzakelijk is.'),
(3, 'Wat doet een bewindvoerder?', 'Een bewindvoerder is bedoeld om u op financieel gebied te beschermen tegen anderen, maar ook tegen uzelf. Een bewindvoerder regelt al uw financi&euml;le zaken. De bewindvoerder mag namens u een handtekening zetten onder financi&euml;le stukken. Dit gebeurt zoveel mogelijk in overleg met u. Maar de bewindvoerder neemt in uw belang ook zelf initiatief en grijpt in als dat nodig is.'),
(4, 'Wat wordt onder bewind gesteld?', 'Alle goederen van een meerderjarige kunnen onder bewind worden gesteld. Onder goederen wordt verstaan: banksaldo, loon, pensioen, uitkering, maar ook meubilair, sieraden, onroerende zaken, effecten, vorderingen en schulden. De kantonrechter kan, afhankelijk van de situatie, besluiten om slechts een gedeelte van de goederen onder bewind te stellen, bijvoorbeeld alleen het spaartegoed of onroerend goed.'),
(5, 'Wat verandert er voor u bij onder bewindstelling?', 'Op het moment dat Encaasa tot bewindvoerder is benoemd, gaan er voor u een aantal dingen veranderen. Dit betekent dat u niet meer als enige over uw financi&euml;n kan beslissen. Zo zullen wij een brief sturen naar de instanties, bedrijven en eventuele schuldeisers waarmee u een financi&euml;le relatie heeft. In deze brief zullen we uitleggen dat uw vermogen onder bewind is gesteld. Om een bewindvoerder aan te stellen is een uitspraak van de rechtbank nodig. Iemand die onder bewind gesteld wordt, kan niet meer zelfstandig over zijn of haar vermogen of inkomsten beschikken, maar blijft wel handelingsbekwaam.'),
(6, 'Wie kunnen beschermingsbewind aanvragen?', 'U kunt zelf bewindvoering aanvragen. Ook uw partner of familieleden, tot in de vierde graad, kunnen hiervoor een verzoek doen. Dat zijn ouders, grootouders, kinderen en kleinkinderen, broers, zusters, neven, nichten en ook ooms en tantes. Ook Encaasa kan het namens u aanvragen.'),
(7, 'Wat moet de kantonrechter weten?', 'Als u de aanvraag bij Encaasa in behandeling geeft, wordt het verzoek aan de kantonrechter door Encaasa opgesteld. De kantonrechter vraagt om een medische verklaring van een arts, of in sommige situaties een sociaal verslag van een maatschappelijk werker. Aan de hand van de medische verklaring kan de kantonrechter beoordelen, of de situatie om over te gaan tot bewindvoering ook daadwerkelijk van belang is. U ondertekent de aanvraag zelf. Kunt u dit, om welke reden dan ook, niet ondertekenen, dan mag een familielid de aanvraag ook ondertekenen.'),
(8, 'Aan wie moet het verzoek worden gericht?', 'Een verzoek tot onder bewindstelling moet worden gericht aan de kantonrechter, in de gemeente waar de persoon woont, voor wie de onderbewindstelling wordt aangevraagd.'),
(9, 'Wanneer treedt de bewindvoering officieel in werking?', 'De bewindvoering treedt in werking wanneer de kantonrechter daartoe heeft besloten, en dat officieel op de dag, nadat de griffier van het kantongerecht u op de hoogte heeft gesteld van deze beslissing. Deze beslissing staat in een brief, die ook wel beschikking wordt genoemd. Wanneer de kantonrechter Encaasa officieel tot bewindvoerder heeft benoemd, moeten er een aantal zaken worden geregeld.'),
(10, 'Wie controleert de bewindvoerder?', 'Jaarlijks legt de bewindvoerder aan de Rechtbank verantwoording af door middel van een overzicht van uw inkomsten en uitgaven in dat jaar.'),
(11, 'Wie betaalt de kosten voor bewindvoering?', 'U betaalt zelf maandelijks voor de kosten van bewindvoering. Soms is het mogelijk de kosten via de bijzondere bijstand vergoed te krijgen.'),
(12, 'Wat is het verschil tussen bewindvoering (beschermingsbewind) en budgetbeheer?', 'Beschermingsbewind wordt via de kantonrechter verkregen. Budgetbeheer wordt niet via de kantonrechter verkregen, maar er wordt gewerkt op basis van vrijwilligheid via een contract en een volmacht.'),
(13, 'Wanneer eindigt bewindvoering?', 'Bewindvoering eindigt bij overlijden. Eerder kan het eindigen wanneer de bewindvoering wordt vervangen door curatele, of wanneer er een verzoekschrift tot opheffing van de bewindvoering aan de kantonrechter wordt gericht, en door de kantonrechter wordt gehonoreerd. In dit geval moet het wel aannemelijk zijn, dat men zelf weer volledig in staat is, om de financi&euml;n te regelen. Encaasa behoudt zich het recht voor de rechtbank te verzoeken de bewindvoering per direct te staken indien de cli&euml;nt zich niet conformeert aan de procedure. Bij be&euml;indiging van bewindvoering moet Encaasa veelal een aantal extra werkzaamheden uitvoeren, zoals het informeren van instanties, het versturen van adreswijzigingen, het opmaken van een eindrekening en verantwoording, en eventueel het inschakelen van een notaris. De kosten voor deze extra werkzaamheden zijn voor betrokken cli&euml;nt.'),
(14, 'Wat doen wij voor u?', 'In het geval van bewindvoering doen wij het volgende voor u:\r\n	    			<ul>\r\n	    				<li>\r\n	    					Inventariseren van inkomsten, uitgaven, schulden en bezittingen;\r\n	    				</li>\r\n	    				<li>\r\n	    					Het maken van een budgetplan, om te bepalen welke ruimte er is voor leefgeld;\r\n	    				</li>\r\n	    				<li>\r\n	    					Informatie inwinnen bij diverse relevante instanties;\r\n	    				</li>\r\n	    				<li>\r\n	    					Wijzigen van gegevens bij instanties;\r\n	    				</li>\r\n	    				<li>\r\n	    					Openen van bankrekening(en);\r\n	    				</li>\r\n	    				<li>\r\n	    					Aanvragen huur- en zorgtoeslag;\r\n	    				</li>\r\n	    				<li>\r\n	    					Aanvragen kwijtschelding gemeentelijke belastingen;\r\n	    				</li>\r\n	    				<li>\r\n	    					Verzorgen van jaarlijkse belastingaangifte (box 1);\r\n	    				</li>\r\n	    				<li>\r\n	    					Doorbetalen van de vaste lasten;\r\n	    				</li>\r\n	    				<li>\r\n	    					Postverwerking en tevens de post naar u toezenden;\r\n	    				</li>\r\n	    				<li>\r\n	    					Jaarlijkse rapportage aan de rechtbank\r\n	    				</li>\r\n	    			</ul>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
