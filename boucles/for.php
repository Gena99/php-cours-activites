<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
  echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1
for ($i = count($couleurs) - 1; $i >= 0; --$i) {
  echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
  );

echo '4.Les nuances de couleurs : <br>';
for ($i = 0; $i < count($couleurs); ++$i) {
  for ($j = 0; $j < count($couleurs[$i]); ++$j) {
    echo $couleurs[$i][$j].'<br>';
  }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
  echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
  );
echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
  echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
    'marque' => 'Citroen',
    'puissance' => 70,
    'prix' => 10000,
    ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
    'marque' => 'VW',
    'puissance' => 140,
    'prix' => 270000,
    ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
    'marque' => 'Lamborghini',
    'puissance' => 700,
    'prix' => 200000,
    ),
  );
echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
  echo '<br>'.$gamme;
  foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.' : '.$valeur.'<br>';
  }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$mois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre','octobre', 'novembre', 'décembre',];
foreach ($mois as $key => $calendrier) {
  echo $calendrier. "\n";
  
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = 12; $i >=0; $i--) {
  echo $mois[$i]."\n";
}
echo '<br><br>';
//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
    ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
    ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
    ),
  'Troisieme' => array(
    array('Nom' => 'dhgjh', 'Prenom' => 'kjsdflk'),
    array('Nom' => 'kjlsqflm', 'Prenom' => 'djkqs'),
    array('Nom' => 'dkjLM', 'Prenom' => 'JDSLKD'),
    array('Nom' => 'Sdjlk', 'Prenom' => 'lkqjfsl'),
    ),
  );

echo '10.Les eleves du college : <br>';
//ajoutez votre code ici
foreach ($college as $classe => $eleves) {
  echo $classe." <br />";
  foreach ($eleves as $key => $value) {
    foreach ($value as $value) {
      echo $value."<br />";
      # code...
    }
    echo '<br />';
  }

} 


echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
      ),
    ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
      ),
    ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
     'Tom Hanks', 'Gary Sinise',
     ),
    ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
     'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
     ),
    ),
  array(
    'nom' => 'Pulp Fiction',
    'date' => 1994,
    'realisateur' => 'Quentin Tarantino',
    'synopsis' => 'Vincent Vega (John Travolta) and Jules Winnfield (Samuel L. Jackson) are hitmen with a penchant for philosophical discussions. In this ultra-hip, multi-strand crime movie, their storyline is interwoven with those of their boss, gangster Marsellus Wallace (Ving Rhames) ; his actress wife, Mia (Uma Thurman) ; struggling boxer Butch Coolidge (Bruce Willis) ; master fixer Winston Wolfe (Harvey Keitel) and a nervous pair of armed robbers, "Pumpkin" (Tim Roth) and "Honey Bunny" (Amanda Plummer).',
    'acteurs' => array(
      'John Travolta','Uma Thurman','Bruce Willis','Quentin Tarantino','Samuel L Jackson',
      ),
    ),

  array(
    'nom' => 'La cité de la peur',
    'date' => 1994,
    'realisateur' => 'Alain Berbérian,',
    'synopsis' =>'Odile Deray, attachée de presse, vient au Festival de Cannes pour présenter le film "Red is Dead". Malheureusement, celui-ci est d une telle faiblesse que personne ne souhaite en faire l écho. Mais lorsque les projectionnistes du long-métrage en question meurent chacun leur tour dans d étranges circonstances, "Red is dead" bénéficie d une incroyable publicité. Serge Karamazov est alors chargé de protéger le nouveau projectionniste du film',
    'acteurs' => array(
      'Alain Chaba','Chantal Lobby','Dominique Farrugia', 'Gérad Darmon','Sam Kermaan',
      ),  
    ),
  array(
    'nom' => 'La cité de la peur',
    'date' => 1994,
    'realisateur' => 'Alain Berbérian,',
    'synopsis' =>'Odile Deray, attachée de presse, vient au Festival de Cannes pour présenter le film "Red is Dead". Malheureusement, celui-ci est d une telle faiblesse que personne ne souhaite en faire l écho. Mais lorsque les projectionnistes du long-métrage en question meurent chacun leur tour dans d étranges circonstances, "Red is dead" bénéficie d une incroyable publicité. Serge Karamazov est alors chargé de protéger le nouveau projectionniste du film',
    'acteurs' => array(
     'Alain Chaba','Chantal Lobby','Dominique Farrugia', 'Gérad Darmon','Sam Kermaan',
     ),  

    ),
  );

echo '12.Mes films : <br>';
foreach ($videotheque as $key => $films) {
  echo '<br />';
  foreach ($films as $acteurs => $value) {
    if(!is_array($value)){
      echo $value. " ".'<br />';
    } else {

      foreach ($value as $value) {
        echo $value."<br /> ";}
      # code...
      }
    # code...
    }
  # code...
  }

  echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

  echo '13.Mes films : <br>';
//ajoutez votre code ici


  echo '<br><br>';
