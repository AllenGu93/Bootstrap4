<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>生命游戏</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <style>
            canvas {
                background: #eeeeee;
                border: 1px solid #c3c3c3;
            }
            button {
                background: #aaaaaa;

            }
        </style>
    </head>
    <body>
        <h1 style="text-align: center">生命游戏</h1>
        <canvas id="myCanvas" width="2000" height="2000" onclick="mouseClick(event)"></canvas>
        <button onclick="start()">开始</button>
        <script type="text/javascript">
            var xOffset = 0;
            var yOffset = 0;
            var gridSize = 5;
            var size = 400;
            var board = new Array();
            for (var i = 0; i < 400; i++) {
                board[i]=new Array();
                for (var k = 0; k < 400; k++) {
                    if (Math.random() > 0.5) {
                        board[i][k] = 1;
                    } else {
                        board[i][k] = 0;
                    }
                }
            }
            var c = document.getElementById("myCanvas");
            var cxt = c.getContext("2d");
            cxt.fillStyle = "#FF0000";
            paint();

            function paint() {
                cxt.fillStyle = "#cccccc";
                cxt.fillRect(0, 0, 2000, 2000);
                cxt.fillStyle = "#00ff00";
                // for (var i = 0; i <= size; i++) {
                //     cxt.moveTo(xOffset, yOffset + i * gridSize);
                //     cxt.lineTo(xOffset + gridSize * size, yOffset + i * gridSize);
                // }
                // for (var i = 0; i <= size; i++) {
                //     cxt.moveTo(xOffset + i * gridSize, yOffset);
                //     cxt.lineTo(xOffset + i * gridSize, yOffset + gridSize * size);
                // }
                cxt.stroke();
                for (var x = 0; x < board.length; x++) {
                    for (var y = 0; y < board[x].length; y++) {
                        if (board[x][y] == 1) {
                            cxt.fillStyle = "#00ff00";
                            cxt.fillRect(xOffset + x * gridSize, yOffset + y * gridSize, gridSize - 1, gridSize - 1);

                        }
                    }
                }
            }

            function mouseClick(event) {
                var x = parseInt((event.layerX - xOffset) / gridSize);
                var y = parseInt((event.layerY - yOffset) / gridSize);
                board[x][y] = !board[x][y];
                paint();
            }

            function reverse() {
                var copy = board;
                for (var i = 0; i < board.length; i++) {
                    for (var j = 0; j < board[i].length; j++) {
                        var count = aroundCount(i, j);
                        if (count == 3) {
                            // 生
                            copy[i][j] = 1;
                        } else if (count == 2) {
                            // 不作处理
                        } else {
                            // 死翘翘
                            copy[i][j] = 0;
                        }
                    }
                }
                board = copy;
            }
            
            function aroundCount(x, y) {
                var count = 0;
                for (var i = x - 1; i <= x + 1; i++) {
                    for (var j = y - 1; j <= y + 1; j++) {
                        if (i < 0 || i >= board.length || j < 0 || j >= board.length) {
                            continue;
                        }
                        if (board[i][j]) {
                            count++;
                        }
                    }
                }
                if (board[x][y]) {
                    count--;
                }
                return count;
            }

            <!--start -->
            function start() {
                setTimeout(function () {
                    reverse();
                    paint();
                    // 继续执行下一次生死判断
                    setTimeout(arguments.callee, 100);
                }, 100);
            }
        </script>
    </body>
</html>
