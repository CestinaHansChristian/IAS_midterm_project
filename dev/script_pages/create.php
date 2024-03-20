<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partial/head.php")?>
</head>
<body class="">
<div class="message-content grid place-items-center h-screen">
    <div class="form-container container mx-auto font-mono shadow-lg w-60 h-60 p-5 bg-sky-200 rounded-lg">
        <h2 class="text-center font-semibold text-xl">Create</h2>
        <form action="" id="form_login">
            <div class="grid grid-rows-1 space-y-4">
                <div class="input-form py-2 space-y-5">
                    <input type="text" required autofocus id="create_username" placeholder="Username" class="border-2 border-blue-500 rounded-lg placeholder:ps-2 focus:ps-2">
                    <input type="password" required autofocus id="create_password" placeholder="Password" class="border-2 border-blue-500 rounded-lg placeholder:ps-2 focus:ps-2">
                </div>
                <div class="button-nav grid h-10">
                    <button type="reset" onclick="create_create_btn()" class="bg-green-300 rounded-md hover:bg-green-600 hover:font-semibold">Create Account</button>
                </div>
            </div>
        </form>
    </div>
    <div id="status"></div>
</div>
    <?php include("partial/footer.php")?>
</body>
</html>