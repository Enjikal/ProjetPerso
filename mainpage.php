<?php
session_start();
//$page = "slider";//
 include "navbar.php";

 ?>


<div id= "main">
    <div class="container">
        <!-- Slider container principal -->
        <div class="swiper">
            <!-- Container additionnel -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img src="assets/Themadeleine_et_nappe_vichy.jpg" alt="Madeleines" />
                    <div class="description">
                        <h4>Madeleines et thé vert</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/Gateau_aux_pommes_caramelisees.jpg" alt="Gâteau aux pommes" />
                    <div class="description">
                        <h4>Gâteau aux pommes caramélisées</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/Domes_chocolat.jpg" alt="Domes au chocolat" />
                    <div class="description">
                        <h4>Demies sphères chocolat noir</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/Tarte_fine_aux_abricots_et_noisettes_caramelisees.jpg" alt="Tarte aux abricots" />
                    <div class="description">
                        <h4>Tarte fine aux abricots</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/Baguettes_fait_maison.jpg" alt="Pain fait maison" />
                    <div class="description">
                        <h4>Baguettes faites maison</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/20211231_202058.jpg" alt="Makis et sushis" />
                    <div class="description">
                        <h4>Makis et sushis</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/Cordon_bleu_a_ma_facon.jpg" alt="Cordons bleus" />
                    <div class="description">
                        <h4>Cordons bleus à ma façon</h4>
                    </div>
                </div>

            </div>

            <!-- En cas de pagination -->
            <div class="swiper-pagination"></div>

            <!-- Boutons de navigation -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".swiper", {
            loop: true,

            // If we need pagination
            pagination: {
                el: ".swiper-pagination",
            },

            // Navigation arrows
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>





<?php
include "footer.php";
?>