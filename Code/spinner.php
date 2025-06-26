<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spin Wheel</title>
    <style>
        /* Styles for the spinner container */
        .spinner-container {
            position: relative;
            width: 500px;
            height: 500px;
            margin: 50px auto;
            background-color: #333; /* Dark background color */
            border-radius: 50%;
            overflow: hidden;
        }

        /* Styles for the spinner */
        .spinner {
            width: 100%;
            height: 100%;
            position: absolute;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            transition: transform 3s ease-out;
            background-image: conic-gradient(
                #f00 0% 20%,    /* Red */
                #0f0 20% 40%,   /* Green */
                #00f 40% 60%,   /* Blue */
                #ff0 60% 80%,   /* Yellow */
                #f0f 80% 100%   /* Purple */
            );
        }

        /* Styles for the arrow */
        .arrow {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 100px;
            margin-left: -10px;
            margin-top: -50px;
            background-color: #fff;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
            z-index: 2;
            cursor: pointer;
        }

        /* Styles for different items */
        .item {
            position: absolute;
            width: 50px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            font-size: 14px;
            color: #fff;
            display: none;
            transform-origin: 50% 100%;
            z-index: 1;
        }

        .firecracker {
            position: absolute;
            width: 150px;
            height: 150px;
            background-image: url('firecracker.gif'); /* Replace with your firecracker image */
            background-size: cover;
            display: none;
            transition: opacity 1s ease-out;
        }
    </style>
</head>
<body style="background-color: #050505;">

    <!-- Spinner Container -->
    <div class="spinner-container" id="spinnerContainer">
        <div class="spinner" onclick="spinWheel()">
            <div class="arrow"></div>
            <div class="item item1">Cake</div>
            <div class="item item2">Icecream</div>
            <div class="item item3">cupcake</div>
            <div class="item item4">Waffle</div>
            <div class="item item5">macaron</div>
            <div class="firecracker" id="firecracker"></div>
        </div>
    </div>

    <!-- Script to Spin the Wheel -->
    <script>
        function spinWheel() {
            var spinner = document.querySelector('.spinner');
            var items = document.querySelectorAll('.item');
            var firecracker = document.getElementById('firecracker');
            var randomNumber = Math.floor(Math.random() * items.length);
            var degrees = 360 * 3 + (randomNumber * (360 / items.length));
            spinner.style.transform = 'rotate(' + degrees + 'deg)';

            setTimeout(function() {
                // Show the selected item
                items.forEach(function(item) {
                    item.style.display = 'none';
                });
                var winner = items[randomNumber].innerHTML;
                items[randomNumber].style.display = 'block';

                // Display the firecracker
                firecracker.style.display = 'block';
                setTimeout(function() {
                    // Hide the firecracker and show the winner alert
                    firecracker.style.display = 'none';
                    alert('You claimed free : ' + winner);
                }, 1000); // Adjust the duration as needed
            }, 3000); // Adjust the duration as needed
        }
    </script>

</body>
</html>
