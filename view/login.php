<?php

include '../php/config.php';

echo criaHeader('Login');

echo '<div class="login-container">
    <h2>Login</h2>
    <form action="" method="POST">
        <label for="CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" required>

        <label for="Senha">Senha:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Entrar">
    </form>
</div>';




echo criaFooter();