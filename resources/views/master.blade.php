<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style class="csstambah"> .card {
        background-color: #444;
        border: 1px solid #555;
        border-radius: 4px;
        padding: 20px;
        margin: 20px auto;
        max-width: 600px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    .form-group {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .form-group label {
        width: 100px;
        margin-right: 10px;
        color: #ddd;
    }
    .form-group input, .form-group textarea {
        flex: 1;
        padding: 8px;
        border: 1px solid #666;
        background-color: #555;
        color: #fff;
         border-radius: 4px;
    }
    .form-group textarea {
        resize: vertical;
    }
    .form-submit {
        text-align: right;
    }
    .form-submit input[type="submit"] {
        background-color: #666;
        color: #fff;
        border: none;
        padding: 10px 15px;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .form-submit input[type="submit"]:hover {
        background-color: #777;
    }</style>
    <style class="csshero">
     .hero-container {
  display: flex;
  height: 470px;
  padding: 0 10%;
  background-color: #bdc3c7;
}

.hero-container > div {
  width: 50%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}

.hero-container h1 {
  font-size: 60px;
  width: 360px;
  margin: 20px 0;
  font-weight: bolder;
}

.hero-container p {
  font-size: 30px;
  color: var(--gray);
}

.hero-container > img {
  width: 50%;
  height: 323px;
  align-self: center;
}
    </style>
    <style class="csstable">
        table {
    border: 2px;
    background-color: white;
    border: 1px solid #bdc3c7;
box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}



tr {
transition: all .2s ease-in;
cursor: pointer;
}

th{
background-color: pink;
}
td {
padding: 12px;
text-align: left;
border-bottom: 1px solid #ddd;
background-color: white;
}

.isi:hover {
background-color: whitesmoke;
transform: scale(1.02);
box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
}
.hover-effect:hover {
    background-color: #f8f9fa;
    transform: scale(1.02);
}

.hover-effect:hover input[disabled] {
    color: #000;
}


    </style>
    <style class="cssform">
    .hover-effect:hover {
    background-color: #f8f9fa;
    transform: scale(1.02);
}

.hover-effect:hover input[disabled] {
    color: #000;
}



.form-control[disabled] {
    color: #fff;
}

    </style>
    <style class="cssnav">* {
        margin: 0;
        padding: 0;
        font-family: "futura md bt";
        text-decoration: none;
        list-style: none;
        box-sizing: border-box;
    }
    .navi {
        background: whitesmoke;
    }
    header {
        background: #fff;
        width: 100%;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 50px;
    }
    header .logo {
        font-size: 30px;
        text-transform: uppercase;
    }
    header nav ul {
        display: flex;
    }
    header nav ul li a {
        display: inline-block;
        color: #000;
        padding: 5px 0;
        margin: 0 10px;
        border: 3px solid transparent;
        text-transform: uppercase;
        transition: 0.2s;
    }
    header nav ul li a:hover,
    header nav ul li a.active {
        border-bottom-color: dodgerblue;
    }
    .hamburger {
        cursor: pointer;
        display: none;
    }
    .hamburger div {
        width: 30px;
        height: 3px;
        margin: 5px 0;
        background: #000;
    }
    @media only screen and (max-width: 900px) {
        header {
            padding: 0 30px;
        }
    }
    @media only screen and (max-width: 700px) {
        .hamburger {
            display: block;
        }
        header nav {
            position: absolute;
            width: 100%;
            left: -100%;
            top: 70px;
            width: 100%;
            background: #fff;
            padding: 30px;
            transition: 0.3s;
        }
        header #nav_check:checked ~ nav {
            left: 0;
        }
        header nav ul {
            display: block;
        }
        header nav ul li a {
            margin: 5px 0;
        }
    }
    </style>
</head>

<body class="navi">
    <header>
    <div class="logo">Arayzi Rayyansyah - 5026221194</div>
    <input type="checkbox" id="nav_check" hidden>
    <nav>
        <ul>
            <li>
                <a href="/pegawai" >Pegawai</a>
            </li>
            <li>
                <a href="/nilai">Nilai</a>
            </li>
            <li>
                <a href="/keranjangbelanja">Keranjang </a>
            </li>
        </ul>
    </nav>
    <label for="nav_check" class="hamburger">
        <div></div>
        <div></div>
        <div></div>
    </label>
</header>
    <br>

    <div class="container">
        @yield('konten')
    </div>

    @include('footer')
</body>

</html>
