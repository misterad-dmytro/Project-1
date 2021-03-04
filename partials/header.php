<!DOCTYPE html>
<html>

<head>
    <title>Dmytro's Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
    <style>

        html{
            font-size: 1.5em;
        }

        body{
            
        }

        .navbar a{
            font-size: 1.2em;
            transition: 0.2s;
        }

        .navbar a:hover{
            font-size: 1.2em;
            color: grey;
        }

        .navbar{
            background: black;
        }

        .jumbotron{
            background: transparent;
            margin-top: 3%;
        }

        .btn-primary{
            background-color: black;
            border-color: #fff;
            padding: 0.2em 0.5em;
            font-size: 1.5em;
            transition: 0.2s;
        }

        .btn-primary:hover{
            background-color: white;
            border-color: #000;
            color: black;
            padding: 0.3em 0.7em;
            font-size: 1.7em;
        }
        
        footer{
            background-color: #343a40!important;
            color: #fff;
            padding: 20px;
            margin: 50px 0 0;
        }

        .ui.vertical.animated.button .hidden.content{
            font-size: 18px
        }

        a{
            transition: 0.2s;
        }

        a:hover{
            color: grey;
        }

        .mt-3{
            position: relative;
            top: 0.5em;
            font-size: 1.3em;
        }

       

        h6{
            margin-bottom: 5em;
        }

        #s{
            background: white;
            color: black;
            margin-top: 6em !important;
            text-align: center;
            margin-left: 27.5%;
            padding: 0 !important;
            width: 50%;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
            Dmytro's Library
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="list.php">Inventory</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">