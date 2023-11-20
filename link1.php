<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            margin: 0;
        }

        .container {
            width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        form {
            text-align: left;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            height: 40px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Form Pembelian Buku</h1>
    <div class="container">
        <form method="post" action="link2.php">
            <label for="nama_pembeli">Nama Pembeli:</label>
            <input type="text" name="nama_pembeli" id="nama_pembeli" required>

            <label for="kode_buku">Kode Buku:</label>
            <select name="kode_buku" id="kode_buku" required>
                <option value="B0001">B0001</option>
                <option value="B0002">B0002</option>
                <option value="B0003">B0003</option>
            </select>

            <label for="jumlah_beli">Jumlah Beli:</label>
            <input type="number" name="jumlah_beli" id="jumlah_beli" required>

            <div class="center">
                <input type="submit" name="submit" value="Save">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
</body>
</html>
