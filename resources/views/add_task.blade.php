<?php 

    if($_SERVER["REQUEST_METHOD"] == "GET") {
        DB::insert("insert into task (task, comment, conclusion_date, add_date, check) values (?, ?, ?, ?, ?)", [$_GET["task"], $_GET["comment"], $_GET["conclusion_date"], date_timestamp_get(), false]);
}
?>

<html>
    <head></head>
    <body>
        <form method="get">
            <table>
                <tr>
                   <th>Tarefa:</th>
                   <td><input type="text" name="task"/></td>
                </tr>
                <tr>
                   <th>Data de Conclusão:</th>
                   <td><input type="datetime" name="conclusion_date"/></td>
                </tr>
                <tr>
                   <th>Observação:</th>
                   <td><input type="text" name="comment"/></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Salvar"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>