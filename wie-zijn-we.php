<!-- header  -->
<?php $pageTitle = 'Wie Zijn We' ?>
<?php include 'includes/header.php' ?>

<!-- navbar -->
<?php $currentPage = 'about' ?>
<?php include 'includes/navbar.php' ?>

<!-- content -->
<div class="content_wrapper">
    <div style="height:auto; width:90%; margin:auto; background-color: #b5b5b5e7;">
        <h2 style="font-size: 40px; text-align:center">Wie zijn we ?</h2>

        <!-- About us section -->
        <section title="aboutUs">
            <div class="about-container">
                <div class="about-block">
                    <p>TechNex is een toonaangevend technologieadviesbureau dat zich inzet om bedrijven te helpen
                        bij hun digitale transformatie. Met een team van ervaren professionals en een passie voor
                        innovatie, streven we ernaar om de meest effectieve technologische oplossingen te bieden die
                        aansluiten bij de unieke behoeften van onze klanten.</p>
                </div>

                <div class="about-block">
                    <h2>Onze Missie</h2>
                    <p>Onze missie is om bedrijven te helpen groeien en concurreren in het digitale tijdperk. We
                        doen dit door op maat gemaakte IT-strategieën en -oplossingen te bieden die de operationele
                        efficiëntie verbeteren, de productiviteit verhogen en nieuwe kansen creëren.</p>
                </div>

                <div class="about-block">
                    <h2>Onze Visie</h2>
                    <p>We streven ernaar om een wereldleider te zijn in technologieadvies en digitale transformatie.
                        We willen een betrouwbare partner zijn voor bedrijven van alle groottes en in alle sectoren,
                        hen helpen om de technologische uitdagingen van vandaag aan te gaan en zich voor te bereiden
                        op de kansen van morgen.</p>
                </div>

                <div class="about-block">
                    <h2>Onze Waarden</h2>
                    <p>Bij TechNex geloven we in integriteit, samenwerking, en innovatie. We zetten ons in voor het
                        leveren van de hoogste kwaliteit diensten en streven naar uitmuntendheid in alles wat we
                        doen.</p>
                </div>
            </div>

        </section>

        <!-- User Rating section -->
        <section title="Rating">
            <?php include 'includes/rating.php' ?>

        </section>

        <!-- Testimonial section -->
        <section title="Testimonial">
            <?php include 'includes/testimonial.php' ?>
        </section>

        <!-- Counter sections -->
        <section title="Counter">
            <?php include 'includes/sectionCounter.php' ?>
        </section>
    </div>
</div>

<?php include_once 'includes/footer.php' ?>