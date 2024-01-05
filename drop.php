<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Select Dropdown</title>
    <style>
        /* Basic styling for the select container */
        .custom-select {
            position: relative;
            display: inline-block;
        }

        /* Style for the top option */
        .custom-select .top-option {
            padding: 10px;
            background-color: #f2f2f2;
            cursor: pointer;
        }

        /* Style for the dropdown options */
        .custom-select .options {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #fff;
            border: 1px solid #ccc;
            z-index: 1;
        }

        /* Style for individual option items */
        .custom-select .option {
            padding: 10px;
            cursor: pointer;
        }

        /* Show the dropdown options when the select is clicked */
        .custom-select:hover .options {
            display: block;
        }

        /* Style for links in dropdown options */
        .custom-select .option a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="custom-select" id="customSelect">
        <div class="top-option" id="topOption">
            Top Option
        </div>
        <div class="options">
            <div class="option">
                <a href="https://www.example.com">Option with Link</a>
            </div>
            <div class="option">
                <a href="https://www.anotherexample.com">Another Link</a>
            </div>
        </div>
    </div>
</body>
</html>
