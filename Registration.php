<!doctype html>
<html lang="en">

<head>
    <title>Resume Creator</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        /* box-sizing: border-box; */
        text-decoration: none;
        border: none;
        outline: none;
        scroll-behavior: smooth;
        /* font-family: 'Nunito', sans-serif; */
    }

    :root {
        --bg-color: #0f0f0f;
        --snd-bf-color: #303030;
        --text-color: #cccccc;
        --main-color: #Fe8040;
    }

    body {
        background: var(--bg-color);
        color: var(--text-color);
    }
</style>

<body>
    <div class="container mt-3">
        <h1 class="text-center">Resume Builder</h1>
        <div class="border border-secondary rounded-4">
            <div class="container col-11">
                <form action="view.php" method="POST">
                    <div class="mb-3 row mt-3">
                        <div class="col-4">
                            <label for="" class="form-label col-3">First Name</label>
                            <input type="text" name="first_name" id="fname" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Middle Name</label>
                            <input type="text" name="middle_name" id="mname" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                        <div class="col-4">
                            <label for="" class="form-label">Surname</label>
                            <input type="text" name="surname" id="surname" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="mb-3 row mt-3">
                        <div class="col-6">
                            <label for="" class="form-label col-3">Address</label>
                            <input type="text" name="address" id="address" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label">Mobile</label>
                            <input type="text" maxlength="10" pattern="[0-9]+" name="mobile" id="mobile" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col-6">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control border border-secondary" placeholder="" aria-describedby="helpId" />
                        </div>
                        <div class="col-6">
                            <div class="mb col">
                                <label for="skill" class="form-label">Skills</label>
                                <div class="check">

                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="HTML" id="" />
                                    <label class="form-check-label" for=""> HTML </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="CSS" id="" />
                                    <label class="form-check-label" for=""> CSS </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="JavaScript" id="" />
                                    <label class="form-check-label" for=""> JavaScript </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="PHP" id="" />
                                    <label class="form-check-label" for=""> PHP </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="Python" id="" />
                                    <label class="form-check-label" for=""> Python </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="skill[]" value="jQuery" id="" />
                                    <label class="form-check-label" for=""> jQuery </label>&nbsp;&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="mb-3 row mt-3">
                        <label for="" class="form-label ">
                            <h5><b>Education</b></h5>
                        </label>
                        <div class="col-6">
                            <label for="" class="form-label  col-3">Under Graduation</label>
                            <select class="form-select border border-primary" name="ug" value="select" id="">
                                <option value="select" selected>select one</option>
                                <option value="B.A">B.A.</option>
                                <option value="B.Com">B.Com.</option>
                                <option value="B.C.A">B.C.A.</option>
                                <option value="B.Sc">B.Sc.</option>
                                <option value="B.S.W.">B.S.W.</option>
                                <option value="B.R.S.">B.R.S.</option>
                                <option value="B.LI.S.">B.LI.S.</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="" class="form-label  col-3">Post Graduation</label>
                            <select class="form-select border border-primary" name="pg" value="select" id="">
                                <option value="select" selected>select one</option>
                                <option value="M.A.">M.A.</option>
                                <option value="M.Com">M.Com.</option>
                                <option value="M.C.A">M.C.A.</option>
                                <option value="M.Sc.">M.Sc.</option>
                                <option value="M.S.W.">M.S.W.</option>
                                <option value="M.R.S.">M.R.S.</option>
                                <option value="M.LI.S.">M.LI.S.</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row mt-3">
                        <div class="col-6">
                            <label for="lang" class="form-label col-3">Language</label>
                            <div class="mb col">
                                <div class="check">
                                    <input class="form-check-input col-3" type="checkbox" name="lang[]" value="English" id="" />
                                    <label class="form-check-label" for=""> English </label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="lang[]" value="Hindi" id="" />
                                    <label class="form-check-label" for=""> Hindi</label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="lang[]" value="Gujarati" id="" />
                                    <label class="form-check-label" for="">Gujarati</label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="lang[]" value="Marathi" id="" />
                                    <label class="form-check-label" for="">Marathi</label>&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input col-3" type="checkbox" name="lang[]" value="Tamil" id="" />
                                    <label class="form-check-label" for="">Tamil</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 mt-3">
                        <div class="col">
                            <button type="submit" name="submit" class="btn btn-primary my-3 sm">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>