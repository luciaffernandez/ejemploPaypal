<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola</title>
    </head>
    <body>
        <h1>Holiii</h1>
        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
            <input name="cmd" type="hidden" value="_xclick" />
            <input name="business" type="hidden" value="luciafffernandez-facilitator@gmail.com" />
            <input name="shopping_url" type="hidden" value="http://tienda/ejemploPaypal/index.php" />
            <input name="currency_code" type="hidden" value="EUR" />
            <input name="return" type="hidden" value="http://tienda/ejemploPaypal/index.php" />
            <input name="notify_url" type="hidden" value="http://tienda/ejemploPaypal/index.php" />
            <input name="rm" type="hidden" value="2" />
            
            <input type="hidden" name="item_name1" value="Producto 1">
            <input type="hidden" name="amount1" value="1000">
            <input type="hidden" name="item_name2" value="Producto 2">
            <input type="hidden" name="amount2" value="2000">
            <input type="hidden" name="item_name3" value="Producto 3">
            <input type="hidden" name="amount3" value="3000">
            COMPRA ESTO
            <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
        </form>
    </body>
</html>
