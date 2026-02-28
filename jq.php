<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Smart Library System</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .bookCard {
            padding: 15px;
            margin: 10px 0;
            border: 1px solid gray;
        }

        #libraryAlert {
            padding: 10px;
            margin-top: 15px;
        }

        button {
            margin: 5px;
            padding: 8px 15px;
        }
    </style>
</head>

<body>

    <h1>Smart Library Dashboard</h1>

    <!-- Class Selector Example -->
    <div class="bookCard">
        <h3>Book 1</h3>
        <p>Title: Web Programming</p>
    </div>

    <div class="bookCard">
        <h3>Book 2</h3>
        <p>Title: Data Structures</p>
    </div>

    <!-- ID Selector Example -->
    <div id="libraryAlert">
        Library Status: Open Today
    </div>

    <br>

    <button id="styleBtn">Apply Styling</button>
    <button id="changeContent">Change Content</button>
    <button id="getInfo">Get Information</button>

    <script>

        $(document).ready(function () {

            // ---------------------------
            // Question 1 - Selectors
            // ---------------------------
            $("#styleBtn").click(function () {

                // ID Selector
                $("#libraryAlert").css({
                    "background-color": "#ffe6cc",
                    "color": "darkred",
                    "font-weight": "bold"
                });

                // Class Selector
                $(".bookCard").css({
                    "background-color": "#e6f2ff",
                    "border-radius": "10px"
                });

                // Tag Selector
                $("h3").css({
                    "color": "blue"
                });
            });


            // ---------------------------
            // Question 2 - DOM Manipulation
            // ---------------------------

            // Setter Methods
            $("#changeContent").click(function () {

                // Change text
                $("#libraryAlert").text("Library Status: Closed Tomorrow");

                // Change HTML
                $(".bookCard:first p").html("<b>Title: Advanced JavaScript</b>");

                // Change attribute
                $("h1").attr("title", "Smart Library System Portal");
            });


            // Getter Methods
            $("#getInfo").click(function () {

                var alertText = $("#libraryAlert").text();
                var firstBook = $(".bookCard:first p").text();
                var headingTitle = $("h1").attr("title");

                alert("Library Alert: " + alertText +
                    "\nFirst Book: " + firstBook +
                    "\nHeading Title Attribute: " + headingTitle);
            });

        });

    </script>

</body>

</html>