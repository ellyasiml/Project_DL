<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iHeart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.html"><img src="{{asset('assets/image/logo.png')}}" alt="logo" width="30" height="24" class="me-2">iHeart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url("/heart-attack/input")}}">Heart Attack</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{url("/stroke/input")}}">Stroke</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,122.7C96,149,192,203,288,202.7C384,203,480,149,576,133.3C672,117,768,139,864,154.7C960,171,1056,181,1152,176C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <div class="container-fluid bg-white">
        <div class="row">
            <div class="col-2"></div>
            <div class="col">
                <div class="shadow p-3 m-5 bg-body rounded">
                    <form>
                        <legend>Stroke Patient Data</legend>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">person</span></div>
                                <input type="number" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">cake</span></div>
                                <input type="number" class="form-control" id="age">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sex" class="form-label">Sex</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="male" value="1" checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="female" value="0">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="hypertension">
                                        <label class="form-check-label" for="hypertension">Hypertension</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="heart_disease">
                                        <label class="form-check-label" for="heart_disease">Heart Disease</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="married">
                                        <label class="form-check-label" for="married">Has the patient ever been married?</label>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="work_type" class="form-label">Work Type</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">work</span></div>
                                <select class="form-select" id="work_type">
                                    <option value="Private">Private</option>
                                    <option value="Self-employed">Self-employed</option>
                                    <option value="Govt_job">Government Job</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="residence_type" class="form-label">Residence Type</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="residence_type" id="urban" value="Urban" checked>
                                    <label class="form-check-label" for="urban">
                                        Urban
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="residence_type" id="rural" value="Rural">
                                    <label class="form-check-label" for="rural">
                                        Rural
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="avg_glucose_level" class="form-label">Average Glucose Level</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">glucose</span></div>
                                <input type="number" class="form-control" id="avg_glucose_level">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="bmi" class="form-label">BMI</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">scale</span></div>
                                <input type="number" class="form-control" id="bmi">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,186.7C672,192,768,224,864,208C960,192,1056,128,1152,106.7C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
</body>
</html>