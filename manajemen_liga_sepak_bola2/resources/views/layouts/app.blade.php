<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
  <style>
    body {
        font-family: Inter, Arial;
        background: #f7f8f6;
        padding: 40px;
        color: #2f3e3a;
    }

    .container {
        max-width: 1100px;
        margin: auto;
        background: #ffffff;
        border-radius: 18px;
        padding: 32px;
        box-shadow: 0 18px 40px rgba(0,0,0,0.08);
    }

    h2 {
        font-size: 26px;
        margin-bottom: 20px;
        color: #2f3e3a;
    }

    h3 {
        font-size: 18px;
        margin-bottom: 8px;
    }

    p {
        color: #6b7c75;
        font-size: 14px;
    }

    a {
        text-decoration: none;
        background: #5f8f83;
        color: #ffffff;
        padding: 10px 18px;
        border-radius: 12px;
        font-size: 14px;
        display: inline-block;
    }

    a:hover {
        background: #4f7d72;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 25px;
        border-radius: 14px;
        overflow: hidden;
    }

    th {
        background: #e6f0ec;
        color: #355f56;
        padding: 14px;
        font-size: 13px;
        text-transform: uppercase;
    }

    td {
        padding: 14px;
        border-bottom: 1px solid #e5e7eb;
        font-size: 14px;
    }

    tr:hover {
        background: #f3f7f5;
    }

    button {
        background: #6bb39b;
        border: none;
        color: #ffffff;
        padding: 8px 14px;
        border-radius: 10px;
        font-size: 13px;
        cursor: pointer;
    }

    .btn-danger {
        background: #e57373;
    }

    .card {
        background: #ffffff;
        padding: 26px;
        border-radius: 18px;
        box-shadow: 0 14px 34px rgba(0,0,0,0.06);
    }

    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 14px;
        border-radius: 10px;
        border: 1px solid #ccd5d0;
        font-size: 14px;
    }

    input:focus {
        outline: none;
        border-color: #5f8f83;
    }
</style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
