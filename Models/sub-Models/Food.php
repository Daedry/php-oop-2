<?php

class Food
{
    use Products;
}

$food = [
    'cat' => [
        'wet' => [
            new Food('Cat', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/x/g/felix/le/ghiottonerie/8/400/12449386_fop_8.jpg', 'Felix Le Ghiottonerie', 'Felix', '24 x 85 g di alimento umido per gatti adulti Felix Le Ghiottonerie in Gelatina o Doppia Delizia, completo e bilanciato, con succulenta carne o pesce', 8.00),
            new Food('Cat', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/gourmet/perle/4/400/239498_pla_netsle_gourmetperle_kalbente_85g_hs_01_4.jpg',  'Gourmet Perle', 'Gourmet', '44 x 85 g di alimento umido per gatti Gourmet Perle, classico o in varianti "Trionfo di Salsa", senza additivi artificiali, in buste monoporzione', 14.00),
            new Food('Cat', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/sterilised/in/salsa/0/400/68957_pla_rc_sterilised_sauce_0.jpg',  'Royal Canin Sterilised in Salsa', 'Royal Canin', 'Alimento umido Royal Canin Sterilised in Salsa per gatti adulti sterilizzati da 1 anno, bocconcini in salsa, per la salute delle vie urinarie e il mantenimento del peso forma, molto gustoso.', 8.00)
        ],

        'dry' => [
            new Food('Cat', 'Wet Food', 'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/trainer/natural/crocchette/per/gatti/9/400/97658_pla_naturaltrainer_sterilized_adult_whitemeats_10kg_9.jpg',  'Trainer Natural Crocchette per gatti', 'Trainer', '9 kg di crocchette Trainer Natural per gatti, con carne fresca come primo componente, estratto di mirtillo rosso, zinco, lievito di birra e alghe', 42.29),
            new Food('Cat', 'Wet Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/prova/purizon/alimenti/per/gatti/9/400/purizon_idcard_cat_adult_wet_fish_1000x1000_2_9.jpg',  'Purizon Alimenti per gatti', 'Purizon', '400 g di crocchette, alimenti di qualità Premium ad elevato contenuto proteico e senza cereali', 4.99),
            new Food('Cat', 'Wet Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/kg/purina/one/dual/nature/sterilized/9/400/116197_pla_nestlefr_maindc_purinaone_dualnature_sterilized_lachs_1_4kg_hs_01_9.jpg',  'Purina ONE Dual Nature Sterilized', 'Purina ONE', 'Purina ONE Dual Nature Sterilized, crocchette dalla doppia consistenza per gatti sterilizzati, con vitamine, minerali e spirulina', 7.19)
        ],

        'snack' => [
            new Food('Cat', 'Snack Food', 'https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/vitakraft/cat/stick/healthy/9/400/74227_pla_vitakraft_cat_stick_scholleomega_9.jpg',  'Vitakraft Cat Stick Healthy', 'Vitakraft', '20 x 6 g di snack per gatti Vitakraft Cat Stick Healthy, senza zucchero né cereali, per la salute di cute, pelo e digestione', 7.16),
            new Food('Cat', 'Snack Food', 'https://shop-cdn-m.mediazs.com/bilder/gimcat/pasta/multivitamin/extra/0/400/25247_pla_gimcat_multivitamin_extra_offen_0.jpg',  'GimCat Pasta Multi-Vitamin Extra', 'GimCat', 'Snack GimCat Pasta Multi-Vitamin Extra per gatti con formula unica per le difese immunitarie. Con complesso Omega 3 e 6, 12 vitamine essenziali, olio di pesce e beta-glucani.', 11.49),
            new Food('Cat', 'Snack Food', 'https://shop-cdn-m.mediazs.com/bilder/whiskas/crunch/con/pollo/tacchino/anatra/1/400/2114_whiskas_crunch_1.jpg',  'Whiskas Crunch con Pollo, Tacchino & Anatra', 'Whiskas', 'Whiskas Crunch da distribuire a piacere sul pasto del vostro gatto, per conferirgli maggiore gusto e croccantezza! Complemento alimentare arricchito con vitamine e sali minerali.', 11.99)
        ]
    ],

    'dog' => [
        'wet' => [
            new Food('Dog', 'wet Food', 'https://shop-cdn-m.mediazs.com/bilder/set/prova/misto/rocco/classic/x/g/alimento/umido/per/cani/4/400/beef_400g_1000x1000_161223_4.jpg',  'Set prova misto! Rocco Classic 6 x 400 g Alimento umido per cani', 'Rocco', 'Alimento umido per cani Rocco nelle varianti Classic, idoneo alla specie, senza cereali e con il 70% di carne e interiora.', 7.49),
            new Food('Dog', 'wet Food', 'https://shop-cdn-m.mediazs.com/bilder/gratis/x/g/animonda/grancarno/adult/single/protein/9/400/130800_pla_animonda_animondagrancarno_adult_singleprotein_huhnpur_400g_hs_01_9.jpg',  'Animonda GranCarno Adult Single Protein', 'Animonda', '5 x 400 g di umido monoproteico per cani Animonda GranCarno Adult Single Protein/Single Protein Supreme senza cereali per cani adulti', 13, 49),
            new Food('Dog', 'wet Food', 'https://shop-cdn-m.mediazs.com/bilder/set/prova/misto/terra/canis/senza/cereali/x/g/4/400/120033_huhn___getreidefrei_4260109620448_200g_4.jpg',  'Terra Canis Senza cereali 12 x 200 g', 'Terra Canis', 'Alimento umido Terra Canis senza cereali per cani adulti, privo di lattosio, prodotto in Germania con materie prime in qualità alimentare accuratamente cotte al vapore, min. il 60% di carne.', 44.10)
        ],

        'dry' => [
            new Food('Dog', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/prova/wolf/of/wilderness/crocchette/per/cani/5/400/wow_weight_front_400g_1000x1000_5.jpg',  ' Wolf of Wilderness Crocchette per cani', 'Wolf of Wilderness', '400 g di crocchette senza cereali Wolf of Wilderness per cani, ricche di proteine animali e ispirate all\'alimentazione del lupo in natura, con tanta carne fresca', 12.99),
            new Food('Dog', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/crocchette/per/cani/8/400/1_rc_shn_adultmini_mv_eretailkit_it_it_8.jpg',  'Royal Canin Mini Adult Crocchette per cani', 'Royal Canin', 'Crocchette Royal Canin Mini Adult per cani adulti di taglia piccola (1-10 kg) da 10 mesi a 8 anni di età, protegge la cute e il pelo e facilita la gestione del peso, crocchette di piccole dimensioni.', 85.98),
            new Food('Dog', 'Dry Food', 'https://shop-cdn-m.mediazs.com/bilder/farmina/nd/ancestral/grain/adult/mini/agnello/e/mirtillo/6/400/74209_pla_farmina_n_dancestralgrain_adultdog_mini_lambspelt_2_5kg_6.jpg',  'Farmina N&D Ancestral Grain Adult Mini Agnello e Mirtillo', 'Farmina', 'Secco Farmina N&D Ancestral Grain Adult Mini Agnello e Mirtillo per cani adulti piccoli, proteico come l\'alimento in natura, con 60% componenti animali, 20% cereali ancestrali e 20% frutta/verdura.', 45.90)
        ],

        'snack' => [
            new Food('Dog', 'snack Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/barkoo/deli/snacks/6/400/barkoo_15_6.jpg',  'Barkoo Deli Snacks', 'Barkoo', '1 confezione di snack Barkoo Deli per cani, in pelle di manzo povera di grassi, con pollo delizioso, senza aromi, conservanti né coloranti', 1.99),
            new Food('Dog', 'snack Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/snack/premium/liofilizzati/wolf/of/wilderness/raw/7/400/1_wow_raw_snacks_chicken_1000x1000_7.jpg',  'Snack premium liofilizzati Wolf of Wilderness - RAW', 'Wolf of Wilderness', '150 g di snack premium liofilizzati per cani Wolf of Wilderness - RAW, con 100% puro pesce o interiora, naturali e senza cereali,', 6.99),
            new Food('Dog', 'snack Food', 'https://shop-cdn-m.mediazs.com/bilder/prezzo/prova/g/rocco/chings/double/3/400/pla_rocco_chingsdouble_chicken_1000x1000_3.jpg',  'Rocco Chings Double', 'Rocco', '200 g di snack per cani Rocco Chings Double, doppio gusto di carne con cuore di fegato di pollo, carne di agnello o carne di manzo avvolto da filetto di pollo', 5.99)
        ]
    ]

];

// var_dump($food['cat']['snack']);

