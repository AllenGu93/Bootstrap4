<html>
    <head>
        <link rel="stylesheet" href="index.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
        
        <div id="app">
            <p v-once>@{{ message }}</p>
            @{{ sayHello() }} - <a v-bind:href="link">百度</a>
            <p>VueJs is pretty cool! @{{name}}(@{{age}})</p>
            <p>@{{ age * 3 }}</p>
            <p>@{{ random() }}</p>
            <p>@{{ random2() }}</p>
        </div>
        
        <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>