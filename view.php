<!doctype html>
<html lang="en">

<head>
    <title>Resume</title>
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

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        # code...
        $fname = $_POST['first_name'];
        $mname = $_POST['middle_name'];
        $surname = $_POST['surname'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $skill = implode(", ", $_POST['skill']);
        $ug = $_POST['ug'];
        $pg = $_POST['pg'];
        $language = implode(", ", $_POST['lang']);

        // echo "<pre>";
        // print_r($_POST);

        echo "<div class='container border border-light my-5 rounded-4 col-8'>
        <h1 class='text-center mt-3'><b><u>Resume</u></b></h1>
        <div class='container'><br><br>
        <h2 class='ms-5 '><b><i>" . $fname . "
         " . $surname . "</i></b></h2>
         <h3 class='ms-5'><b><i>" . $address . "</i></b></h3>
         </div><br><hr>
        <div class='container ms-5 my-3'>    
        <h5 class='ms-3 me-5'>Full Name &nbsp;&nbsp; : &nbsp;&nbsp; " . $fname . "&nbsp;&nbsp;" . $mname . "&nbsp;&nbsp;" . $surname . "</h5 class='ms-2 me-5'><br>
        <h5 class='ms-3 me-5'>Address &nbsp;&nbsp; : &nbsp;&nbsp; " . $address . "</h5><br>
        <h5 class='ms-3 me-5'>Mobile &nbsp;&nbsp; : &nbsp;&nbsp; " . $mobile . "</h5><br>
        <h5 class='ms-3 me-5'>Email &nbsp;&nbsp; : &nbsp;&nbsp; " . $email . "</h5><br>
        <h5 class='ms-3 me-5'>Skill &nbsp;&nbsp; : &nbsp;&nbsp; " . $skill . "</h5><br>
        <h5 class='ms-3 me-5'>Education &nbsp;&nbsp; : &nbsp;&nbsp; " . $ug . "</h5><br>
        <h5 class='ms-3 me-5'>Education &nbsp;&nbsp; : &nbsp;&nbsp; " . $pg . "</h5><br>
        <h5 class='ms-3 me-5'>Languages &nbsp;&nbsp; : &nbsp;&nbsp; " . $language . "</h5><br>
        </div>
        </div>";
    }

    ?>

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