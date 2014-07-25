<?php 
	$db = new PDO('sqlite:robots.db');

	$r = $db->exec("DELETE FROM robots");

	$robotArray = array();

	$aisoy = "Aisoy is a robot based on a Raspberry Py model B. It is a service robot able to do vocale reconnaissance. It is wifi connected.";

	$albert = "Albert is a little educative robot, first robot sold in Korea by now. It enables people to play games like monopolie, read sentences on books, understand play cards. It can't speak other languages than Korean and Eglish for now.";

	$aria = "Aria is humanoid. It is a robot created with an autonomous endoskeleton enabling buyers to coat it freely. It is a project developed under Windows. The whole robot can be bought or just parts of it. It can be bought as well as muntable units.";

	$asimo ="Asimo is a robot creatd by Honda. The project starts in 2000 to create a robot able to helps people. It is now used to encourage young people to choose to study sciences in school.";

	$bigdog = "Big Dog is a robot designed for military used and not for general public. It is a tool to carry heavy load in places difficult to access.";

	$botiful = "Botifulis a little telepresence robot that just poped up in the Innorobo show. Developed in California it is in pre-sales in France by now.";

	$docent = "Robot sales by BigRobot in France. This plateforme is used to present art pieces in museum. Guiding people in artistics univers. It has a pico projector and can have vocale detection.";

	$darwin = "DARwIn-OP, understand \“Dynamic Anthropomorphic Robot with Intelligence–Open Platform\” is an open-source humanoid robot created by the south-Korean Robotis. It is a programing robot fitted with skills of advanced treatment. Darwin-op has been created at first by the Virginia American University. It is entirely open-source as for the hardware than the software. arwin-op is used to teach and for research.";

	$emox = "Last creation of Awabot: Emox under Androïd. Introduced during Innorobo with Atos Worldline. This little robot is annouced with a price of 1000€ and is used by french school. It should come up in the public market soon.";

	$furo = "Fitted with two big screens, mobile and autonomous, able to speak more than 30 languages and to recognize faces, FURo is a robotised hostess adapted to showrooms, commercial spaces...";

	$furoi = "Furo-i or Hyoro is a interactif robot. Developed by FURo creators, this new little mate is destinated to people support. It is small (25x36cm) it is made for people information in medical environment, psychic help, it can be use to listen music, watch movies... as well.";

	$hovis = "\"First service robot\" Hovis is a little humanoid robot working thanks to a tablet embedded is is body and under Android. Thanks to some applications, it will be able to watch out your kids, home and to wake you up in the morning for example.";

	$icub = "iCub is a humanoid robot, fitted with a human appearance and with the size of a 4 years old kid. It has been created for search and development in laboratories or universities and not for a professionnal or personnal use. It is currently not able to walk, we hope to see it move quickly!";

	$irobiq = "iRobi-q is a intelligente service robot. Used in schools, it has to be able to teach to everybody in a funiest and coolest way. Thanks to its nice face, it can correspond to a yung or adult public. It is able to move, take picture, make videos too.";

	$isobot = "i-Sobot is the smallest humanoid robot nowaday.";

	$jazz = "Telepresence robot, Jazz is used in several hospital services. It is capable of managing teleconference and was created to be the avatar of a faraway person.";

	$kibo = "Kirobo, the space robot. Kibo is one of the two humanoids with Mirata created by the Japaneese compagny Dentsu. It is developed to act with astronauts of all the world and will be available from September 2013.";

	$luna = "This big robot is really low cost and created by tge RoboDynamics Company. Get out a first time for $3000 in 2011, it get out one more time last year for only $1000! Luna is an open-source programmable robot. It is running under a Linux based OS called LunaOS. It also has between 4 and 8hours battery.";

	$mirata = "Little brother of Kirobo, Mirata has a future in schools with kids. Today, gym teacher, tomorrow, colouring teacher, those little humanoids will definitely surround european school's classes has fast has they made it in Asia.";

	$morphex = "Moprhex is a little robot looking like a translucent ball at first. Actually, it is an hexapode able to shrivel itself and to walk this way moving each of its faces!";

	$nao = "Nao is a humanoid, autonomous, programmable (python or blocs) robot of almost 58cm height. It is developed in France by the Aldebaran Robotics, created by Mr. Maisonnier. It is a learning robot but should be developed to help autistic children in hospital... or even home.";

	$papero = "The PaPeRo robot has been subject of a long research, it has been developed to create a robot friend of human being and to be able to live with them. That is why, it has different basics functions to interact with people.";

	$qb = "An other avatar. This time presented by the Anybots Company. Qb is a robot able to be 60cm height to almost 1m80. We can already imagine it in our companies, seeting by our side with its red and white bow tie.";

	$qbo = "The Q.bo robot is a mobile programmable robot based on ROS and developed by the Spanish comapgny The Corpora. It is a plateform completly open-source inteded to develop artificial intelligence based on ROS and to promote the movable robot in our everyday life. It has been developed to has a maximum of possibilities to code.";

	$reem ="REEM is a humanoïd robot tht can be used in many different ways. It is easy to interact with it thanks to a touch screen. It can be used as a teacher, be a guide... It talks, carry things, make video and can be used for video-conferences.";

	$reeti = "Reeti is a robot designed to be meaningfull and communicating. At the same time development platform or professionnal demonstration tool, Reeti is a french robot whith good loonking.";

	$roboy = "Roboy is a fantastic project designed to develop a robot in really short time: 9 months. A robot \"human-sized\" even in its creation. It will have a child size and will be entirely open-sourced. It comes out for the first time the 8th of March 2013 in Zurich.";

	$romeo = "Romeo, Nao's big brother, each of us child of Aldebaran Robotic.It will be 140cm height, will be an assistance robot but everything is kept secret until it will comes out apparently in 2015.";

	$romo = "A little cuty robot based on iOS. We offer it an iPhone has head and it can move, play with us. It will be the toy of adults and children.";

	$ropid = "Kirobo and Mirata's cousin, Ropid is a humanoid able to jump, run and move quiet rapidly. It is developed in Japan by the professor Tomotaka Takahashi.";

	$scitos = "Movable plateform, Scitos is made for professionals and not general public. It has been created to make development.";

	$smartbot = "One other with a smartphone in the head! Smartbot is under Android and should comes out in May 2013. It is cute, it will be available with a lot of objects: protection screen, little ball, gun ball...";

	$baxter = "Industrial robot born in 2013, Baxter is still not available in Europe exept in research version. It has benn designed to enter small industries and become a cobotic robot. With its hight security ability it doesn't need all industrial cages and no expert to control it. It should be a much more affordable robot than one designed today by companies as Kuka or Staubli, it will be available from 19,000€ and  no need to hire a specialist anymore. Also, it will be now possible to make it do a lot of different tasks and to move it in a easy way.";

	$hyve = "Hyve is the first new born of the Worldline company. It is a little robot with two motors created to welcome futur collaborators on stands during forums. We will wait to see it in the Innorobo exibition...";

	$valkyrie = "Thanks to a challenge launch by the American army, the NASA decided to develop a humanoid robot called Valkyrie. It would be the robot before human in Mars... Kind of the Iron Man' robots...";

	$poppy = "The Flower Lab from France is designing an Open Source affordable Robot called Poppy. It has 25 motors, 16 force sensors and many really usefull equipment as a screen, micros, webcameras...";

	$scarobot = "In 2099, researchers were able to remotely control the takeoff of a beetle then direct his flight and finally to land but without achieving a high accuracy in the remote... In a Cockroach! USA Army is thinking about spying \"stuff\" between animal and robots";

	$walkman = "WALK-MAN is a 4 years integrated project (IP) funded by the European Commission through the call FP7-ICT-2013-10. The project started on September 2013 and has the goal to develop a robotic platform (of an anthropomorphic form) which can operate outside the laboratory space in unstructured environments and work spaces as a result of natural and man-made disasters.";

	$neuron = "nEUROn is a Unmanned Combat Air Vehicle Demonstrator for the development, integration and validation of UCAV technologies and is not for military operational deployment. The aircraft performs an air-to-ground mission in a network centric warfare.";

	$petman = "Petman (Protection Ensemble Test Mannequin) is a robot designed by Boston Robotics. In the picture it is testing chemical products introduction detection in army suits. It can hit speeds of 4.4 miles per hour, it has the appearance of an apocalyptic robot and is one of the most impressive robot known today. ";

	$robotArray[0] = array('Aisoy', $aisoy, '0', 'https://www.aisoy.com/?lang=en', '209€','22.30x16.30x15.60cm', '1.5kg', 'Spain', 'aisoy.png', '2013', 'Aisoy');

	$robotArray[1] = array('Albert', $albert, '0', 'http://www.sktelecom.com/', '300€', '', '', 'Korea', 'albert.png', '2013', 'SK Telecom');

	$robotArray[2] = array('Aria', $aria, '0', 'http://www.cybedroid.com/', '7000€', '165cm', '30kg', 'France', 'aria.png', '2013', 'Cybedroid');

	$robotArray[3] = array('Artemis', '', '0', 'http://www.gizmag.com/go/2635/', '', '', '', 'Japan', 'artemis.png', '2013', 'Tmsuk');

	$robotArray[4] = array('Asimo', $asimo, '1', 'http://world.honda.com/ASIMO/', 'N/A', '130x45x37cm', '48kg', 'Japan', 'asimo.png', '2000', 'Honda');

	$robotArray[5] = array('Big Dog', $bigdog, '0', 'http://www.bostondynamics.com/robot_bigdog.html', 'N/A', '91x76cm', '109kg', 'USA', 'bigdog.png', '2013', 'Boston Dynamics');

	$robotArray[6] = array('Botiful', $botiful, '0', 'http://www.botiful.me/', '200€', '', '', 'USA', 'botiful.png', '2013', 'Botiful');

	$robotArray[7] = array('Docent', $docent, '0', 'http://www.gobizkorea.com/blog/ProductList.do?blogId=SYSGM_000000408&group_code=43609&group_name=ROBOT%20PRODUCTS&cnt=3', '', '', '', 'Korea', 'docent.png', '2013', 'Corbell');

	$robotArray[8] = array('Darwin-op', $darwin, '1', 'http://www.robotis.com/xe/darwin_en', '', '', '', 'Korea', 'darwin.png', '2013', 'Robotis');
	
	$robotArray[9] = array('Emox', $emox, '0', 'http://www.emox-robot.com/', '1000€', '', '', 'France', 'emox.png', '2012', 'Awabot');

	$robotArray[10] = array('FURo', $furo, '1', 'http://www.odm-tech.com/services/category/robot/furo/index.html', '48000€','160x65cm', '65kg', 'Korea', 'furo.png', '2010', 'Future Robot');

	$robotArray[11] = array('Furo-i', $furoi, '0', 'http://www.futurerobot.com/en/page/product03.php', '', '25x36cm', '7kg', 'Korea', 'furo-i.png', '2013', 'Future Robot');

	$robotArray[12] = array('Hovis Genie', $hovis, '1', 'http://www.bigrobots.com/fr/mobile/174-hovis-genie.html', '1500€', '41x25x24cm', '3,2kg', 'Korea', 'hovis.png', '2013', 'DogbuRobot');

	$robotArray[13] = array('iCub', $icub, '1', 'http://www.icub.org/', '270000€', '', '', 'Europe', 'icub.png', '', 'EU Commision');

	$robotArray[14] = array('IRobi-Q', $irobiq, '0', 'http://www.irobibiz.com/', '3500€', '45x32cm', '7kg', 'Korea', 'irobiq.png', '2012', 'Irobibiz');

	$robotArray[15] = array('i-Sobot', $isobot, '0', 'http://www.isobotrobot.com/eng/', '80€', '16.5x9.7x6.6cm', '340g', 'USA', 'isobot.png', '2013', 'Tomy USA');

	$robotArray[16] = array('Jazz', $jazz, '0', 'http://www.gostai.com/', '7500€', '100x41x35cm', '8kg', 'France', 'jazz.png', '', 'Gostaï');

	$robotArray[17] = array('Kibo', $kibo, '1', 'http://kibo-robo.jp/en/', 'N/A', '34x18x15cm', '1kg', 'Japan', 'kirobo.png', '2013', 'Dentsu');

	$robotArray[18] = array('Luna', $luna, '0', 'http://robodynamics.com/', '1000€', '157x56cm', '30kg', 'USA', 'luna.png', '2013', 'RoboDynamics');
	
	$robotArray[19] = array('MorpHex', $morphex, '0', 'http://robot-kits.org/2012/04/02/morphex-video-part-iii/', 'N/A', '', '', 'Norvège', 'morphex.png', '', 'Zenta Robotics Creation');

	$robotArray[20] = array('Nao', $nao, '1', 'http://www.aldebaran-robotics.com/fr/Accueil/bienvenue.html?language=fr-FR', '1200€', '58cm', '4.3kg', 'France', 'nao.png', '2013', 'Aldebaran');
		
	$robotArray[21] = array('PaPeRo', $papero, '0', 'http://www.nec.co.jp/products/robot/en/functions/index.html', 'N/A', '38x28x25cm', '6.5kg', 'Korea', 'papero.png', '', 'Zenta Robotics Creation');

	$robotArray[22] = array('Qb', $qb, '0', 'https://www.anybots.com/', '9700€', '183cm', '14.5kg', 'USA', 'qb.png', '2013', 'Anybots');
	
	$robotArray[23] = array('Qbo', $qbo, '0', 'http://thecorpora.com/blog/', '4540€', '46x31x29cm', '11kg', 'Spain', 'qbo.png', '', 'The Corpora');

	$robotArray[24] = array('Mirata', $mirata, '1', 'http://kibo-robo.jp/en/', '', '34x18x15cm', '1kg', 'Japan', 'kirobo.png', '2013', 'Dentsu');

	$robotArray[25] = array('REEM', $reem, '1', 'http://pal-robotics.com/', '', '170cm', '90kg', 'Spain', 'reem.png', '', 'Pal Robotics');

	$robotArray[26] = array('Reeti', $reeti, '0', 'http://www.reeti.fr', '4990€', '44cm', '5kg', 'France', 'reeti.png', '', 'Robopec');
	
	$robotArray[28] = array('Roboy', $roboy, '1', 'http://www.roboy.org/', '', '120cm', '', 'Germany', 'roboy.png', '2012', 'Artificial Intelligence Laboratory');

	$robotArray[29] = array('Roméo', $romeo, '1', 'http://www.aldebaran-robotics.com/fr/Accueil/bienvenue.html?language=fr-FR', '', '140cm', '40.5kg', 'France', 'romeo.png', '', 'Aldebaran');
		
	$robotArray[30] = array('Romo', $romo, '0', 'http://romotive.com/meet-romo', '149$', '11x15x7.6cm', '242g', 'USA', 'romo.png', '', 'Romo');

	$robotArray[31] = array('Ropid', $ropid, '1', 'http://www.robo-garage.com/en/prd/index.html', '', '38cm', '1.6kg', 'Japan', 'ropid.png', '2013', 'Robo Garage');
	
	$robotArray[32] = array('Scitos', $scitos, '0', 'http://www.metralabs.com/index.php?option=com_content&view=article&id=77&Itemid=59', '36300$', '58x74x150cm', '75kg', 'Spain', 'scitos.png', '', 'Metra');

	$robotArray[27] = array('Smartbot', $smartbot, '0', 'http://www.overdriverobotics.com/', '€160', '', '', 'France', 'smartbot.png', '2013', 'ODR');

	$robotArray[33] = array('Baxter', $baxter, '1', 'http://www.rethinkrobotics.com/products/baxter/', '€19,000', '155x242cm to 185xx242cm', '75kg', 'USA', 'baxter.png', '2013', 'Rethink Robotics');

	$robotArray[14] = array('Hyve', $hyve, '0', '', '', '', '1,4kg', 'France', 'hyve.png', '2013', 'Worldline');

	$robotArray[34] = array('Valkyrie', $valkyrie, '1', 'http://www.theroboticschallenge.org/node/59', '', '1.90m || 6\' 2"', '130kg', 'USA', 'valkyrie.png', '2013', 'NASA');

	$robotArray[35] = array('Poppy', $poppy, '1', 'http://www.poppy-project.org/', '€7,500', '84cm', '3.5kg', 'France', 'poppy.png', '2013', 'Inria');

	$robotArray[36] = array('Scarobot', $scarobot, '0', 'http://www.bypassbrowser.com/a-cockroach-robot-to-spy-on-the-enemy.html', '', 'Cockroach size', '', 'USA', 'scarobot.png', '2009', 'Berkeley University');

	$robotArray[37] = array('Walk-Man', $walkman, '1', 'http://walk-man.eu/', '', '', '', 'Europe', 'walkman.png', '2013', 'European Commission');

	$robotArray[38] = array('nEUROn', $neuron, '1', 'http://www.airforce-technology.com/projects/neuron/', '', '12.5mx9.2m', '4,500kg to 6,000kg', 'France, Italy, Spain, Sweden, Greece et Swiss', 'neuron.png', '2005', 'Dassault Aviation');

	$robotArray[39] = array('Petman', $petman, '1', 'http://www.bostondynamics.com/robot_petman.html', '', '1.75m || 5.74feet', '80kg || 176 lbs', 'USA', 'petman.png', '', 'Boston Dynamics');



	foreach($robotArray as $robot) {
		$sql = "INSERT INTO robots(name, description, humanoide, website, price, size, weight, origine, picture, year, createby) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
	
		$stmt = $db->prepare($sql);
		$stmt->execute($robot);
		$stmt->closeCursor();
	}
?>