
<body>
    <div class="login">
        <div class="login-form">
            <span style="color:red; font-family: 'Bona Nova', serif;"><?php
            if(isset($check_admin)){ echo $check_admin;}
            ?></span>
            <h1>Ivy - Login</h1>
            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit">Đăng Nhập</button>
            </form>
        </div>
    </div>
</body>
</html>
