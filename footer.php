<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50;
            color: white;
        }

        .container-fluid {
            padding: 30px 20px;
            position: relative;
            color: #ffece6;
            left: 0;
            bottom: 0;
            background-color: #273746;
            border-top: 2px solid #34495e;
        }

        #footeritem, #footeritem2, #bottom {
            margin: auto;
            width: 80%;
        }

        #footeritem .element-row1, #footeritem2 .element-row2 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #footeritem .element-row1 .ih, #footeritem2 .element-row2 .ih {
            display: flex;
            padding: 0px 10px;
        }

        #footeritem .element-row1 .ih .icon, #footeritem2 .element-row2 .ih .icon {
            padding: 10px 0px;
            margin-right: 10px;
        }

        #footeritem .element-row1 .ih .heading, #footeritem2 .element-row2 .ih .heading, #footeritem .call-us,
        #bottom div span, #bottom div h3 {
            font-family: 'Raleway', sans-serif;
            font-size: 16px;
            font-weight: 500;
            color: #ecf0f1;
            margin: 0;
        }

        #footeritem .call-us {
            font-size: 18px;
            color: #e74c3c;
        }

        #footeritem2 .element-row2 .socialicon {
            width: 60%;
            display: flex;
            justify-content: space-between;
            padding: 10px 10px;
        }

        #footeritem2 .element-row2 .socialicon i {
            color: #ecf0f1;
            transition: color 0.3s;
        }

        #footeritem2 .element-row2 .socialicon i:hover {
            color: #dd013e;
            opacity: 0.8;
            transform: scale(1.1);
        }

        #bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
        }

        #bottom div:nth-of-type(2) {
            flex-grow: 1;
            text-align: right;
        }

        .container-fluid hr {
            width: 100%;
            color: #34495e;
        }

        @media screen and (max-width: 768px) {
            #footeritem, #footeritem2, #bottom {
                width: 90%;
            }

            #footeritem .element-row1, #footeritem2 .element-row2 {
                flex-direction: column;
                align-items: center;
            }

            #footeritem2 .element-row2 .socialicon {
                width: 100%;
                padding-top: 10px;
            }

            #bottom {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            #bottom div {
                margin-bottom: 10px;
            }
        }
    </style>
    <!-- links -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
    <section id="footeritem">
        <div class="element-row1">
            <div class="ih">
                <div class="icon"><i class="fa fa-envelope fa-2x"></i></div>
                <div class="heading"><h1>@blood-donation-in</h1></div>
            </div>
            <div class="call-us"><h1>Call us: 6265796086</h1></div>
        </div>
    </section>
    <hr>
    <section id="footeritem2">
        <div class="element-row2">
            <div class="ih">
                <div class="icon"><i class="fa fa-hashtag fa-2x"></i></div>
                <div class="heading"><h1>Follow us on</h1></div>
            </div>
            <div class="socialicon">
                <a href="https://www.instagram.com/deepak_2.01/"><i class="fa fa-instagram fa-2x"></i></a>
                <a href="https://github.com/2512001"><i class="fa-brands fa-github fa-2x"></i></a>
                <a href="#"><i class="fa fa-telegram fa-2x"></i></a>
                <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </section>
    <hr>
    <section id="bottom">
        <div><span>© 2023 Blood Donor</span></div>
        <div><span><h3>Designed & developed by Blood-donor</h3></span></div>
    </section>
</div>
</body>
</html>
