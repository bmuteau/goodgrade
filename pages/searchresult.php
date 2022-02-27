<?php
include 'template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Résultat de recherche - GoodGrade</title>


<link href="styles/searchresult.css" rel="stylesheet">
<link href="styles/footer.css" rel="stylesheet">




<div id="top"></div>

<body>
    <h1 class="title">Résultat de recherche pour $VariableRecherche</h1>

    <form action="#" method="get">
        <input class="search" type="search" name="terme" placeholder="Rechercher un établissement">
        <img src="src/iconfinder_search_2561381.svg" class="submit">
    </form>

    <ul>
        <li class="resultlist">
            <div class="like">
                <!-- red heart if favorite, no heart if disconected account-->
                <img src="src/iconfinder_heart_like_love_5172567.svg" class="heart">
            </div>
            <div class="image-rognage">
                <img src="src/téléchargement.jpg" class="result">
            </div>
            <div class="name">$VAR_Nom</div>
            <div class="description">$Var_Desc Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod odio unde deserunt, itaque vitae aliquid?</div>
            <div class="nbr">
                <!-- variable nombre d'avis -->55 avis
            </div>
            <div class="note">5/5</div>
        </li>
        <li class="resultlist">
            <div class="like">
                <!-- red heart if favorite, no heart if disconected account-->
                <img src="src/iconfinder_favorite_heart_like_love_valentine_290111.svg" class="heart">
            </div>
            <div class="image-rognage">
                <img src="src/téléchargement.jpg" class="result">
            </div>
            <div class="name">$VAR_Nom</div>
            <div class="description">$Var_Desc Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod odio unde deserunt, itaque vitae aliquid?</div>
            <div class="nbr">
                <!-- variable nombre d'avis -->55 avis
            </div>
            <div class="note">5/5</div>
        </li>
        <li class="resultlist">
            <div class="like">
                <!-- red heart if favorite, no heart if disconected account-->
                <img src="src/iconfinder_heart_like_love_5172567.svg" class="heart">
            </div>
            <div class="image-rognage">
                <img src="src/téléchargement.jpg" class="result">
            </div>
            <div class="name">$VAR_Nom</div>
            <div class="description">$Var_Desc Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod odio unde deserunt, itaque vitae aliquid?</div>
            <div class="nbr">
                <!-- variable nombre d'avis -->55 avis
            </div>
            <div class="note">5/5</div>
        </li>
        <li class="resultlist">
            <div class="like">
                <!-- red heart if favorite, no heart if disconected account-->
                <img src="src/iconfinder_favorite_heart_like_love_valentine_290111.svg" class="heart">
            </div>
            <div class="image-rognage">
                <img src="src/téléchargement.jpg" class="result">
            </div>
            <div class="name">$VAR_Nom</div>
            <div class="description">$Var_Desc Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quod odio unde deserunt, itaque vitae aliquid?</div>
            <div class="nbr">
                <!-- variable nombre d'avis -->55 avis
            </div>
            <div class="note">5/5</div>
        </li>
    </ul>


</body>
<footer>



    <div class="footer">

        <div class="faq"><a href="faq">FAQ</a></div>
        <a href="#top"> <img src="src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="contact">Nous contacter</a></div>
        <div class="legal"><a href="mentionlegal">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>
</footer>