<?php
const ROOT = "../..";
include(ROOT . "/source/siteStructure.php");
include(ROOT . "/source/pagesFunctions.php");

$content = "

<div class='pageTextContainer'>
    <section>
       <h2 class='borderBottom'>Sèche</h2>
       <p>  Pour sécher et perdre la graisse, il est
            essentiel de respecter certaines règles
            de base.
            Voici nos conseils pour une sèche
            réussie :
        </p>
        <ul>
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
                musculaire
            </li>
        </ul>
        <p>
            Il est impératif de réduire, voire bannir la
            consommation de certains aliments qui
            empêchent de perdre la graisse et
            freinent la perte de poids. C'est le cas
            notamment :
        </p>
        <ul>
            <li>du sucre</li>
            <li>des céréales raffinées</li>
            <li>des biscuits (gâteaux, viennoiseries)</li>
            <li>des plats préparés</li>
            <li>des fast-foods </li>
            <li>de l'alcool</li>
        </ul>
        <p>
            En règle générale, plus l'alimentation est
            simple et élaborée à partir de produits
            bruts, plus la sèche sera efficace.
        </p>
        
    </section>
    <section class='borderBottom borderTop'>
        <h2>Pour calculez vos besoins calorique journaliers</h2>
        <button onclick='location.href = \"CalculateurDeCalories.php\"'>cliquez ici</button>
    </section>
    <section class='borderBottom'>
        <h2>Exemple de menu sain pour maigrir</h2>
        
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
    <section>
        <h3>Obtiens ton programme alimentaire qui correspond à ton objectif !</h3>
        <button>Je veux sécher</button>
    </section>
</div>


";

echo genSiteContent(ROOT, $content);