<!-- $_SESSION['UTENTE]-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Chat...</title>
</head>
<body>
    <header>
        <h1>Chat!</h1>
        <p>Ehi, qui sotto c'è una persona che ti aspetta!</p>
    </header>

    <main>
    <center>
        <article>
            <h2>Scrivi qui sotto!</h2>
            <p>
                Elabora e simula una connessione client-server locale su tuo localhost
                <br>
                Passi:
                <br>
                    <ul>
                        <a> lancia server.php sul tuo cmd scrivendo il percoso del file</a>
                        <br>
                        <a> Avvia la conversazione tramite client.php e simul la connessione fra client e server</a>
                    </ul>
                <br>
                Connessione basata sui websocket.
                <br>
                IMPORTANTE: il valore della porta e dell'host variano in base ai prorpi server locali
            </p>
            <br>
            <form method="post">
                <table>
                    <tr>
                        <td>
                            <input type="text" name="textMessage">
                            <input type="submit" name="btn" value="Invia!">
                        </td>
                    </tr>
                    <?php
                        $host = "127.0.0.1";
                        $port = 12296; 

                        if(isset($_POST['btn'])){

                            $msg = $_REQUEST['textMessage'];
                            $sock = socket_create(AF_INET, SOCK_STREAM, 0);

                            socket_connect($sock, $host, $port);
                            socket_write($sock, $msg, strlen($msg));

                            $reply = socket_read($sock, 1924);
                            $reply = trim($reply);
                            $reply = "Server:\t".$reply;
                        }
                    ?>
                    <tr>
                        <td>
                            <textarea id="" cols="30" rows="10"><?php echo $reply; ?></textarea>
                        </td>
                    </tr>
                </table>
            </form>
        </article>
        </center>
    </main>

    <footer>
        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script>, Spicoli Piersilvio</p>
    </footer>
</body>
</html>