<form action="index.php?loc=confirmation" method="post"
    enctype="multipart/form-data"
>
    <label>First Name: </label>
    <input required type="text" name="fname"
        pattern="([A-Z]+[a-z]+\. )?[A-Z][a-z]+((-| )[A-Z][a-z]+)*">

    <label>Last Name: </label>
    <input required type="text" name="lname"
        pattern="[A-Z][a-z]+((-| )[A-Z][a-z]+)*(, [A-Z]+[a-z]*)?">

    <label>Date of Birth: </label>
    <input required type="date" name="dbirth">

    <label>E-Mail: </label>
    <input required type="email" name="email">

    <label>Password: </label>
    <input required type="password" name="pass"
        pattern="[A-Za-z0-9@_]{10,}"
        placeholder="At least 10 letters, numbers, @ or _">

    <button type="submit" name="register">Register</button>
</form>
