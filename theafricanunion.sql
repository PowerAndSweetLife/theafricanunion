-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 27 juil. 2023 à 07:08
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `theafricanunion`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id_about` int NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_about`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `content`) VALUES
(1, 'GET IN TOUCH Wdhowell@theafricanunion.com Scottsdale ARZ 85254 FOLLOW US\r\n10632 N.\r\nScottsdal Rd 401 ,\r\nWdhowell@theafricanunion.com');

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id_address` int NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_general_ci,
  `email` text COLLATE utf8mb4_general_ci,
  `phone` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_address`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `address`
--

INSERT INTO `address` (`id_address`, `address`, `email`, `phone`) VALUES
(1, 'New York', 'Wdhowell@theafricanunion.com', '+261 34 85 135 05');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_clients` int NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_general_ci NOT NULL,
  `passwd` text COLLATE utf8mb4_general_ci NOT NULL,
  `password_plain_text` text COLLATE utf8mb4_general_ci NOT NULL,
  `fullname` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_clients`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_clients`, `email`, `passwd`, `password_plain_text`, `fullname`) VALUES
(8, 'jenny@gmaiasdfasdfl.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'qwerty', 'qrweqwerqwer'),
(7, 'jenny@gmaiasdfasdfl.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'qwerty', 'qrweqwerqwer'),
(6, 'jenny@gmail.com', 'c129b324aee662b04eccf68babba85851346dff9', '12341234', 'asdfasdfasdf');

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id_countries` int NOT NULL AUTO_INCREMENT,
  `country_name` text COLLATE utf8mb4_general_ci,
  `description` text COLLATE utf8mb4_general_ci,
  `slug_country` text COLLATE utf8mb4_general_ci,
  `biography` text COLLATE utf8mb4_general_ci,
  `economic` text COLLATE utf8mb4_general_ci,
  `historic` text COLLATE utf8mb4_general_ci,
  `politic` text COLLATE utf8mb4_general_ci,
  `flag_country` text COLLATE utf8mb4_general_ci,
  `culture_description` text COLLATE utf8mb4_general_ci,
  `photo_culture` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_countries`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `countries`
--

INSERT INTO `countries` (`id_countries`, `country_name`, `description`, `slug_country`, `biography`, `economic`, `historic`, `politic`, `flag_country`, `culture_description`, `photo_culture`) VALUES
(1, 'Algeria', 'The history of Algeria fits into the larger history of the Maghreb and dates back thousands of years. In Antiquity, the Algerian territory saw the formation of the Numidian kingdoms before coming under the partial domination of the Romans, Vandals, Byzantines and independent Berber principalities', 'algeria', 'The demography of Algeria is the field which studies all the data concerning the population of Algeria, yesterday and today.\r\n\r\nThe body responsible for knowledge of demography in Algeria is the National Statistics Office, which publishes data on the country\'s demography each year.\r\nThus, it was estimated on January 1, 2020 that its population was 43,900,000 inhabitants, making it the eighth country in Africa by demographic weight and thirty-fifth country in the world14. This is the sixth consecutive year that Algeria has exceeded in volume of live births the threshold of one million births, although there has been a slight decrease compared to 201815.\r\n\r\n', 'After more than a century of French colonization, at the end of a long and murderous war of independence and following the self-determination referendum of July 1, 1962, Algeria proclaimed its independence on July 5, 1962.', 'The history of Algeria fits into the larger history of the Maghreb and dates back thousands of years. In Antiquity, the Algerian territory saw the formation of the Numidian kingdoms before coming under the partial domination of the Romans, Vandals, Byzantines and independent Berber principalities\r\n\r\n\r\nThe 7th century marks the beginning of Islamization and then the partial Arabization of the population. The central Maghreb then experienced several local dynasties: Rostemids (767-909), Zirides (972-1148), Hammadides (1014-1152), Zianides (1235-1556) and periods of integration into larger imperial groups: Umayyads (in the 8th century), Fatimids (in the 10th century), Almoravids (in the 11th century), Almohades (in the 12th century)\r\n\r\nContemporary Algeria begins to be established territorially at the beginning of the regency of Algiers, either in the 16th century. French colonization will allow it to extend to the borders of the Sahara and will upset the existing social formation. The emergence, at the beginning of the 20th century, of a national movement led to the outbreak of the Algerian war in 1954, an armed insurrection which ended with the independence of the country in 1962, and the constitution of the State. -nation current', 'Since October 1988, the People\'s Democratic Republic of Algeria has been a constitutional representative democracy based on a multi-party semi-presidential regime supported by the 1996 constitution revised in 2020. The prerogatives of the State are thus distributed among the government, appointed by the president, and the parliament, elected by universal suffrage, and this periodically every 5 years, renewable once', 'images/AlgeriaFlag.jpg', 'simple description ou slogan Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi dolor, cupiditate natus dolorem !', 'images/f666027efd2c440faba8789da1357fef.jpg'),
(2, 'Angola', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'angola', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'images/AlgeriaFlag.jpg', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'images/f666027efd2c440faba8789da1357fef.jpg'),
(3, 'Malawi', '\n                            Malawi prides itself with a mosaic of unique culture practices and norms. The main traditional dances and rituals as well as arts and crafts found among the people act as an identifying factor for the many but united ethnic groups of the country.\n                        ', 'malawi', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'images/AlgeriaFlag.jpg', 'The culture of Angola, a country in southern Africa, refers first of all to the observable cultural practices of its 27,000,000 inhabitants.', 'images/f666027efd2c440faba8789da1357fef.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE IF NOT EXISTS `emails` (
  `id_emails` int NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8mb4_general_ci,
  `objet` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `content` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_emails`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `emails`
