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
    <nav class="navbar bg-primary fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="{{url("/heart-attack/input")}}"><img src="{{asset('assets/image/logo.png')}}" alt="logo" width="30" height="24" class="me-2">iHeart</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url("/heart-attack/input")}}">Heart Attack</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url("/stroke/input")}}">Stroke</a>
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
                    <form id="heartForm" >
                        <legend>Heart Patient Data</legend>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">person</span></div>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">cake</span></div>
                                <input type="number" class="form-control" name="age" id="age">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="sex" class="form-label">Sex</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="sex" id="male" value="1" checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="female" value="0">
                                    <label class="form-check-label" for="female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="cp" class="form-label">Chest Pain Type</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">vital_signs</span></div>
                                <select class="form-select" name="cp" id="cp">
                                    <option value="0">Typical Angina</option>
                                    <option value="1">Atypical Angina</option>
                                    <option value="2">Non-anginal Pain</option>
                                    <option value="3">Asymptomatic</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="trtbps" class="form-label">Resting Blood Pressure</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">hematology</span></div>
                                <input type="number" class="form-control" name="trtbps" id="trtbps">
                                <div class="input-group-text">mm Hg</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="chol" class="form-label">Cholesterol</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">body_fat</span></div>
                                <input type="number" class="form-control" name="chol" id="chol">
                                <div class="input-group-text">mg/dl</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="fbs" class="form-label">Fasting Blood Sugar > 120mg/dl</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="fbs" id="no" value="0" checked>
                                    <label class="form-check-label" for="no">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="fbs" id="yes" value="1">
                                    <label class="form-check-label" for="yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="restecg" class="form-label">Resting Electrocardiographic Results</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">monitor_heart</span></div>
                                <select class="form-select" name="restecg" id="restecg">
                                    <option value="0">Normal</option>
                                    <option value="1">Having ST-T wave abnormality (T wave inversions and/or ST elevation or depression of > 0.05 mV)</option>
                                    <option value="2">Showing probable or definite left ventricular hypertrophy by Estes' criteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="thalachh" class="form-label">Maximum Heart Rate Achieved</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">monitor_heart</span></div>
                                <input type="number" class="form-control" name="thalachh" id="thalachh">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exng" class="form-label">Exercise Induced Angina</label>
                            <div class="d-flex">
                                <div class="form-check me-3">
                                    <input class="form-check-input" type="radio" name="exng" id="no" value="0" checked>
                                    <label class="form-check-label" for="no">
                                        No
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exng" id="yes" value="1">
                                    <label class="form-check-label" for="yes">
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="oldpeak" class="form-label">ST Depression Induced by Exercise Relative to Rest</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">diagnosis</span></div>
                                <input type="number" class="form-control" name="oldpeak" id="oldpeak">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="slp" class="form-label">Slope of the Peak Exercise ST Segment</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">diagnosis</span></div>
                                <select class="form-select" name="slp" id="slp">
                                    <option value="0">Unsloping</option>
                                    <option value="1">Flat</option>
                                    <option value="2">Downsloping</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="caa" class="form-label">Number of Major Vessels</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">hematology</span></div>
                                <input type="number" class="form-control" name="caa" id="caa">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="thall" class="form-label">Thalassemia</label>
                            <div class="input-group">
                                <div class="input-group-text"><span class="material-symbols-outlined">bloodtype</span></div>
                                <select class="form-select" name="thall" id="thall">
                                    <option value="0">None</option>
                                    <option value="1">Fixed defect</option>
                                    <option value="2">Normal</option>
                                    <option value="3">Reversable Defect</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" id="btn_submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#safeModal">Submit</button>
                    </form>
                    
    <script defer>
        document.getElementById('btn_submit').onclick = async (e) => {
            e.preventDefault();
            
            const formData = new FormData(document.querySelector("#heartForm"))
            var image = document.getElementById("modal_image")

            const obj = Object.fromEntries(formData)
            let adaKosong = false;
            for (const key in obj) {
                if (obj[key] === "") {
                    adaKosong = true;
                }
            }
            console.log(obj);

            if (adaKosong) {
                document.getElementById('result_text').textContent = 
                `Isi Semua Field`
                return;
            }

            const res = await fetch("https://deep-learning-371908.et.r.appspot.com/heart", {
                method: "POST",
                body: formData
            })
            const json = await res.json();

            if (json.predicted == 0) {
                image.src = "{{asset('assets/image/safe.png')}}"
            };
            document.getElementById('result_text').textContent = 
            `${json.predicted == 1 ? "Pasien BERPOTENSI TINGGI " : "Pasien BERPOTENSI RENDAH "} terkena serangan jantung.`
            document.getElementById('result_conf').textContent = 
            `Confidence score: ${json.confidence}`
        }
    </script>

                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <div class="modal fade" id="safeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Prediction Result</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modal_image" src="{{asset('assets/image/danger.png')}}" width="130px"><br><br>
                <p id="result_text"></p>
                <p id="result_conf"></p>
            </div>
            <div class="modal-footer text-center">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">Understood</button>
            </div>
          </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,186.7C672,192,768,224,864,208C960,192,1056,128,1152,106.7C1248,85,1344,107,1392,117.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>