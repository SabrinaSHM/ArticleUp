<?php

$index = $_POST['index'];

$posts = [
	[
		"title" => "Etudiants étrangers : la contestation se poursuit dans les universités",
		"subtitle" => "Une quinzaine d’établissements s’engagent à ne pas appliquer la hausse des droits d’inscription, décidée par le gouvernement pour les étudiants extracommunautaires.",
		"content" => "<p>Depuis le début de l’année, la liste s’allonge de semaine en semaine. Clermont-Auvergne, Le Mans, Rennes II, les établissements de Paris-Saclay… Près d’une quinzaine d’universités ont annoncé qu’elles n’appliqueront pas l’augmentation des droits d’inscription pour les étudiants étrangers extra-européens à la rentrée 2019. Une drôle de fronde : pour cela, elles envisagent d’utiliser une possibilité d’exonération existant déjà dans un décret de 2013.</p><p>« Si l’augmentation générale des droits d’inscription entre en vigueur, l’établissement utilisera toutes les possibilités réglementaires qui lui seront offertes pour permettre aux étudiants internationaux extracommunautaires concernés de bénéficier du maintien du régime tarifaire actuellement appliqué », s’est ainsi prononcée l’université d’Aix-Marseille, le 18 janvier.</p>"
	],
	[
		"title" => "Brexit : « Il n’existe pas de majorité à Westminster en faveur d’un second référendum »",
		"subtitle" => "Theresa May a obtenu du vote des députés britanniques, mardi 29 janvier, le mandat qu’elle sollicitait pour une renégociation que Bruxelles exclut. Notre correspondant à Londres, Philippe Bernard, a répondu à vos questions.",
		"content" => "La perspective d’un « no deal » se précise-t-elle vraiment ? Mardi 29 janvier, les députés britanniques ont approuvé un amendement qui demande le remplacement du backstop irlandais par un « dispositif alternatif » non précisé. Theresa May obtient ainsi le mandat qu’elle sollicitait pour une renégociation que Bruxelles exclut formellement. Philippe Bernard, notre correspondant à Londres, a répondu à vos questions sur le Brexit."
	],
	[
		"title" => "L’avenir du lanceur de balle de défense devant le Conseil d’Etat",
		"subtitle" => "La plus haute juridiction administrative française était sollicitée, mercredi, pour se prononcer sur l’usage de cette arme dite « de force intermédiaire ». La décision sera rendue au plus tard vendredi.",
		"content" => "<p>L’avenir du lanceur de balle de défense (LBD) se jouait, mercredi 30 janvier, devant le Conseil d’Etat. La plus haute juridiction administrative française était sollicitée pour se prononcer sur l’usage, par la police et la gendarmerie, de cette arme dite « de force intermédiaire ». La décision sera rendue au plus tard vendredi 1er février dans la matinée.</p><p>La section du contentieux, présidée par Edmond Honorat, devait examiner trois affaires distinctes : deux recours contre des décisions rendues par les tribunaux administratifs de Montpellier et de Paris et un référé liberté formé par la CGT, le Syndicat de la magistrature, le Syndicat des avocats de France, et soutenu par la Ligue des droits de l’homme et le Défenseur des droits. Avec, toutes, le même objectif : que l’utilisation du LBD soit suspendue au moins lors des deux prochaines manifestations déclarées dans le cadre du mouvement des « gilets jaunes », les 2 et 5 février, voire définitivement interdit.</p>"
	],
	[
		"title" => "Football : la Fédération italienne durcit la procédure en cas de cris racistes",
		"subtitle" => "En cas de cris ou comportements racistes, le match sera désormais immédiatement arrêté de façon temporaire et les joueurs réunis au milieu de terrain.",
		"content" => "<p>La Fédération italienne de football (FIGC) tente de durcir un peu le ton contre les actes racistes perpétrés dans les stades. L’institution a annoncé, mercredi 30 janvier, une simplification et un renforcement de la procédure mise en œuvre en cas de cris racistes dans les stades, après l’émotion suscitée par des incidents récents.</p><p>Désormais, en cas de cris ou comportements racistes signalés par les délégués fédéraux ou par les responsables de l’ordre public, le match sera immédiatement arrêté de façon temporaire et les joueurs réunis au milieu de terrain. Une annonce sera alors faite par le speaker du stade, à jeu arrêté. En cas de deuxième signalisation, les joueurs rentreront aux vestiaires. La responsabilité de reprendre ou d’arrêter définitivement le match reste au représentant de l’ordre public.</p>"
	],
	[
		"title" => "Un dessin de Rubens vendu 8,2 millions de dollars lors d’une enchère controversée",
		"subtitle" => "L’annonce de la mise en vente aux enchères de plusieurs pièces de la collection de la maison royale néerlandaise avait suscité des critiques de la part des musées nationaux.",
		"content" => "<p>Un dessin du maître flamand Rubens a été vendu, mercredi 30 janvier, pour 8,2 millions de dollars (7,15 millions d’euros) à New York, lors d’enchères controversées. Certains estimaient en effet que la famille royale néerlandaise, propriétaire de l’œuvre, aurait dû la proposer à des musées néerlandais.</p><p>Cette étude d’une taille exceptionnelle – 49 cm sur 31 cm – représente un jeune homme aux bras levés et destinée à préparer le triptyque L’Erection de la croix. L’œuvre avait été acquise en 1838 par le prince Guillaume d’Orange, le futur roi des Pays-Bas Guillaume II.</p>"
	]
];
sleep(1);
header("Content-type: application/json; charset=utf-8");
echo json_encode(['article' => $posts[$index], 'total' => count($posts)]);

?>