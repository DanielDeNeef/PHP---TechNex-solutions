<link rel="stylesheet" href="styles/cookieConsent.css">

<div id="cookie-banner">
    <span id="cookie-message">Deze website maakt gebruik van cookies om uw ervaring te verbeteren.</span>
    <form method="post" action="controllers/cookieAccept.php" style="display: inline;">
        <select id="language" name="language" onchange="changeLanguage()">
            <option value="nl" selected>Nederlands</option>
            <option value="fr">Français</option>
        </select>
        <button type="submit" name="acceptCookies">Accepteer</button>
    </form>
</div>

<script src="js/cookieConsent.js""></script>