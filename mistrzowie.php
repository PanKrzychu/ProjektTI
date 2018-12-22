<?php
    require_once 'database.php'; // połączenie z bazą, które jest skonfigurowane w database.php

    if(isset($_GET['obecni'])) {
        $mastersQuery = $db -> query("SELECT wagi.nazwa, obecni.imie, obecni.nazwisko, obecni.opis FROM obecni, wagi, wagi_obecni WHERE wagi_obecni.id_obecni = obecni.id_obecni AND wagi_obecni.id_wagi = wagi.id_wagi ORDER BY wagi.id_wagi;"); // zapytanie do bazy
        $page_title = "Obecni mistrzowie"; // Zmienna, w której jest tytuł obecnej strony
        $page_subtitle = "Poznajcie obecnych mistrzów KSW!";
    }
    else if(isset($_GET['byli'])) {
        $waga = $_GET['byli'];

        $mastersQuery = $db -> query("SELECT wagi.nazwa, byli.imie, byli.nazwisko, byli.opis FROM byli, wagi, wagi_byli WHERE wagi_byli.id_byli = byli.id_byli AND wagi_byli.id_wagi = wagi.id_wagi AND wagi.nazwa = '$waga' ORDER BY byli.imie");

        $page_title = "Byli mistrzowie - waga $waga";
        $page_subtitle = "Poznajcie byłch mistrzów KSW!";
    }
    else{
        echo "Zły parametr w URL!";
    }


    $masters = $mastersQuery -> fetchAll(); // Pobranie wszytkich rekordów do tablicy

    
    include_once 'header.php'; // załączenie nagłówka. Musi być poniżej zapytń do bazy, poniważ są tam deklarowane tytuły strony
?>


<main>

    <section class="fighters">

        <div class="container">

            <header>

                <h1><?=$page_title?></h1>
                <p><?=$page_subtitle?></p>

            </header>

            <div class="row" id="fighter">
            <?php // wygenerowanie listy mistrzów z bazy
                $i = 0; //zmienna inkrementacyjna, aby każdy mistrz mógł odnaleźć swego modala
                foreach($masters as $master){
                    echo "
                        <div class='col-sm-6 col-md-4'>
                            <figure class='bg-fighters'>
                                <figcaption >Waga {$master[0]}</figcaption>
                                    <span href='#' data-toggle='modal' data-target='#master-$i'><img src='img/{$master[2]}.jpg' alt='{$master[1]} {$master[2]}'></span>
                                <figcaption>{$master[1]} {$master[2]}</figcaption>
                            </figure>
                        </div>

                        <div class='modal fade' id='master-$i' tabindex='-1' role='dialog' aria-labelledby='exampleModalLongTitle' aria-hidden='true'>
                            <div class='modal-dialog modal-lg modal-lg' role='document'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h5 class='modal-title' id='exampleModalLongTitle'>{$master[1]} {$master[2]}</h5>
                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>
                                    <div class='modal-body row'>
                                        <div class='col-lg-5'>
                                            <img src='img/{$master[2]}.jpg' alt='{$master[1]} {$master[2]}'>
                                        </div>
                                        <div class='col-lg-7'>
                                            {$master[3]}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
                    $i++;
                }
                // liczby w [] oznaczają numer kolumny, która został zwrócony przez zapytanie (numerowane od 0), czyli jeśli mistrzowie.imie jest tzecie po przecinku w SELECcie, to ma numer [2]
            ?>

            </div> <!-- row -->

        </div> <!-- container -->

    </section>

</main>

<footer></footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>