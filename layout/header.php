<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
     <div class="container">
         <a href="http://localhost/Intro/dist/php/sampleSystem/index.php" class="navbar-brand">Sample System</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarItems" aria-controls="navbarItems" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarItems">
            <!-- menu items -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/file_upload.php/" class="nav-link">File upload form</a>
                </li>
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/picture_form.php/" class="nav-link">Picture upload form</a>
                </li>
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/gallery.php/" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Calculator
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/users.php">USERS</a></li>
                        <li><a class="dropdown-item" href="http://192.168.64.2/Intro/dist/php/sampleSystem/converter.php">Converter</a></li>
                        
                    </ul>
                </li>
            </ul>
            </div>
            <div class="collapse navbar-collapse" id="">    
            <!-- authentication links -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/views/register.php" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="http://192.168.64.2/Intro/dist/php/sampleSystem/scripts/logout.php" class="nav-link">Log out</a>
                </li>
            </ul>
        </div>
    </nav>