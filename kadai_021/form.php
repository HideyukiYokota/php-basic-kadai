<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>課題‗021</title>
</head>

<body>
    <p>個人情報入力フォーム</p>
    <form action="confirmation.php" method="post">
        <table>
            <tr>
                <td>
                    お名前:
                </td>
                <td>
                    <input type="text" name="user_name">
                </td>
            </tr>
            <tr>
                <td>
                    性別:
                </td>
                <td>
                    <input type="radio" name="gender" value="男性">男性
                    <input type="radio" name="gender" value="女性">女性
                </td>

            </tr>
            <tr>
                <td>
                    メールアドレス:
                     </td>
                <td>
                <input type="text" name="address">
                </td>

            </tr>

        </table>
        <input type="submit" value="送信">

    </form>

</body>

</html>