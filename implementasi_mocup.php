<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Mocup (Test LSP)</title>
    <style>
        html,
        body,
        h2,
        :root {
            margin: 0;
            padding: 0;
        }

        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Calibri, sans-serif;
            flex-direction: column;
        }

        .message {
            margin-bottom: 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        .container {
            padding: 20px 50px;
            border: 1px solid #000;
        }

        .container h2 {
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .container .row {
            display: flex;
            flex-direction: row;
            margin-bottom: 30px;
        }

        .container .row div {
            display: flex;
            flex-direction: row;
            flex: 1;
            padding: 0px 10px;
        }

        .container .row div:first-child {
            justify-content: space-between;
        }

        .container input,
        .container select {
            width: 100%;
            border: 2px solid #000;
        }

        .footer {
            display: flex;
            justify-content: center;
        }

        .footer button {
            margin: 0px 10px;
        }
    </style>
</head>

<body>
    <div class="message">
        <?php echo "Selamat mengikuti Uji Kompetensi pada Skema Junior Web Programmer"; ?>
    </div>
    <div class="container">
        <h2>Input Biodata</h2>
        <form action="your_action_page.php" method="post">
            <div class="row">
                <div>
                    <span>NIK</span>
                    <span>:</span>
                </div>
                <div><input type="text" name="nik"></div>
            </div>
            <div class="row">
                <div>
                    <span>Nama</span>
                    <span>:</span>
                </div>
                <div><input type="text" name="nama"></div>
            </div>
            <div class="row">
                <div>
                    <span>Tempat Lahir</span>
                    <span>:</span>
                </div>
                <div><input type="text" name="tempat_lahir"></div>
            </div>
            <div class="row">
                <div>
                    <span>Tanggal Lahir</span>
                    <span>:</span>
                </div>
                <div><input type="date" name="tanggal_lahir"></div>
            </div>
            <div class="row">
                <div>
                    <span>Jenis Kelamin</span>
                    <span>:</span>
                </div>
                <div><input type="text" name="jenis_kelamin"></div>
            </div>
            <div class="row">
                <div>
                    <span>Alamat</span>
                    <span>:</span>
                </div>
                <div><input type="text" name="alamat"></div>
            </div>
            <div class="row">
                <div>
                    <span>Agama</span>
                    <span>:</span>
                </div>
                <div>
                    <select name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Kristen">Kristen</option>
                    </select>
                </div>
            </div>
            <div class="footer">
                <button type="submit">Send</button>
                <button type="reset">Cancel</button>
            </div>
        </form>
    </div>
</body>

</html>
