<html>
    <head>
        <meta charset="UTF-8">
        <title>Login | Admin</title>
        <style>
            body{
                background: #59c5dc;
            }
            form{
                width: 500px;
                /*margin: auto;*/
                top: 50%;
                left: 50%;
                position: relative ;
                transform: translate(-50%, -50%);
            }
            form h2{
                text-align: center;
                text-transform: uppercase;
                font-size: 2rem;
                margin-bottom: 50px;
            }
            form table{
                width: 100%;
            }
            
            form label{
                width: 100%;
                display: block;
                padding: 5px 0px;
                font-weight: 600;
                text-transform: uppercase;
                font-family: 'Arial';
                font-size: 13px;
            }
            form input{
                padding: 8px 10px;
                width: 100%;
                display: block;
                line-height: 20px;
                font-size: 15px;
            }
            form .input-text{
                margin-bottom: 10px;
                border: .5px solid yellow;
                outline: none;
                border-radius: 5px;
            }
            form .input-text:focus{
                border: .5px solid red;
            }
            .btn-submit{
                font-weight: 600;
                background: #004085;
                color:#fff;
                text-transform: uppercase;
                outline: none;
                box-shadow: none;
                border: .5px solid #34ce57;
                border-radius: 5px;
            }
            .btn-submit:hover{
                border: .5px solid #f00;
                background: #ff4500;
            }
        </style>
    </head>
    <body>
        <form action="./handlers/xulydangnhap.php" method = "post">
            <h2> Đăng nhập </h2> 
           
            <table>
               
                <tr><td><label>Tài khoản:</label><input type="text" name="tk" class="input-text"
                                                       placeholder="Email:" autofocus="auto" ></td></tr>
                <tr><td><label>Mật khẩu:</label> <input type="password" name="mk" class="input-text"
                                         placeholder="Password" ></td></tr>
                <tr><td><input class="btn-submit" type="submit" value ="Login"</td>
                </tr>
            </table>
        </form>
      
    
    </body>
</html>

