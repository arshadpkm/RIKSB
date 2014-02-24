-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2013 at 06:02 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kidsdb`
--
CREATE DATABASE IF NOT EXISTS `kidsdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kidsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `imgloc`
--

CREATE TABLE IF NOT EXISTS `imgloc` (
  `id` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgloc`
--

INSERT INTO `imgloc` (`id`, `img`) VALUES
('28233', 'uploadFiles/07G.JPG'),
('28233', 'uploadFiles/9sdfg.jpg'),
('28233', 'uploadFiles/14dh.jpg'),
('13299', 'uploadFiles/&#8206; .jpg'),
('13299', 'uploadFiles/0Lake.jpg'),
('12705', 'uploadFiles/05.JPG'),
('24518', 'uploadFiles/516018.JPG'),
('25422', 'uploadFiles/tomjer6.jpg'),
('17906', 'uploadFiles/ist2_4610923-binary-code.jpg'),
('9733', 'uploadFiles/Aviary Stock Photo 2.png'),
('22704', 'uploadFiles/Aviary Stock Photo 3.png'),
('3496', 'uploadFiles/1.JPG'),
('3496', 'uploadFiles/7HH.JPG'),
('3496', 'uploadFiles/10g.jpg'),
('13672', 'uploadFiles/ant.jpg'),
('20377', 'uploadFiles/Muy.jpg'),
('6629', 'uploadFiles/03.JPG'),
('9518', 'uploadFiles/maruti-suzuki-kizashi.jpeg'),
('4101', 'uploadFiles/logo.png'),
('10088', 'uploadFiles/duck_tales_wallpaper-normal.jpg'),
('10088', 'uploadFiles/ducktales.1363971225.jpg'),
('10088', 'uploadFiles/Ducktalesmoney.jpg'),
('10088', 'uploadFiles/DuckTales-Wallpaper.jpg'),
('10088', 'uploadFiles/index.jpg'),
('8904', 'uploadFiles/duck_tales_wallpaper-normal.jpg'),
('8904', 'uploadFiles/ducktales.1363971225.jpg'),
('8904', 'uploadFiles/Ducktalesmoney.jpg'),
('8904', 'uploadFiles/DuckTales-Wallpaper.jpg'),
('8904', 'uploadFiles/index.jpg'),
('28513', 'uploadFiles/duck_tales_wallpaper-normal.jpg'),
('28513', 'uploadFiles/ducktales.1363971225.jpg'),
('28513', 'uploadFiles/Ducktalesmoney.jpg'),
('28513', 'uploadFiles/DuckTales-Wallpaper.jpg'),
('28513', 'uploadFiles/index.jpg'),
('25703', 'uploadFiles/duck_tales_wallpaper-normal.jpg'),
('25703', 'uploadFiles/ducktales.1363971225.jpg'),
('25703', 'uploadFiles/Ducktalesmoney.jpg'),
('25703', 'uploadFiles/DuckTales-Wallpaper.jpg'),
('25703', 'uploadFiles/index.jpg'),
('21012', 'uploadFiles/bugs-BB1.jpg'),
('18610', 'uploadFiles/one_scary_night.gif'),
('24579', 'uploadFiles/one_scary_night.gif'),
('15389', 'uploadFiles/moonlit_scary_night.jpg'),
('15389', 'uploadFiles/one_scary_night.gif'),
('15389', 'uploadFiles/Scary-hill_650.jpg'),
('15389', 'uploadFiles/scary-night.jpg'),
('7826', 'uploadFiles/moonlit_scary_night.jpg'),
('7826', 'uploadFiles/one_scary_night.gif'),
('7826', 'uploadFiles/Scary-hill_650.jpg'),
('7826', 'uploadFiles/scary-night.jpg'),
('10886', 'uploadFiles/296667_10150357681179891_528569890_8390443_1720350255_n.jpg'),
('10886', 'uploadFiles/small-good-wolf.jpg'),
('10886', 'uploadFiles/The_GOOD_Wolf_by_RyougaLolakie.png.jpg'),
('8007', 'uploadFiles/6295714-frog-prince-darauf-warten-k-sste-werden-ein-herz-halten.jpg'),
('8007', 'uploadFiles/FROGPRINCE.jpg'),
('8007', 'uploadFiles/images.jpg'),
('8007', 'uploadFiles/thefrogprinceaceo.jpg'),
('8007', 'uploadFiles/Watermarked The Frog Prince.jpg'),
('31616', 'uploadFiles/imagej4s.jpg'),
('31616', 'uploadFiles/imaghhes.jpg'),
('31616', 'uploadFiles/index4.jpg'),
('31616', 'uploadFiles/2.jpg'),
('31616', 'uploadFiles/3.jpg'),
('27474', 'uploadFiles/DSC_0047.JPG'),
('24316', 'uploadFiles/2_4.JPG'),
('24316', 'uploadFiles/04SC002.JPG'),
('24316', 'uploadFiles/04-WLP13.JPG'),
('24316', 'uploadFiles/4.JPG'),
('24316', 'uploadFiles/28 (145).jpg'),
('7407', 'uploadFiles/Lightning16.jpg'),
('7407', 'uploadFiles/lightwolf.jpg'),
('7407', 'uploadFiles/MIsc0257.jpg'),
('7407', 'uploadFiles/MIsc0267.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(25) NOT NULL,
  `story` longtext NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `author`, `story`, `img`) VALUES
(64, 'A duck tale', '', 'The bright morning rays shone through the bedroom curtains onto Farmer Huangs pillow making the room hot and stuffy. Farmer Huang is not an early riser but the heat woke up him. He hurriedly got up and started to head for his poultry farm. He had invested all his money in ducks.Farmer Huang got into his lorry that was loaded with ducks in cages and his two workers, Bill and Jim. Their first stop was City Primary School. Upon reaching the school gate, the lorry skidded and punctured a tyre. Farmer Huang left his workers to change the tyre while he went into the school canteen to hand over some ducks.Meanwhile, a boy had crept up the lorry and opened some of the cages. Jim happened to look up; the boy jumped down from the lorry and ran into the school compound. The ducks were escaping! Jim and Bill hurriedly tried to get the ducks back into the cages but their efforts were in vain. There was a great commotion ... ducks quacking, workers shouting.Where was the naughty boy? He was at the school gate letting some ducks into the school. On hearing the noise, many children came out of their classrooms and were watching the funny sight ... two men chasing ducks which were quacking, waddling and flapping their wings which in turn sent down feathers floating in the air! It was hilarious.Farmer Huang came back just in time to catch hold of the boy. He then went after the ducks. He made a funny quacking sound and the ducks began to come to him. He happily put them back into their cages, changed the punctured tyre and drove off ... leaving the boy in the hands of the school principal.', '25703'),
(65, 'A Mouse and His Bug', '', '    A Mouse and His Bug\r\n\r\n    Once there was a mouse\r\n    who lived in a great big house.\r\n    The mouse had a pet bug\r\n    which lived in his mug.\r\n\r\n    The mouse wasnt very happy\r\n    when his bug jumped into his favourite rug.\r\n\r\n    The mouse made the bug stay in his mug\r\n    and forbade it to go near the rug.\r\n    The bug just wouldnt listen\r\n    and jumped onto the rug\r\n\r\n    This time, the mouse was furious\r\n    and squashed it with his mug.', '21012'),
(71, 'A Scary Night', '', 'It was a dark and stormy night. I was about to go to bed when I heard a tapping sound on my window.\r\n        Lightning Flash\r\n        Head of An Alien 	Whos there? I shouted. Suddenly there was a flash of lightning; I saw a face at the window. It looked like an alien ... an alien that I had seen on the television show, the X files.\r\n        I felt very scared. I ran to my bed and pulled my blanket over my head. I started to shout for my parents but there was no reply. Then I remembered that they were at a fancy dress party.\r\n\r\n        I peeped out of my blanket but it was too dark to see anything. Then I heard footsteps. They were getting louder and louder. It was dark but I knew the way to my drawer where I kept my camera. I ran there and took out my camera and started to take pictures in the direction of the window. Soon the footsteps died off.\r\n\r\n        Clock Face\r\n        Pendulum 	\r\n\r\n            The grandfather clock struck ... ... It was 12 midnight. I went back to my bed and tried to sleep. But I could not sleep. I felt too frightened. I sat up, my mind was full of thoughts. Time passed ... one o clock, two o clock, three o clock, four o clock. Finally, I fell asleep. \r\n\r\n        I woke up only after eight and decided to investigate. I found some footprints outside my bedroom window. I measured them with a tape and found them to be exactly the same size as my father s shoes. The footprints ended at the door of my house. I then went to town to get the film developed. But when I saw the photos I was shocked. They were black and I could hardly see anything. Then I remembered that I did not use the flash.\r\n\r\n        When I reached home I told my father the whole incident and he started to laugh. I started laughing too when he told me that he had dressed up as an alien for the party. Today, I am still amused to think I was so afraid of my own father.', '7826'),
(72, 'Small Good Wolf', '', 'I am Small Good Wolf, the grandson of Big Bad Wolf. It was Christmas and I wanted to organise a costume party. I dressed up as a lion ...\r\n\r\nLion Walking ... to scare my friends ... Small Cute Pig, Small Gentle Pig and Small Kind Pig ... because their grandfathers boiled my granddad! I set off for the three little pigs  house, roaring all the way.\r\n\r\nThe pigs heard my roar and thought I was a real lion. They took out their blowpipes, loaded them with darts and stormed out of their house. When I saw their blowpipes I hid among some bushes.\r\n\r\nThough I wanted to take revenge on them, I also wanted to live up to my name. I was supposed to be a good wolf. So I decided to forget the ugly past and continue to be the pigs  friend. I took off the lion skin then I invited them to my costume party. We had a wonderful time playing together. ', '10886'),
(73, 'The Frog Prince', '', 'One fine evening a young princess put on her bonnet and clogs, and went out to take a walk by herself in a wood; and when she came to a cool spring of water with a rose in the middle of it, she sat herself down to rest a while. Now she had a golden ball in her hand, which was her favourite plaything; and she was always tossing it up into the air, and catching it again as it fell.\r\n\r\n     After a time she threw it up so high that she missed catching it as it fell; and the ball bounded away, and rolled along on the ground, until at last it fell down into the spring. The princess looked into the spring after her ball, but it was very deep, so deep that she could not see the bottom of it. She began to cry, and said,  Alas! if I could only get my ball again, I would give all my fine clothes and jewels, and everything that I have in the world. \r\n\r\n     Whilst she was speaking, a frog put its head out of the water, and said,  Princess, why do you weep so bitterly? \r\n\r\n      Alas!  said she,  what can you do for me, you nasty frog? My golden ball has fallen into the spring. \r\n\r\n     The frog said,  I do not want your pearls, and jewels, and fine clothes; but if you will love me, and let me live with you and eat from off your golden plate, and sleep on your bed, I will bring you your ball again. \r\n\r\n      What nonsense,  thought the princess,  this silly frog is talking! He can never even get out of the spring to visit me, though he may be able to get my ball for me, and therefore I will tell him he shall have what he asks. \r\n\r\n     So she said to the frog,  Well, if you will bring me my ball, I will do all you ask. \r\n\r\n     Then the frog put his head down, and dived deep under the water; and after a little while he came up again, with the ball in his mouth, and threw it on the edge of the spring.\r\n\r\n\r\n     As soon as the young princess saw her ball, she ran to pick it up; and she was so overjoyed to have it in her hand again, that she never thought of the frog, but ran home with it as fast as she could.\r\n\r\n     The frog called after her,  Stay, princess, and take me with you as you said, \r\n\r\n     But she did not stop to hear a word.\r\n\r\n     The next day, just as the princess had sat down to dinner, she heard a strange noise - tap, tap - plash, plash - as if something was coming up the marble staircase, and soon afterwards there was a gentle knock at the door, and a little voice cried out and said:\r\n\r\n \r\n\r\n     Open the door, my princess dear,\r\n    Open the door to thy true love here!\r\n    And mind the words that thou and I said\r\n    By the fountain cool, in the greenwood shade. \r\n\r\n \r\n\r\n     Then the princess ran to the door and opened it, and there she saw the frog, whom she had quite forgotten. At this sight she was sadly frightened, and shutting the door as fast as she could came back to her seat.\r\n\r\n     The king, her father, seeing that something had frightened her, asked her what was the matter.\r\n\r\n      There is a nasty frog,  said she,  at the door, that lifted my ball for me out of the spring this morning. I told him that he should live with me here, thinking that he could never get out of the spring; but there he is at the door, and he wants to come in. \r\n\r\n     While she was speaking the frog knocked again at the door, and said:\r\n\r\n \r\n\r\n     Open the door, my princess dear,\r\n    Open the door to thy true love here! \r\n\r\n<  3  >\r\n\r\n    And mind the words that thou and I said\r\n    By the fountain cool, in the greenwood shade. \r\n\r\n \r\n\r\n     Then the king said to the young princess,  As you have given your word you must keep it; so go and let him in. \r\n\r\n     She did so, and the frog hopped into the room, and then straight on - tap, tap - plash, plash - from the bottom of the room to the top, till he came up close to the table where the princess sat.\r\n\r\n      Pray lift me upon chair,  said he to the princess,  and let me sit next to you. \r\n\r\n     As soon as she had done this, the frog said,  Put your plate nearer to me, that I may eat out of it. \r\n\r\n     This she did, and when he had eaten as much as he could, he said,  Now I am tired; carry me upstairs, and put me into your bed.  And the princess, though very unwilling, took him up in her hand, and put him upon the pillow of her own bed, where he slept all night long.\r\n\r\n     As soon as it was light the frog jumped up, hopped downstairs, and went out of the house.\r\n\r\n      Now, then,  thought the princess,  at last he is gone, and I shall be troubled with him no more. \r\n\r\n     But she was mistaken; for when night came again she heard the same tapping at the door; and the frog came once more, and said:\r\n\r\n \r\n\r\n     Open the door, my princess dear,\r\n    Open the door to thy true love here!\r\n    And mind the words that thou and I said\r\n    By the fountain cool, in the greenwood shade. \r\n\r\n \r\n\r\n     And when the princess opened the door the frog came in, and slept upon her pillow as before, till the morning broke. And the third night he did the same. But when the princess awoke on the following morning she was astonished to see, instead of the frog, a handsome prince, gazing on her with the most beautiful eyes she had ever seen and standing at the head of her bed.\r\n<  4  >\r\n\r\n     He told her that he had been enchanted by a spiteful fairy, who had changed him into a frog; and that he had been fated so to abide till some princess should take him out of the spring, and let him eat from her plate, and sleep upon her bed for three nights.\r\n\r\n      You,  said the prince,  have broken his cruel charm, and now I have nothing to wish for but that you should go with me into my father s kingdom, where I will marry you, and love you as long as you live. \r\n\r\n     The young princess, you may be sure, was not long in saying  Yes  to all this; and as they spoke a brightly coloured coach drove up, with eight beautiful horses, decked with plumes of feathers and a golden harness; and behind the coach rode the prince s servant, faithful Heinrich, who had bewailed the misfortunes of his dear master during his enchantment so long and so bitterly, that his heart had well-nigh burst.\r\n\r\n     They then took leave of the king, and got into the coach with eight horses, and all set out, full of joy and merriment, for the prince s kingdom, which they reached safely; and there they lived happily a great many years. ', '8007'),
(74, 'Tree Kangaroo', '', '\r\n\r\n\r\nI am a tree kangaroo\r\nwith lots of things to do\r\nbut I don t fly\r\nfor I m no fool.\r\n\r\nI ve cushion-like paws\r\nand a long furry tail\r\nwith my fur mottled blackish brown.\r\n\r\nMy life span is short\r\nbut I ve got a long alarming growl.\r\n\r\nI have adapted to living in the trees,\r\nbalancing on trees.\r\nI am a particularly good climber\r\nas you will soon see.\r\nI eat leaves and fruits\r\nfound on the ground and in the trees.\r\n\r\nI live in New Guinea.\r\nMy aboriginal name is boongarry\r\nwhich you ve to admit is kind of funny.\r\n\r\nMe and my many species\r\nare hunted for our flesh\r\nbut tree kangaroos are endangered animals\r\nso don t hunt me,\r\nleave me in the forest\r\nand let me be. ', '31616'),
(76, 'An Unforgetful Trip', '', 'The Thunderbirds - This was the name that Namrata, Pooja, Kajari, Latika, Ayesha, Moni, Geetika, Ritu, Parul and Priyanka had given to their gang of 10. Everyone in St. Anna Girls  School knew them. They were always seen together.\r\n\r\n"Guys!!!!! The list of places for the mid-term trip has been put up on the notice board," announced Namrata, who in her excitement had got up on a chair to grab everyone s attention.\r\n\r\nThat did it. What had been an orderly classroom a few seconds earlier was now an empty class. The entire class had dashed off to see the announcement on the notice board.\r\n\r\nThey were screaming, yelling and piling on top of one another just to note down the names of the places they were to choose from for their mid-term trip.\r\n\r\nAn Unforgetful Trip, Stories for kids: 142_1.gif Priyanka, the most enthusiastic and aggressive of the lot was their representative in that swarm. After ten minutes of struggling she finally managed to push her way out, triumphant. The rest of the gang surrounded her.\r\n\r\n"So where should we go for the trip this time?" asked Priyanka.\r\n\r\n"First tell us the options we have, silly!" said Kajari.\r\n\r\n"OK! Jaipur-Udaipur, Dhanaulti, Kasauli and a trek from some place called Magra to Sehestradhara."\r\n\r\n"Hey, I have a great idea. We should choose the trip that most students are least interested in. We will get to enjoy more," suggested Parul.\r\n\r\n"That s right," agreed Pooja.\r\n\r\nThe next morning they checked out the number of students going to each place and finally gave in their names for the Magra-Sehestradhara trek. Besides their gang of 10, there were just eight others who had opted for it.\r\n\r\nThe day finally arrived. All of them got into the bus along with two staff members who were escorting them.\r\n\r\n"Now this is cool! We can have the bus to ourselves," chattered Namrata.\r\n\r\n"Hey, I want the window seat!" shouted Priyanka in a shrill tone.\r\n\r\n"Relax, we can all have window seats," said Latika.\r\n\r\nThe journey from Dehradun to Mussoorie took two hours. The first day was spent in seeing the places of local interest. It was from the second day that the real fun started.\r\n\r\nThe group began its trek from a place called Magra near Mussoorie. Two mules followed them with the supplies of eatables and pots and pans. Each student was carrying her own rucksack.\r\n\r\nFrom the height of the hilly paths the beauty of the valley was breathtaking. But the track was rough and narrow. Each step had to be carefully placed.\r\n\r\nIt was 9 am. They had been walking for three hours and tiredness was setting in. While the enthusiastic ones were way ahead with the guide, some of the team members who enjoyed the company of the teachers had latched on to them.  The thunderbirds  were right at the back, with the mules.\r\n\r\n"I am feeling very tired, let s sit for two minutes," pleaded Ayesha.\r\n\r\n"And I am dying to pee!" said Moni.\r\n\r\n"OK, we take a two-minute rest, decided Latika.\r\n\r\n"But where should I go?" asked Moni.\r\n\r\n"The rest room is this way ma am," said Latika pointing mockingly to a bush.\r\n\r\nEveryone laughed.\r\n\r\nIt was then that they heard a scream. It was Moni from behind the bush.\r\n\r\n\r\n', '24316'),
(77, ' A Fight Between Brothers', '', 'It all started when Tom called me to join him in a game of basketball. He said that Jack and some other boys would be there too. I had finished my homework and had nothing else to do so I agreed. Tom told me to go to Radin Mas Community Club at three o clock.\r\n\r\n        On the way there, I bought a burger. When I reached the basketball court, I was surprised to see Tom and Jack quarrelling. Tom and Jack are brothers and they loved each other and seldom quarreled.\r\n        Mouseover to hear ...\r\n        Later on, I learnt that they were quarrelling over who should start throwing the ball. I shouted to them to stop but they would not listen. They created such a racket that the people in a nearby coffeeshop were looking at them. Soon Tom and Jack started to trade punches. I was shocked, as I had never even heard them quarreled before. Now they were fighting before my eyes!\r\n\r\n        Luckily, two men came and grabbed hold of the boys till the boys calmed down. Then I suggested that we go to the coffeeshop for a drink. At the coffeeshop, I brought out my burger and it was good to see Tom and Jack sharing the burger and laughing once again. ', '7407');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `pwd`, `email`, `mob`) VALUES
('admin', 'admin', 'admin@admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `video`) VALUES
(1, 'Christian Animated Cartoon Movie', 'uploadv/Christian_Animated_Cartoon_Movie.mp4'),
(2, 'CinderellaBibbidiBobbodiBoo', 'uploadv/CinderellaBibbidiBobbodiBoo.mp4'),
(3, 'Hum Tum Cartoon story', 'uploadv/Hum_Tum_Cartoon_story.mp4'),
(4, 'The Lion and the Mouse - kindergarten story for ki', 'uploadv/The_Lion_and_the_Mouse_-_kindergarten_story_for_kids.mp4'),
(5, 'The Story Of ZamZam - Islamic cartoon for kids', 'uploadv/The_Story_Of_ZamZam_-_Islamic_cartoon_for_kids.mp4'),
(6, 'The_Elephant_Child_A_Children', 'uploadv/The_Elephant_Child_A_Children.mp4'),
(7, 'Tom Y Jerry Cuentos Cocina 2013', 'uploadv/Tom_Y_Jerry_Cuentos_Cocina_2013.mp4'),
(8, 'Wolf Seven Little Goats - Moral Story For Kids', 'uploadv/Wolf_Seven_Little_Goats_-_Moral_Story_For_Kids.mp4'),
(9, 'Cookies Nursery Rhymes', 'uploadv/Cookies_Nursery_Rhymes_-_YouTube.MP4'),
(10, 'Nursery Rhymes', 'uploadv/Nursery_Rhymes_Vol_1_-_Popular_Collectionundefined.mp4'),
(11, 'cookies', 'uploadv/Cookies_Nursery_Rhymes_-_YouTube.MP4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
