<h1>Bewertung erfassen</h1>
<p>Bewertung hier eingeben und Formular absenden</p>
<form action="index.php?site=bewertung_speichern" method="post" enctype="multipart/form-data">
    <label>Teilnehmer ID:</label>
    <input name="teilnehmer" type="number">

    <label>Seminar ID:</label>
    <input name="seminar" type="number">

    <label>Bewertung:</label>
    <select name="bewertung">
        <option value="sehr gut">sehr gut</option>
        <option value="bestanden">bestanden</option>
        <option value="nicht bestanden">nicht bestanden</option>
    </select>

    <button name="submit" type="submit">Absenden</button>
</form>
