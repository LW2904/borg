<form action="index.php?loc=confirmation" method="post"
    enctype="multipart/form-data"
>
    <label>Zipcode: </label>
    <input required type="text" name="zcode"
        pattern="\d{4}">

    <label>Age: </label>
    <input required type="text" name="age"
        pattern="(1[6-9]|[2-9][0-9]|1[0-4][0-9]|150)">

    <label>Party: </label>
    <input required type="text" name="party"
        pattern="(SPÖ)|(ÖVP)|(FPÖ)|(Grüne)|(NEOS)|(KPÖ)">

    <label>Preference vote: </label>
    <input required type="text" name="pvote"
        pattern="(Fritz Maier)|(Lisa Fritsch)|(Anna Sigmund)|(Herbert Kranz)">

    <button type="submit" name="submit">Submit</button>
</form>
