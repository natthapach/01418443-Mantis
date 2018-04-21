<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <app projects='{!! json_encode($projects) !!}' users='{!! json_encode($users) !!}'>

        </app>
    </div>
    <script src="{{ mix('js/test-vue.js') }}"></script>
</body>
</html>