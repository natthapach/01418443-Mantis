<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <app categories-json='{!! json_encode($categories) !!}' projects='{!! json_encode($projects) !!}' users='{!! json_encode($users) !!}'>

        </app>
    </div>
    <script src="{{ mix('js/test-vue.js') }}"></script>
</body>
</html>