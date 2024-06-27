<?php 
require __DIR__ . "/utilities/hotel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni il valore del radio button selezionato
    $selectedOption = isset($_POST['inlineRadioOptions']) ? $_POST['inlineRadioOptions'] : null;

    // Inizializza la variabile booleana
    $isOption1Selected = false;

    // Verifica quale opzione è stata selezionata
    if ($selectedOption == "option1") {
        $isOption1Selected = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section>
        <form  action="./index.php" method="POST">
            <h3>desideri parcheggio?</h3>
            <div class="d-flex ms-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="option1">
                    <label class="form-check-label" for="inlineRadio1">No</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="inlineRadio2" name="inlineRadioOptions" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Si</label>
                </div>
                <button class="ms-3" type="submit">Submit</button>
            </div>
        </form>
    </section>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">name</th>
            <th scope="col">description</th>
            <th scope="col">parking</th>
            <th scope="col">vote</th>
            <th scope="col">distance_to_center</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($hotels as $key => $hotel) { ?>
                <?php if ($hotel['parking'] || $isOption1Selected == true) {?>
            <tr>
            <th><?php echo $hotel['name'] ?></th>
            <td><?php echo $hotel['description'] ?></td>
            <td><?php echo $hotel['parking'] ?></td>
            <td><?php echo $hotel['vote'] ?></td>
            <td><?php echo $hotel['distance_to_center'] ?>Km</td>
            </tr>
            <?php } ?>
            <?php } ?>
        </tbody>
    </table>
    
</body>
</html>