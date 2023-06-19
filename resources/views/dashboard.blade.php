<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="dashboard_css.css">
    <link rel="stylesheet" href="global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
        rel="stylesheet">
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
                <a href="{{ url('gotodashboard') }}" class="flex gap-x-[2vw]">
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
            <a href="{{ url('chatlist') }}"
                class="flex gap-x-[1vw] items-center w-[67%] mx-auto mt-[10vw] text-black hover:text-[#6F177D] duration-[0.3s]">
                <img src="Assets/chat.png" alt="chat">
                <p class="font-bold text-[1.2vw]">Open Chat</p>
            </a>
            <div class="flex gap-x-[0.8vw] items-center w-[68%] mx-auto mt-[4vw]">
                <img src="Assets/profile.png" alt="profile" class="w-[4.5vw]">
                <a href="#" class="block">
                    <p class="font-bold text-[1.2vw]">Ivanka Trump</p>
                    <p class="font-medium text-[0.8vw]">Time Lord</p>
                </a>
            </div>
        </div>
        <!-- content -->
        <div class="w-[80%] bg-[#F5F5F5] px-[0.78vw] flex flex-col gap-y-[1.5vh]">
            <!-- header -->
            <div
                class="w-full h-[10vh] bg-[#FFFFFF] mt-[1.5vh] px-[1.77vw] rounded-md flex justify-between items-center">
                <p class="text-[#6F177D] font-bold text-[1.5vw]">
                    <span class="text-black">Good evening!</span> Where can we take you today?
                </p>
                <p id="DigitalCLOCK" onload="showTime()" class="clock font-semibold text-[1vw]"></p>
            </div>
            <!-- body -->
            <div class="w-full h-[74vh] bg-[#FFFFFF] rounded-md bg-cover flex flex-col justify-between py-[2vh]"
                style="background-image: url(Assets/Location.png)">
                <div
                    class="w-[25%] mx-auto bg-white drop-shadow-xl rounded-md flex p-[0.5vw] gap-x-[0.3vw] justify-center items-center">
                    <img src="Assets/City Buildings.png" alt="City Buildings" class="w-[1.5vw] h-[2.5vh]">
                    <p class="text-black font-bold text-[1vw]">South Tangerang City</p>
                </div>
                <div class="w-[35%] mx-auto bg-white drop-shadow-xl rounded-md p-[0.7vw]">
                    <div class="font-bold text-[1.2vw]">Bookings Overview</div>
                    <div
                        class="flex justify-between items-center p-[0.5vw] border-[0.15vw] border-[#6F177D] rounded-md mb-[1.5vh] mt-[0.5vh]">
                        <div class="flex gap-x-[0.3vw] items-center">
                            <img src="Assets/Driver.png" alt="Driver" class="w-[0.8vw]">
                            <p class="font-medium text-[1vw]">MiBeau, Eric</p>
                        </div>
                        <div class="flex gap-x-[0.3vw] items-center">
                            <img src="Assets/time.png" alt="time" class="w-[0.8vw]">
                            <p class="font-medium text-[1vw]">12 Jan (09:00) - 13 Jan (17:00)</p>
                        </div>
                    </div>
                    <div
                        class="flex justify-between items-center p-[0.5vw] border-[0.15vw] border-[#6F177D] rounded-md">
                        <div class="flex gap-x-[0.3vw] items-center">
                            <img src="Assets/Driver.png" alt="Driver" class="w-[0.8vw]">
                            <p class="font-medium text-[1vw]">Marston, Winston</p>
                        </div>
                        <div class="flex gap-x-[0.3vw] items-center">
                            <img src="Assets/time.png" alt="time" class="w-[0.8vw]">
                            <p class="font-medium text-[1vw]">13 Jan (07:00) - 14 Jan (17:00)</p>
                        </div>
                    </div>
                </div>
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



    <script src="dashboard_js.js"></script>
</body>

</html>
