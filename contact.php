<?php

include 'INC/header.php';

?>


<main>
    <div class="carousel">
        <h1>Contact</h1>
    </div>

    <div class="txt1">
        <div class="containergauche">
            <div class="bloctext">
                <p style="text-align: center;"><strong>Maryse Thiebaud</strong></p>
                <p style="text-align: center;">4 avenue des plantées</p>
                <p style="text-align: center;">69330 Meyzieu <br> Tél: 06 24 24 24 24</p>
                <p style="text-align: center;"><strong>Tram T3 : Gare de Part Dieu la Villete</strong></p>
                <!--<img class="imgrdvv" src="img/Horaires.png" alt="">-->
                <div class="openingTime">
                    <p>Horaires de consultation</p>
                    <div class="openingTime-title">
                        <div class="days">
                            <p>Lundi</p>
                            <p>Mardi</p>
                            <p>Mercredi</p>
                            <p>Jeudi</p>
                            <p>Vendredi</p>
                            <p>Samedi</p>
                            <p class="cRed">Dimanche</p>
                        </div>
                        <div class="hours">
                            <p>14h00 - 19h00</p>
                            <p>8h30 - 19h00</p>
                            <p>8h30 - 19h00</p>
                            <p>8h30 - 19h00</p>
                            <p>8h30 - 19h00</p>
                            <p>8h30 - 12h00</p>
                            <p class="sunday cRed">Fermé</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="carteggle">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1655.0974408355808!2d4.859503140963323!3d45.76054737910553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea62fdaf6429%3A0x6e097152ab2851f8!2sLyon%20Part%20Dieu!5e0!3m2!1sfr!2sfr!4v1615993200539!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy" class="mapggle"></iframe>
            </div>
        </div>

        <div class="containerdroite">
            <div class="container">
                <h1 style="text-align: center;">Formulaire de contact</h1>
                <form id="contactForm">
                    <label for="fname">Nom</label>
                    <input type="text" id="fname" name="firstname" placeholder="Votre nom">

                    <label for="name">Prénom</label>
                    <input type="text" id="name" name="firstname" placeholder="Votre prénom">

                    <label for="sujet">Sujet</label>
                    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

                    <label for="emailAddress">Email</label>
                    <input id="emailAddress" type="email" name="email" placeholder="Votre email">

                    <label for="subject">Message</label>
                    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <div class="iconimg">
                <img src="https://img.icons8.com/fluent/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/fluent/48/000000/linkedin.png" />
            </div>
        </div>
    </div>
</main>

<?php

include 'INC/footer.php';

?>