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
            
           
            <p>Wybierz grafike</p>      
        
            	<input type="radio" name="plik_podklad" value="./grafiki/alafruit_czarny_kr500.png" checked="checked"><img src="./grafiki/alafruit_czarny_kr500.png" width="200" height="200" alt="">
            	<input type="radio" name="plik_podklad" value="./grafiki/bluza_upperdeck_2014_500.png"><img src="./grafiki/bluza_upperdeck_2014_500.png" width="200" height="200" alt="">
            	<input type="radio" name="plik_podklad" value="./grafiki/hoodie_500_sznurki.png"><img src="./grafiki/hoodie_500_sznurki.png" width="200" height="200" alt="">
            	<input type="radio" name="plik_podklad" value="./grafiki/czysta_long_nowa_2014_500.png"><img src="./grafiki/czysta_long_nowa_2014_500.png" width="200" height="200" alt="" >
 				<p>Do podpisu użyje </p>
 				
 					<input type="radio" name="plik_podpis" value="./grafiki/podpis_hurt_alter_all.png" checked="checked"><img src="./grafiki/podpis_hurt_alter_all.png"  alt="" >
 					<input type="radio" name="plik_podpis" value="./grafiki/podpis_hurt_sgpl_all.png"><img src="./grafiki/podpis_hurt_sgpl_all.png" alt="" >
 				           
            <p>Uzyje wzorow z katalogu</p>
            <label for="sciezka_wzorow">./grafiki/wzory/</label>
            	<input type="radio" name="sciezka_wzorow" value="./grafiki/wzory/" checked="checked">
            <p>Uzyje wzorow tylow z katalogu</p>
             <label for="sciezka_tylow">./grafiki/wzory/tyl/</label>
            	<input type="radio" name="sciezka_tylow" value="./grafiki/wzory/tyl/" checked="checked">	
            <p>Wyniki zapisze w </p>	           
             <label for="sciezka_wynikow">../grafiki/wyniki/</label>
            <p><label for="sciezka_wynikow">sciezka wynikow</label>
                <input type="radio" name="sciezka_wynikow" value="./grafiki/wyniki/" checked="checked"></p>
            <p><label for="stala_y">wysokosc wzoru na podkladzie</label>
                <input type="text" name="stala_y" value="130" size="5" /></p>           
            <p><input type="submit" value="potwierdz" name="potwierdz" /></p>
        </form>
    </body>
</html>
