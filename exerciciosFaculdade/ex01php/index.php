<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tabela Disciplina</title>
</head>
<body>
    <?php 
        echo '
            <div class="table-responsive d-flex justify-content-center align-items-center">
                <table class="table table-striped table-bordered" style="width: 50%; ">
                        <thead>
                            <tr style="background-color: blue; color: black;">
                                <th scope="col" style="width: 300px;"><b>Instrumento</b></th>
                                <th scope="col" style="width: 300px;"><b>Valor</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trabalho Oficial 1</td>
                                <td>4</td>
                            </tr>
                            <tr>
                                <td>Exercícios e Participação 1</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>Avaliação Oficial Teórica 1</td>
                                <td>5</td>
                            </tr>
                        </tbody>
                </table>
            </div>
        ';
    ?>
</body>
</html>