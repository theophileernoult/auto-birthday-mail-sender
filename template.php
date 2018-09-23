<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>

    </title>
</head>
<body>
    <center>
        <img src="<?=ROOT_URL?>Imgs/logo.png" width="750px">
    </center>
    <ul>
        <li><a href="<?=ROOT_URL?>home">Home</a></li>
        <li><a href="<?=ROOT_URL?>contacts">My contacts</a></li>
        <li><a href="<?=ROOT_URL?>#">About this</a></li>
        <li><a href="<?=ROOT_URL?>#">Login / Register</a></li>
    </ul>

    <div class="container">
        <?= $content ?>
    </div>
</body>
</html>

<style>
    #contact-edit{
        cursor: pointer;
        font-weight: bold;
        text-decoration: underline;
        color: forestgreen;
    }
    #contact-remove{
        cursor: pointer;
        font-weight: bold;
        text-decoration: underline;
        color: crimson;
    }
    ul {
        width: 500px;
        margin: 5px auto 30px;
        list-style: none;
        padding: 5px;
        background: #F2F2F2;
    }
    ul li, ul li a{
        display: inline-flex;
        text-align: center;
    }
    ul li a {
        margin: 1px 0;
        padding: 8px 20px;
        color: #666;
        background: #FFF;
        text-decoration: none;
        -webkit-transition: all .3s;
        -moz-transition: all .3s;
        transition: all .3s;
    }
    ul li a:hover, ul li a:focus {
        text-decoration: none;
        background: #22A9E8;
        color: #FFF;
        -ms-transform: rotate(1.1);
        -webkit-transform: rotate(1.1);
        transform: scale(1.1);
    }
</style>