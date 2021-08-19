<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/fontend/index.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <style>
        .boxHover {
            width: 90vw;
            height: 78vh;
            margin-top: 2vh;
            margin-bottom: 2vh;
            margin-left: 5vw;
            margin-right: 5vw;
            background-color: #ffff;
            transition: 0.2s;
            /* overflow-y: scroll; */
        }

        .boxHover:hover {
            border-radius: 20px;
            box-shadow: 0px 2px 5px black;
        }

        .mainForm {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
            /* overflow-y: scroll; */
        }

        .title {
            text-transform: capitalize;
            font-size: 25px;
            font-weight: bold
        }
        .eachRow {
            width: 80vw;
            margin: 0 !important;
            margin-bottom: 10px !important
        }
    </style>
</head>

<body style="background-color: #d1d1d1; position: relative;min-height: 100vh">
    <div class="mainBox" style="height: 9vh; width:100%; background-color: #6f42c1; display: flex; justify-content: center; align-items: center">
        <img src="img/1.gif" alt="" style="height: 80%">
        <img src="img/1.gif" alt="" style="height: 80%">
        <img src="img/1.gif" alt="" style="height: 80%">
        <img src="img/1.gif" alt="" style="height: 80%">
    </div>

    <div class="boxHover" style="overflow-y: scroll">
        @yield('form')
        @yield('customer')
    </div>

    <div style="height: 9vh; width:100%; background-color: #6f42c1; position: absolute; bottom: 0; left: 0;">
        Footer
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>


</html>
