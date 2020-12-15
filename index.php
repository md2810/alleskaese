<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<title>Mike Coustic - Gitarrist</title>
<meta name="description" content="Veranstaltungstermine von Mike Coustic.
 Zusätzlich Hörbeispiele.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"
 rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<!-- eigene CSS-Anweisungen -->
<link href="design.css" rel="stylesheet">
</head>
<body>

<div data-role="page" id="startseite" data-theme="b">
<!-- Hier kommt die Startseite -->
  <?php anzeige_kopfbereich('startseite'); ?>

  <div data-role="main" class="ui-content">
    <h1>Mike Coustic - Gitarrist</h1>

    <p>Ich freue mich, dass du den Weg zu mir gefunden hast.</p>

    <p>Damit du den Weg zu meinen Veranstaltungen findest, hier die <a href="#termine">aktuellen Veranstaltungstermine</a>.</p>

    <img src="bilder/musiker.jpg" class="bildiminhalt" alt="Mike Coustic">

    <p>Viel Spaß auf der Seite</p>

    <p>Mike Coustic</p>    
  </div>

  <?php anzeige_fussbereich(); ?>
</div>

<!-- Hier kommt die Terminseite -->
<div data-role="page" id="termine" data-theme="b">
  <?php anzeige_kopfbereich('termine'); ?>
  <div data-role="main" class="ui-content">
  	<h1>Termine</h1>
  	<!--
    <table id="meineTabelle" data-role="table" class="ui-responsive"
       data-mode="columntoggle" data-column-btn-text="Spalten" >
      <thead>
        <tr>
          <th data-priority="4">ID</th>
          <th>Datum</th>
          <th data-priority="1">Beginn</th>
          <th data-priority="2">Veranstaltungsort</th>
          <th data-priority="3">Anmerkung</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>18.4. </td>
          <td>19:30</td>
          <td>Im Absacker</td>
          <td>Blues meets Hard Rock</td>
        </tr>
        <tr>
          <td>2.</td>
          <td>28.6. </td>
          <td>20:20</td>
          <td>Stadthalle Donzstadt</td>
          <td>Blues meets Heavy Metal</td>
        </tr>
        <tr>
          <td>3.</td>
          <td>20.7. </td>
          <td>19:40</td>
          <td>Schwäbisch Gmünd</td>
          <td>Speed Gitarr</td>
        </tr>
        <tr>
          <td>4.</td>
          <td>12.12. </td>
          <td>20:30</td>
          <td>Stuttgart, Liederhalle</td>
          <td>b´sinnliches</td>
        </tr>
      </tbody>
    </table>
-->
  </div>
  <?php anzeige_fussbereich(); ?>
</div>

<!-- Hier kommt die Musik-Teaser-Seite -->
<div data-role="page" id="musik" data-theme="b">
  <?php anzeige_kopfbereich(); ?>
  <div data-role="main" class="ui-content">
    <h1>Reinhören - 30 Sekunden Beispiel</h1>
    <p>Aus dem Album "Memories":</p> 
	<audio controls autoplay>
	          <source src="mp3/musikausschnitt-mike-coustic-memories.mp3"
	  type="audio/mpeg">
	  Sorry - Ihre Browser hat keine Unterstützung für dieses Audio-Format.
	</audio>

  </div>
  <?php anzeige_fussbereich('musik'); ?>
</div>

<!-- Hier kommt die Kontakt-Seite -->
<div data-role="page" id="kontakt" data-theme="b">
  <?php anzeige_kopfbereich(); ?>

  <div data-role="main" class="ui-content">
    <h1>Kontakt</h1>
    <p>Mike Coustic</p>
	<p>Telefon <a href="tel:00490123555456789000">(0049) 0123 555 456 789 000</a></p>
	<p>Mail: <a href="mailto:kontakt@example.com">kontakt@example.com</a> </p>
  </div>

  <?php anzeige_fussbereich('kontakt'); ?>
</div>

<!-- Hier kommt die Login-Seite -->
<div data-role="page" id="login" data-theme="b">
 <?php anzeige_kopfbereich(); ?>
 <div data-role="main" class="ui-content">
   <h1>Login</h1>
       <?php
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
	?>
   <form data-ajax="false" id="loginformular" method="post" action="index.php#login">
       <div data-role="fieldcontain">
           <fieldset>
               <label for="benutzername">Benutzername</label>
               <input type="text" name="benutzername" id="benutzername" focus>
               <label for="kennwort">Kennwort</label>
               <input type="password" name="kennwort" id="kennwort">
               <input type="submit" value="einloggen">
           </fieldset>
       </div>
   </form>
 </div>
 <?php anzeige_fussbereich('login'); ?>
</div>

</body>
</html>

<?php
function anzeige_kopfbereich($bereich = "") {
   echo '
      <div data-role="header" data-position="fixed">
      <a href="#startseite" class="ui-btn ui-icon-home ui-btn-icon-left ';
   if ($bereich == 'startseite') {
       echo ' ui-btn-active ui-state-persist';
   }
   echo '">Startseite</a>
   <h1>Mike Coustic - Gitarrist</h1>
   <a href="#termine" class="ui-btn ui-icon-calendar ui-btn-icon-left ';
   if ($bereich == 'termine') {
      echo ' ui-btn-active ui-state-persist';
   }
   echo '">Termine</a>
   </div>
   ';
}

function anzeige_fussbereich($bereich = "") {

	echo '<div data-role="footer" data-position="fixed" class="bereichfuss">';

	echo '  <a href="#musik" class="ui-btn ui-icon-audio ui-btn-icon-left ui-btn-icon-notext ui-corner-all';
	if ($bereich == 'musik') {
		echo ' ui-btn-active ui-state-persist';
	}
	echo '">Hörbeispiele</a>';

	echo '  <a href="#kontakt" class="ui-btn ui-icon-mail ui-btn-icon-left ui-btn-icon-notext ui-corner-all';
	if ($bereich == 'kontakt') {
		echo ' ui-btn-active ui-state-persist';
	}
	echo '">Kontakt</a>';

	echo '  <a href="#login" class="ui-btn ui-icon-user ui-btn-icon-left ui-btn-icon-notext ui-corner-all';
	if ($bereich == 'login') {
		echo ' ui-btn-active ui-state-persist';
	}
	echo '">Login</a>';
	echo '</div>';
}
?>