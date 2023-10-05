<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="../img/GMR.jpg" type="image/x-icon">
    <title>My Web</title>

    <!-- Bootstrap CSS (version 5) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- jQuery and Bootstrap JS (version 5) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
  .img {
    object-fit: cover; /* Maintain aspect ratio and cover the entire card */
    height: 100%; /* Ensure the image takes up the full height of the card body */
  }
    </style>

    <script>
        $(document).ready(function () {
            // Smooth scrolling for the "Contact me!" button
            $('button a[href^="#"]').on('click', function (e) {
                e.preventDefault();

                const target = $(this).attr('href');
                $('html, body').animate(
                    {
                        scrollTop: $(target).offset().top,
                    },
                    800 // Adjust the duration of the scroll animation (in milliseconds)
                );
            });
        });
    </script>
</head>
<body style="background-color: black; color: aliceblue;">
    <header>
    <?php include 'header.php'; ?>
    </header>
    
    <header style="background-image: url('https://picsum.photos/id/130/600/400'); background-size: cover; height: 400px; display: flex; justify-content: center; align-items: center; flex-direction: column; color: white;">
    <h1 style="margin: 0; color: black;">Rick Hogenhout</h1> <br>
    <h3 style="margin: 0; color: black;">Inapage</h3> <br>
</header>
    <main>
    <h2 style="text-align: center;">Beschrijving</h2>
    <h4 style="text-align: center;">Deze pagina heb ik gemaakt als een soortvan 'Fan-page' omdat ik het erg leuk vindt en ik wou iets waardoor ik 1 pagina moest transleren naar het Nederlands en hier is het eindresultaat waar ik ergn blij mee ben! <br></h4>
    <h4 style="text-align: center;"></h4>
<h2 style="text-align: center;">Pagina Foto's</h2>
<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img style="object-fit: cover; width: 100%;" class="image" src="project-img/inapage/Screenshot 2023-10-03 101016.png" alt="page 1">
            </div>
            <div class="col-sm-6">
                <img class="image" style="width: 100%; height:100%;" src="project-img/inapage/Screenshot 2023-10-03 101030.png" alt="page 2">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <img class="image" style="width: 100%; height:100%;" src="project-img/inapage/Screenshot 2023-10-03 101104.png" alt="page 3">
            </div>
        </div>
    </div>
    </main>
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
