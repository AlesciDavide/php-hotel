<?php 
require __DIR__ . "/utilities/hotel.php";

/* switch ($variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="inlineRadio1" name="inlineRadioOptions" value="option1">
            <label class="form-check-label" for="inlineRadio1">1</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="inlineRadio2" name="inlineRadioOptions" value="option2">
            <label class="form-check-label" for="inlineRadio2">2</label>
        </div>
    </section>
    <ul>
        <?php foreach ($hotels as $key => $hotel) { ?>
            <?php if ($hotel['parking'] ) {?>
                <li>
                <p><?php echo $hotel['name'] ?></p>
                <p><?php echo $hotel['description'] ?></p>
                <p><?php echo $hotel['parking'] ?></p>
                <p><?php echo $hotel['vote'] ?></p>
                <p><?php echo $hotel['distance_to_center'] ?></p>
                </li>
                <?php } ?>
            <?php } ?>
    </ul>
</body>
</html>