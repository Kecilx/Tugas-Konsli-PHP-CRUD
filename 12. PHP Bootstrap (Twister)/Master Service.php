<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="row g-0">
        <div class="col-md-2 d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="height: 100vh;">
          <a href="" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <i class="bi bi-twitter-x fs-2"></i><span class="fw-bold fs-3 ms-3">Twister</span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="Home.php" class="nav-link text-white" aria-current="page">
                <i class="bi bi-houses me-2 fs-5"></i>
                Home
              </a>
            </li> 
            <li>
              <a href="Master Project.php" class="nav-link text-white">
                <i class="bi bi-folder me-2 fs-5"></i>
                Master Project
              </a>
            </li>
            <li>
              <a href="Master Service.php" class="nav-link active bg-light text-dark">
                <i class="bi bi-tools me-2 fs-5"></i>
                Master Service
              </a>
            </li>
          </ul>
          <hr>
          <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="Roblox Thumb/Profil1.jpg" alt="" width="32" height="32" class="rounded-circle me-2">
              <strong>Nabil Ahmad F</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li><a class="dropdown-item" href="#">Switch Account</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
          </div>
        </div>
  
  <main class="col-md-10 vh-100 overflow-auto flex-grow-1 pe-3" style="background-color: burlywood;">
    <h1 class="my-4 ms-4 text-center">Service Manager</h1>

    <noscript>
        <h2 class="text-danger fw-bold">This page will not work properly without JavaScript enabled.</h2>
    </noscript>

    <div class="row row-gap-2 column-gap-3 flex-xl-nowrap mx-2">
        <div class="card flex-grow-10 g-0 ms-2" style="flex-basis: 0; min-width: 50ch;">
            <div class="card-header d-flex justify-content-between">
                <h4 class="mt-2">Services List</h4>
                <button class="btn btn-success" id="new-service">New service</button>
            </div>
            <div class="card-body position-relative p-0 p-lg-3">
                <div class="w-100 overflow-auto">
                    <table class="table" id="services-table">
                        <tr>
                            <td>Konsli...</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="card flex-grow-1 g-0" style="flex-basis: fit-content;">
            <div class="card-header">
                <h4 class="mt-2" id="service-form-title">Add Service</h4>
            </div>
            <div class="card-body">
                <form id="service-form">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Service Name</label>
                        <input type="text" placeholder="My New Service" class="form-control" name="name" id="inputName" minlength="5" maxlength="255" required>
                    </div>
                    <input type="hidden" id="service-form-index" name="index">
                    <div class="mb-3">
                        <label for="inputDesc" class="form-label">Release Date</label>
                        <input type="date" class="form-control" name="releaseDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputDesc" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="inputDesc" rows="3" maxlength="255"></textarea>
                    </div>
                    <input type="hidden" name="status" value="Up">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>