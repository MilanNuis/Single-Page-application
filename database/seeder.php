<?php

require_once('../unitils/connection.php');
require_once('../configs/helper.php');

$tables = ['products', 'customers', 'articles'];

foreach ($tables as $table) {
    $sql = "TRUNCATE TABLE $table";
    $db->exec($sql);
    echo "Tabel $table geleegd.", PHP_EOL;
}

$users = [
    [
        'firstname' => 'admin',
        'lastname' => 'account',
        'email' => 'admin@gmail.com',
        'password' => password_hash('admin', PASSWORD_DEFAULT),
        'country' => 'Netherlands',
        'isAdmin' => true,
    ],
    [
        'firstname' => 'gebruiker',
        'lastname' => 'voorbeeld',
        'email' => 'gebruiker@gmail.com',
        'password' => password_hash('gebruiker', PASSWORD_DEFAULT),
        'country' => 'Netherlands',
        'isAdmin' => false,
    ],
];

$articles = [
    [
        'title' => "Nieuwe software",
        'author' => "Jan",
        "authorURL" => "
        https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
        "tag" => "Basisonderwijs"
    ],
    [
        'title' => "Nieuwe software",
        'author' => "Jan",
        "authorURL" => "
        https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
        "tag" => "Basisonderwijs"
    ],
    [
        'title' => "Nieuwe software",
        'author' => "Jan",
        "authorURL" => "
        https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
        "content" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of 'de Finibus Bonorum et Malorum' (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 'Lorem ipsum dolor sit amet..', comes from a line in section 1.10.32.

        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.",
        "tag" => "Basisonderwijs"
    ]
];

$products = [
    [
        "name" => "School Robot",
        "description" => "De Robosen K1 Pro is een lichte, vrijlopende tweevoetige mensachtige robot met nauwkeurige servogewrichten. Hij voert stunts en acties uit op spraakcommando's en simuleert een natuurlijke gang. Programmeer hem via spraak of de app met een selectie van 80 commando's. Een geweldige robot voor entertainment en leren!",
        "price" => 199.50,
        "stock" => 10,
        "category" => "basis",
        "imageURL" => "https://pmot.nl/wp-content/uploads/k1p-6_720x.jpg"
    ],
    [
        "name" => "Gigo diverse technieksets",
        "description" => "Gigo T036 Jumbo basisbouwplaat bestaat uit 36 onderdelen waaronder 6 basisbouwplaten. Iedere bouwplaat is 300x200x20mm. Deze bouwplaten kunnen gebruikt worden bij al het Gigo materiaal. Zowel dat bij de sets voor de kleuters als bij de andere Gigo technieksets. Door de rode koppelstukken te gebruiken kan een grote bouwplaat zo gevormd worden zoals men het zelf wil. Deze bouwplaten kunnen gewoon op een tafel gebruikt worden, maar ook opgehangen aan de muur. Hierdoor wordt er gebouwd in een horizontale wijze, wat het ruimtelijke en motorische vaardigheden op een andere manier gestimuleerd worden.",
        "price" => 405.50,
        "stock" => 5,
        "category" => "basis",
        "imageURL" => "https://pmot.nl/wp-content/uploads/2016/09/T036-1.jpg"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],
    [
        "name" => "Robot Boek",
        "description" => "De RoboRobo Elektronisch leerset biedt leerlingen de gelegenheid te leren en te experimenteren met diverse elektronica onderdelen zoals Weerstanden, LED, Verschillende transistoren, Condensator, CdS, IR sensor enz.

        Er hoeft niet gesoldeerd te worden, omdat er speciale Lego achtige bouwstenen zijn waar de onderdelen ingestoken kunnen worden en er weer uitgehaald kunnen worden. Met de andere Lego compatible bouwstenen kunnen diverse modellen gebouwd worden, om de elektronica onderdelen in toe te passen. Zo kan inzicht gekregen wat de werking van de diverse elektronica onderdelen is.
        
        Bij deze set hoort een Nederlandstalig lesboek met uitleg over de elektronica en de bouwvoorbeelden van de modellen. Ook wordt geleerd hoe een elektronica circuit er uit zien en hoe de gelezen kan worden.
        
        Daag leerlingen uit om de wonderlijke wereld van elektronica te verkennen en meer inzicht te krijgen van het belang en nut van elektronica in ons dagelijkse leven
        
        Geschikt voor leerlingen vanaf 10 jaar en geschikt voor PO en VO en HB leerlingen die een extra uitdaging nodig hebben",
        "price" => 259.50,
        "stock" => 6,
        "category" => "middelbaar",
        "imageURL" => "https://i.imgur.com/hZHDHxk.png"
    ],


];

foreach ($users as $user) {
    createUser(
        $user['firstname'],
        $user['lastname'],
        $user['email'],
        $user['password'],
        $user['country'],
        $user['isAdmin'],
        $db
    );
}

foreach ($products as $product) {
    createProduct(
        $product['name'],
        $product['description'],
        $product['price'],
        $product['stock'],
        $product['category'],
        $product['imageURL'],
        $db
    );
}

foreach ($articles as $article) {
    createArticle(
        $article['title'],
        $article['author'],
        $article['authorURL'],
        $article['content'],
        $article['tag'],
        $db
    );
}
