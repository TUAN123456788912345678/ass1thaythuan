<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
    <style type="text/css">
        .wrapper {
            width: 1000px;
            margin: auto;
        }

        .header {
            height: 55px;
            border: 1px solid black;
            background-color: lightpink;
        }

            .header img {
                width: 125px;
                height: 55px;
                float: left;
            }

        .banner img {
            width: 1000px;
            height: 300px;
        }

        .form-search {
            padding-top: 10px;
        }

            .form-search input[type=text] {
                width: 300px;
                height: 30px;
            }

            .form-search input[type=submit] {
                height: 30px;
            }

        .menu {
            height: 30px;
            background-color: darkslateblue;
        }

            .menu ul li {
                list-style: none;
                text-align: center;
                display: inline-block;
            }

                .menu ul li a {
                    text-decoration: none;
                    font-size: 18px;
                    margin: 30px;
                    padding: 5px;
                    text-transform: uppercase;
                    color: white;
                }

        .content {
            height: 1000px;
        }

        .left {
            width: 20%;
            background-color: lightslategray;
            float: left;
            height: 800px;
        }

            .left > p {
                background-color: white;
                font-size: 22px;
                font-family: Arial;
                text-align: center;
            }

        .category ul li {
            list-style: none;
        }

            .category ul li a {
                color: white;
                text-align: center;
                font-size: 20px;
                text-decoration: none;
            }

        .category a:hover {
            text-decoration: underline;
        }

        .brand ul li {
            list-style: none;
        }

            .brand ul li a {
                color: white;
                text-align: center;
                font-size: 20px;
                text-decoration: none;
            }

        .brand a:hover {
            text-decoration: underline;
        }

        .right {
            width: 80%;
            background-color: lightgreen;
            float: right;
            height: 800px;
        }

            .right > h3 {
                text-align: center;
                font-size: 20px;
            }

        .single-product {
            margin-left: 30px;
            float: left;
        }

            .single-product img {
                border: 2px solid black;
            }

        .footer tr td a {
            text-decoration: none;
        }
    </style>
</head>
<body style="background-color:black">
    <div class="wrapper">
        <div class="header">
            <img src="https://brademar.com/wp-content/uploads/2022/05/LEGO-Logo-PNG-1998-–-Now-2.png" />
            <a href="">
              <div class="cart">
                  <img style="float:right" id="cart" src="X/cart.png" />
              </div>
            </a>
            <div class="form-search">
                <form method="GET" action="search.php">
                    <input type="text" name="user_query" placeholder="Search" />
                    <input type="submit" name="search" value="Search" />
                </form>
            </div>
        </div>
        <div class="banner">
            <img src="https://img.freepik.com/free-vector/flat-design-background-christmas-toys_23-2148355805.jpg?w=2000" alt="Slideshow Image 1" />
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php" target="_blank">Homepage</a></li>
                <li><a href="#" target="_blank">Information</a></li>
                <li><a href="#" target="_blank">Contact</a></li>
                <li><a href="login.php" target="_blank">Login</a></li>
                <li><a href="register.php" target="_blank">Register</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p>Function</p>
                <div class="category">
                    <ul>
                        <li><a href="addproduct.php" target="_blank">Add Product</a></li>
                    </ul>
                </div>
                <p>Product</p>
                <div class="category">
                    <ul>
                        <li><a href="">Dolls</a></li>
                        <li><a href=""target="_blank">LEGO</a></li>
                        <li><a href="">Puzzles</a></li>
                    </ul>
                </div>
                <p>Brand</p>
                <div class="brand">
                    <ul>
                        <li><a href="">Lego</a></li>
                        <li><a href="">Bandai Namco</a></li>
                        <li><a href="">Barbie</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="product">
                    <form method="POST">
                        <table align="left">
                            <tr>
                                <td>
                                    <p>Don't have a account?<a href="register.php" target="_blank">Register Here</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td><br /></td>
                            </tr>
                            <tr>
                                <td><b>Username:</b></td>
                                <td><input type="text" name="username" placeholder="Username" required</td>
                            </tr>
                            <tr>
                                <td><b>Password:</b></td>
                                <td><input type="password" name="password" placeholder="Password" required</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="">Forgot Password</a></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" name="login" value="Login" /></td>
                            </tr>
                        </table>
                    </form>
                    <?php
                        $connect = mysqli_connect("3.132.234.157","quanglxn","123@123a","quanglxn");
		                if($connect)
                        {
                            
		                }
		                else
                        {
			                echo "Connect failed!";
		                }
                        if(isset($_POST["login"]))
                        {
                            $username= $_POST['username'];
                            $password= $_POST['password'];
                            $sql= "select * from user where username= '$username' and password= '$password'";
                            $result= mysqli_query($connect, $sql);
                            $row= mysqli_num_rows($result);
                            if($row>0)
                            {
                                echo "<script>alert('Login successfully!')</script>";
                                $_SESSION['username']= $username;
                                echo"<script> window.open('index.php', '_self')</script>";
                            }
                            else
                            {
                                echo "<script>alert('Login failed!')</script>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="footer" style="background-color:aquamarine">
            <table style="width:500px">
                <tr>
                    <th>LY Sponcer</th>
                    <th>Someone Brand</th>
                    <th>NF</th>
                </tr>
                <tr>
                    <td><a href="">Homepage</a></td>
                    <td><a href="">Blog</a></td>
                    <td><a href="">Facebook</a></td>
                </tr>
                <tr>
                    <td><a href="">Contact</a></td>
                    <td><a href="">Contact</a></td>
                    <td><a href="">Contact</a></td>
                </tr>
                <tr>
                    <td>111, Bà Triệu, Hà Nội</td>
                    <td>112, Bà Triệu, Hà Nội</td>
                    <td>113, Bà Triệu, Hà Nội</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>