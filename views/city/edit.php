<form action="?module=city&action=update" method="post">

    <label for="cityName">
        City name<input type="text" name="cityName" value="<?= $data['cityName']?>">
    </label>
    <input type="submit" value="save">

</form>