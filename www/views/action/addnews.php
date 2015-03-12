<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавить новость</title>
</head>
<body>
<div>
    <h1>Добавление новости</h1>
    <form action="/action/addnews" method="post">

            <label for="title">Заголовок</label><br>
            <input type="text" name="title" id="title"/><br>
            <label for="description">Описание</label><br>
            <textarea name="text" id="text"></textarea><br>
            <input type="submit" value="Добавить"/><br>
    </form>
</div>
</body>
</html>