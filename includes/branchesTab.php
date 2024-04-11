<link rel="stylesheet" href="styles/tab.css">

<div class="tab">
    <button class="tablinks" onclick="openBranche(event, 'Brussels')">Brussels</button>
    <button class="tablinks" onclick="openBranche(event, 'Gent')">Gent</button>
    <button class="tablinks" onclick="openBranche(event, 'Antwerp')">Antwerp</button>
</div>

<div id="Brussels" class="tabcontent">
    <h3>Brussels</h3>
    <p>
    <i class="fa fa-map-marker" aria-hidden="true"></i>  Main street, 1000 Brussels<br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i> techNex-Brussels@example.com<br>
        <i class="fa fa-phone" aria-hidden="true"></i>  025222222<br>
    </p>
</div>

<div id="Gent" class="tabcontent">
    <h3>Gent</h3>
    <p>
        <i class="fa fa-map-marker" aria-hidden="true"></i>  Next to Arena 98, 9000 Gent<br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i> techNex-Gent@example.com<br>
        <i class="fa fa-phone" aria-hidden="true"></i>  095222222<br>
    </p>
</div>

<div id="Antwerp" class="tabcontent">
    <h3>Antwerp</h3>
    <p>
    <i class="fa fa-map-marker" aria-hidden="true"></i>  happy street 12, 2000 Antwerpen<br>
        <i class="fa fa-envelope-o" aria-hidden="true"></i> techNex-Antewerp@example.com<br>
        <i class="fa fa-phone" aria-hidden="true"></i>  035222222<br>
    </p>
</div>

<script src="js/tabController.js"></script>