<?php

$requete=array();

$requete["localisation"]=array(
"1,'Organisation'",
"2,'Centre de formation'"
);

$requete["typesource"]=array(
"1,'SITUATIONS V?CUES EN FORMATION'",
"2,'SITUATIONS V?CUES EN STAGE DE PREMI?RE ANN?E DANS L\?ORGANISATION'",
"3,'SITUATIONS V?CUES EN STAGE DE DEUXI?ME ANN?E DANS L\?ORGANISATION'"
);

$requete["source"]=array(
"1,'Stage 1',2",
"2,'Stage 2',3",
"3,'TP',1",
"4,'PPE',1"
);

$requete["type"]=array(
"1,'V?cu'",
"2,'Observ?'",
"3,'Simul?'"
);

$requete["cadre"]=array(
"1,'?quipe'",
"2,'Seul'"
);

$requete["typologie"]=array(
"1,56,'Production d\?une solution logicielle et d\?infrastructure'",
"2,55,'Prise en charge d\?incidents et de demandes d\?assistance'",
"3,49,'?laboration de documents relatifs ? la production et ? la fourniture de services'",
"4,53,'Mise en place d\?un dispositif de veille technologique'"
);

$requete["parcours"]=array(
"0,'****','Indiff?renci?'",
"1,'SISR','Solutions d\?infrastructure, syst?mes et r?seaux'",
"2,'SLAM','solutions logicielles et applications m?tiers'"
);

$requete["processus"]=array(
"1,'P1','Production de services'",
"2,'P2','Fourniture de services'",
"3,'P3','Conception et maintenance de solutions d\?infrastructure'",
"4,'P4','Conception et maintenance de solutions applicatives'",
"5,'P5','Gestion du patrimoine informatique'"
);

$requete["exploite"]=array(
"1,1",
"1,2",
"1,3",
"1,5",
"2,1",
"2,2",
"2,4",
"2,5"
);

$requete["domaine"]=array(
"1,1,'D1.1','Analyse de la demande'",
"2,1,'D1.2','Choix d\'une solution'",
"3,1,'D1.3','Mise en production d\'un service'",
"4,1,'D1.4','Travail en mode projet'",
"5,2,'D2.1','Exploitation des services'",
"6,2,'D2.2','Gestion des incidents?et des demandes d\'assistance'",
"7,2,'D2.3','Gestion des probl?mes et des changements'",
"8,3,'D3.1','Conception d\'une solution d\'infrastructure'",
"9,3,'D3.2','Installation d\'une solution d\'infrastructure'",
"10,3,'D3.3','Administration et supervision d\'une infrastructure'",
"11,4,'D4.1','Conception et r?alisation d\'une solution applicative'",
"12,4,'D4.2','Maintenance d\'une solution applicative'",
"13,5,'D5.1','Gestion des configurations'",
"14,5,'D5.2','Gestion des comp?tences'"
);

