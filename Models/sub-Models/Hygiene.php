<?php

class Hygiene
{
    use Products;
}

$hygiene = [
    'dog' => [
        'shampoo' => [
            new Hygiene('Dog', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/set/pet/head/sensitive/soul/5/400/companyofanimals_pethead_sensitivesoul_set3teilig_hs_03_5.jpg', 'Set Pet Head Sensitive Soul', 'Pet Head', 'Linea Pet Head Sensitive Soul composta da shampoo, balsamo & spray per cani con pelle sensibile, con fiocchi d\'avena, estratto di calendula, olio di marula & Aloe Vera, cura e deterge delicatamente.', 33.99),
            new Hygiene('Dog', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/pet/head/shampoo/mucky/puppy/5/400/159897_companyofanimals_pethead_muckypuppy_shampoo_hs_03_5.jpg', 'Pet Head Shampoo Mucky Puppy', 'Pet Head', 'Shampoo detergente delicato Pet Head Mucky Puppy per cuccioli da 8 settimane di età, con olio di fico d\'India, camomilla, olio di rosa canina e Aloe Vera, lenisce la pelle e idrata, al profumo di pera', 14.99),
            new Hygiene('Dog', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/pet/head/shampoo/quick/fix/in/2/400/159701_pla_companyofanimals_pethead_quickfix_2in1_shampoo_300ml_hs_01_2.jpg', 'Pet Head Shampoo Quick Fix 2in1', 'Pet Head', 'Shampoo e balsamo 2 in 1 per cani Pet Head Quick Fix 2in1 con componenti naturali, con olio di jojoba, Aloe Vera, biotina e vitamina E, curativo e detergente, al profumo fruttato di pesca, vegano.', 12.99),
        ],

        'brushe' => [
            new Hygiene('Dog', 'Fur', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/furminator/bathing/brush/4/400/92106_iams_furminator_bathing_brush_hs_06_4.jpg', 'FURminator Bathing Brush', 'FURminator', 'spazzola per cani e gatti FURminator Bathing Brush per applicare lo shampoo, con pulsante erogatore, setole morbide e flessibili per pelli sensibili', 9.99),
            new Hygiene('Dog', 'Fur', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/furminator/striglia/curry/comb/5/400/92107_furminator_hund_striegel_hs_02_5.jpg', 'FURminator Striglia Curry Comb', 'FURminator', 'striglia Curry Comb FURminator per cani e gatti, con dentini in gomma per massaggiare la cute stimolando la produzione di sebo per un pelo lucente', 8.49),
            new Hygiene('Dog', 'Fur', 'https://shop-cdn-m.mediazs.com/bilder/spazzola/per/cani/moser/0/400/507792_pla_wahl_moser_zupfbuerste_8_0.jpg', 'Spazzola per cani Moser', 'Moser', 'Spazzola Moser che rimuove peli morti, sporcizia e pelo infeltrito con impugnatura in silicone plastico e Cardatore Moser che rimuove sottopelo, nodi e pelo infeltrito', 20,98),
        ],

        'towel' => [
            new Hygiene('Dog', 'Towel', 'https://shop-cdn-m.mediazs.com/bilder/zoolove/asciugamano/in/microfibra/turbodry/7/400/75614_pla_microfaser_handtuch_fg_5279_7.jpg', 'Asciugamano in microfibra Turbo-Dry', 'zoolove', 'Asciugamano in microfibra Turbo-Dry super assorbente composto per l\'80% da terilene.', 6.79),
            new Hygiene('Dog', 'Towel', 'https://shop-cdn-m.mediazs.com/bilder/asciugamano/in/microfibra/snugglesafe/0/400/22813_snugglesafe_mikrofaser_handtuch_hs_01low_0.jpg', 'Asciugamano in microfibra SnuggleSafe', 'SnuggleSafe', 'Asciugamano dall\'elevata capacità assorbente disponibile in 2 grandezze per cani e gatti. Asciuga 4 volte più velocemente rispetto agli asciugamani convenzionali.', 11.21),
        ]

    ],

    'cat' => [
        'shampoo' => [
            new Hygiene('Cat', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/trixie/shampoo/secco/6/400/62413_PLA_Trixie_Trocken_Shampoo_200_g_6.jpg', 'Trixie Shampoo secco', 'Trixie', 'Shampoo a secco di Trixie per cani, gatti e altri piccoli animali, in polvere profumata per la delicata pulizia del pelo, rimuove i cattivi odori, alternativa al bagno con acqua, adatto in viaggio.', 4.29),
            new Hygiene('Cat', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/trixie/shampoo/neutral/1/400/14827_PLA_Trixie_Neutral_Shampoo_1.jpg', 'Trixie Shampoo Neutral', 'Trixie', 'Shampoo idratante, per cani e gatti di tutte le razze. Un trattamento delicato che garantisce un pelo bello e sano.', 8.19),
            new Hygiene('Cat', 'Shampoo', 'https://shop-cdn-m.mediazs.com/bilder/clorexyderm/shampoo/3/400/100500_pla_demas_clorexyderm_shampoo_hs_01_3.jpg', 'Clorexyderm® Shampoo', 'Clorexyderm®', 'Shampoo Clorexyderm® per detergere a fondo la cute e il pelo di cani e gatti, crea uno spettro attivo contro funghi e batteri, con clorexidina dall\'azione antibatterica, riduce i cattivi odori.', 17.99),
        ],

        'brushe' => [
            new Hygiene('Cat', 'brushe', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/furminator/spazzola/doppia/8/400/92105_furminator_hund_doppelbuerste_hs_02_8.jpg', 'FURminator Spazzola doppia', 'FURminator', 'FURminator Spazzola doppia per la cura del pelo di cani e gatti, con setole dure per districare e pulire e setole morbide per lucidare', 11.99),
            new Hygiene('Cat', 'brushe', 'https://shop-cdn-m.mediazs.com/bilder/spazzola/in/pelo/naturale/5/400/51321_PLA_Kerbl_BASIC_CARE_Naturhaarbuerste_17cm_5.jpg', 'Spazzola in pelo naturale', 'Moser', 'Spazzola antistatica con setole in pelo naturale e manico in legno. Ideale per rimuovere i peli morti e per abituare gli animali giovani alla cura del pelo.', 2.99),
            new Hygiene('Cat', 'brushe', 'https://shop-cdn-m.mediazs.com/bilder/spazzola/moser/premium/doppia/8/400/78264_moser_premium_zupfbuerste_doppelseitig_hs_01_8.jpg', 'Spazzola Moser Premium doppia', 'Moser', 'Spazzola Moser Premium doppia per cani e gatti che rimuove peli morti, sporco e pelo infeltrito, con manico in gel e testa della spazzola flessibile per massimo comfort, facile da pulire.', 15,98),
        ],

        'towel' => [
            new Hygiene('Cat', 'Towel', 'https://shop-cdn-m.mediazs.com/bilder/zoolove/asciugamano/in/microfibra/turbodry/7/400/75614_pla_microfaser_handtuch_fg_5279_7.jpg', 'Asciugamano in microfibra Turbo-Dry', 'zoolove', 'Asciugamano in microfibra Turbo-Dry super assorbente composto per l\'80% da terilene.', 6.79),
            new Hygiene('Cat', 'Towel', 'https://shop-cdn-m.mediazs.com/bilder/asciugamano/in/microfibra/snugglesafe/0/400/22813_snugglesafe_mikrofaser_handtuch_hs_01low_0.jpg', 'Asciugamano in microfibra SnuggleSafe', 'SnuggleSafe', 'Asciugamano dall\'elevata capacità assorbente disponibile in 2 grandezze per cani e gatti. Asciuga 4 volte più velocemente rispetto agli asciugamani convenzionali.', 11.21),
        ]


    ]

];
