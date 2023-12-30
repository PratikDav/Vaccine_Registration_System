<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container">
            <div class="card mt-3">
                <div class="card-body">
                    <div class="text-center card-title fw-bold">
                        (Covid-19 Vaccination Card)
                    </div>
                </div>
                <div class=" row mt-3 text-center mb-3">

                    <div class="col-md-6">
                        <span class="fw-bold">Registration Number:</span> <span class="border-2 border-bottom">{{ $reg
                            }}</span>

                    </div>
                    <div class="col-md-6">
                        <span class="fw-bold">Card Issue Date:</span> <span class="border-2 border-bottom">{{ $issueDate
                            }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">National ID Card Number:</span> <span class="border-2 border-bottom">{{
                            $nid }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Name:</span> <span class="border-2 border-bottom">{{ $name }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Date of Birth:</span> <span class="border-2 border-bottom">{{ $dob
                            }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Age:</span> <span class="border-2 border-bottom">{{ $age }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Mother's Nmae:</span> <span class="border-2 border-bottom">{{ $mother_name
                            }}</span>
                    </div>
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Father's Name:</span> <span class="border-2 border-bottom">{{ $father_name
                            }}</span>
                    </div>
                </div>
                <div class="text-center card-title fw-bold">
                    (Volunter Details)
                </div>
                <div class=" row mt-3 text-center mb-3">
                    <div class="col-md-6 mt-2">
                        <span class="fw-bold">Father's Name:</span> <span class="border-2 border-bottom">{{ $father_name
                            }}</span>
                    </div>
                </div>


            </div>

        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