$requete["activite"]=array(
"1,1,'A1.1.1',54,'Analyse du cahier des charges d\'un service ? produire'",
"2,1,'A1.1.2',47,'?tude de l\'impact de l\'int?gration d\'un service sur le syst?me informatique'",
"3,1,'A1.1.3',47,'?tude des exigences li?es ? la qualit? attendue d\'un service'",
"4,2,'A1.2.1',49,'?laboration et pr?sentation d\'un dossier de choix de solution technique'",
"5,2,'A1.2.2',54,'R?daction des sp?cifications techniques de la solution retenue (adaptation d\'une solution existante ou r?alisation d\'une nouvelle solution)'",
"6,2,'A1.2.3',57,'?valuation des risques li?s ? l\'utilisation d\'un service'",
"7,2,'A1.2.4',51,'D?termination des tests n?cessaires ? la validation d\'un service'",
"8,2,'A1.2.5',37,'D?finition des niveaux d\'habilitation associ?s ? un service'",
"9,3,'A1.3.1',49,'Test d\'int?gration et d\'acceptation d\'un service'",
"10,3,'A1.3.2',51,'D?finition des ?l?ments n?cessaires ? la continuit? d\'un service'",
"11,3,'A1.3.3',56,'Accompagnement de la mise en place d\'un nouveau service'",
"12,3,'A1.3.4',25,'D?ploiement d\'un service'",
"13,4,'A1.4.1',25,'Participation ? un projet'",
"14,4,'A1.4.2',47,'?valuation des indicateurs de suivi d\'un projet et justification des ?carts'",
"15,4,'A1.4.3',22,'Gestion des ressources'",
"16,5,'A2.1.1',53,'Accompagnement des utilisateurs dans la prise en main d\'un service'",
"17,5,'A2.1.2',50,'?valuation et maintien de la qualit? d\'un service'",
"18,6,'A2.2.1',32,'Suivi et r?solution d\'incidents'",
"19,6,'A2.2.2',45,'Suivi et r?ponse ? des demandes d\'assistance'",
"20,6,'A2.2.3',37,'R?ponse ? une interruption de service'",
"21,7,'A2.3.1',58,'Identification, qualification et ?valuation d\'un probl?me'",
"22,7,'A2.3.2',41,'Proposition d\'am?lioration d\'un service'",
"23,8,'A3.1.1',45,'Proposition d\'une solution d\'infrastructure'",
"24,8,'A3.1.2',58,'Maquettage et prototypage d\'une solution d\'infrastructure'",
"25,8,'A3.1.3',48,'Prise en compte du niveau de s?curit? n?cessaire ? une infrastructure'",
"26,9,'A3.2.1',57,'Installation et configuration d\'?l?ments d\'infrastructure'",
"27,9,'A3.2.2',49,'Remplacement ou mise ? jour d\'?l?ments d?fectueux ou obsol?tes'",
"28,9,'A3.2.3',41,'Mise ? jour de la documentation technique d\'une solution d\'infrastructure'",
"29,10,'A3.3.1',50,'Administration sur site ou ? distance des ?l?ments d\'un r?seau, de serveurs, de services et d\'?quipements terminaux'",
"30,10,'A3.3.2',59,'Planification des sauvegardes et gestion des restaurations'",
"31,10,'A3.3.3',42,'Gestion des identit?s et des habilitations'",
"32,10,'A3.3.4',43,'Automatisation des t?ches d\'administration'",
"33,10,'A3.3.5',51,'Gestion des indicateurs et des fichiers d\'activit?'",
"34,11,'A4.1.1',39,'Proposition d\'une solution applicative'",
"35,11,'A4.1.2',51,'Conception ou adaptation de l\'interface utilisateur d\'une solution applicative'",
"36,11,'A4.1.3',47,'Conception ou adaptation d\'une base de donn?es'",
"37,11,'A4.1.4',59,'D?finition des caract?ristiques d\'une solution applicative'",
"38,11,'A4.1.5',35,'Prototypage de composants logiciels'",
"39,11,'A4.1.6',53,'Gestion d\'environnements de d?veloppement et de test'",
"40,11,'A4.1.7',54,'D?veloppement, utilisation ou adaptation de composants logiciels'",
"41,11,'A4.1.8',49,'R?alisation des tests n?cessaires ? la validation d\'?l?ments adapt?s ou d?velopp?s'",
"42,11,'A4.1.9',40,'R?daction d\'une documentation technique'",
"43,11,'A4.1.1',45,'R?daction d\'une documentation d\'utilisation'",
"44,12,'A4.2.1',44,'Analyse et correction d\'un dysfonctionnement, d\'un probl?me de qualit? de service ou de s?curit?'",
"45,12,'A4.2.2',52,'Adaptation d\'une solution applicative aux ?volutions de ses composants'",
"46,12,'A4.2.3',57,'R?alisation des tests n?cessaires ? la mise en production d\'?l?ments mis ? jour'",
"47,12,'A4.2.4',42,'Mise ? jour d\'une documentation technique'",
"48,13,'A5.1.1',45,'Mise en place d\'une gestion de configuration'",
"49,13,'A5.1.2',44,'Recueil d\'informations sur une configuration et ses ?l?ments'",
"50,13,'A5.1.3',45,'Suivi d\'une configuration et de ses ?l?ments'",
"51,13,'A5.1.4',43,'?tude de propositions de contrat de service (client, fournisseur)'",
"52,13,'A5.1.5',40,'?valuation d\'un ?l?ment de configuration ou d\'une configuration'",
"53,13,'A5.1.6',44,'?valuation d\'un investissement informatique'",
"54,14,'A5.2.1',50,'Exploitation des r?f?rentiels, normes et standards adopt?s par le prestataire informatique'",
"55,14,'A5.2.2',20,'Veille technologique'",
"56,14,'A5.2.3',37,'Rep?rage des compl?ments de formation ou d\'auto-formation utiles ? l\'acquisition de nouvelles comp?tences'",
"57,14,'A5.2.4',51,'?tude d?une technologie, d\'un composant, d\'un outil ou d\'une m?thode'"
);


