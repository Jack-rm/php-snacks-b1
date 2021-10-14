<!--  || Snack #1 ||

Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60
-->

<?php

$partite = [
    [
        'squadraCasa' => 'Milano',
        'squadraOspite' => 'Torino',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'La Spezia',
        'squadraOspite' => 'Lecce',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Brescia',
        'squadraOspite' => 'Empoli',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Roma',
        'squadraOspite' => 'Timbuctù',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Verona',
        'squadraOspite' => 'Messina',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Firenze',
        'squadraOspite' => 'Udine',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Napoli',
        'squadraOspite' => 'Reggio Calabria',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
    [
        'squadraCasa' => 'Palermo',
        'squadraOspite' => 'Cagliari',
        'puntiCasa' => 60,
        'puntiOspite' => 45
    ],
];

?>

<html>
    <body>
    
        <ul>

            <?php foreach ($partite as $partita) {; ?>
            
                <li><?php echo $partita['squadraCasa']; ?> -
                <?php echo $partita['squadraOspite']; ?> |
                <?php echo $partita['puntiCasa']; ?> -
                <?php echo $partita['puntiOspite']; ?></li>
            
            <?php }; ?>
                
        </ul>

    </body>
</html>


<!-- || Snack #2 ||

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato"
-->

<?php 

$data = $_GET;
var_dump($_GET);

if ( empty($_GET['name']) || empty($_GET['mail']) || emtpy($_GET['age'])) {
    echo 'Errore';
}   else if ( strlen($_GET['name']) <= 3) {
    echo 'Accesso negato';
}   else if ( strpos($_GET['mail'], "@") === false || strpos($_GET['mail'], ".") === false ) {
    echo 'Acceso negato';
}   else if (!is_numeric($_GET['age'])) {
    echo 'Accesso negato';
}   else {
    echo 'Accesso riuscito';
}

?>


<!-- || Snack #3 ||

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
-->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<html>
    <main>
        
    <?php foreach ($posts as $data => $post) { ?>  <!-- $chiave => $valore-->
        <h2> <?php echo $data ?> </h2>
        
        <ul>
            <?php foreach ($post as $article) {; ?>
                <li>
                    <h3> <?php echo $article["title"]; ?> </h3>
                    <h5> <?php echo $article["author"]; ?> </h5>
                    <p> <?php echo $article["text"]; ?> </p>
                </li>
            <?php } ?>
        </ul>
    <?php }; ?>

    </main>
</html>


<!-- || Snack #4 ||

Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
-->

<?php 

    $numbers = [];
    
    while ( count($numbers) < 15) {
        $random = rand(0, 200);

        if ( !in_array($random, $numbers) )  {
            array_push($numbers, $random);
        }

    };
    
    var_dump($numbers);

?>

<!-- || Snack #5 ||

Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde
-->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<html>
    <head>
    <link rel="stylesheet" href="style/style.css">
    </head>   
    <body>

        <div class="container grey">
            <ul>
                <?php foreach ($db['teachers'] as $teacher) {; ?>
                
                <li> <?php echo $teacher['name']; ?> </li>
                
                <?php }; ?>
            </ul>
        </div>

        <div class="container green">
            <ul>
                <?php foreach ($db['pm'] as $pm) {; ?>

                <li> <?php echo $pm['name']; ?> </li>

                <?php }; ?>
            </ul>
        </div>

    </body>
</html>


<!-- || Snack #6 ||

Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno
-->

<?php 

    $classe41 = [
        [
            'nome' => 'Pablo',
            'cognome' => 'Escobar',
            'voti' => [2, 6, 8, 5],
        ],
        [
            'nome' => 'Jimmy',
            'cognome' => 'Trombetta',
            'voti' => [5, 7, 10, 9],
        ],
        [
            'nome' => 'Michele',
            'cognome' => 'Michelini',
            'voti' => [3, 3, 3, 6],
        ],
        [
            'nome' => 'Luigi',
            'cognome' => 'di Brazof',
            'voti' => [9, 7, 7, 2],
        ],
    ];

?>

<html>
    <body>
        <ul>

            <?php foreach ($classe41 as $studente) {; ?>
                <li> <?php echo $studente['nome']; ?> -
                    <?php echo $studente['cognome']; ?> -
                    <?php echo array_sum($studente['voti']) / count($studente['voti']); ?>
                </li>
            <?php }; ?>
            
        </ul>
        

    </body>
</html>


<!-- || Snack #7 ||

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<?php 
    $paragrafo = "Stasera su Spike alle 21:30 va in onda «Pulp Fiction», pellicola diretta nel 1994 da Quentin Tarantino. Il film è composto da quattro storie che si intrecciano a Los Angeles e che non sono montate cronologicamente. I protagonisti principali sono i due killer spietati Vincent Vega e Jules Winnfield che lavorano per il boss Marsellus Wallace. Dopo aver recuperato una misteriosa valigetta e aver pulito la loro auto completamente sporca di sangue con l’aiuto di Mr. Wolfe, si ritrovano in una tavola calda dove due balordi stanno per portare a termine una rapina. Presentato in anteprima alla 44esima edizione del Festival di Cannes, il film trionfa alla Croisette con la Palma d’oro e successivamente ottiene 7 nomination e un Oscar per la migliore sceneggiatura originale. Il film che consacra il genere pulp è una delle pellicole più celebri degli anni ‘90 e segna la storia del cinema. Violento, ironico, ricco di scene irresistibili e con musiche e dialoghi indimenticabili, «Pulp Fiction» conquista subito il pubblico e anche buona parte della critica. Costato meno di 9 milioni di dollari, il film ne guadagna 213, rilancia la carriera di John Travolta che da anni non recitava in film di successo e trasforma Quentin Tarantino in uno dei registi più innovativi di Hollywood. In attesa della messa in onda ecco che fine hanno fatto i protagonisti";

    $newParagrafo = explode(".", $paragrafo); // genera un array!
?>

<html>
    <body>
        <ol>
            <?php foreach ($newParagrafo as $sezione) {; ?>

                <li>
                    <?php
                    if (!empty($sezione)) {
                        echo $sezione . ".";
                    }
                    ?>
                </li>
            <?php }; ?>
        </ol>
    </body>
</html>
