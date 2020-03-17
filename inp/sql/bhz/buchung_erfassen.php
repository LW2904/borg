<h1>Buchung erfassen</h1>
<p>Buchungsdaten hier eingeben und Formular absenden</p>
<form action="index.php?site=buchung_speichern" method="post" enctype="multipart/form-data">
    <label>Teilnehmer ID:</label>
    <input name="teilnehmer" type="number">

    <label>Seminar ID:</label>
    <input name="seminar" type="number">

    <button name="submit" type="submit">Absenden</button>
</form>