$requete["competence"]=array(
"1,1,'C1.1.1.1','Recenser et caract?riser les contextes d\'utilisation, les processus et les acteurs sur lesquels le service ? produire aura un impact'",
"2,1,'C1.1.1.2','Identifier les fonctionnalit?s attendues du service ? produire'",
"3,1,'C1.1.1.3','Pr?parer sa participation ? une r?union'",
"4,1,'C1.1.1.4','R?diger un compte-rendu d\'entretien, de r?union'",
"5,2,'C1.1.2.1','Analyser les interactions entre services'",
"6,2,'C1.1.2.2','Recenser les composants de l\'architecture technique sur lesquels le service ? produire aura un impact'",
"7,3,'C1.1.3.1','Recenser et caract?riser les exigences li?es ? la qualit? attendue du service ? produire'",
"8,3,'C1.1.3.2','Recenser et caract?riser les exigences de s?curit? pour le service ? produire'",
"9,4,'C1.2.1.1','Recenser et caract?riser des solutions r?pondant au cahier des charges (adaptation d\'une solution existante ou r?alisation d\'une nouvelle)'",
"10,4,'C1.2.1.2','Estimer le co?t d\'une solution'",
"11,4,'C1.2.1.3','R?diger un dossier de choix et un argumentaire technique'",
"12,5,'C1.2.2.1','Recenser les composants n?cessaires ? la r?alisation de la solution retenue'",
"13,5,'C1.2.2.2','D?crire l\'implantation des diff?rents composants de la solution et les ?changes entre eux '",
"14,5,'C1.2.2.3','R?diger les sp?cifications fonctionnelles et techniques de la solution retenue dans le formalisme exig? par l\'organisation'",
"15,6,'C1.2.3.1','Recenser les risques li?s ? une mauvaise utilisation ou ? une utilisation malveillante du service'",
"16,6,'C1.2.3.2','Recenser les risques li?s ? un dysfonctionnement du service'",
"17,6,'C1.2.3.3','Pr?voir les cons?quences techniques de la non prise en compte d\'un risque'",
"18,7,'C1.2.4.1','Recenser les tests d\'acceptation n?cessaires ? la validation du service et les r?sultats attendus'",
"19,7,'C1.2.4.2','Pr?parer les jeux d\'essai et les proc?dures pour la r?alisation des tests'",
"20,8,'C1.2.5.1','Recenser les utilisateurs du service, leurs r?les et leur niveau de responsabilit?'",
"21,8,'C1.2.5.2','Recenser les ressources li?es ? l\'utilisation du service'",
"22,8,'C1.2.5.3','Proposer les niveaux d\'habilitation associ?s au service'",
"23,9,'C1.3.1.1','Mettre en place l\'environnement de test du service'",
"24,9,'C1.3.1.2','Tester le service'",
"25,9,'C1.3.1.3','R?diger le rapport de test'",
"26,10,'C1.3.2.1','Identifier les ?l?ments ? sauvegarder et ? journaliser pour assurer la continuit? du service et la tra?abilit? des transactions'",
"27,10,'C1.3.2.2','Sp?cifier les proc?dures d\'alerte associ?es au service'",
"28,10,'C1.3.2.3','D?crire les solutions de fonctionnement en mode d?grad? et les proc?dures de reprise du service'",
"29,11,'C1.3.3.1','Mettre en place l\'environnement de formation au nouveau service'",
"30,11,'C1.3.3.2','Informer et former les utilisateurs'",
"31,12,'C1.3.4.1','Mettre au point une proc?dure d\'installation de la solution'",
"32,12,'C1.3.4.2','Automatiser l\'installation de la solution '",
"33,12,'C1.3.4.3','Mettre en exploitation le service'",
"34,13,'C1.4.1.1','?tablir son planning personnel en fonction des exigences et du d?roulement du projet'",
"35,13,'C1.4.1.2','Rendre compte de son activit?'",
"36,14,'C1.4.2.1','Suivre l\'ex?cution du projet'",
"37,14,'C1.4.2.2','Analyser les ?carts entre temps pr?vu et temps consomm?'",
"38,14,'C1.4.2.3','Contribuer ? l\'?valuation du projet'",
"39,15,'C1.4.3.1','Recenser les ressources humaines, mat?rielles, logicielles et budg?taires n?cessaires ? l\'ex?cution du projet et de ses t?ches personnelles'",
"40,15,'C1.4.3.2','Adapter son planning personnel en fonction des ressources disponibles'",
"41,16,'C2.1.1.1','Aider les utilisateurs dans l\'appropriation du nouveau service'",
"42,16,'C2.1.1.2','Identifier des besoins de formation compl?mentaires'",
"43,16,'C2.1.1.3','Rendre compte de la satisfaction des utilisateurs'",
"44,17,'C2.1.2.1','Analyser les indicateurs de qualit? du service'",
"45,17,'C2.1.2.2','Appliquer les proc?dures d\'alerte destin?es ? r?tablir la qualit? du service'",
"46,17,'C2.1.2.3','V?rifier p?riodiquement le fonctionnement du service en mode d?grad? et la disponibilit? des ?l?ments permettant une reprise du service'",
"47,17,'C2.1.2.4','Superviser les services et leur utilisation'",
"48,17,'C2.1.2.5','Contr?ler la confidentialit? et l\'int?grit? des donn?es'",
"49,17,'C2.1.2.6','Exploiter les indicateurs et les fichiers d\'audit'",
"50,17,'C2.1.2.7','Produire les rapports d\'activit? demand?s par les diff?rents acteurs'",
"51,18,'C2.2.1.1','R?soudre l\'incident en s\'appuyant sur une base de connaissances et la documentation associ?e ou solliciter l\'entit? comp?tente'",
"52,18,'C2.2.1.2','Prendre le contr?le d\'un syst?me ? distance'",
"53,18,'C2.2.1.3','R?diger un rapport d\'incident et m?moriser l\'incident et sa r?solution dans une base de connaissances'",
"54,18,'C2.2.1.4','Faire ?voluer une proc?dure de r?solution d\'incident'",
"55,19,'C2.2.2.1','Identifier le niveau d\'assistance souhait? et proposer une r?ponse adapt?e en s\'appuyant sur une base de connaissances et sur la documentation associ?e ou solliciter l\'entit? comp?tente'",
"56,19,'C2.2.2.2','Informer l\'utilisateur de la situation de sa demande'",
"57,19,'C2.2.2.3','Prendre le contr?le d\'un poste utilisateur ? distance'",
"58,19,'C2.2.2.4','M?moriser la demande d\'assistance et sa r?ponse dans une base de connaissances'",
"59,20,'C2.2.3.1','Appliquer la proc?dure de continuit? du service en mode d?grad?'",
"60,20,'C2.2.3.2','Appliquer la proc?dure de reprise du service'",
"61,21,'C2.3.1.1','Rep?rer une suite de dysfonctionnements r?currents d\'un service'",
"62,21,'C2.3.1.2','Identifier les causes de ce dysfonctionnement'",
"63,21,'C2.3.1.3','Qualifier le probl?me (contexte et environnement)'",
"64,21,'C2.3.1.4','D?finir le degr? d\'urgence du probl?me'",
"65,21,'C2.3.1.5','?valuer les cons?quences techniques du probl?me'",
"66,22,'C2.3.2.1','D?crire les incidences d\'un changement propos? sur le service'",
"67,22,'C2.3.2.2','?valuer le d?lai et le co?t de r?alisation du changement propos?'",
"68,22,'C2.3.2.3','Recenser les risques techniques, humains, financiers et juridiques associ?s au changement propos?'",
"69,23,'C3.1.1.1','Lister les composants mat?riels et logiciels n?cessaires ? la prise en charge des processus, des flux d\'information et de leur r?le'",
"70,23,'C3.1.1.2','Caract?riser les ?l?ments d\'interconnexion, les services, les serveurs et les ?quipements terminaux n?cessaires'",
"71,23,'C3.1.1.3','Caract?riser les ?l?ments permettant d\'assurer la qualit? et la s?curit? des services'",
"72,23,'C3.1.1.4','Recenser les modifications et/ou les acquisitions n?cessaires ? la mise en place d\'une solution d\'infrastructure compatible avec le budget et le planning pr?visionnels'",
"73,23,'C3.1.1.5','Caract?riser les solutions d\'interconnexion utilis?es entre un r?seau et d\'autres r?seaux internes ou externes ? l\'organisation'",
"74,24,'C3.1.2.1','Concevoir une maquette de la solution'",
"75,24,'C3.1.2.2','Construire un prototype de la solution'",
"76,24,'C3.1.2.3','Pr?parer l\'int?gration d\'un composant d\'infrastructure'",
"77,25,'C3.1.3.1','Caract?riser des solutions de s?curit? et en ?valuer le co?t'",
"78,25,'C3.1.3.2','Proposer une solution de s?curit? compatible avec les contraintes techniques, financi?res, juridiques et organisationnelles'",
"79,25,'C3.1.3.3','D?crire une solution de s?curit? et les risques couverts'",
"80,26,'C3.2.1.1','Installer et configurer un ?l?ment d\'interconnexion, un service, un serveur, un ?quipement terminal utilisateur'",
"81,26,'C3.2.1.2','Installer et configurer un ?l?ment d\'infrastructure permettant d\'assurer la continuit? de service, un syst?me de r?gulation des ?l?ments d\'infrastructure, un outil de m?trologie, un dispositif d\'alerte'",
"82,26,'C3.2.1.3','Installer et configurer des ?l?ments de s?curit? permettant d\'assurer la protection du syst?me informatique'",
"83,27,'C3.2.2.1','?laborer une proc?dure de remplacement ou de migration respectant la continuit? d\'un service'",
"84,27,'C3.2.2.2','Mettre en ?uvre une proc?dure de remplacement ou de migration'",
"85,28,'C3.2.3.1','Rep?rer les ?l?ments de la documentation ? mettre ? jour'",
"86,28,'C3.2.3.2','Mettre ? jour la documentation'",
"87,29,'C3.3.1.1','Installer et configurer des ?l?ments d\'administration sur site ou ? distance'",
"88,29,'C3.3.1.2','Administrer des ?l?ments d\'infrastructure sur site ou ? distance'",
"89,30,'C3.3.2.1','Installer et configurer des outils de sauvegarde et de restauration'",
"90,30,'C3.3.2.2','D?finir des proc?dures de sauvegarde et de restauration'",
"91,30,'C3.3.2.3','Appliquer des proc?dures de sauvegarde et de restauration'",
"92,31,'C3.3.3.1','Identifier les besoins en gestion d\'identit? permettant de prot?ger les ?l?ments d\'une infrastructure'",
"93,31,'C3.3.3.2','G?rer des utilisateurs et une structure organisationnelle'",
"94,31,'C3.3.3.3','Affecter des droits aux utilisateurs sur les ?l?ments d\'une solution d\'infrastructure'",
"95,32,'C3.3.4.1','Rep?rer les t?ches d\'administration ? automatiser'",
"96,32,'C3.3.4.2','Concevoir, r?aliser et mettre en place une proc?dure d\'automatisation'",
"97,33,'C3.3.5.1','Installer et configurer les outils n?cessaires ? la production d\'indicateurs d\'activit? et ? l\'exploitation de fichiers d\'activit?'",
"98,33,'C3.3.5.2','Assurer la confidentialit? des informations collect?es et trait?es'",
"99,34,'C4.1.1.1','Identifier les composants logiciels n?cessaires ? la conception de la solution'",
"100,34,'C4.1.1.2','Estimer les ?l?ments de co?t et le d?lai de mise en ?uvre de la solution'",
"101,35,'C4.1.2.1','D?finir les sp?cifications de l\'interface utilisateur de la solution applicative'",
"102,35,'C4.1.2.2','Maquetter un ?l?ment de la solution applicative'",
"103,35,'C4.1.2.3','Concevoir et valider la maquette en collaboration avec des utilisateurs'",
"104,36,'C4.1.3.1','Mod?liser le sch?ma de donn?es n?cessaire ? la mise en place de la solution applicative'",
"105,36,'C4.1.3.2','Impl?menter le sch?ma de donn?es dans un SGBD'",
"106,36,'C4.1.3.3','Programmer des ?l?ments de la solution applicative dans le langage d\'un SGBD'",
"107,36,'C4.1.3.4','Manipuler les donn?es li?es ? la solution applicative ? travers un langage de requ?te'",
"108,37,'C4.1.4.1','Recenser et caract?riser les composants existants ou ? d?velopper utiles ? la r?alisation de la solution applicative dans le respect des budgets et planning pr?visionnels'",
"109,38,'C4.1.5.1','Choisir les ?l?ments de la solution ? prototyper'",
"110,38,'C4.1.5.2','D?velopper un prototype'",
"111,38,'C4.1.5.3','Valider un prototype'",
"112,39,'C4.1.6.1','Mettre en place et exploiter un environnement de d?veloppement'",
"113,39,'C4.1.6.2','Mettre en place et exploiter un environnement de test'",
"114,40,'C4.1.7.1','D?velopper les ?l?ments d\'une solution'",
"115,40,'C4.1.7.2','Cr?er un composant logiciel'",
"116,40,'C4.1.7.3','Analyser et modifier le code d\'un composant logiciel'",
"117,40,'C4.1.7.4','Utiliser des composants d\'acc?s aux donn?es'",
"118,40,'C4.1.7.5','Mettre en place des ?l?ments de s?curit? li?s ? l\'utilisation d\'un composant logiciel'",
"119,41,'C4.1.8.1','?laborer et r?aliser des tests unitaires'",
"120,41,'C4.1.8.2','Mettre en ?vidence et corriger les ?carts'",
"121,42,'C4.1.9.1','Produire ou mettre ? jour la documentation technique d\'une solution applicative et de ses composants logiciels'",
"122,43,'C4.1.10.1','R?diger la documentation d\'utilisation, une aide en ligne, une FAQ'",
"123,43,'C4.1.10.2','Adapter la documentation d\'utilisation ? chaque contexte d\'utilisation'",
"124,44,'C4.2.1.1','?laborer un jeu d\'essai permettant de reproduire le dysfonctionnement'",
"125,44,'C4.2.1.2','Rep?rer les composants ? l\'origine du dysfonctionnement'",
"126,44,'C4.2.1.3','Concevoir les mises ? jour ? effectuer'",
"127,44,'C4.2.1.4','R?aliser les mises ? jour'",
"128,45,'C4.2.2.1','Rep?rer les ?volutions des composants utilis?s et leurs cons?quences'",
"129,45,'C4.2.2.2','Concevoir les mises ? jour ? effectuer'",
"130,45,'C4.2.2.3','?laborer et r?aliser les tests unitaires des composants mis ? jour'",
"131,46,'C4.2.3.1','?laborer et r?aliser des tests d\'int?gration et de non r?gression de la solution mise ? jour'",
"132,46,'C4.2.3.2','Concevoir une proc?dure de migration et l\'appliquer dans le respect de la continuit? de service'",
"133,47,'C4.2.4.1','Rep?rer les ?l?ments de la documentation ? mettre ? jour'",
"134,47,'C4.2.4.2','Mettre ? jour une documentation'",
"135,48,'C5.1.1.1','Recenser les caract?ristiques techniques n?cessaires ? la gestion des ?l?ments de la configuration d\'une organisation'",
"136,48,'C5.1.1.2','Param?trer une solution de gestion des ?l?ments d\'une configuration'",
"137,49,'C5.1.2.1','Renseigner les ?v?nements relatifs au cycle de vie d\'un ?l?ment de la configuration'",
"138,49,'C5.1.2.2','Actualiser les caract?ristiques des ?l?ments de la configuration'",
"139,50,'C5.1.3.1','Contr?ler et auditer les ?l?ments de la configuration'",
"140,50,'C5.1.3.2','Reconstituer un historique des modifications effectu?es sur les ?l?ments de la configuration'",
"141,50,'C5.1.3.3','Identifier les ?l?ments de la configuration ? modifier ou ? remplacer'",
"142,50,'C5.1.3.4','Rep?rer les ?quipements obsol?tes et en proposer le traitement dans le respect de la r?glementation en vigueur'",
"143,51,'C5.1.4.1','Assister la ma?trise d\'ouvrage dans l\'analyse technique de la proposition de contrat'",
"144,51,'C5.1.4.2','Interpr?ter des indicateurs de suivi de la prestation associ?e ? la proposition de contrat'",
"145,51,'C5.1.4.3','Renseigner les ?l?ments permettant d\'estimer la valeur du service'",
"146,52,'C5.1.5.1','V?rifier un plan d\'amortissement'",
"147,52,'C5.1.5.2','Appr?cier la valeur actuelle d\'un ?l?ment de configuration'",
"148,53,'C5.1.6.1','Renseigner les variables d\'une ?tude de rentabilit? d\'un investissement'",
"149,53,'C5.1.6.2','Caract?riser et pr?voir les investissements mat?riels et logiciels'",
"150,54,'C5.2.1.1','?valuer le degr? de conformit? des pratiques ? un r?f?rentiel, ? une norme ou ? un standard adopt? par le prestataire informatique'",
"151,54,'C5.2.1.2','Identifier et partager les bonnes pratiques ? int?grer'",
"152,55,'C5.2.2.1','D?finir une strat?gie de recherche d\'informations'",
"153,55,'C5.2.2.2','Tenir ? jour une liste de sources d\'information'",
"154,55,'C5.2.2.3','?valuer la qualit? d\'une source d\'information en fonction d\'un besoin'",
"155,55,'C5.2.2.4','Synth?tiser et diffuser les r?sultats d\'une veille'",
"156,56,'C5.2.3.1','Identifier les besoins de formation pour mettre en ?uvre une technologie, un composant, un outil ou une m?thode'",
"157,56,'C5.2.3.2','Rep?rer l\'offre et les dispositifs de formation'",
"158,57,'C5.2.4.1','Se documenter ? propos d?une technologie, d\'un composant, d\'un outil ou d\'une m?thode'",
"159,57,'C5.2.4.2','Identifier le potentiel et les limites d\'une technologie, d\'un composant, d\'un outil ou d\'une m?thode par rapport ? un service ? produire'"
);

