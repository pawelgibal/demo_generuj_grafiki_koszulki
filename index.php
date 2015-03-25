<!DOCTYPE html>
<!--
Formularz z domyslnymi wartosciami
plik podkladu - grafika czystej koszulki
plik podpisu - grafika logo sklepu internetowego, watermark
sciezka wzorow - katalog z grafikami przygotowanymi do nanoszenia na czysta koszulke
sciezka tyly - katalog z grafikami do naniesiania i oznaczenia jako grafiki z tylu koszulki
stala_y - wysokosc poczatkowa - pozycja  na jakiej maja byc umieszczone wzory
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'functions.php';
        ?>
        <form name="parametry_wejsciowe" action="imagic.php" method="POST" enctype="multipart/form-data">
            
            
            
            
            
            
            <p><label for="plik_podklad">plik podkladu</label>
                <input type="text" name="plik_podklad" value="./grafiki/alafruit_czarny_kr500.png"  size="100"/><br</p>
            <p><label for="plik_podpis">plik podpis</label>
                <input type="text" name="plik_podpis" value="./grafiki/podpis_hurt_alter_all.png"size="100" /></p>
            <p><label for="sciezka_wzorow">sciezka wzorow</label>
                <input type="text" name="sciezka_wzorow" value="./grafiki/wzory/" size="100" /></p>
            <p><label for="sciezka_wzorow">sciezka tylow</label>
                <input type="text" name="sciezka_tylow" value="./grafiki/wzory/tyl/" size="100" /></p>
            <p><label for="sciezka_wynikow">sciezka wynikow</label>
                <input type="text" name="sciezka_wynikow" value="./grafiki/wyniki/"  size="100"/></p>
            <p><label for="stala_y">stala y - wysokosc wzoru</label>
                <input type="text" name="stala_y" value="130" size="5" /></p>           
            <p><input type="submit" value="potwierdz" name="potwierdz" /></p>
        </form>
    </body>
</html>
