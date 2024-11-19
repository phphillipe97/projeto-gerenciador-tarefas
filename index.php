<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Gerenciador de Tarefas</title>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Gerenciador de Tarefas</h1>
    </div>
    <div class="form">
        <form action="task_name" class="get">
            <label for="task_name">Tarefa:</label>
            <input type="text" name= "task_name" placeholder= "Nome da Tarefa">
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    <div class="separator">
    </div>
    <div class="list-tasks">
        <ul>
            <li>Tarefa 1</li>
            <li>Tarefa 2</li>
            <li>Tarefa 3</li>
        </ul>
    </div>
    <div class="footer">
        <p>Desenvolvido por Phillipe Borges</p>
    </div>
</div>
    
</body>
</html>