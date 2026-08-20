<?php

/*
 * DONNÉES TEMPORAIRES DES MENUS
 *
 * Ces données reproduisent provisoirement la structure
 * des futurs enregistrements de la base de données.
 */
return [
    [
    'id' => 1,
    'title' => 'Formule Express',
    'description' => 'Un plat du jour accompagné de son dessert.',
    'theme' => 'Classique',
    'diet' => 'Classique',
    'minimum_people' => 2,
    'price' => 14.90,
    'conditions' => 'Commande à effectuer au moins 48 heures à l’avance.',
    'available_stock' => 8,
    'dishes' => [
    [
        'type' => 'Plat',
        'name' => 'Poulet rôti, pommes de terre grenaille',
        'allergens' => [],
    ],
    [
        'type' => 'Dessert',
        'name' => 'Fondant au chocolat',
        'allergens' => ['Gluten', 'Œufs', 'Lait'],
    ],
                ],
    ],
    [
        'id' => 2,
        'title' => 'Menu Tradition',
        'description' => 'Une entrée, un plat généreux et un dessert maison.',
        'theme' => 'Classique',
        'diet' => 'Classique',
        'minimum_people' => 4,
        'price' => 18.90,
        'conditions' => 'Commande à effectuer au moins 72 heures à l’avance.',
        'available_stock' => 5,
        'dishes' => [
    [
        'type' => 'Entrée',
        'name' => 'Terrine de campagne et chutney d’oignons',
        'allergens' => ['Œufs'],
    ],
    [
        'type' => 'Plat',
        'name' => 'Bœuf bourguignon et purée maison',
        'allergens' => ['Lait'],
    ],
    [
        'type' => 'Dessert',
        'name' => 'Tarte aux pommes',
        'allergens' => ['Gluten', 'Œufs', 'Lait'],
    ],
                    ],
    ],
    [
        'id' => 3,
        'title' => 'Menu Végétarien',
        'description' => 'Une formule complète, colorée et sans viande.',
        'theme' => 'Classique',
        'diet' => 'Végétarien',
        'minimum_people' => 2,
        'price' => 16.90,
        'conditions' => 'Commande à effectuer au moins 48 heures à l’avance.',
        'available_stock' => 6,
        'dishes' => [
    [
        'type' => 'Entrée',
        'name' => 'Velouté de légumes de saison',
        'allergens' => [],
    ],
    [
        'type' => 'Plat',
        'name' => 'Lasagnes aux légumes grillés',
        'allergens' => ['Gluten', 'Lait'],
    ],
    [
        'type' => 'Dessert',
        'name' => 'Salade de fruits frais',
        'allergens' => [],
    ],
                    ],
    ],
    [
        'id' => 4,
        'title' => 'Menu Festif',
        'description' => 'Une formule généreuse pour célébrer vos événements.',
        'theme' => 'Événement',
        'diet' => 'Classique',
        'minimum_people' => 6,
        'price' => 24.90,
        'conditions' => 'Commande à effectuer au moins une semaine à l’avance.',
        'available_stock' => 3,
        'dishes' => [
    [
        'type' => 'Entrée',
        'name' => 'Saumon fumé et crème citronnée',
        'allergens' => ['Poisson', 'Lait'],
    ],
    [
        'type' => 'Plat',
        'name' => 'Suprême de volaille, sauce aux morilles',
        'allergens' => ['Lait'],
    ],
    [
        'type' => 'Dessert',
        'name' => 'Entremets chocolat et noisette',
        'allergens' => ['Gluten', 'Œufs', 'Lait', 'Fruits à coque'],
    ],
                    ],
    ],
];