

<h1>Mise à jour du compte</h1>

<form action="?module=user&action=edit" method="post">
    <input type="hidden" name="userId" value="<?php echo $data['user']['userId'];?>">

    <p><label> Nom </label>
    <input type="text" name="name" maxlength="25" value="<?php echo $data['user']['name'];?>" required></p>

    <p><label> courriel </label>
    <input type="email" name="username" maxlength="45" value="<?php echo $data['user']['username'];?>"></p>

    <p><label> Naissance </label>
    <input type="text" name="birthday" maxlength="10" value="<?php echo date_format(date_create($data['user']['birthday']), 'Y-m-d');?>" value=""></p>

    <p><input type="submit" value="Soumettre"/></p>
</form>