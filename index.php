<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <head><link rel="icon" href="img/GMR.jpg" type="image/x-icon"></head>
    <link rel="stylesheet" href="output.css">
    <title>My Web</title>

    <!-- Bootstrap CSS (version 5) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- jQuery and Bootstrap JS (version 5) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
<?php include 'header.php'; ?>
    <!-- Navigation Bar -->
    <!-- Replace this with your actual navigation bar or header content -->
    <header>
        <!-- Navigation bar content goes here -->
    </header>
    
    <header style="background-image: url('https://picsum.photos/id/130/600/400'); background-size: cover; height: 400px; display: flex; justify-content: center; align-items: center; flex-direction: column;">
    <h1 class="text-lime-300npx gvi tailwindcssxl ">Rick Hogenhout</h1> <br>
    <h3 style="margin: 0; color: black;">MY PORTFOLIO</h3> <br>
    <!-- "Contact me!" button with a link to the Contact section -->
    <button style="background-color: transparent;"><a href="#contact" style="color: black; text-decoration: none;">Contact me!</a></button>
</header>
    <main>
        <!-- About me section -->
        <h1 class="text-center">About me</h1>
        <!-- Skills section -->
        <form class="text-center">
            <h1 class="text-center">Skills</h1>
            <div class="form-row">
                <div class="form-group col-md-6 mx-auto">
                    <div class="card text-center" style="background-color: black;">
                        <div class="card-body">
                            <h3 class="card-title">Programming Languages:</h3>
                            <div class="card text-center">
                                <div class="card-body" style="background-color: black;">
                                    <a>HTML</a> <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br>
                                    <a>CSS</a> <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 70%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br>
                                    <a>JavaScript</a> <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 30%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> <br>
                                    <a>Bootstrap</a> <br>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <a>PHP</a>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 63%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!-- Contact section with an ID -->
        <h1 id="contact" class="text-center">Contact</h1>
        <div class="container">
            <!-- Your contact form and information here -->
            <div class="row">
                <div class="col-md-6">
                    <form action="send.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name" class="text-center">Bedrijf-Naam:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email" class="text-center">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="onderwerp" class="text-center">Onderwerp</label>
                            <input type="text" class="form-control" id="onderwerp" name="onderwerp" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage" class="text-center">Bericht:</label>
                            <textarea class="form-control" id="bericht" name="bericht" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="submit" value="Verstuur" class="btn btn-danger">Verstuur</button>
                    </form>
                </div>
                <div class="col-md-6" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
                    <!-- Phone icon and number -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    <br>
                    <a><i class="fas fa-phone"></i>06-24280423</a>
                    <br>

                    <!-- Email icon and address -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                    </svg>
                    <br>
                    <a><i class="fas fa-envelope"></i>3001rick@gmail.com</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Mwgh/5axf2W/xFrUsCqMKXw5Iw5O9xSSr0F2nG5S9Br6w6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
