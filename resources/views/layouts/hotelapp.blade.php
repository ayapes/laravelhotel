<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            font-size: 16px;
            margin: 0;
            padding: 0;
        }

        body{
            background-color: rgb(238, 238, 238);
        }

        #wrapper {
            width: 80%;
            max-width: 1100px;
            margin: 3rem auto;
        }

        h1 {
            font-size: 160%;
            /* line-height: 250%; */
            width: 100%;
            padding: 0.1rem 0;
            margin-bottom: 2rem;
            border-bottom: 2px solid rgb(73, 73, 73);
        }

        #menubar {

            width: 100%;
        }

        #link {
            text-align: right;
            font-weight: 100;
        }

        #link a {
            text-decoration: none;
            color: #000;
        }

        #link a:hover {
            color: rgb(255, 106, 130);
        }

        #link span {
            display: inline-block;
            padding: 3px;
        }

        #content {
            width: 100%;
            margin-bottom: 4rem;
            padding-bottom: 4rem;
            border-bottom: 2px solid rgb(73, 73, 73);
        }

        #content .title{
            background-color:rgb(212, 183, 195);
        }
        #content .box {
            display: flex;
            flex-wrap: wrap;
        }

        #content>.box>p {
            padding: 5px 3px;
        }

        #content>.box>p>span {
            display: inline-block;
            border: 1px solid rgb(73, 73, 73);
            width: 100%;
            padding: 3px;
        }


        #content>.box>p:nth-of-type(1) {
            width: 5%;
            text-align: center;
        }

        #content>.box>p:nth-of-type(2) {
            width: 20%;
        }

        #content>.box>p:nth-of-type(3) {
            width: 20%;
        }

        #content>.box>p:nth-of-type(4) {
            width: 40%;
        }

        #content>.box>p:nth-of-type(5) {
            width: 15%;
        }

        /* 予約一覧 */

        #content .box2 {
            display: flex;
            flex-wrap: wrap;
        }

        #content>.box2>p {
            padding: 5px 3px;
        }

        #content>.box2>p>span {
            display: inline-block;
            border: 1px solid rgb(73, 73, 73);
            width: 100%;
            padding: 3px;
        }

        #content>.box2>p:nth-of-type(1) {
            width: 5%;
            text-align: center;
        }

        #content>.box2>p:nth-of-type(2) {
            width: 20%;
        }

        #content>.box2>p:nth-of-type(3) {
            width: 35%;
        }

        #content>.box2>p:nth-of-type(4) {
            width: 5%;
            text-align: center;
        }

        #content>.box2>p:nth-of-type(5) {
            width: 5%;
            text-align: center;
        }

        #content>.box2>p:nth-of-type(6) {
            width: 15%;
        }

        #content>.box2>p:nth-of-type(7) {
            width: 15%;
        }

        form {
            width: 50%;
        }

        input:required {
            /* background: #ffcdd2; */
        }

        input:valid {
            background: transparent;
        }

        input:focus {
            background: #DCEDC8;
        }
    </style>

<body>
    <div id="wrapper">
        <h1>
            @yield('title')
            <div id="link">
                <span><a href="/guest">◇利用者一覧</a></span>
                <span><a href="/reserve">◇予約一覧</a></span>
                <span><a href="/guest/add">◆利用者登録</a></span>
            </div>
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