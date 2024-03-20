<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("partial/head.php")?>
</head>
<body class="shrink" onload="contact_list()" onload="retrieve_msg()">
<?php
    session_start();
    if($_SESSION['page'][0] === 1) {
?>
<div class="message-content m-40 border-2 border-black rounded-lg">
    <div id="status"></div>
    <div class="container mx-auto font-mono shadow-lg">
        <div class="logout-btn p-2 flex flex-row-reverse bg-sky-200 rounded-tl-lg rounded-tr-lg">
            <button type="submit" value="true" onclick="logout_btn(this.value)" class="border-2 border-red-600 bg-red-400 rounded-lg font-semibold p-1 hover:bg-red-600">Logout</button>
        </div>
        <div class="message-wrapper grid grid-cols-6">
            <div class="contacts border-2 border-black col-start-1 bg-orange-300 gap-y-2 overflow-y-scroll overflow-x-hidden h-auto w-auto">
                <h4 class="sticky top-0 text-center bg-red-400 border-2 border-black">Contact List</h4>
                <div class="ul mx-1 h-32">
                    <ul class="pt-1">
                        <div id="contact_list" class="space-y-3">
                        </div>
                    </ul>
                </div>
            </div>
            <div class="message-box overflow-y-scroll border-2 border-black col-start-2 col-end-7 h-40">
                <div class="message_box h-auto bg-gradient-to-tr from-orange-300 to-red-200 p-1">
                    <!-- sender screen start -->
                    <ul id="sent_message" class="sender-screen space-y-5 pb-5 m-1">
                        
                    </ul>
                    <!-- sender screen end -->

                    <!-- other chat start -->
                    <div id="message_sent" class="sender-screen m-1 space-y-5 pb-5">
                            
                    </div>
                    <!-- other chat end -->
                </div>
            </div>
            <div class="send-options border-2 border-black col-start-1 col-span-full rounded-bl-lg rounded-br-lg">
                <div class="grid grid-cols-6 m-1 gap-x-2 flex-shrink-0">
                    <input type="text" name="" id="send_message_field" class="border-2 border-black col-start-1 col-span-5 placeholder:ps-2 focus:ps-2 focus:font-serif rounded-xl " placeholder="Message. . .">
                    <button type="submit" onclick="send_message()" class="border-2 col-start-end bg-green-500 border-green-600 rounded-lg hover:bg-green-700 p-2 sm:font-bold">Send</button>
                </div>
            </div>
        </div>
    </div>
    <?php 
        }
        else {
            header('Location: invalid.php',true);
        }
    ?>
    <?php include("partial/footer.php")?>
</div>
</body>
</html>

