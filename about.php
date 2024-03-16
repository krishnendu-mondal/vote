<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://www.pngrepo.com/download/7938/vote.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Vote | about</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Nunito;
        }

        p {
            color: teal;
            font-size: 1.2em;
        }

        body {
            height: 100vh;
            background-image: linear-gradient(0deg, lightseagreen -150%, white 100%);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container-fluid{
            padding-right: 1rem;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="--bs-bg-opacity: 0;">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><b><img src="https://www.pngrepo.com/download/7938/vote.png"
                        style="height: 22px;">&nbsp;&nbsp;Vote</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container h-75 w-75 d-flex p-auto align-items-center">
        <p>This project is developed to address the problem with traditional voting system. All the process of voting
            remains exactly the same but now voters can cast their vote from anywhere, through loging in to their
            account with their
            credentials.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>