--

INSERT INTO `emails` (`id_emails`, `email`, `objet`, `content`) VALUES
(8, 'qwer@gmail.com', 'asdf', 'asdf'),
(7, 'qwer@gmail.com', 'asdf', 'asdf'),
(6, 'asdf', 'asdf', 'asdf'),
(9, 'qwer@gmail.com', 'asdf', 'asdf'),
(10, 'qwer@gmail.com', 'asdf', 'asdf'),
(11, 'qwer@gmail.com', 'asdf', 'asdf'),
(12, 'qwer@gmail.com', 'asdf', 'asdf'),
(13, 'qwer@gmail.com', 'asdf', 'asdf'),
(14, 'qwer@gmail.com', 'asdf', 'asdf'),
(15, 'qwer@gmail.com', 'asdf', 'asdf'),
(16, 'qwer@gmail.com', 'asdf', 'asdf'),
(17, 'qwer@gmail.com', 'asdf', 'asdf'),
(18, 'qwer@gmail.com', 'asdf', 'asdf'),
(19, 'qwer@gmail.com', 'asdf', 'asdf'),
(20, 'qwer@gmail.com', 'asdf', 'asdf'),
(21, 'qwer@gmail.com', 'asdf', 'asdf'),
(22, 'qwer@gmail.com', 'asdf', 'asdf'),
(23, 'qwer@gmail.com', 'asdf', 'asdf'),
(24, 'qwer@gmail.com', 'asdf', 'asdf'),
(25, 'qwer@gmail.com', 'asdf', 'asdf'),
(26, 'qwer@gmail.com', 'asdf', 'asdf'),
(27, 'qwer@gmail.com', 'asdf', 'asdf'),
(28, 'qwer@gmail.com', 'asdf', 'asdf'),
(29, 'qwer@gmail.com', 'asdf', 'asdf'),
(30, 'qwer@gmail.com', 'asdf', 'asdf'),
(31, 'qwer@gmail.com', 'asdf', 'asdf'),
(32, 'qwer@gmail.com', 'asdf', 'asdf'),
(33, 'qwer@gmail.com', 'asdf', 'asdf'),
(34, 'qwer@gmail.com', 'asdf', 'asdf'),
(35, 'qwer@gmail.com', 'asdf', 'asdf'),
(36, 'qwer@gmail.com', 'asdf', 'asdf'),
(37, 'qwer@gmail.com', 'asdf', 'asdf'),
(38, 'qwer@gmail.com', 'asdf', 'asdf');

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

