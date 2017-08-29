-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 29 Août 2017 à 20:09
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BILSKIRNIR_LOCATION`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `leasingId` int(11) NOT NULL,
  `bookingUserId` int(11) NOT NULL,
  `beginning` date NOT NULL,
  `ending` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `country` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `house` tinyint(1) NOT NULL,
  `appartment` tinyint(1) NOT NULL,
  `title` varchar(80) NOT NULL,
  `travelers` int(20) NOT NULL,
  `beds` int(20) NOT NULL,
  `bathrooms` int(20) NOT NULL,
  `rooms` int(30) NOT NULL,
  `kitchens` int(20) NOT NULL,
  `wifi` tinyint(1) NOT NULL,
  `airConditioner` tinyint(1) NOT NULL,
  `description` text NOT NULL,
  `picture1` text NOT NULL,
  `picture2` text NOT NULL,
  `picture3` text NOT NULL,
  `picture4` text NOT NULL,
  `picture5` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `leasing`
--

INSERT INTO `leasing` (`id`, `userId`, `country`, `city`, `house`, `appartment`, `title`, `travelers`, `beds`, `bathrooms`, `rooms`, `kitchens`, `wifi`, `airConditioner`, `description`, `picture1`, `picture2`, `picture3`, `picture4`, `picture5`, `price`) VALUES
(1, 1, 'France', 'Le Soler', 1, 0, 'Test', 9, 8, 5, 5, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'uploads/21056901_10212210028559475_782885818_o.jpg', 'uploads/21057842_10212210022879333_1285448735_o.jpg', 'uploads/21081536_10212210026279418_1379156990_o.jpg', 'empty', 'empty', 0),
(2, 1, 'France', 'Le Soler', 1, 0, 'Test', 9, 8, 5, 5, 1, 1, 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'uploads/21056901_10212210028559475_782885818_o.jpg', 'uploads/21057842_10212210022879333_1285448735_o.jpg', 'uploads/21081536_10212210026279418_1379156990_o.jpg', 'empty', 'empty', 0),
(3, 1, 'France', 'Paris', 1, 0, 'Test avec price', 1, 3, 1, 2, 1, 1, 1, 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flThe quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven fl', 'uploads/21056901_10212210028559475_782885818_o.jpg', 'uploads/21057842_10212210022879333_1285448735_o.jpg', 'uploads/21081536_10212210026279418_1379156990_o.jpg', 'empty', 'empty', 70),
(4, 1, 'France', 'Lyon', 1, 0, 'test with redirect', 6, 5, 5, 4, 8, 1, 0, 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flThe quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flThe quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven fl', 'uploads/21056901_10212210028559475_782885818_o.jpg', 'uploads/21057842_10212210022879333_1285448735_o.jpg', 'uploads/21081536_10212210026279418_1379156990_o.jpg', 'empty', 'empty', 120),
(5, 1, 'Canada', 'Montreal', 1, 0, 'test redirect and wifi only', 5, 5, 4, 5, 4, 1, 0, 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flThe quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven flThe quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow, vexing daft Jim. Sex-charged fop blew my junk TV quiz. How quickly daft jumping zebras vex. Two driven jocks help fax my big quiz. Quick, Baz, get my woven fl', 'uploads/21056901_10212210028559475_782885818_o.jpg', 'uploads/21081536_10212210026279418_1379156990_o.jpg', 'uploads/21057842_10212210022879333_1285448735_o.jpg', 'uploads/Hotel.jpg', 'empty', 90),
(6, 1, 'test', 'test', 1, 0, 'test', 5, 4, 6, 6, 6, 0, 1, '$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert', 'uploads/Hotel.jpg', 'uploads/logo_header_orange.png', 'uploads/account.png', 'empty', 'empty', 44),
(7, 1, 'test', 'test', 1, 0, 'test', 5, 4, 6, 6, 6, 0, 1, '$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert$hosting_services_insert', 'uploads/Hotel.jpg', 'uploads/logo_header_orange.png', 'uploads/account.png', 'empty', 'empty', 44);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(75) NOT NULL,
  `lastname` varchar(75) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `signup` datetime NOT NULL,
  `newsletter` tinyint(1) DEFAULT NULL,
  `profilPic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `members`
--

INSERT INTO `members` (`id`, `email`, `firstname`, `lastname`, `password`, `birth`, `signup`, `newsletter`, `profilPic`) VALUES
(1, 'test@test.com', 'test', 'test', '43b0cef99265f9e34c10ea9d3501926d27b39f57c6d674561d8ba236e7a819fb', '2017-01-01', '2017-08-26 11:20:22', 1, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `leasing`
--
ALTER TABLE `leasing`
  ADD CONSTRAINT `leasing_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
