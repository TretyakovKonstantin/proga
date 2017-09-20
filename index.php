<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №1</title>
    <script type="text/javascript" src="checkBoundaries.js"></script>
    <link rel="SHORTCUT ICON" href="/shovel.png" type="image/png">
    <style type="text/css">
        html, body {
            background-color: #FFC273;
            height: 100%;
        }

        .submit {
            margin: 10px;
        }

        .element {
            margin: 30px;
        }

        .header {
            font: 20pt fantasy;
            color: #0b0147;
            font-family: monospace;
            background-color:#FFED40;
        }

        .footer {
            background-color:#FFED40;
            height: 50px;
        }

        .table1 {
            border: 0;
            width: 100%;
            background-color: #faf2ac;
        }

        .table2 {
            border: 1px solid gray;
            width: 50%;
        }

        .table1 > tr, td {
            border: 1px solid gray;
        }

        .x-button {
            display: inline-block;
            margin: 5px;
            padding: 8px 15px;
            color: #ffffff;
            background: #009fe3;
            border: 1px solid rgba(0, 0, 0, 0.15);
            border-radius: 20px;
            transition: all 0.3s ease-out;
            /* Font styles */
            text-decoration: none;
            text-shadow: 0 1px rgba(255, 255, 255, 0.7);
        }

        .x-button:hover {
            background: #0075e3
        }

        .x-button:active {
            background: #0008e3
        }

        *::selection {
            background: #FE00CF;
            color: #4CAF50
        }
    </style>
</head>
<body>
<table class="table1" cellpadding="0" cellspacing="0">
    <tbody>
    <tr class="header" align="center">
        <td colspan=2 class="td">
            Выполнили студенты группы P3201 Третьяков Константин и&nbsp;Закусило Виталий.
            <br>
            Вариант №&nbsp;204.
        </td>
    </tr>
    <tr class=table2>
        <td class="area" width="40%" align="center" valign="top">
            <img src="areas.png" alt="Изображение области">
        </td>
        <td class="manipulation" width="60%" align="center" valign="top">
            <form method="post" name="parameters" onsubmit="return validateForm(this)" action="checker.php">
                <div class="element">
                    <label id="r-group">
                        R =
                        <input class="radio" type="radio" name="r" value="1" checked="true">1
                        <input class="radio" type="radio" name="r" value="1.5">1.5
                        <input class="radio" type="radio" name="r" value="2">2
                        <input class="radio" type="radio" name="r" value="2.5">2.5
                        <input class="radio" type="radio" name="r" value="3">3
                    </label>
                </div>
                <div class="element">
                    <label for="x-group">
                        X =
                        <button type="button" class="x-button" value="-3">-3</button>
                        <button type="button" class="x-button" value="-2">-2</button>
                        <button type="button" class="x-button" value="-1">-1</button>
                        <button type="button" class="x-button active" value="0">0</button>
                        <button type="button" class="x-button" value="1">1</button>
                        <button type="button" class="x-button" value="2">2</button>
                        <button type="button" class="x-button" value="3">3</button>
                        <button type="button" class="x-button" value="4">4</button>
                        <button type="button" class="x-button" value="5">5</button>
                        <input type="number" name="x" hidden="true" value="0"/>
                    </label>
                </div>
                <div id="y-group" class="element">
                    <label for="y">
                        Y =
                    </label>
                    <input type="text" name="y" id="y" placeholder="-5 … 3">
                </div>
                <input id="submit" type="submit" class="submit" value="Проверить">
            </form>
        </td>

    </tr>

    <tr class="footer" align="center" >
        <td colspan=2 class="td">
            ©Третьяков Константин, Закусило Виталий
            <br>
        </td>
    </tr>

    </tbody>
</table>
</body>
</html>