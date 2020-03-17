<h1>Buchungen</h1>
<p>Bitte auswählen, welche Buchungen angezeigt werden sollen</p>
<form action="index.php?site=buchungen" method="post" enctype="multipart/form-data">
    <label>Zahlungsstatus: </label>
    <select name="status">
        <option value="alle">alle</option>
        <option value="offen">offen</option>
        <option value="bezahlt">bezahlt</option>
    </select>

    <label>Zeitraum:</label>
    <select name="zeit">
        <option value="alle">alle</option>
        <option value="vergangene">vergangene</option>
        <option value="zukuenftige">zukuenftige</option>
    </select>

    <button name="submit" type="submit">Absenden</button>
</form>
