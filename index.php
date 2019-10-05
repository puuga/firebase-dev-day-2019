<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Firebase Dev Day 2019</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <!-- Title -->
        <div class="row">
            <div class="col">
                <h1>Firebase Dev Day 2019</h1>
            </div>
        </div>

        <!-- Sub Title -->
        <div class="row">
            <div class="col">
                <h3>Firebase Dev Day 2019 - Building dynamic website by Firebase Hosting x Cloud Run</h3>
            </div>
        </div>
        
        <!-- Content -->
        <div class="row">
            <div class="col">
                <?php
                    $randomed = array_rand($data);
                ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?=$data[$randomed]['image_url'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?=$data[$randomed]['name'];?></h5>
                        <p class="card-text"><?=$data[$randomed]['ref'];?></p>
                        <a href="<?=$data[$randomed]['ref'];?>" class="btn btn-primary">Origin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>