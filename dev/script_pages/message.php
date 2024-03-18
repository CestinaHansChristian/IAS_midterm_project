<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partial/head.php")?>
</head>
<body class="shrink">
<div class="message-content m-40 border-2 border-black rounded-lg">
    <div id="status"></div>
    <div class="container mx-auto font-mono shadow-lg">
        <div class="logout-btn p-2 flex flex-row-reverse bg-sky-200 rounded-tl-lg rounded-tr-lg">
            <button type="submit" value="true" onclick="logout_btn(this.value)" class="border-2 border-red-600 bg-red-400 rounded-lg font-semibold p-1 hover:bg-red-600">Logout</button>
        </div>
        <div class="message-wrapper grid grid-cols-6">
            <div class="contacts border-2 border-black col-start-1 bg-orange-300 gap-y-2">
                <h4 class="text-center bg-red-400">Contact List</h4>
                <div class="ul sm:ps-2">
                    sample
                </div>
            </div>
            <div class="message-box overflow-y-scroll border-2 border-black col-start-2 col-end-7 h-40">
                <div class="message_box h-44 bg-gradient-to-tr from-orange-300 to-red-200 p-1">
                    <!-- sender screen start -->
                    <div class="sender-screen border-2 border-black m-1">
                        <div class="message-container flex flex-row-reverse">
                            <div class="flex gap-x-2">
                                <div class="message border-2 border-black place-content-center grid bg-violet-400">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="image bg-orange-300 w-12 h-12 rounded-full border-2 border-orange-500">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- sender screen end -->

                    <!-- other chat start -->
                    <div class="sender-screen border-2 border-black m-1">
                        <div class="message-container flex">
                            <div class="flex gap-x-2 flex-row-reverse">
                                <div class="message border-2 border-black place-content-center grid bg-violet-400">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="image bg-orange-300 w-12 h-12 rounded-full border-2 border-orange-500">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- other chat end -->
                </div>
            </div>
            <div class="send-options border-2 border-black col-start-1 col-span-full rounded-bl-lg rounded-br-lg">
                <div class="grid grid-cols-6 m-1 gap-x-2 flex-shrink-0">
                    <input type="text" name="" id="" class="border-2 border-black col-start-1 col-span-5 placeholder:ps-2 focus:ps-2 focus:font-serif rounded-xl " placeholder="Message. . .">
                    <button type="submit" class="border-2 col-start-end bg-green-500 border-green-600 rounded-lg hover:bg-green-700 p-2 sm:font-bold">Send</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("partial/footer.php")?>
</div>
</body>
</html>