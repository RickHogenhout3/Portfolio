<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/GMR.jpg" type="image/x-icon">
    <title>My Web</title>

    <!-- Bootstrap CSS (version 5) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- jQuery and Bootstrap JS (version 5) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        .card-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .card-img-top {
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
    <h3 style="margin: 0; color: black;">MY PROJECTS</h3> <br>
</header>
    <main>
    <h2 class="text-center">Projects</h2>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="card" style="background-color:lightseagreen" >
        <img class="card-img-top" src="img/Julian-Soelaart.jpeg" alt="Card image cap" style="height: 400px;">
        <div class="card-body">
          <h5 class="card-title">jjs.digital</h5>
          <a style="color:aliceblue;" class="btn btn-secondary" href="project-pages/jjs-digital.php">Bekijk project</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="background-color:lightseagreen">
        <img class="card-img-top" src="img/bg_visual_pc.jpg" alt="Card image cap" style="height: 400px;">
        <div class="card-body">
          <h5 class="card-title">Inapage</h5>
          <a style="color:aliceblue;" class="btn btn-secondary" href="project-pages/inapage.php">Bekijk project</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card" style="background-color:lightseagreen">
        <img class="card-img-top" src="img/Captain-VR.jpeg" alt="Card image cap" style="height: 400px;">
        <div class="card-body">
          <h5 class="card-title">Captain VR</h5>
          <a style="color:aliceblue;" class="btn btn-secondary" href="project-pages/captain-vr.php">Bekijk project</a>
        </div>
      </div>
    </div>
  </div>
</div>
<h3 style="text-align: center;">Meer projecten komen als ze worden aangemaakt</h3>
    </main>
    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
