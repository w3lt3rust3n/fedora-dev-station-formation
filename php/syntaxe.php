<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntaxe PHP</title>
</head>
<body>
    Hello 
    <?php
        // Commentaire 
        echo("<h2>World</h2>");
        /* 
            Commentaire sur plusieurs lignes
            blabla
        */

        // Pour des variable:
        $maInt = 123;
        $monString = "Ciel si ceci se sait ces soins sont sans succèss";
        $monFloat = 6546.4263467;
        $monBool = true;

        // Affichage du type de variable;
        echo gettype($monBool);

        echo "<br>";

        // Concaténation 
        echo $monString . " PLUS ";
        $prenom1 = "Bob";
        $prenom2 = "Claire";
        echo "<br>";
        echo $prenom1.$prenom2;
        echo "<br>";
        $prenom1 .= "sonice";
        echo "prenom est désormais " . $prenom1;

        // Les quotes 
        echo 'Aujourd\'hui';
        echo "<br>";
        // Les 2 instructions suivantes font la même chose
        echo 'aujourd\'hui ' . ' est partie faire les courses.';
        echo "<br>";
        echo "aujour'hui $prenom2 est partie faire les courses.";

        // Les constantes
        define("MACONST", "Linux c'est la vie...");
        echo "<br>";
        echo MACONST;
        
        $a = 10;
        $b =  2;

        // Les conditions
        if($a > $b) {
            echo "Ceci est un texte dans mon if()";
        } elseif($b > $a) {
            echo "Ceci est un texte dans mon elseif()";
        } else {
            echo "Ceci est un text dans mon else();";
        }

        $c = false;

        if(!$c) {
            echo "Condition direct";
            echo "instruction ?";
        }
        echo "<br>";
        if($c) echo "COndition direct";

        $var1 = 1;
        $var2 = "";

        if(empty($var1)) {
            echo "0, vide, NULL, false ou non définie<br>";
            echo false;
        }
        else {
            echo "Non, 0, n'est pas vide<br>";
        }

        if(isset($var2)) {
            echo '$var2 existe mais et est non NULL <br>';
        }

        $couleur = "jaune";
        switch ($couleur) {
            case 'verte':
                # code...
                echo "elles est verte";
                break;
            
            case 'jaune':
                    # code...
                echo "elles est jaune";
                break;
            default:
                echo "Aucune correspondance de couleur";
                break;
        }

        // Fonction prédéfinies et opération sur les strings
        $email = "prenom@site.fr";
        echo "<br>";
        echo strpos($email, '@'); // On peut faire aussi '@site';
        echo "<br>";
        // Pour déboguer on peut utiliser var_dump();
        var_dump($email);

        if(!strpos($email, '@')) echo "Vous avez oublié l'@";
        echo "<br>";
        echo strlen($email);
        $chaine = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita architecto, dolor sunt omnis sapiente repellat ducimus similique dolores eveniet natus totam nam, minima hic optio ratione assumenda nostrum aliquid quia.";
        echo substr($chaine, 0, 30)."...<a href='#'> Lire la suite</a>";

        echo str_replace("consectetur", "Bob", $chaine);
        /* 
            Ceci marche aussi:
            str_replace("consectetur", $nom1, $chaine );
        */
        echo "<br>";
        $str1 = "MA CHAINE STR1 AVANT STRTOLOWER()<br>";
        $str2 = "ma chaine str2 avant strtoupper()<br>";

        echo $str1;
        echo $str2;

        echo strtolower($str1);
        echo strtoupper($str2);

        // Un peu de sécurité... empêcher les tags html
        $tag = "<h1>Hello World</h1><br>";
        echo strip_tags($tag);

        // Déclaration de fonctions
        function separateur() {
            echo "<br>";
        }

        // Appel de fonction
        separateur();

        // $age est optionnel et prend la valeur 18 si rien n'est spécifié.
        function prenom(string $prenom, int $age = 18) {
            return $prenom." age : $age";
            echo "et moi alors ?"; // Ne s'affichera jamais car return...
        }

        echo prenom("Bob"); 
        //echo prenom(456, "jkfdskfdkfjd"); // Erreur car oas les bons types attendus.
        $test = "1";
        settype($test, "string");

        // Les boucles
        $i = 0;
        while($i < 6) {
            echo $i;
            $i++;
        }

        /*
            exercice: créer un select qui permettra à mon utilisateur de selectionner une date entre 
            1980 et 2020
        */

        echo('<label for="date-select">Choisissez une date (for loop): </label>');
        echo('<select name="date" id="date-select">');
    
        for($j = 1980; $j <= 2021; $j++) {
            $optionSelect = "<option value='$j'> $j </option>";
            echo $optionSelect;
            //$j++;
        }

        echo "</select>";
        separateur();
        $k = 1980;
        
        echo('<label for="date-select">Choisissez une date (while loop): </label>');
        echo('<select name="date" id="date-select">');
        while($k >= 1980 && $k <= 2020) {
            echo("<option value='$k'> $k </option>");
            $k++;
        }
        echo "</select>";

        separateur();
        $d = 1980;
        echo "<select>";
        do {
            echo "<option value='$d'>$d</option>";
            $d++;
        }
        while($d >= 1980 && $d <= 2020);
       echo "</select>";
       
        // Les Tableaux
        $tab = array("un", "deux", "trois", "quatre");
        var_dump($tab);
        separateur(); 
        $tab2 = ["azerty", "qwerty", "bepo"];
        var_dump($tab2);
        separateur();

        $tab3[0] = "linux";
        $tab3[2] = "windows";
        $tab3[] = "mac";

        echo "<pre>";
        print_r($tab3);
        echo "</pre>";

        // Tableau associatif
        $tbColor = array("j"=>"jaune", "b"=>"bleu", "r"=>"rouge");
        echo $tbColor["b"];
        $taille = count($tbColor); // ou sizeof($tbColor);
        separateur();
        echo $taille;
?>

    
</body>
</html>