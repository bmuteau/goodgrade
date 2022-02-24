<?php
include '../template/header.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="../styles/etprofile.css" rel="stylesheet">
<link href="../styles/footer.css" rel="stylesheet">






<div id="top"></div>

<body>
    <h1 class="title"> $VariableNomEtablissement</h1>
    <img src="../src/iconfinder_favorite_heart_like_love_valentine_290111.svg" class="favorite">
    <!-- doit changer en fonction de favoris ou non et de ma page pro -->


    <img src="../src/images.jpg" id="main">
    <div id="thumbnails">
        <img src="../src/images.jpg">
        <img src="../src/téléchargement.jpg">
        <img src="../src/images.jpg">

    </div>

    <p class="description">$Variable_Description - Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem velit deserunt ipsam nisi harum dolore, aspernatur voluptatem ut tempore soluta temporibus, tenetur nostrum nesciunt fugiat minima rerum vitae est quas quo iste commodi impedit eos repellendus eveniet? Aperiam incidunt hic corporis corrupti exercitationem, commodi illum. Quae, nisi! Sapiente, doloribus in.</h2>

    <div class="picto">
        <img src="../src/iconfinder_local_phone_352510.svg" class="phone">
        <img src="../src/iconfinder_language_web_326663.svg" class="web">
        <img src="../src/iconfinder_adress_gps_location_pin_position_1564524.svg" class="gps">
    </div>

    <div class="nbr">
        <p>Note de nos utilisateurs : </p>
        <p class="note">5/5</p>
    </div>
    <p class="nbravis">5 avis</p>

    <ul>
        <li class="avis">
            <div class="profil"><img src="../src/iconfinder_customer_man_user_account_profile_1564534.svg" class="img"></div>
            <div class="name">$Var_Pseudos</div>
            <div class="post">$Var_Avis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cupiditate.</div>
            <div class="warning">
                <!-- Visible uniquement quand c'est son etablissement --> SIGNALER
            </div>
            <div class="notes">5/5</div>
        </li>
        <li class="avis">
            <div class="profil"><img src="../src/iconfinder_customer_man_user_account_profile_1564534.svg" class="img"></div>
            <div class="name">$Var_Pseudos</div>
            <div class="post">$Var_Avis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cupiditate.</div>
            <div class="warning">
                <!-- Visible uniquement quand c'est son etablissement --> SIGNALER
            </div>
            <div class="notes">5/5</div>
        </li>
        <li class="avis">
            <div class="profil"><img src="../src/iconfinder_customer_man_user_account_profile_1564534.svg" class="img"></div>
            <div class="name">$Var_Pseudos</div>
            <div class="post">$Var_Avis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cupiditate.</div>
            <div class="warning">
                <!-- Visible uniquement quand c'est son etablissement --> SIGNALER
            </div>
            <div class="notes">5/5</div>
        </li>
        <li class="avis">
            <div class="profil"><img src="../src/iconfinder_customer_man_user_account_profile_1564534.svg" class="img"></div>
            <div class="name">$Var_Pseudos</div>
            <div class="post">$Var_Avis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cupiditate.</div>
            <div class="warning">
                <!-- Visible uniquement quand c'est son etablissement --> SIGNALER
            </div>
            <div class="notes">5/5</div>
        </li>
        <li class="avis">
            <div class="profil"><img src="../src/iconfinder_customer_man_user_account_profile_1564534.svg" class="img"></div>
            <div class="name">$Var_Pseudos</div>
            <div class="post">$Var_Avis Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cupiditate.</div>
            <div class="warning">
                <!-- Visible uniquement quand c'est son etablissement --> SIGNALER
            </div>
            <div class="notes">5/5</div>
        </li>
    </ul>


</body>



<footer>

    <div class="footer">

        <div class="faq"><a href="#">FAQ</a></div>
        <a href="#top"> <img src="../src/iconfinder_arrow_forward_navigation_next_right_3994400.svg" class="up"></a>
        <div class="contact"><a href="#">Nous contacter</a></div>
        <div class="legal"><a href="#">Mentions légales</a></div>
        <div class="copyright">GoodGrade, site d'avis sécurisé</div>

    </div>

    <script>
        var thumbnails = document.getElementById("thumbnails")
        var imgs = thumbnails.getElementsByTagName("img")
        var main = document.getElementById("main")
        var counter = 0;

        for (let i = 0; i < imgs.length; i++) {
            let img = imgs[i]


            img.addEventListener("click", function() {
                main.src = this.src
            })

        }
    </script>