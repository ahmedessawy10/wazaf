<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #1e3c72, #2a5298); }
        .sidebar .nav-link { padding: 12px 15px; border-radius: 8px; transition: all 0.3s ease; }
        .sidebar .nav-link:hover { background-color: rgba(255, 255, 255, 0.15); transform: translateX(8px); }
        .card { border: none; border-radius: 12px; padding: 1.5rem !important; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1); }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 text-white sidebar">
                <h2 class="mb-4"><i class="fas fa-tachometer-alt"></i> Dashboard</h2>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link text-white" href="#" data-target="overview"><i class="fas fa-home"></i> Overview</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#" data-target="applied-jobs"><i class="fas fa-briefcase"></i> Applied Jobs</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#" data-target="favorite-jobs"><i class="fas fa-heart"></i> Favourite Jobs</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#" data-target="settings"><i class="fas fa-cog"></i> Settings</a></li>
                </ul>
            </div>

            <div class="col-md-9 col-lg-10 main-content">
                <div id="overview" class="content-section active">
                    <h1 class="mb-4">Hello, Candidate</h1>
                    <div class="row mb-4">
                        <div class="col-md-3"><div class="card card-hover"><h3>100</h3><p>Jobs Applied</p></div></div>
                        <div class="col-md-3"><div class="card card-hover"><h3>5</h3><p>Favourite Jobs</p></div></div>
                    </div>
                </div>

                <div id="applied-jobs" class="content-section">
                    <h2 class="mb-4">Applied Jobs</h2>
                    <table class="table table-hover shadow-sm">
                        <thead><tr><th>Job</th><th>Date Applied</th><th>Status</th><th>Action</th></tr></thead>
                        <tbody>
                            <tr><td>Java Developer</td><td>2024-03-01</td><td><span class="text-success">Active</span></td><td><a href="#" class="text-primary">View</a></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.querySelectorAll('.sidebar .nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                document.querySelectorAll('.content-section').forEach(section => section.classList.remove('active'));
                document.getElementById(e.target.getAttribute('data-target')).classList.add('active');
            });
        });
    </script>
</body>
</html>
