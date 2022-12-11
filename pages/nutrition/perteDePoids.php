<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");

$content = "

<div class='pageTextContainer'>
    <section>
        <h2 class='borderBottom'>Perte de poids</h2>
        <p>
            Pour une perte de poids efficace, il est
            essentiel de respecter certaines règles
            de base.
            Voici mes conseils pour une perte de poids
            réussie :
        </p>
        <ol>
            <li>
                Appliquer une légère réduction
                calorique de l'ordre de 15 à 20 % de
                l'apport énergétique total
            </li>
            <li>
                Consommer entre 1,5 et 2 g de
                protéines par kg de poids corporel et
                par jour 
            </li>
            <li>
                Conserver un bon apport en lipides
                de qualité : acides gras
                monoinsaturés et Oméga-3
                majoritairement
            </li>
            <li>
                Instaurer une réduction de l'apport
                en glucides, progressive, mais
                suffisante
            </li>
            <li>
                Conserver un niveau d'hydratation
                suffisant : environ 2 litres d'eau par
                jour
            </li>
            <li>
                Maintenir un apport en
                micronutriments correct malgré la
                modification des apports
                énergétiques
            </li>
            <li>
                Contrôler la perte de poids pour
                éviter un amaigrissement trop rapide
                qui entraînerait une fonte du tissu
                musculaire.
            </li>
        </ol>
    </section>
    <section class='borderTop borderBottom'>
        <h2 >Pour calculez vos besoins calorique journaliers</h2>
        
        <button onclick='location.href=\"CalculateurDeCalories.php\"'>cliquez ici</button>
    </section>
    <section>
        <h2>Exemple de menu equilibré</h2>
        <h4>** Petit-déjeuner ** (540 kcal)</h4>
        <ul>
            <li>1 thé</li>
            <li>65 g de muesli</li>
            <li>100 g de fromage blanc 0%</li>
            <li>25 g d'amandes</li>
            <li>1 kiwi</li>
        </ul>
        
        <h4>** Déjeuner ** (440 kcal)</h4>
        <ul>
            <li>80 g de salade verte avec des noix</li>
            <li>1 cuillère à soupe de sauce vinaigrette maison</li>
            <li>150 g de steak haché 5 % de mg</li>
            <li>100 g de riz basmati cuit</li>
        </ul>
        
        <h4>** Goûter ** (270 kcal)</h4>
        <ul>
            <li>30 g de chocolat noir (+ de 70%)</li>
            <li>30 g de fruits secs</li>
        </ul>
        
        <h4>** Dîner ** (380 kcal)</h4>
        <ul>
            <li>1 tomate</li>
            <li>1 cuillère à soupe de sauce vinaigrette maison</li>
            <li>150 g de pavé de saumon</li>
            <li>200 g de lentilles cuites</li>
            <li>30 g de pain complet</li>
        </ul>
        <h3>
            Total : 1630 kcal
        </h3>
    </section>  
    <section class='borderTop'>
        <h2>Obtiens ton programme alimentaire qui correspond à ton objectif !</h2>
        <button onclick='alert(\"TODO!\")'>je veux perdre du poids</button>
    </section>
</div>


";

echo genSiteContent(ROOT, $content);