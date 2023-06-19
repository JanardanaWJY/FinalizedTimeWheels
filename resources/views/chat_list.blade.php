<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="chat_list_css.css">
    <link rel="stylesheet" href="global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        Nunito: ["Nunito"]
                    }
                }
            }
        };
    </script>
    <link rel="icon" type="image/x-icon" href="Assets/tab_icon.png">
    <title>Time Wheels</title>
</head>
<body class="font-[Nunito]">
    <section class="w-full h-[100vh] flex">
        <!-- navbar -->
        <div class="w-[20%] bg-[#FFFFFF]">
            <!-- Time Wheels Logo -->
            <div class="w-[65%] mt-[4vw] mx-auto">
                <img src="Assets/TimeWheelsLogo.png" alt="Time Wheels Logo">
            </div>
            <!-- navigation -->
            <div class="mt-[12vh] w-[90%] mx-auto">
                <a href="dashboard.html" class="flex gap-x-[2vw]">
                    <div class="border-[0.125vw] border-[#D4A732] rounded-md"></div>
                    <div class="flex gap-x-[0.8vw] items-center">
                        <img src="Assets/Dashboard_colored.png" alt="Dashboard_colored" class="w-[1.5vw]">
                        <p class="font-extrabold text-[#6F177D]">Dashboard</p>
                    </div>
                </a>
                <a href="#" class="flex mt-[1vw] gap-x-[2vw] text-black hover:text-[#6F177D] duration-[0.3s]">
                    <div class="border-[0.125vw] border-transparent rounded-md"></div>
                    <div class="flex gap-x-[0.8vw] items-center">
                        <img src="Assets/car 1.png" alt="Dashboard_colored" class="w-[1.5vw]">
                        <p class="font-extrabold">Order</p>
                    </div>
                </a>
                <a href="#" class="flex mt-[1vw] gap-x-[2vw] text-black hover:text-[#6F177D] duration-[0.3s]">
                    <div class="border-[0.125vw] border-transparent rounded-md"></div>
                    <div class="flex gap-x-[0.8vw] items-center">
                        <img src="Assets/history 1.png" alt="Dashboard_colored" class="w-[1.5vw]">
                        <p class="font-extrabold">Orders History</p>
                    </div>
                </a>
                <a href="#" class="flex mt-[1vw] gap-x-[2vw] text-black hover:text-[#6F177D] duration-[0.3s]">
                    <div class="border-[0.125vw] border-transparent rounded-md"></div>
                    <div class="flex gap-x-[0.8vw] items-center">
                        <img src="Assets/calendar 1.png" alt="Dashboard_colored" class="w-[1.5vw]">
                        <p class="font-extrabold">Schedule</p>
                    </div>
                </a>
            </div>
            <!-- chat n profile -->
            <a href="chat_list.html" class="flex gap-x-[1vw] items-center w-[67%] mx-auto mt-[10vw] text-black hover:text-[#6F177D] duration-[0.3s]">
                <img src="Assets/chat.png" alt="chat">
                <p class="font-bold text-[1.2vw]">Open Chat</p>
            </a>
            <a href="#" class="flex gap-x-[0.8vw] items-center w-[68%] mx-auto mt-[4vw]">
                <img src="Assets/profile.png" alt="profile" class="w-[4.5vw]">
                <div class="">
                    <p class="font-bold text-[1.2vw]">Ivanka Trump</p>
                    <p class="font-medium text-[0.8vw]">Time Lord</p>
                </div>
            </a>
        </div>
        <!-- content -->
        <div class="w-[80%] bg-[#F5F5F5] px-[0.78vw] flex flex-col gap-y-[1.5vh]">
            <!-- header -->
            <div class="w-full h-[10vh] bg-[#FFFFFF] mt-[1.5vh] px-[1.77vw] rounded-md flex justify-between items-center">
                <p class="text-black font-bold text-[1.8vw]">
                    Chat
                </p>
                <div class="flex items-center justify-between gap-x-[2vw]">
                    <div class="flex items-center bg-[rgba(79,79,79,0.06)] py-[0.35vw] px-[1vw] w-[28vw] rounded-md gap-x-[1vw]">
                        <div>
                            <img src="Assets/search icon.png" alt="search icon">
                        </div>
                        <input type="text" placeholder="Search Chats" name="search" class="block placeholder:font-medium placeholder:text-[1vw] placeholder:opacity-[0.5] placeholder:text-black focus:outline-none bg-transparent w-full"/>
                    </div>
                    <p id="DigitalCLOCK" onload="showTime()" class="clock font-semibold text-[1vw]"></p>
                </div>
            </div>
            <!-- body -->
            <div class="w-full h-[74vh] rounded-md flex flex-col gap-y-[1vw] bg-transparent overflow-auto">
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                <a href="#" class="flex gap-x-[2vw] px-[1.2vw] py-[0.5vw] items-center bg-white rounded-md hover:bg-[#E0C2E5] duration-[0.3s]">
                    <div class="w-[9.5vw]">
                        <img src="Assets/chat_profile.png" alt="chat_profile">
                    </div>
                    <div>
                        <div class="flex justify-between">
                            <p class="font-bold text-[1.1vw] mt-[0.5vw]">MiBeau, Eric</p>
                            <p class="font-bold text-[1.1vw]">14.20</p>
                        </div>
                        <p class="font-normal text-[1.2vw]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </a>
                
            </div>
            <!-- footer -->
            <div class="w-full h-[10vh] bg-[#FFFFFF] rounded-md px-[1.77vw] flex justify-between items-center">
                <p class="text-black font-semibold text-[1.2vw]">
                    Recent Traffic News
                </p>
                <div class="flex items-center gap-x-[0.3vw]">
                    <img src="Assets/Traffic Jam.png" alt="Traffic Jam" class="w-[1vw]">
                    <p class="text-black font-medium text-[1vw]">Unusual traffic in Jl. Mawar Raya</p>
                </div>
                <div class="flex items-center gap-x-[0.3vw]">
                    <img src="Assets/Rainy Weather.png" alt="Rainy Weather" class="w-[1vw]">
                    <p class="text-black font-medium text-[1vw]">Potential rain at 3.34 pm may cause a delay</p>
                </div>
            </div>
        </div>
    </section>



    <script src="chat_list_js.js"></script>
</body>
</html>
