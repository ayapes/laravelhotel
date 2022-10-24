<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *,
        bOdy{
            box-sizing: border-box;
            font-size:16px;
            background-color:rgb(233, 251, 255);
            margin: 0;
            padding: 0;
        }

        #wrapper{
            width: 70%;
            max-width:900px;
            margin: 3rem auto;
        }
        h1{
            font-size:160%;
            line-height: 250%;
            width: 100%;
            padding: 0.5rem;
        }

        #menubar{
margin-left: 3rem;
width: 100%;
        }

        #content{
            width: 100%;
        }

        #content>.box{
            display: flex;
            flex-wrap:nowrap;
        }

    </style>

<body>
    <div id="wrapper">
        <h1>
            @yield('title')
            </h1>
        <div id="menubar">
            @yield('menubar')
        </div>
        <div id="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </div>
</body>

</html>