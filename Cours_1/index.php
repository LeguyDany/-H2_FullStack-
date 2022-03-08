<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    
    <?php
    
        /* Language de typage optionnel, c.a.d on peut typer nos variables mais on s'en fout. On déclare nos variables avec un $ */

            // On peut utiliser les guillemets ou les aporstrophes pour les strings.
            $variableDeFrancis = 'coucou';
            (string)$truc = "j'aime les frites"; // Si je veux mettre des aporstrophes. Il est possible de typer.
            $truc2 = 'j\'aime les frites'; // On fait échapper un caractère.

            echo $truc2; // Permet de print une variable. Peut afficher des tableaux en entiers mais pas des sorties.

            echo '</br>';

            var_dump( $truc2 ); // C'est une echo mais à tout faire. Il permet d'afficher le type de la donnée et sa valeur.
            
            // Les variables ne peuvent pas avoir d'espace, de tiret, et ne peuvent pas commencer pas un chiffre. Elles sont déclarées en camel case, c'est-à-dire tous les mots prennent une majuscule sauf le premier et ne prend pas d'espace. Il y a aussi le snake case, c'est avec des underscores et tout en minuscule. 
            $maVariable1 = "je suis une variable en camel case"; // Variable nommé en camel case, généralement utilisé.

            $ma_variable1 = "je suis une variable en snake case."; // Variable nommé en snake case
            // Une variable est un nom donné à une allocation de mémoire. On peut y mettre des integers, des floats, des strings, et des booleans, nulls, array(= dictionnaire), tableaux (= listes), une fonction anonyme. 

            // Un ittérable, c'est les dictionnaires et listes en python. C'est des outils qui permettent d'ittérer. 

            $age = 13;
            $monInterpolation = "j'ai $age ans."; // Interpolation de variable. On peut aussi faire de l'interpolation en variable avec des "+", en concaténant.
 
            
        // Les différents types :

            $int = 696969;
            $float = 69.6969;
            $string = "696969";
            $bool = TRUE;
            $null = null; // Variable vide. C'est pour donner une variable dans lequel il n'y a rien.

    
        // La logique :

            // Triple = c'est que c'est parreil mais aussi du même type. 
            // Les pseudo vérités, demander si une variable est == à TRUE, on demande si c'est pas vide ou si c'est différent de FALSE. 
            // && = and            || = or

            if ( $int === 12 && ($float >= 33 || float <= 20 ) ) {
                echo '<br>coucou';
            } elseif ( $int < 100 ) {
                echo '<br>coucou2';
            } else {
                echo '<br>ARGEAG';
            }

            if ( $float ) { // On va tester si ça existe et c'est pas vide. 
                echo 'cette variable existe et n\'est pas vide';
            }

            // Le switch case est utile pour une énumération de cas. Le break permet de sortir afin d'éviter de continuer.
            $enum_case = 15:
            switch ($enum_case) {
                case 0 :
                    echo "t'as 0 ans.";
                    break;
                case 5 :
                    echo "t'as 5 ans.";
                    break;
                case 15 :
                    echo "t'as 15 ans.";
                    break;
                case 20 :
                    echo "t'as 20 ans.";
                    break;
            }


        // Concaténation de variables :
            
            $age = 13;
            $phrase = 'Maurice a '.$age.'ans';
            $phrase2 = "Maurice a $age ans."; // C'est de l'interpolation de variable, le fait d'ajouter une variable directement dans le string sans concaténer avec des points. 
            $phrase3 = 'Maurice a $age ans.'; // Ça ne fonctionne pas ici. 

        // Les tableaux :

            $array = [1, 'un string', TRUE, [1,2,3]]; // Il est possible de mélanger des types dans le tableau.
            $array2 = array();

            echo '<br>';
            echo $array; // Ne fonctionne pas bien. 
            echo '<br>';
            var_dump($array[3][1]);


            // ================
            echo '<br>';
            echo '<br>';
            $newArray = [ // Les array associatifs, c'est l'équivalent des dictionnaires en python.
                'user' => 'Francis Huster',
                'email' => 'francisishuster@gmail.com',
                'user2' => [
                    'username' => 'Franchesto',
                    'email' => 'Franchesto@gmail.com'
                    ]
                ];

            echo $newArray['user2']['username'];
            // var_dump($newArray['user2']['username']);

        // Les boucles :

            $int = 0;
            while ($int <= 10) {
                echo $int.'<br>';
                $int = $int + 1;
            }

            echo '<br><br>';

            for ( $i = 1; $i <= 10 ; $i++){
                echo $i;
            }

            echo '<br>';
            foreach ($newArray as $element) { // as = donne un alias de l'élément à parser.
                echo $element.'<br>';
            }
            echo '<br><br>';
            foreach ($newArray as $index => $valeur) {
                echo $index." | ".$valeur.'<br>';
            }

        // Intégration php :

            $userList = [
                [
                    'nom' => 'Huster',
                    'prenom' => 'Francis',
                    'age' => 12
                ],
                [
                    'nom' => 'mimi',
                    'prenom' => 'gato',
                    'age' => 30
                ],
                [
                    'nom' => 'Franc',
                    'prenom' => 'Chesto',
                    'age' => 9999
                ]
            ];

            foreach ($userList as $userInfo) {
                    ?>
                    <h2 style="text-align:center; background:#EEE"><?= $userInfo['nom'];
            }?>

        <?php
        // L'orienté objet :
            
            echo '<br><hr><br>';

            class Voiture {
                // Voici des attributs. 
                public $model; // On ne peut pas accéder à une propriété privée dans une classe. On peut accéder à une propriété publique par contre. 
                private $marque;
                private $moteur;

                public function __construct($machin, $bidule, $boom) {
                    // Constructeur : Permet de spécifier des choses lors de l'instantiation de l'objet.
                    $this -> model = $machin;
                    $this -> marque = $bidule;
                    $this -> moteur = $boom;

                }

                public function demarrer() {
                    // C'est une méthode.
                    return 'je demarre';
                }                
            }

            // Instantiation d'objet.
            $voitureDeFrancis = new Voiture('focus','ford','diesel'); 
            echo $voitureDeFrancis -> demarrer().'<br>'; // -> C'est l'équivalent du . en python. 

            $voitureDeMaurice = new Voiture('laguna', 'Renauld', 'essence');
            echo $voitureDeFrancis -> model; // Appel d'un attribut de l'objet. 
            
    ?>

</body>
</html>