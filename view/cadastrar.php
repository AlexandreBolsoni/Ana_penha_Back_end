<?php
include '../php/config.php';

echo criaHeader('Cadastrar');

echo '<div class="cadastrar-container">
    <h2>Cadastro</h2>
    <form action="" method="POST">
        <label for="nome">Nome :</label>
        <input type="text" id="nome" name="nome" required>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="CPF">CPF:</label>
        <input type="text" id="CPF" name="CPF" required>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Cadastrar">
    </form>
</div>';

echo criaFooter();