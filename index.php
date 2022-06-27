<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="http://khotel.com.br/wp-content/uploads/2019/03/logo_khotel.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <title>Hotel</title>
</head>

<body>
    <div class="container col-6">
        <h1>Hotel dos cria</h1>
        <form action="models/suite-class.php" method="POST">
            <h4>Registro: </h4>
            <div class="mb-3">
                <label for="name1" class="form-label col-12">Nome: </label>
                <input id="name1" name="name" type="text" class="form-label col-8" placeholder="Type your name:">
            </div>
            <div class="mb-3">
                <label for="phone1" class="form-label col-12">Telefone</label>
                <input id="phone1" name="phone" type="number" class="form-label col-8" placeholder="Type your Telephone: ">
            </div>
            <div class="mb-3">
                <label for="rg1" class="form-label col-12">RG: </label>
                <input id="rg1" name="rg" type="number" class="form-label col-8" placeholder="Type your RG: ">
            </div>
            <div class="mb-3">
                <label for="email1" class="form-label col-12">Email: </label>
                <input id="email1" name="email" type="email" class="form-label col-8" placeholder="Type your email: ">
            </div>
            <div class="mb-3">
                <label for="days1" class="form-label col-12">Diárias: </label>
                <input id="days1" name="diarias" type="number" class="form-label col-8" placeholder="Number of Dailys: ">
            </div>
            <div class="mb-3">
                <label for="sel1" class="form-label">Suíte:</label>
                <select id="sel1" class="form-select col-8" aria-label="Default select example" name="suite">
                    <option value="">Choose your Suite</option>
                    <option value="Suíte Double Master">Suíte Double Master</option>
                    <option value="Suíte Família">Suíte Family</option>
                    <option value="Suíte Single">Suíte Single</option>
                </select>
            </div>


            <button type="submit" class="btn btn-success" id="button">Finish</button>
            <button type="reset" class="btn btn-danger" id="button">Clear</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>