

<section id="login">
    <div class="container py-5">
        <div class="row contact-border my-5">

            <div class="col-lg-6 px-0 contact-img" style="height: 60vh; background-image: url('./images/login.jpg');"></div>
            <div class="col-lg-6 px-0 contact-card">
                <form id="loginForm" class="p-5 contact-form" method="post">
                    <h1 class="login-title">Admin Login</h1>
                    <div>
                        <input type="text" name="account" placeholder="Account" value="admin">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password" value="1234">
                    </div>
                    <div>
                        <input id="login" type="submit" value="Login">
                    </div>
                    <div id="error" style="color: #ffffff"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('loginForm');
        const errorId = document.getElementById('error');

        form.addEventListener("submit", function(e){
            e.preventDefault(); // 阻止表單默認提交

             // 取得表單資料
            const formData = new FormData(form);
            const data = {
                account: formData.get("account").trim(),
                password: formData.get("password")
            };

             // 送出 POST 請求
            fetch("./api/admin.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            // .then(response => response.text())
            .then(response => response.json()) // 假設 API 回傳 JSON
            .then(result => {
                console.log(result);
                if (result.success) {
                    // 登入成功
                    window.location.href = "./admin.php";
                } else {
                    // 登入失敗
                    errorId.textContent = result.message || "Login failed";
                }
            })
            .catch(err => {
                console.error(err);
                errorId.textContent = "Network error. Please try again.";
            });
        })
    })
</script>