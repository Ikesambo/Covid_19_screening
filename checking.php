
<!DOCTYPE html>

<html>
<head><title>ONLINE SCREENING</title>
    <meta name="viewport" content="width=device-width"/>
    <title>Index</title>
    <style type="text/css">
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99;
            opacity: 0.8;
            filter: alpha(opacity=80);
            -moz-opacity: 0.8;
            min-height: 100%;
            width: 100%;
        }

        .loading {
            font-family: Arial;
            font-size: 10pt;
            display: none;
            position: fixed;
            background-color: White;
            z-index: 999;
            width:100%;
            height: 100%;
        }
        .loading img{
          margin-top: -100px;
        }
        @media (max-width: 480px){
          .loading img{
            margin-top: -50px;
            width:100%;
          }
        }
    </style>
</head>
<body>
    <div class="loading" align="center">
        Loading. Please wait.<br/>
        <br/>
        <img src="18168.gif" alt=""/>
    </div>
    <script type="text/javascript">
        var modal, loading;
        function ShowProgress() {
            modal = document.createElement("DIV");
            modal.className = "modal";
            document.body.appendChild(modal);
            loading = document.getElementsByClassName("loading")[0];
            loading.style.display = "block";
            var top = Math.max(window.innerHeight / 2 - loading.offsetHeight / 2, 0);
            var left = Math.max(window.innerWidth / 2 - loading.offsetWidth / 2, 0);
            loading.style.top = top + "px";
            loading.style.left = left + "px";
        };
        ShowProgress();
    </script>

    <!-- Keep the Page Content Here.-->

    <script type="text/javascript">
        window.onload = function () {
            setTimeout(function () {
                document.body.removeChild(modal);
                loading.style.display = "none";
            }, 4000); //Delay just used for example and must be set to 0.
        };
    </script>
</body>
</html>
