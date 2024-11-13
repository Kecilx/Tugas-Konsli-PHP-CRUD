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
              <a href="Home.php" class="nav-link active bg-light text-dark" aria-current="page">
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
              <a href="Master Service.php" class="nav-link text-white">
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
        
        <div class="col-md-10 text-dark overflow-auto" style="height:100vh; background-color: burlywood;">
          <div class="row g-0 mt-3 ps-5">
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header  text-center"><h1>Review</h1></div>
                  <div class="card-body">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No.</th>
                          <th scope="col">Username</th>
                          <th scope="col">Comment</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1.</th>
                          <td>@abcdefriza123</td>
                          <td>Game sekiro bagus banget, Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, culpa tempore nihil autem asperiores esse.</td>
                          <td>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2.</th>
                          <td>@Clover</td>
                          <td>Info Mabar valorant, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum aperiam nihil autem mollitia ex nulla!</td>
                          <td>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal"data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                        
                        <tr>
                          <th scope="row">3.</th>
                          <td>@lanaDelSlay</td>
                          <td>Wuih elden ring nya bagus banget,Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ipsa suscipit delectus veritatis, ea saepe.</td>
                          <td>
                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#detailproject"><i class="bi bi-eye"></i></button>
                            <a href="" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#detailproject2"><i class="bi bi-pencil-square"></i></a>
                            <a href="" class="btn btn-sm btn-danger mt-1" data-bs-toggle="modal"data-bs-target="#hapus"><i class="bi bi-trash"></i></a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="modal modal-fade" tabindex="-1" id="detailproject">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Info</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Halo Teman - Teman</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Done</button>
                          </div>
                        </div>
                      </div>
                </div>
                    <div class="modal fade" id="detailproject2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Message</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-footer">
                            <input type="text" class="form-control bg-light" id="" aria-describedby="">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success">Save changes</button>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">You sure want to delete this Message?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <button type="button" class="btn btn-danger ">Delete</button>
                        </div>
                      </div>
                    </div>
                </div>
                  </div>
                </div>
                </div>
              <div class="col-md-4">
                <div class="forms"></div>
                  <form class="col-md-11">
                    <div class="mb-3 ms-3">
                      <div class="card shadow">
                        <div class="card-header"><h4>Forms</h4></div>
                        <div class="card-body">
                          <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                          <input type="email" class="form-control bg-light" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                          <label for="exampleInputEmail1" class="form-label fw-bold mt-1">Password</label>
                          <input type="password" class="form-control bg-light" id="exampleInputPassword1" aria-describedby="PasswordHelp" required>
                        </div>
                        <div class="mb-3">
                          <button type="submit" class="btn btn-primary ms-3">Login</button>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>