DROP TABLE IF EXISTS `header`;
CREATE TABLE IF NOT EXISTS `header` (
  `id_header` int NOT NULL AUTO_INCREMENT,
  `mission` text COLLATE utf8mb4_general_ci,
  `objectif` text COLLATE utf8mb4_general_ci,
  `culture` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_header`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `header`
--

INSERT INTO `header` (`id_header`, `mission`, `objectif`, `culture`) VALUES
(1, 'Our Mission is to Galvanize the global Nation of Africa Decendant into a Dynasty capable of effectuating Policies which facilitate the Growth and Prosperity of African Union Citazens .', 'Our main objective is to remove the remaining vestiges of colonization and apartheid from the continent; to promote unity and solidarity among African states; coordinate and intensify development cooperation; to safeguard the sovereignty and territorial integrity of member states and to promote international cooperation', 'Maintaining informed, knowledgeable Citizenship is essential to creation and maintenance of a more perfect African Union. Citizens shall keep informed of current political, legal and social events in that Citizen’s District and shall promptly communicate all information which potentially impacts the African Union’s plans and objectives to the Global Headquarters.');

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

DROP TABLE IF EXISTS `social`;
CREATE TABLE IF NOT EXISTS `social` (
  `id_social` int NOT NULL AUTO_INCREMENT,
  `facebook` text COLLATE utf8mb4_general_ci,
  `twitter` text COLLATE utf8mb4_general_ci,
  `youtube` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_social`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id_social`, `facebook`, `twitter`, `youtube`) VALUES
(1, 'asdfasdf', 'asdfasdf', 'asdfasdf');

-- --------------------------------------------------------

--
-- Structure de la table `solution`
--

DROP TABLE IF EXISTS `solution`;
CREATE TABLE IF NOT EXISTS `solution` (
  `id_solution` int NOT NULL AUTO_INCREMENT,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `developpement_economique` text COLLATE utf8mb4_general_ci,
  `organisation_et_fonction` text COLLATE utf8mb4_general_ci,
  `organisation_des_comites_regionaux` text COLLATE utf8mb4_general_ci,
  `organisation_des_comites_district` text COLLATE utf8mb4_general_ci NOT NULL,
  `resolution_des_differents` text COLLATE utf8mb4_general_ci NOT NULL,
  `interpretation_constitutionnelle` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_solution`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `solution`
--

INSERT INTO `solution` (`id_solution`, `content`, `developpement_economique`, `organisation_et_fonction`, `organisation_des_comites_regionaux`, `organisation_des_comites_district`, `resolution_des_differents`, `interpretation_constitutionnelle`) VALUES
(1, 'We the Citizens of the African Union acknowledge that cultural adulteration and manipulation are dominate factors in the lack of collective prosperity of African people\r\nand that our cultures have been manipulated and adulterated by the policies of our adversaries .', 'The African Union supports capitalism to the degree that it inspires human beings to push the limits of human development and increases the living standards of the general Citizenship. The African Union opposes extreme concentrations of capital and wealth in business, industries or individuals. The African Union believes that billionaires pose an unreasonable risk to the political and social wellbeing of populations of the world at large. Billionaires corrupt political and social policies and increase chaos, poverty, and death upon the world populations.\n\nAll Committees must maintain balanced books and enough liquidity to timely meet monthly financial demands for a period as determined by independent fiat of the Regional Committee.\n\nThe District Committees shall develop and implement programs for funding Citizens’ businesses and promoting economic development pursuant to Global Committee guidelines.\n\n\nAll business loans shall be based upon a realistic and verifiable feasibility study for each business and shall be based solely on an objective determination and a vote by all District Citizens regarding the viability of said enterprise. The District Committee shall maintain adequate procedures to monitor all business ventures and provide monthly reports, which shall include income and balance sheets, to the Global Committee\n\n.\n\nAll District Committees shall provide quarterly reports to the Global Committee regarding the use of all funds.\n\nCitizens shall transact business with other Citizens whenever those Citizens offer services or products equal in quality, price and availability than Non-Citizens. Citizens shall provide service to other Citizens which is objectively equal or better in all aspects to comparable service offered by Non-Citizens. Citizens shall be objectively reasonable in all business transactions with other Citizens.', 'The President has plenary powers to represent the Global Citizens in all foreign affairs.\n\nThe Global Committee is charged and responsible for setting those global policies and procedures necessary to effectuate this Global Constitution.\n\nThe Global Committee shall be organized and staffed one Vice President from each geographical region; and a Secretary, Treasurer, Health Minister, Finance Minister, Trade Minister, Education Minister, Culture Minister, Communications Minister, History Minister, Judiciary Minister, Science Minister, Public Relations Minister and Security Minister.\n\nThe Global Committee is vested with the power:\n\nrequire and collect Fees, Dues and Contributions;\nborrow money on the credit of the African Union;\nestablish uniform rules of Citizen admissions and expulsions;\nestablish minimum standards for education, health, medical, tribunals and business relations;\nregulate commerce between, among and for Citizens;\nestablish global economic, cultural, and social policies;\nengage in collective bargaining on behalf of Citizens;\ndesignate the means of consummating economic transactions, regulate the value thereof and fix all aspect and standards involving financial exchanges and transactions;\nmaintain financial institutions and systems for the benefit of African Union Citizens.\nGender based campaigns or competition for positions shall be strictly prohibited. No reference to gender shall be made, directly, indirectly, implicitly or expressly as a qualification for election or basis for disqualification of election of any office or position. No Citizen may appeal to gender as a basis or reason to support a position, candidacy, or issue. Neither Gender, nor gender-based assumptions, shall factor into consideration in any determination of responsibly, innocence or guilt for misconduct. Citizens shall reject concepts of such as gender-based violence or any concept which recognizes or infers that harm inflicted upon any segment of Citizens is more egregious or harmful than harm inflicted upon another segment.\n\nThe President shall be elected by a plurality of votes from all Citizens for a term of 5 years. The terms of the President, Cabinet Citizens, or Officers shall be held inviolate and not be altered for any reason.\n\nVice Presidents are elected by a plurality of Regional Citizen votes for a term of five years. Said elections shall be held concurrently with the Presidential election.\n\n\nThe Treasure is elected by a plurality of all Global Citizens for a term of 4 years. The Treasurer serves at the pleasure of the Citizens. The Treasurer shall perform official duties with impeccable integrity and hold sacred the duty to safeguard all entrusted funds. The Treasurer shall promptly report theft, misappropriation, or discrepancy in the use or disbursement of funds to appropriate Committees and Citizens.\n\n\n\nThe Minister of Education shall formulate educational programs designed to foster advanced performance and education in math and sciences, business, economics, psychology, social sciences, computer science, physics, medicine, and global politics. All education shall be designed to effectuate African Union dominance in all spheres of human existence.\n\nGlobal Committee Members who learn, directly or indirectly, of fraud or corruption by any Citizen shall take steps to stop it and report it to the Regional Committee at the earliest opportunity to safely, confidentiality, and discretely do so.\n\nCitizen may register as either public Citizens or private Citizens. Both classes of Citizens share the same rights except, no Citizen shall disclose the identity, speak about, or comment upon the Citizenship of another Citizen, without the other Citizen’s express consent. No Citizen shall disclose the identify or acknowledge the existence of any Private Citizen or that a class of Private Citizens exists.\n\n\nHonorary Citizens are those Citizens who have negligible African DNA or African ancestry. The term “Honorary Citizens” includes spouses of the opposite sex of Citizens.\nHonorary Citizens share one vote with the Honorary Citizen’s spouse of the opposite sex who serves as the couples’ representative in the African Union for the Honorary Citizen’s Family.\nHonorary Citizens shall have no voting rights.', 'Citizens shall organize one Regional Committee comprised of one Citizen from each the eight geographical regions, i.e., Asia, Middle East, North Africa, and Greater Arabia, Europe, North American, Central American and the Caribbean, South America, Sub-Saharan Africa, Australian and Oceania.\n\nRegional Committee Persons are be elected upon plurality vote of the District Citizen’s in each geographical region.\n\nRegional Committee Persons shall organize, supervise, tabulate, monitor and direct all election activities. Regional Committee Citizens shall certify election results and/or report election results, discrepancies and fraudulent conduct to District Committees and the Global Committees.', 'Citizens shall organize and form District committees to represent those in each district. District Committees are comprised of 20 Citizens, limited to representing 50,000 Citizens, and elected upon plurality vote of the Citizen’s in the District. Each District elects by majority vote one Chairperson to oversee all operations and report to Regional and Global Committees.   All Citizens shall vote in each election. Upon presentation of a petition by a majority of the Chairperson’s from all District Committees, the Global Committee shall schedule and conduct a referendum vote on any issue. No vote shall be scheduled to change or alter this Constitution except upon the votes of three fourths of all Global Citizens. District Committee Chairpersons must hold a vote in his or her District upon any issue whenever most of the Citizens in the Chairperson’s district present a petition to the Chairperson requesting that the Chairperson present the issue to the Global Committee  .  Each Citizen whose annual income exceeds the poverty index for that Citizen’s District shall contribute a minimum of one percent of that Citizens’ gross income to the Citizens District. Each household constitutes one Citizen for purposes of determining contributions. Regional Committees shall select and appoint a qualified person to audit the books, bank accounts and records of each District within its region.  District Committees shall identify the unique, aspirations, skills, education and talents of all Citizens and promote, develop and utilize those skill for the benefit of the African Union.  Citizens may form gender-based committees for the purpose of facilitating, intervening, training and educating Citizens in maintenance and advancement of family cohesion and male-female harmony.', 'African Union Citizens must keep all promises made to other Citizens and are liable for all harm caused by a failure to keep letter and spirit of all implied and express promises.  African Union Citizens shall agree to be irrevocably bound by decisions of African Union tribunals. The African Union Judiciary shall develop and maintain its own body of case law and may adopt legal precedent from Non-African Union sources provided the adoption of said legal precedent does not conflict with the principles of this Constitution.  Citizens shall consent to binding arbitration of all disputes between Citizens. Each Citizen involved in a dispute shall select one arbitrator to represent his or her interest. Arbitrators must be Citizens. An arbitrator shall possess adequate legal training and experience, have no interest in the outcome of the arbitration and disclose all renumeration provided for conducting the arbitration.  Citizens shall have the right to appeal any decision to the Regional Court. The Regional Court shall be comprised of at least one qualified person from each regional division, and not number more than eight. Reasonable efforts shall be made to find an equal number of qualified males and females. Regional Court Officers are elected by Citizens of the respective regions and serve for one uninterrupted six-year term. Appeals shall be concluded within 30 days of submission for decision. Citizens who are dissatisfied with a decision from the Regional Court shall have the right to “petition” the Global Court and ask for discretionary review.  The Global Court shall be comprised of one qualified person from by the District of each Region and shall be comprised of an equal number of males and females. Husbands and Wives cannot sit together on the Regional Court, but husbands and wives who demonstrate harmonious marriages of ten or more years shall comprise half the Citizens.  Review of a Regional Court decision by the Global Court shall be mandatory upon the request by a plurality of the General Citizens, plurality of District Committee Chairpersons or a plurality of District Committee Citizens. Decisions rendered by the Global Court are binding precedent upon all African Union Citizens. All Citizens must comply with all aspect of decisions from the Global Court.', 'No provision of this Constitution be subject to any interpretation not evidenced by its plain language or inconsistent with the drafters’ intent as established by clear and unequivocal evidence.  It is intended by the drafters of the Constitution that changes shall occur only after extensive debate at all levels and that change be extremely difficult to bring into effect. Changes to the Constitution shall be ratified only upon the vote of three-fourths of all Citizens.    The Citizens shall strictly reject the concept of a living Constitution or that changing times or changing events necessitate Constitutional modification. Citizens shall acknowledge that universal truths exist which outlive the cyclical nature of social trends and that all change is not beneficial to the prosperity of humanity. The proponents of any constitutional change have the burden of proving by clear and convincing evidence that the proposed changes will generally benefit all Citizens and not harm the unity or prosperity of the African Union.');

-- --------------------------------------------------------

--
-- Structure de la table `streaming`
--

DROP TABLE IF EXISTS `streaming`;
CREATE TABLE IF NOT EXISTS `streaming` (
  `id_streaming` int NOT NULL AUTO_INCREMENT,
  `link` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id_streaming`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `streaming`
--

INSERT INTO `streaming` (`id_streaming`, `link`) VALUES
(1, '<iframe width=\"1280\" height=\"720\" src=\"https://www.youtube.com/embed/uXlRK7NzVZ8\" title=\"Le premier match de Neymar pour le Brésil\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
