<?php

class Clothing
{
    use Products;
}

$cloathing = [
    'dog' => [
        'cape' => [
            new Clothing('Dog', 'cape', 'https://shop-cdn-m.mediazs.com/bilder/mantella/per/cani/illume/nite/neon/1/400/_dsc1480_1.jpg', 'Mantella per cani Illume Nite Neon', 'Illume Nite Neon', 'Mantella per cani Illume Nite Neon per protezione traspirante da vento e pioggia, materiale molto leggero con superficie fluorescente per una buona visibilità al crepuscolo, colore: nero/giallo fluo.', 10.99),
            new Clothing('Dog', 'cape', 'https://shop-cdn-m.mediazs.com/bilder/mantella/per/cani/softshell/4/400/81640_softshell_gruen_russel_fg_8812_1_4.jpg', 'Mantella per cani Softshell', 'Softshell', 'Mantella per cani impermeabile e traspirante, antivento, asciuga rapidamente, con morbido rivestimento interno, ben visibile grazie alle cuciture catarifrangenti. Colore: verde/nero.', 12.49),
            new Clothing('Dog', 'cape', 'https://shop-cdn-m.mediazs.com/bilder/tuta/per/cani/menta/9/400/73483_hundeoverall_mint_fg_1000px_2928_9.jpg', 'Tuta per cani Menta', 'Menta', 'Tuta funzionale Menta per cani con maniche corte, protezione completa da umidità, freddo e sporcoz, leggera e comoda con fodera in pile, coulisse per regolazione personalizzata,colore: menta / grigio.', 14.99),
        ],

        'sweater' => [
            new Clothing('Dog', 'sweater', 'https://shop-cdn-m.mediazs.com/bilder/maglioncino/per/cani/norvegese/2/400/norweger_hundepulli_45cm_fg_6011_2.jpg', 'Maglioncino per cani Norvegese', 'Norvegese', 'Maglioncino di qualità per cani Norvegese, lavorato a maglia, con collo alto, particolarmente morbido e con caldo rivestimento interno in pile e doppia chiusura in velcro. Colore: nero/bianco.', 10.99),
        ],

        'footwear' => [
            new Clothing('Dog', 'footwear', 'https://shop-cdn-m.mediazs.com/bilder/scarpette/s/p/boots/5/400/296332_sincerepet_dog_shoes_01_dsc5282_5.jpg', 'Scarpette S & P Boots', 'S & P Boots', '4 scarpette sportive nere S & P Boots cani in finta pelle e poliestere, traspiranti, fondo antiscivolo, rivestimento interno in pile, chiusure in velcro riflettenti - per proteggere le zampe.', 17.49),
            new Clothing('Dog', 'footwear', 'https://shop-cdn-m.mediazs.com/bilder/calza/protettiva/trixie/in/silicone/7/400/212904_212905_212906_212907_pla_trixie_schutzsocke_silikon_hs_01_7.jpg', 'Calza protettiva Trixie in silicone', 'Trixie', 'Calza protettiva Trixie per le zampe di cani e gatti, per mantenere ferite e bendaggi asciutti e puliti, in materiale flessibile e impermeabile, adattabile grazie alle chiusure a strappo, in silicone.', 7.49),
        ]
    ],
];
