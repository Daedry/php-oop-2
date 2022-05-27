<?php

class Food
{
    use Products;
}

$cat_food = [
    'wet' => [
        new Food('Cat', 'Dry Food', 'Felix Le Ghiottonerie', 'Felix', '24 x 85 g di alimento umido per gatti adulti Felix Le Ghiottonerie in Gelatina o Doppia Delizia, completo e bilanciato, con succulenta carne o pesce', 8.00),
        new Food('Cat', 'Dry Food', 'Gourmet Perle', 'Gourmet', '44 x 85 g di alimento umido per gatti Gourmet Perle, classico o in varianti "Trionfo di Salsa", senza additivi artificiali, in buste monoporzione', 14.00),
        new Food('Cat', 'Dry Food', 'Royal Canin Sterilised in Salsa', 'Royal Canin', 'Alimento umido Royal Canin Sterilised in Salsa per gatti adulti sterilizzati da 1 anno, bocconcini in salsa, per la salute delle vie urinarie e il mantenimento del peso forma, molto gustoso.', 8.00)
    ],

    'dry' => [
        new Food('Cat', 'Wet Food', 'Trainer Natural Crocchette per gatti', 'Trainer', '9 kg di crocchette Trainer Natural per gatti, con carne fresca come primo componente, estratto di mirtillo rosso, zinco, lievito di birra e alghe', 42.29),
        new Food('Cat', 'Wet Food', 'Purizon Alimenti per gatti', 'Purizon', '400 g di crocchette, alimenti di qualità Premium ad elevato contenuto proteico e senza cereali', 4.99),
        new Food('Cat', 'Wet Food', 'Purina ONE Dual Nature Sterilized', 'Purina ONE', 'Purina ONE Dual Nature Sterilized, crocchette dalla doppia consistenza per gatti sterilizzati, con vitamine, minerali e spirulina', 7.19)
    ],

    'snack' => [
        new Food('Cat', 'Snack Food', 'Vitakraft Cat Stick Healthy', 'Vitakraft', '20 x 6 g di snack per gatti Vitakraft Cat Stick Healthy, senza zucchero né cereali, per la salute di cute, pelo e digestione', 7.16),
        new Food('Cat', 'Snack Food', 'GimCat Pasta Multi-Vitamin Extra', 'GimCat', 'Snack GimCat Pasta Multi-Vitamin Extra per gatti con formula unica per le difese immunitarie. Con complesso Omega 3 e 6, 12 vitamine essenziali, olio di pesce e beta-glucani.', 11.49),
        new Food('Cat', 'Snack Food', 'Whiskas Crunch con Pollo, Tacchino & Anatra', 'Whiskas', 'Whiskas Crunch da distribuire a piacere sul pasto del vostro gatto, per conferirgli maggiore gusto e croccantezza! Complemento alimentare arricchito con vitamine e sali minerali.', 11.99)
    ]
];

var_dump($cat_food);

$dog_food = [

    'wet' => [
        new Food('Dog', 'wet Food', 'Set prova misto! Rocco Classic 6 x 400 g Alimento umido per cani', 'Rocco', 'Alimento umido per cani Rocco nelle varianti Classic, idoneo alla specie, senza cereali e con il 70% di carne e interiora.', 7.49),
        new Food('Dog', 'wet Food', 'Animonda GranCarno Adult Single Protein', 'Animonda', '5 x 400 g di umido monoproteico per cani Animonda GranCarno Adult Single Protein/Single Protein Supreme senza cereali per cani adulti', 13,49),
        new Food('Dog', 'wet Food', 'Terra Canis Senza cereali 12 x 200 g', 'Terra Canis', 'Alimento umido Terra Canis senza cereali per cani adulti, privo di lattosio, prodotto in Germania con materie prime in qualità alimentare accuratamente cotte al vapore, min. il 60% di carne.', 44.10)
    ],

    'dry' => [
        new Food('Dog', 'Dry Food', ' Wolf of Wilderness Crocchette per cani', 'Wolf of Wilderness', '400 g di crocchette senza cereali Wolf of Wilderness per cani, ricche di proteine animali e ispirate all\'alimentazione del lupo in natura, con tanta carne fresca', 12.99),
        new Food('Dog', 'Dry Food', 'Royal Canin Mini Adult Crocchette per cani', 'Royal Canin', 'Crocchette Royal Canin Mini Adult per cani adulti di taglia piccola (1-10 kg) da 10 mesi a 8 anni di età, protegge la cute e il pelo e facilita la gestione del peso, crocchette di piccole dimensioni.', 85.98),
        new Food('Dog', 'Dry Food', 'Farmina N&D Ancestral Grain Adult Mini Agnello e Mirtillo', 'Farmina', 'Secco Farmina N&D Ancestral Grain Adult Mini Agnello e Mirtillo per cani adulti piccoli, proteico come l\'alimento in natura, con 60% componenti animali, 20% cereali ancestrali e 20% frutta/verdura.', 45.90)
    ],

    'snack' => [
        new Food('Dog', 'snack Food', 'Barkoo Deli Snacks', 'Barkoo', '1 confezione di snack Barkoo Deli per cani, in pelle di manzo povera di grassi, con pollo delizioso, senza aromi, conservanti né coloranti', 1.99),
        new Food('Dog', 'snack Food', 'Snack premium liofilizzati Wolf of Wilderness - RAW', 'Wolf of Wilderness', '150 g di snack premium liofilizzati per cani Wolf of Wilderness - RAW, con 100% puro pesce o interiora, naturali e senza cereali,', 6.99),
        new Food('Dog', 'snack Food', 'Rocco Chings Double', 'Rocco', '200 g di snack per cani Rocco Chings Double, doppio gusto di carne con cuore di fegato di pollo, carne di agnello o carne di manzo avvolto da filetto di pollo', 5.99)
    ]
];