$requete["epreuve"]=array(
"1,'U4'",
"2,'U5'",
"3,'U6'"
);

$requete["evalue"]=array(
"0,1,12",
"0,1,18",
"0,1,19",
"0,1,20",
"0,1,24",
"0,1,26",
"0,1,27",
"0,1,28",
"0,1,29",
"0,1,32",
"0,1,33",
"0,1,35",
"0,1,36",
"0,1,38",
"0,1,39",
"0,1,40",
"0,1,41",
"0,1,42",
"0,1,43",
"0,1,44",
"0,1,45",
"0,1,46",
"0,1,47",
"0,1,5",
"0,1,7",
"0,1,9",
"0,2,1",
"0,2,10",
"0,2,2",
"0,2,21",
"0,2,22",
"0,2,23",
"0,2,25",
"0,2,3",
"0,2,30",
"0,2,31",
"0,2,34",
"0,2,37",
"0,2,4",
"0,2,52",
"0,2,53",
"0,2,6",
"0,2,8",
"0,3,11",
"0,3,13",
"0,3,14",
"0,3,15",
"0,3,16",
"0,3,17",
"0,3,48",
"0,3,49",
"0,3,50",
"0,3,51",
"0,3,54",
"0,3,55",
"0,3,56",
"0,3,57",
"1,1,12",
"1,1,18",
"1,1,19",
"1,1,20",
"1,1,24",
"1,1,26",
"1,1,27",
"1,1,28",
"1,1,29",
"1,1,32",
"1,1,33",
"1,1,5",
"1,1,7",
"1,1,9",
"1,2,1",
"1,2,10",
"1,2,2",
"1,2,21",
"1,2,22",
"1,2,23",
"1,2,25",
"1,2,3",
"1,2,30",
"1,2,31",
"1,2,4",
"1,2,52",
"1,2,53",
"1,2,6",
"1,2,8",
"1,3,11",
"1,3,13",
"1,3,14",
"1,3,15",
"1,3,16",
"1,3,17",
"1,3,48",
"1,3,49",
"1,3,50",
"1,3,51",
"1,3,54",
"1,3,55",
"1,3,56",
"1,3,57",
"2,1,12",
"2,1,18",
"2,1,19",
"2,1,20",
"2,1,35",
"2,1,36",
"2,1,38",
"2,1,39",
"2,1,40",
"2,1,41",
"2,1,42",
"2,1,43",
"2,1,44",
"2,1,45",
"2,1,46",
"2,1,47",
"2,1,5",
"2,1,7",
"2,1,9",
"2,2,1",
"2,2,10",
"2,2,2",
"2,2,21",
"2,2,22",
"2,2,3",
"2,2,34",
"2,2,37",
"2,2,4",
"2,2,52",
"2,2,53",
"2,2,6",
"2,2,8",
"2,3,11",
"2,3,13",
"2,3,14",
"2,3,15",
"2,3,16",
"2,3,17",
"2,3,48",
"2,3,49",
"2,3,50",
"2,3,51",
"2,3,54",
"2,3,55",
"2,3,56",
"2,3,57"
);

$requete["professeur"]=array(
"1,'admin','','admin@local.fr','123456',0,'O'"
);

$requete["groupe"]=array(
"1,'admins','00',0"
);

$requete["exerce"]=array(
"1,1"
);


?>
