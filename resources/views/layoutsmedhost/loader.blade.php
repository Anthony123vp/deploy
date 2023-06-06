<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        /* Estilos para la página */
        body {
            background-color: #fffbfb;
            background-color: transparent;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Estilos para el loader */
        .loader {
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: loader-10-1 2s infinite linear;
        }

        .loader:before,
        .loader:after {
            content: '';
            width: 0;
            height: 0;
            border: 10px solid currentcolor;
            display: block;
            position: absolute;
            border-radius: 100%;
            animation: loader-10-2 2s infinite ease-in-out;
        }

        .loader:before {
            top: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .loader:after {
            bottom: 0;
            right: 50%;
            transform: translateX(50%);
            animation-delay: -1s;
        }

        @keyframes loader-10-1 {
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes loader-10-2 {
            0%,
            100% {
                transform: scale(0);
            }
            50% {
                transform: scale(1);
            }
        }

        /* Ocultar el loader cuando se haya cargado la página */
        .loader--hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- LOADER -->
    <div class="loader">
        <div class="loader__container">
            <span></span>
        </div>
    </div>

    <script>
        function loader() {
            window.addEventListener("load", function () {
                const loader = document.querySelector(".loader")
                loader.classList.add("loader--hidden")
            })
        }
    </script>
</body>
</html>
