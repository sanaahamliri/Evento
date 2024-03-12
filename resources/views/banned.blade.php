<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    * {
        position: relative;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background: linear-gradient(to bottom right, #EEE, #AAA);
    }

    h1 {
        margin: 40px 0 20px;
    }

    .lock {
        border-radius: 5px;
        width: 55px;
        height: 45px;
        background-color: #333;
        animation: dip 1s;
        animation-delay: 0.5s;

        &::before,
        &::after {
            content: '';
            position: absolute;
            border-left: 5px solid #333;
            height: 20px;
            width: 15px;
            left: calc(50% - 12.5px);
        }

        &::before {
            top: -30px;
            border: 5px solid #333;
            border-bottom-color: transparent;
            border-radius: 15px 15px 0 0;
            height: 30px;
           
        }

        &::after {
            top: -10px;
            border-right: 5px solid transparent;
        }
    }

    @keyframes dip {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(10px);
        }

        100% {
            transform: translateY(0px);
        }
    }
</style>


<body>
    <div class="lock"></div>
    <div class="message">
        <h1>Access to this page is restricted</h1>
        <p>Please check with the site admin if you believe this is a mistake.</p>
    </div>
</body>

</html>