<?php
class Test
{
    public function printForm()
    {
        echo '<form action="/" method="get">
        <input type="text" value="логин" name="login">
        <button type="submit">Отправить</button></form>';
    }
    public function printText()
    {
        echo "создание ";
    }
}
