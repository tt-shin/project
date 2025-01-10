<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
                margin: 0;
                padding: 0;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .back {
                position: absolute;
                top: 20px;
                left: 20px;
                padding: 10px 20px;
                font-size: 18px;
                text-decoration: none;
                color: #fff;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.2s;
            }

            .back:hover {
                background-color: #0056b3;
            }

            .logout {
                position: absolute;
                top: 20px;
                right: 20px;
                padding: 10px 20px;
                font-size: 18px;
                text-decoration: none;
                color: #fff;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.2s;
            }

            .logout:hover {
                background-color: #0056b3;
            }

            .menu {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
                max-width: 800px;
            }

            .menu-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                width: 200px;
                margin: 20px 0;
                padding: 30px;
                background-color: #fff;
                border: 1px solid #ddd;
                border-radius: 8px;
                text-align: center;
                transition: transform 0.2s;
            }

            .menu-item:hover {
                transform: scale(1.1);
            }

            .menu-item a {
                text-decoration: none;
                color: #333;
            }

            .menu-item span {
                font-size: 20px;
                font-weight: bold;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="menu">
                <div class="menu-item">
                    <a href="view.html">
                        <span>View Items</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="add.html">
                        <span>Add Items</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="edit.html">
                        <span>Edit Items</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="delete.php">
                        <span>Delete Items</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
