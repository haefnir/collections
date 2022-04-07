<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Pokemon</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1>Fill in your new Pokemon's details</h1>

<form method="post" action="checkUserInput.php">
    <label>Nickname (optional):
        <input name="nickname" type="text">
    </label>
    <label>Species (required):
        <input name="species" type="text">
    </label>
    <fieldset>
    <legend>Gender (optional)</legend>
    <label>&#9792;
        <input name="gender" type="radio" value="female">
    </label>
    <label>&#9794;
        <input name="gender" type="radio" value="male">
    </label>
    </fieldset>
    <input type="submit">
</form>

</body>
</html>