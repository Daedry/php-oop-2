<?php

class Item
{
    use Products;
}

$items = [
    'dog' => [
        'kennel' => [
            new Item('Dog', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/comfort/2/400/55516_pla_spike_comfort_fg_8345_2.jpg', 'Cuccia per cani Spike Comfort', 'Spike', 'Cuccia per cani Spike Comfort in legno pretrattato, resistente alle intemperie, con tetto spiovente in cartone bitumato e porta a lamelle di plastica e piedini regolabili, facile da montare. ', 70.99),
            new Item('Dog', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/6/400/23637_pla_hundehuette_spike_classic_m_fg_8241_6.jpg', 'Cuccia per cani Spike Classic', 'Spike', 'Cuccia per cani Spike Classic, in legno di cipresso di Cunningham oleato, con tetto in cartone bitumato a spioventi. Piedini regolabili in altezza, ideale in caso di pioggia, facile da montare.', 81.99),
            new Item('Dog', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/jackson/6/400/167896_jackson_outside_res90_fg_4159_6.jpg', 'Cuccia per cani Jackson', 'Jackson', 'Cuccia in legno di abete per cani, resistente alle intemperie, con tetto spiovente apribile, vano contenitore per riporre alimenti e accessori e area pappa rialzata con 2 ciotole, facile da montare.', 131,99),
        ],

        'door' => [
            new Item('Dog', 'door', 'https://shop-cdn-m.mediazs.com/bilder/porta/basculante/petsafe/extreme/weather/5/400/78350_pla_petsafe_hundeklappe_extremeweather_hs_01_5.jpg', 'Porta basculante PetSafe® Extreme Weather', 'PetSafe®', 'Porta basculante PetSafe® Extreme Weather con sistema a 3 porte, extra isolante da caldo e freddo grazie al pannello di chiusura aggiuntivo, per porte fino a 5,7 cm. 2 misure.', 69.49),
            new Item('Dog', 'door', 'https://shop-cdn-m.mediazs.com/bilder/porta/basculante/petsafe/staywell/3/400/33431_PLA_Hundeklappe_Staywell_640_3.jpg', 'Porta basculante Petsafe Staywell 640', 'PetSafe®', 'Robusta porta per cani a 2 vie di marca Staywell: profilati in alluminio, portello flessibile e silenzioso. Dimensioni: 502,6 x 329,1 mm.', 60.99),
        ],

        'bowl' => [
            new Item('Dog', 'bowl', 'https://shop-cdn-m.mediazs.com/bilder/ciotola/hunter/in/acciaio/8/400/26950_pla_hunter_edelstahlnapf_hs_03_8.jpg', 'Ciotola Color Splash in acciaio inossidabile', 'brand', 'Ciotola in acciaio inox di alta qualità con lavorazione di pregio, con logo Hunter, dotata di anello antiscivolo in gomma, igienica e lavabile in lavastoviglie', 3.99),
            new Item('Dog', 'bowl', 'https://shop-cdn-m.mediazs.com/bilder/ciotola/premium/in/acciaio/inossidabile/2/400/75588_pla_edelstahlnapf_premium_fg_5415_2.jpg', 'Ciotola Premium in acciaio inossidabile', 'brand', 'Ciotola Premium in acciaio inossidabileper cani, con fondo in silicone antiscivolo, durevole, antigraffio, non altera i sapori, lavabile in lavastoviglie.', 7.49),
            new Item('Dog', 'bowl', 'image', 'Ciotola Hunter in acciaio', 'brand', 'Ciotola in acciaio inox di alta qualità con lavorazione di pregio, con logo Hunter, dotata di anello antiscivolo in gomma, igienica e lavabile in lavastoviglie.', 4.99),
        ]
    ],

    'cat' => [
        'litter' => [
            new Item('Cat', 'litter', 'https://shop-cdn-m.mediazs.com/bilder/lettiera/vegetale/greenwoods/plant/fibre/6/400/greenwoods_cat_litter_8l_1000x1000_6.jpg', 'Lettiera vegetale Greenwoods Plant Fibre', 'Greenwoods', 'Lettiera vegetale agglomerante Greenwoods Plant Fibre, composta da fibre vegetali, biodegradabile e compostabile, ad alto rendimento, poco polverosa e delicata sulle zampine', 7.99),
            new Item('Cat', 'litter', 'https://shop-cdn-m.mediazs.com/bilder/lettiera/agglomerante/greenwoods/in/argilla/naturale/8/400/greenwoods_cat_litter_babypowder_front_6kg_1000x1000_8.jpg', 'Lettiera agglomerante Greenwoods in argilla naturale', 'Greenwoods', 'Lettiera agglomerante Greenwoods in argilla naturale, granulato finissimo ad alto rendimento e super assorbente, con zeoliti verdi e profumo di talco contro batteri e cattivi odori.', 6.99),
        ],

        'kennel' => [
            new Item('Cat', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/cuscino/smilla/2/400/23044_PLA_Katzenbett_Smilla_HS_2.jpg', 'Cuscino Smilla', 'Smilla', 'Cuscino Smilla per gatti, cuccioli e cani di piccola taglia, con bordo rialzato e morbida imbottitura. Lavabile a 30°C. Colore: arancio e impronta "zampina" bianca.', 8.49),
            new Item('Cat', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/letto/per/gatti/sleepy/time/grey/con/cuscino/9/400/145210_sleepy_time_grau_kissen_062013_9.jpg', 'Letto per gatti Sleepy Time Grey con cuscino', 'Sleepy Time', 'Letto da interno o esterno per gatti, con fodera termica, idrorepellente e antimacchia, fondo in nylon, cuscino interno estraibile e bordo imbottito.', 53.99),
            new Item('Cat', 'kennel', 'https://shop-cdn-m.mediazs.com/bilder/letto/angora/5/400/116108_pla_hundebett_fg_2782_5.jpg', 'Letto Angora', 'Angora', 'Lettino indeformabile Angora per gatti e cani di taglia piccola, con grande superficie d\'appoggio tonda, bordo piatto e cuscino, in pregiato peluche, con cuscino, lavabile in lavatrice', 26.99),
        ],

        'niche' => [
            new Item('Cat', 'Niche', 'https://shop-cdn-m.mediazs.com/bilder/nicchia/trixie/minou/1/400/19045_PLA_Trixie_Minou_Kuschelhoehle_beigebraun__L_41_x_B_35_x_H_26_cm_1.jpg', 'Nicchia Trixie Minou', 'Trixie Minou', 'Nicchia Trixie Minou in morbido peluche per gatti, apertura d\'ingresso con frangia in finto pelo, fondo in nylon. Lavabile a mano 30°C. Misure: L 41 x P 35 x H 26 cm', 18.69),
            new Item('Cat', 'Niche', 'https://shop-cdn-m.mediazs.com/bilder/nicchia/branca/8/400/98413_katzenhoehle_branca_1_8.jpg', 'Nicchia Branca', 'Branca', 'Nicchia Branca per gatti, cuccioli e cani piccoli. In morbido poliestere beige con impronte di zampine nere. Con ampio ingresso e cuscino estraibile incluso. Ideale per relax e coccole.', 19.99),
            new Item('Cat', 'Niche', 'https://shop-cdn-m.mediazs.com/bilder/nicchia/royal/pet/white/5/400/55600_PLA_Kuschelhoehle_Royal_Pet_White_FG_DSC9020_5.jpg', 'Nicchia Royal Pet White', 'Royal Pet', 'Nicchia Royal Pet White bianca con ricamo nero a forma di corona, per gatti grandi e per cani di piccola taglia.', 28.49),
        ]
    ]
];
