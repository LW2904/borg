<form action="index.php?loc=save" method="post"
    enctype="multipart/form-data"
>
    <label>Zipcode: </label>
    <input required type="text" name="zcode"
        pattern="\d{4}">

    <label>Age: </label>
    <input required type="text" name="age"
        pattern="(1[6-9]|[2-9][0-9]|1[0-4][0-9]|150)">

    <label>Party: </label>
    <select name="party">
        <option value="SPÖ">SPÖ</option>
        <option value="ÖVP">ÖVP</option>
        <option value="FPÖ">FPÖ</option>
        <option value="Grüne">Grüne</option>
        <option value="NEOS">NEOS</option>
        <option value="KPÖ">KPÖ</option>
    </select>

    <label>Preference vote: </label>
    <select name="pvote">
        <option value="Fritz Maier">Fritz Maier</option>
        <option value="Lisa Fritsch">Lisa Fritsch</option>
        <option value="Anna Sigmund">Anna Sigmund</option>
        <option value="Herbert Kranz">Herbert Kranz</option>
    </select>

    <button type="submit" name="submit">Submit</button>
</form>
