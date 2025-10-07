<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ejercicio propina</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container mt-5">
        <div class="card shadow p-4 mx-auto" style="max-width: 500px;">
            <h3 class="text-center mb-7 text-danger">calculadora de propina</h3>
            <form id="formPropina">
                <div class="mb-2">
                    <label for="monto" class="form-label">total de la cuenta</label>
                    <input type="number" step="0.1" min="0" class="form-control" id="monto" required>
                </div>
                <div class="mb-2">
                    <label for="porcentaje" class="form-label">porcentaje de propina</label>
                    <input type="number" step="1" min="0" class="form-control" id="porcentaje" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">calcular</button>
            </form>
            <div id="resultado" class="alert alert-info mt-3 text-center"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>