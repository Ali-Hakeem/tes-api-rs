<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tes API RS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar-brand span {
            font-weight: bold;
        }
        .version-badge {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            padding: 2px 8px;
            font-size: 0.8rem;
        }
        .content {
            padding: 20px;
        }
        .content h1 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .content h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .content p {
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        .content .secondary-text {
            color: #6c757d;
        }
        .content pre {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            overflow: auto;
        }
        .content code {
            color: #d63384;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        .content a:hover {
            text-decoration: none;
        }

        .block {
            background-color: tan;
            padding: 4px;
        }

        .box {
            padding: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="content container">
            <a class="navbar-brand" href="#">
                <span>Tes API RS</span>
            </a>
            <a class="btn btn-warning" href="https://github.com/Ali-Hakeem/tes-api-rs">
                <code>Source Code</code>
            </a>
        </div>
    </nav>
    <div class="content container">
        <h2>Pengenalan</h2>
        <p>Tes API RS merupakan API Static JSON yang berisikan daftar Rumah Sakit Nasional yang bersumber dari Internet.
            Hanya digunakan untuk tujuan pembelajaran.
        </p>
        <h2>Dokumentasi</h2>
        <div class="box">
            <div class="box">
            <code>
                base_url : <br><span class="block">https://tes-api-rs.vercel.app</span>
            </code>
            </div>
            <div class="box">
            <code>
                get data : <br><span class="block">/api/data</span>
            </code>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
