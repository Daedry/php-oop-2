<?php

class Cleaning
{
    use Products;
}

$cleaning = [
    'dog' => [
        'shampoo' => [
            new Cleaning('Dog', 'Shampoo', 'Set Pet Head Sensitive Soul', 'Pet Head', 'Linea Pet Head Sensitive Soul composta da shampoo, balsamo & spray per cani con pelle sensibile, con fiocchi d\'avena, estratto di calendula, olio di marula & Aloe Vera, cura e deterge delicatamente.', 33.99),
            new Cleaning('Dog', 'Shampoo', 'Pet Head Shampoo Mucky Puppy', 'Pet Head', 'Shampoo detergente delicato Pet Head Mucky Puppy per cuccioli da 8 settimane di età, con olio di fico d\'India, camomilla, olio di rosa canina e Aloe Vera, lenisce la pelle e idrata, al profumo di pera', 14.99),
            new Cleaning('Dog', 'Shampoo', 'Pet Head Shampoo Quick Fix 2in1', 'Pet Head', 'Shampoo e balsamo 2 in 1 per cani Pet Head Quick Fix 2in1 con componenti naturali, con olio di jojoba, Aloe Vera, biotina e vitamina E, curativo e detergente, al profumo fruttato di pesca, vegano.', 12.99),
        ],

        'brushe' => [
            new Cleaning('Dog', 'Fur', 'FURminator Bathing Brush', 'FURminator', 'spazzola per cani e gatti FURminator Bathing Brush per applicare lo shampoo, con pulsante erogatore, setole morbide e flessibili per pelli sensibili', 9.99),
            new Cleaning('Dog', 'Fur', 'FURminator Striglia Curry Comb', 'FURminator', 'striglia Curry Comb FURminator per cani e gatti, con dentini in gomma per massaggiare la cute stimolando la produzione di sebo per un pelo lucente', 8.49),
            new Cleaning('Dog', 'Fur', 'Spazzola per cani Moser', 'Moser', 'Spazzola Moser che rimuove peli morti, sporcizia e pelo infeltrito con impugnatura in silicone plastico e Cardatore Moser che rimuove sottopelo, nodi e pelo infeltrito', 20,98),
        ],

        'towel' => [
            new Cleaning('Dog', 'Towel', 'Asciugamano in microfibra Turbo-Dry', 'zoolove', 'Asciugamano in microfibra Turbo-Dry super assorbente composto per l\'80% da terilene.', 6.79),
            new Cleaning('Dog', 'Towel', 'Asciugamano in microfibra SnuggleSafe', 'SnuggleSafe', 'Asciugamano dall\'elevata capacità assorbente disponibile in 2 grandezze per cani e gatti. Asciuga 4 volte più velocemente rispetto agli asciugamani convenzionali.', 11.21),
        ]

    ],

    'cat' => [
        'shampoo' => [
            new Cleaning('Cat', 'Shampoo', 'Trixie Shampoo secco', 'Trixie', 'Shampoo a secco di Trixie per cani, gatti e altri piccoli animali, in polvere profumata per la delicata pulizia del pelo, rimuove i cattivi odori, alternativa al bagno con acqua, adatto in viaggio.', 4.29),
            new Cleaning('Cat', 'Shampoo', 'Trixie Shampoo Neutral', 'Trixie', 'Shampoo idratante, per cani e gatti di tutte le razze. Un trattamento delicato che garantisce un pelo bello e sano.', 8.19),
            new Cleaning('Cat', 'Shampoo', 'Clorexyderm® Shampoo', 'Clorexyderm®', 'Shampoo Clorexyderm® per detergere a fondo la cute e il pelo di cani e gatti, crea uno spettro attivo contro funghi e batteri, con clorexidina dall\'azione antibatterica, riduce i cattivi odori.', 17.99),
        ],

        'brushe' => [
            new Cleaning('Cat', 'brushe', 'FURminator Spazzola doppia', 'FURminator', 'FURminator Spazzola doppia per la cura del pelo di cani e gatti, con setole dure per districare e pulire e setole morbide per lucidare', 11.99),
            new Cleaning('Cat', 'brushe', 'Spazzola in pelo naturale', 'Moser', 'Spazzola antistatica con setole in pelo naturale e manico in legno. Ideale per rimuovere i peli morti e per abituare gli animali giovani alla cura del pelo.', 2.99),
            new Cleaning('Cat', 'brushe', 'Spazzola Moser Premium doppia', 'Moser', 'Spazzola Moser Premium doppia per cani e gatti che rimuove peli morti, sporco e pelo infeltrito, con manico in gel e testa della spazzola flessibile per massimo comfort, facile da pulire.', 15,98),
        ],

        'towel' => [
            new Cleaning('Cat', 'Towel', 'Asciugamano in microfibra Turbo-Dry', 'zoolove', 'Asciugamano in microfibra Turbo-Dry super assorbente composto per l\'80% da terilene.', 6.79),
            new Cleaning('Cat', 'Towel', 'Asciugamano in microfibra SnuggleSafe', 'SnuggleSafe', 'Asciugamano dall\'elevata capacità assorbente disponibile in 2 grandezze per cani e gatti. Asciuga 4 volte più velocemente rispetto agli asciugamani convenzionali.', 11.21),
        ]


    ]

];
