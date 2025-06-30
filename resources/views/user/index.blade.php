@extends("layouts.main")
@section("content")
<div
    class="w-full flex flex-col md:ml-[180px] xl:ml-[268px] lg:flex-row mainBody">
    <!-- Main Content md:w-2/4 lg:w-[706px] -->
    <div class="w-full lg:h-[194px] p-4">
        <!-- Create Post -->
        <div id="create-post-btn" class="bg-white p-4 mb-4 cursor-pointer">
            <span class="text-[#2C2C73] ml-auto text-[18px] font-bold">Create Post</span>
            <div
                class="flex items-start border border-[#E3E3E3] bg-[#FAFAFA] rounded-lg p-2 pt-1 mt-2 lg:w-[608px] h-[87px] xl:w-full mb-2">
                <img
                    alt="Profile Picture"
                    class="rounded-full w-8 h-8 mr-2 mt-1"
                    src="{{asset('assets/images/Ellipse 1201.svg')}}" />
                <textarea
                    class="w-full h-full p-2 pl-0 bg-[#FAFAFA] text-[#8D8D8D] text-[13px] outline-none resize-none"
                    placeholder="What's in your mind?"></textarea>
            </div>

            <div class="flex space-x-2">
                <button
                    class="flex items-center space-x-2 py-2 px-4 bg-[#FFBB0033] rounded-lg w-[109px]">
                    <img src="{{asset('assets/images/gallery-add.svg')}}" class="" />
                    <span class="text-[#FFBB00] font-semibold text-[13px]">
                        Gallery
                    </span>
                </button>
                <button
                    class="flex items-center space-x-2 py-2 px-4 bg-[#009DFF33] rounded-lg w-[109px]">
                    <img src="{{asset('assets/images/video-play.svg')}}" class="fas fa-image" />
                    <span class="text-[#009DFF] font-semibold text-[13px]">
                        Video
                    </span>
                </button>
            </div>
        </div>
        <!-- popup create post -->
        <div
            id="createPostModal"
            class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center mx-auto justify-center z-50 p-4">
            <div
                class="bg-[#FAFAFA] p-6 lg:p-8 rounded-lg shadow-md relative w-full md:w-[560px]">
                <h1
                    class="text-[#2C2C73] font-semibold xl:font-bold text-[24px] text-center mb-4">
                    Create Post
                </h1>
                <form class="space-y-4">
                    <div
                        id="create-post-btn"
                        class="bg-white p-4 mb-4 cursor-pointer">
                        <span class="text-[#2C2C73] ml-auto text-[18px] font-bold">Create Post</span>
                        <div
                            class="flex items-start border border-[#E3E3E3] bg-[#FAFAFA] rounded-lg p-2 pt-1 mt-2 w-full h-[87px] mb-2">
                            <img
                                alt="Profile Picture"
                                class="rounded-full w-8 h-8 mr-2 mt-1"
                                src="Assets/images/Ellipse 1201.svg" />
                            <textarea
                                class="w-full h-full p-2 pl-0 bg-[#FAFAFA] text-[#8D8D8D] text-[13px] outline-none resize-none"
                                placeholder="What's new?"></textarea>
                        </div>

                        <div class="flex space-x-2">
                            <button
                                class="flex items-center space-x-2 py-2 px-4 bg-[#FFBB0033] rounded-lg w-[109px]">
                                <img src="Assets/images/gallery-add.svg" class="" />
                                <span class="text-[#FFBB00]"> Gallery </span>
                            </button>
                            <button
                                class="flex items-center space-x-2 py-2 px-4 bg-[#009DFF33] rounded-lg w-[109px]">
                                <img
                                    src="Assets/images/video-play.svg"
                                    class="fas fa-image" />
                                <span class="text-[#009DFF]"> Video </span>
                            </button>
                        </div>
                    </div>

                    <div class="flex gap-2 md:gap-6 text-xs text-[#8B8B8B]">
                        <div class="inline-flex items-center">
                            <label class="flex items-center cursor-pointer relative">
                                <input
                                    type="checkbox"
                                    checked
                                    class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-[#D0D5DD] checked:bg-[#FAFAFA] checked:border-[#8B89D9]"
                                    id="check" />
                                <span
                                    class="absolute text-white opacity-0 peer-checked:opacity-100 top-2.5 left-2.5 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                                    <img src="{{asset('assets/images/tick.svg')}}" alt="" />
                                </span>
                                <span
                                    class="pl-1 md:pl-2 text-[16px] font-[500] text-[#8D8D8D]">My Clique</span>
                            </label>
                        </div>

                        <!--  -->

                        <div class="inline-flex items-center">
                            <label class="flex items-center cursor-pointer relative">
                                <input
                                    type="checkbox"
                                    class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-[#D0D5DD] checked:bg-[#FAFAFA] checked:border-[#8B89D9]"
                                    id="check" />
                                <span
                                    class="absolute text-white opacity-0 peer-checked:opacity-100 top-2.5 left-2.5 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                                    <img src="{{asset('assets/images/tick.svg')}}" alt="" />
                                </span>
                                <span
                                    class="pl-1 md:pl-2 text-[16px] font-[500] text-[#8D8D8D]">Custom Group</span>
                            </label>
                        </div>
                        <div class="inline-flex items-center">
                            <label class="flex items-center cursor-pointer relative">
                                <input
                                    type="checkbox"
                                    class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-[#D0D5DD] checked:bg-[#FAFAFA] checked:border-[#8B89D9]"
                                    id="check" />
                                <span
                                    class="absolute text-white opacity-0 peer-checked:opacity-100 top-2.5 left-2.5 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                                    <img src="{{asset('assets/images/tick.svg')}}" alt="" />
                                </span>
                                <span
                                    class="pl-1 md:pl-2 text-[16px] font-[500] text-[#8D8D8D]">Only Me</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <button
                            class="text-[15px] text-[#8B89D9] font-semibold mb-2"
                            type="button">
                            Set Post Visibility Time
                        </button>
                        <div class="flex gap-4 text-xs text-[#8B8B8B]">
                            <div class="flex flex-col w-1/2">
                                <label class="my-1 text-[15px] font-semibold" for="from">From</label>
                                <input
                                    class="border border-[#D9D9D9] rounded-md px-3 py-2 text-center h-[50px] text-[15px] placeholder:text-[#8D8D8D] focus:outline-none"
                                    id="from"
                                    type="date"
                                    placeholder="12:30 AM, 30 Jan 2025" />
                            </div>
                            <div class="flex flex-col w-1/2">
                                <label class="my-1 text-[15px] font-semibold" for="to">To</label>
                                <input
                                    class="border border-[#D9D9D9] rounded-md px-3 py-2 text-[15px] h-[50px] text-center text-[15px] placeholder:text-[#8D8D8D] focus:outline-none"
                                    id="to"
                                    type="date"
                                    placeholder="12:30 AM, 01 Feb 2025" />
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 text-xs text-[#8B8B8B]">
                        <div class="inline-flex items-center">
                            <label class="flex items-center cursor-pointer relative">
                                <input
                                    type="checkbox"
                                    class="peer h-5 w-5 cursor-pointer transition-all appearance-none rounded border border-[#D0D5DD] checked:bg-[#FAFAFA] checked:border-[#8B89D9]"
                                    id="check" />
                                <span
                                    class="absolute text-white opacity-0 peer-checked:opacity-100 top-2.5 left-2.5 transform -translate-x-1/2 -translate-y-1/2 pointer-events-none">
                                    <img src="{{asset('assets/images/tick.svg')}}" alt="" />
                                </span>
                                <span
                                    class="pl-1 md:pl-2 text-[16px] font-[500] text-[#8D8D8D]">Post For All Time</span>
                            </label>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-4 mt-6">
                        <button
                            class="h-[50px] w-full xl:w-[190px] border border-[#262664] text-[#2C2C73] rounded-md py-2 text-sm"
                            type="button"
                            onclick="closeModal()">
                            Cancel
                        </button>
                        <button
                            class="h-[50px] w-full xl:w-[190px] bg-[#6FCF97] text-[#FFFFFF] rounded-md py-2 text-sm"
                            type="submit">
                            Publish
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Posts -->
        <div class="bg-white mb-4">
            <div>
                <div
                    class="mb-4 border-b border-gray-200 dark:border-gray-200 pb-4">
                    <ul
                        class="flex flex-wrap -mb-px text-sm font-medium text-center pl-2 space-x-2"
                        id="tab-list">
                        <li class="me-2" role="presentation">
                            <button
                                class="tab-button inline-block p-4 rounded-t-lg text-[#2C2C73] pb-1 relative after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-12 after:-translate-x-1/2 after:h-[2px] after:bg-[#2C2C73] font-semibold text-[13px]"
                                data-target="styled-profile">
                                Popular
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="tab-button inline-block p-4 rounded-t-lg text-[#8D8D8D] pb-1 relative after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-12 after:-translate-x-1/2 after:h-[2px] after:bg-[#2C2C73] font-semibold text-[13px]"
                                data-target="styled-dashboard">
                                Recent
                            </button>
                        </li>
                        <li class="me-2" role="presentation">
                            <button
                                class="tab-button inline-block p-4 rounded-t-lg text-[#8D8D8D] pb-1 relative after:content-[''] after:absolute after:left-1/2 after:bottom-0 after:w-14 after:-translate-x-1/2 after:h-[2px] after:bg-[#2C2C73] font-semibold text-[13px]"
                                data-target="styled-settings">
                                My Posts
                            </button>
                        </li>
                    </ul>
                </div>
                <div id="tab-content">
                    <div class="tab-panel p-4 bg-white hidden" id="styled-profile">
                        <!-- 1 -->
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <img
                                    alt="Profile Picture"
                                    class="rounded-full w-12 h-12 mr-2"
                                    height="50"
                                    src="https://storage.googleapis.com/a1aa/image/Yov4tMvv7PItnxFz4XlAL6Jwt7VeyK5uzBijbcOipVA.jpg"
                                    width="50" />

                                <div class="flex flex-col pl-2 w-full">
                                    <div
                                        class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2 lg:gap-12">
                                        <span class="text-[18px] text-[#8B89D9]">
                                            Shawaizkhan.UIUX
                                        </span>
                                        <span
                                            class="text-[#FF4141] text-[13px] font-semibold">
                                            Expires: 12:00 AM, Dec 4, 2024
                                        </span>
                                    </div>
                                    <span
                                        class="text-[#8D8D8D] font-semibold text-[13px] mt-1">
                                        Dec 2, 2024 at 11:30 AM
                                    </span>
                                </div>
                            </div>
                            <p class="text-[#8D8D8D] text-[13px] mb-2">
                                Lorem ipsum dolor sit amet consectetur. Faucibus risus id
                                sit lacus amet. Enim tortor proin tellus euismod.
                            </p>
                            <img
                                alt="Post Image"
                                class="w-full rounded-lg"
                                height="300"
                                src="{{asset('assets/images/Rectangle 110668.svg')}}"
                                width="600" />
                        </div>
                        <!-- 2 -->
                        <div class="mb-4">
                            <div class="flex items-center mb-2">
                                <img
                                    alt="Profile Picture"
                                    class="rounded-full w-12 h-12 mr-2"
                                    height="50"
                                    src="https://storage.googleapis.com/a1aa/image/Yov4tMvv7PItnxFz4XlAL6Jwt7VeyK5uzBijbcOipVA.jpg"
                                    width="50" />
                                <!-- <div class="flex flex-col pl-2">
                      <span class="text-[18px] text-[#8B89D9]">
                        Shawaizkhan.UIUX
                      </span>
                      <span class="text-[#8D8D8D] text-[13px] font-semibold">
                        Dec 2, 2024 at 11:30 AM
                      </span>
                    </div> -->
                                <div class="flex flex-col pl-2 w-full">
                                    <div
                                        class="flex flex-col lg:flex-row items-start lg:items-center justify-between w-full gap-2 lg:gap-12">
                                        <span class="text-[18px] text-[#8B89D9]">
                                            Shawaizkhan.UIUX
                                        </span>
                                        <span
                                            class="text-[#FF4141] text-[13px] font-semibold">
                                            Expires: 12:00 AM, Dec 4, 2024
                                        </span>
                                    </div>
                                    <span
                                        class="text-[#8D8D8D] font-semibold text-[13px] mt-1">
                                        Dec 2, 2024 at 11:30 AM
                                    </span>
                                </div>
                            </div>
                            <p class="text-[#8D8D8D] text-[13px] mb-2">
                                Lorem ipsum dolor sit amet consectetur. Faucibus risus id
                                sit lacus amet. Enim tortor proin tellus euismod.
                            </p>
                            <img
                                alt="Post Image"
                                class="w-full rounded-lg"
                                height="300"
                                src="{{asset('assets/images/christopher-gower-m_HRfLhgABo-unsplash.jpg')}}"
                                width="600" />
                        </div>
                    </div>
                    <!-- 2 -->
                    <div
                        class="tab-panel p-4 bg-gray-50 dark:bg-gray-800 hidden"
                        id="styled-dashboard">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is the
                            <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab</strong>.
                        </p>
                    </div>
                    <!-- 3 -->
                    <div
                        class="tab-panel p-4 bg-gray-50 dark:bg-gray-800 hidden"
                        id="styled-settings">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is the
                            <strong class="font-medium text-gray-800 dark:text-white">Settings tab</strong>.
                        </p>
                    </div>
                    <!-- 4 -->
                    <div
                        class="tab-panel p-4 bg-gray-50 dark:bg-gray-800 hidden"
                        id="styled-contacts">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            This is the
                            <strong class="font-medium text-gray-800 dark:text-white">Contacts tab</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- <hr class="border-gray-300 h-2" /> -->
        </div>
    </div>
    <!-- Right Sidebar md:w-1/4 lg:w-[408px] -->
    <div class="w-full xl:max-w-[408px] p-4 md:pl-0">
        <!-- Upcoming Event -->
        <div class="bg-white p-4 mb-4">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-[18px] text-[#2C2C73]">
                    Upcoming Event
                </span>
                <a class="text-[#8D8D8D] font-semibold text-[13px]" href="#">
                    See All
                </a>
            </div>
            <img
                alt="Event Image"
                class="w-full rounded-lg mb-2"
                height="150"
                src="{{asset('assets/images/Rectangle 110662.svg')}}"
                width="300" />
            <div class="flex flex-row gap-2 items-center pt-2">
                <div
                    class="flex flex-col items-center py-1 px-2 rounded-lg shadow-md w-[40px] h-[40px]">
                    <span class="text-[#2C2C73] text-[14px] font-bold"> 17 </span>
                    <span class="text-[10px] text-[#2C2C73]">Jun</span>
                </div>
                <div class="flex flex-col">
                    <p class="font-semibold text-[13px] text-[#8D8D8D]">
                        Event Name
                    </p>
                    <p class="text-[#8D8D8D] text-[13px]">Location</p>
                </div>
            </div>
        </div>
        <!-- My Tasks -->
        <div class="bg-white p-4 mb-4">
            <span class="font-bold text-[#2C2C73] text-[15px]"> My Tasks </span>
            <div class="mt-2">
                <span class="text-[#8B89D9] text-[12px] pt-1">08:00 AM - 09:00 AM</span>
                <div
                    class="flex items-center mb-2 bg-[#FAFAFA] border border-[#E3E3E3] pl-2 py-2 rounded-xl">
                    <div
                        class="bg-[#70D997] w-[50px] h-[48px] flex flex-col items-center text-green-600 rounded-lg p-2"
                        style="font-family: Poppins, sans-serif">
                        <span class="text-[14px] font-bold text-[#FFFFFFD4]">
                            17
                        </span>
                        <span class="text-[10px] text-[#FFFFFFD4]">Jun</span>
                    </div>
                    <span class="px-3">
                        <svg
                            width="5"
                            height="26"
                            viewBox="0 0 5 26"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect
                                x="1.57812"
                                y="2.36377"
                                width="1.57576"
                                height="23.6364"
                                rx="0.787879"
                                fill="url(#paint0_linear_6232_3649)"
                                fill-opacity="0.7" />
                            <circle
                                cx="2.36364"
                                cy="2.36364"
                                r="2.36364"
                                fill="#2C2C73" />
                            <defs>
                                <linearGradient
                                    id="paint0_linear_6232_3649"
                                    x1="2.366"
                                    y1="2.36377"
                                    x2="2.366"
                                    y2="26.0001"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7D72FC" />
                                    <stop
                                        offset="1"
                                        stop-color="#7D72FC"
                                        stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <div>
                        <p class="text-[14px] text-[#8B89D9]">Name</p>
                        <p class="text-[#8D8D8D] text-[12px]">Bring Dinner Meal</p>
                    </div>
                </div>

                <span class="text-[#8B89D9] text-[12px] pt-1">08:00 AM - 09:00 AM</span>
                <div
                    class="flex items-center mb-2 bg-[#FAFAFA] border border-[#E3E3E3] pl-2 py-2 rounded-xl">
                    <div
                        class="bg-[#70D997] w-[50px] h-[48px] flex flex-col items-center text-green-600 rounded-lg p-2"
                        style="font-family: Poppins, sans-serif">
                        <span class="text-[14px] font-bold text-[#FFFFFFD4]">
                            17
                        </span>
                        <span class="text-[10px] text-[#FFFFFFD4]">Jun</span>
                    </div>
                    <span class="px-3">
                        <svg
                            width="5"
                            height="26"
                            viewBox="0 0 5 26"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect
                                x="1.57812"
                                y="2.36377"
                                width="1.57576"
                                height="23.6364"
                                rx="0.787879"
                                fill="url(#paint0_linear_6232_3649)"
                                fill-opacity="0.7" />
                            <circle
                                cx="2.36364"
                                cy="2.36364"
                                r="2.36364"
                                fill="#2C2C73" />
                            <defs>
                                <linearGradient
                                    id="paint0_linear_6232_3649"
                                    x1="2.366"
                                    y1="2.36377"
                                    x2="2.366"
                                    y2="26.0001"
                                    gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7D72FC" />
                                    <stop
                                        offset="1"
                                        stop-color="#7D72FC"
                                        stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <div>
                        <p class="text-[14px] text-[#8B89D9]">Name</p>
                        <p class="text-[#8D8D8D] text-[12px]">Lorem ipsum dolor</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chats -->
        <div class="bg-white p-4 rounded-lg">
            <div class="flex justify-between items-center mb-4">
                <span class="text-[#2C2C73] font-bold text-[18px]"> Chats </span>
                <a class="text-[#8D8D8D] text-[13px] font-semibold" href="#">
                    See All
                </a>
            </div>
            <!-- 1 -->
            <div
                class="flex items-center mb-2 border border-[1px] p-2 px-3 rounded-md">
                <div>
                    <img src="{{asset('assets/images/chatboy.svg')}}" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[10px] font-semibold">
                        2 min ago
                    </span>
                    <div
                        class="bg-[#4B96F5] text-[#FFFFFF] ml-auto mt-1 h-[18px] w-[18px] text-[12px] text-center items-center rounded-full">
                        3
                    </div>
                </div>
            </div>
            <!-- 2 -->
            <div
                class="flex items-center mb-2 border border-[1px] p-2 px-3 rounded-md">
                <div>
                    <img src="{{asset('assets/images/chatboy.svg')}}" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[10px] font-semibold">
                        2 min ago
                    </span>
                    <div
                        class="bg-[#4B96F5] text-[#FFFFFF] ml-auto mt-1 h-[18px] w-[18px] text-[12px] text-center items-center rounded-full">
                        3
                    </div>
                </div>
            </div>
            <!-- 3 -->
            <div
                class="flex items-center mb-2 border border-[1px] p-2 px-3 rounded-md">
                <div>
                    <img src="{{asset('assets/images/chatboy.svg')}}" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[10px] font-semibold">
                        2 min ago
                    </span>
                    <div
                        class="bg-[#4B96F5] text-[#FFFFFF] ml-auto mt-1 h-[18px] w-[18px] text-[12px] text-center items-center rounded-full">
                        3
                    </div>
                </div>
            </div>
            <!-- 4 -->
            <div
                class="flex items-center mb-2 border border-[1px] p-2 px-3 rounded-md">
                <div>
                    <img src="{{asset('assets/images/chatboy.svg')}}" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[10px] font-semibold">
                        2 min ago
                    </span>
                    <div
                        class="bg-[#4B96F5] text-[#FFFFFF] ml-auto mt-1 h-[18px] w-[18px] text-[12px] text-center items-center rounded-full">
                        3
                    </div>
                </div>
            </div>
            <!-- 5 -->
            <div
                class="flex items-center mb-2 border border-[1px] p-2 px-3 rounded-md">
                <div>
                    <img src="{{asset('assets/images/chatboy.svg')}}" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[10px] font-semibold">
                        2 min ago
                    </span>
                    <div
                        class="bg-[#4B96F5] text-[#FFFFFF] ml-auto mt-1 h-[18px] w-[18px] text-[12px] text-center items-center rounded-full">
                        3
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("scripts")
<script>
    // Open modal when "Create Post" button is clicked
    document
        .getElementById("create-post-btn")
        .addEventListener("click", function() {
            document.getElementById("createPostModal").classList.remove("hidden");
        });

    // Close modal when cancel button is clicked
    function closeModal() {
        document.getElementById("createPostModal").classList.add("hidden");
    }

    // Close modal if user clicks outside the modal area
    window.onclick = function(event) {
        const modal = document.getElementById("createPostModal");
        if (event.target === modal) {
            closeModal();
        }
    };
    // for side bar popup //
    const body = document.body;
    const popup = document.getElementById("popup");
    const openPopup = document.getElementById("open-popup");
    const closePopup = document.getElementById("close-popup");

    openPopup.addEventListener("click", () => {
        popup.classList.remove("hidden");
        body.classList.add("overflow-hidden");
    });

    closePopup.addEventListener("click", () => {
        popup.classList.add("hidden");
        body.classList.remove("overflow-hidden");
    });

    window.onclick = function(event) {
        if (
            event.target === popup ||
            event.target.id === "addMemberModal" ||
            event.target.id === "createListPopup"
        ) {
            closeAllModals();
        }
    };

    function openAddMemberModal() {
        document.getElementById("addMemberModal").classList.remove("hidden");
        body.classList.add("overflow-hidden");
    }

    function closeAddMemberModal() {
        document.getElementById("addMemberModal").classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }

    function openCreateGroupModal() {
        document.getElementById("createListPopup").classList.remove("hidden");
        body.classList.add("overflow-hidden");
    }

    function closeCreateGroupModal() {
        document.getElementById("createListPopup").classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }

    function closeAllModals() {
        popup.classList.add("hidden");
        document.getElementById("addMemberModal").classList.add("hidden");
        document.getElementById("createListPopup").classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }
    // ============== //
    document
        .getElementById("menu-btn")
        .addEventListener("click", function() {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    // ========//
    function openTab(evt, tabName) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tab-content");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].classList.add("hidden");
        }
        tablinks = document.getElementsByClassName("tab-link");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove(
                "text-blue-600",
                "border-blue-600",
                "dark:text-blue-500",
                "dark:border-blue-500"
            );
        }
        document.getElementById(tabName).classList.remove("hidden");
        evt.currentTarget.classList.add(
            "text-blue-600",
            "border-blue-600",
            "dark:text-blue-500",
            "dark:border-blue-500"
        );
    }
    // ================//
    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll(".tab-button");
        const panels = document.querySelectorAll(".tab-panel");

        function activateTab(targetId) {
            // Hide all panels
            panels.forEach((panel) => panel.classList.add("hidden"));

            // Remove active styles from all tabs
            tabs.forEach((tab) => {
                tab.classList.remove("text-[#2C2C73]", "after:bg-[#2C2C73]");
                tab.classList.add("text-[#8D8D8D]");
            });

            // Show the selected panel
            const activePanel = document.getElementById(targetId);
            if (activePanel) {
                activePanel.classList.remove("hidden");
            }

            // Highlight the active tab with border bottom
            const activeTab = document.querySelector(
                `[data-target="${targetId}"]`
            );
            if (activeTab) {
                activeTab.classList.add("text-[#2C2C73]");
                activeTab.classList.remove("text-[#8D8D8D]");

                // Add border bottom dynamically
                activeTab.classList.add("after:bg-[#2C2C73]");
            }
        }

        // Set default active tab (first one)
        if (tabs.length > 0) {
            activateTab(tabs[0].getAttribute("data-target"));
        }

        // Add click event listeners
        tabs.forEach((tab) => {
            tab.addEventListener("click", function() {
                activateTab(this.getAttribute("data-target"));
            });
        });
    });
    // ================ notification =============== //
    document.addEventListener("DOMContentLoaded", function() {
        const notifications = [{
                id: 1,
                name: "Zeb Lee",
                action: "added a post",
                time: "Today at 15:31",
                message: "You can see now! -",
                img: "assets/images/notific id-1.svg",
                unread: true,
            },
            {
                id: 2,
                name: "Daniel Marcus",
                action: "sent a message",
                time: "Yesterday at 15:31",
                message: "Hey! how are you?....-",
                img: "assets/images/notific id-2.svg",
                unread: false,
            },
            {
                id: 3,
                name: "Sophie Smith",
                action: "commented on the photo",
                time: "Today at 16:45",
                message: "Great shot! 😍 -",
                img: "assets/images/notific id-2.svg",
                unread: false,
            },
            {
                id: 4,
                name: "Alex Johnson",
                action: "shared a link",
                time: "Today at 17:20",
                message: "Check this out! 🚀 -",
                img: "assets/images/notific id-1.svg",
                unread: true,
            },
            {
                id: 5,
                name: "Emma Brown",
                action: "liked a post",
                time: "Today at 18:12",
                message: "Interesting content! 👍 -",
                img: "assets/images/notific id-2.svg",
                unread: false,
            },
            {
                id: 6,
                name: "Oliver White",
                action: "tagged you in a photo",
                time: "Today at 19:30",
                message: "Remember this moment! 📸 -",
                img: "assets/images/notific id-2.svg",
                unread: false,
            },
            {
                id: 7,
                name: "Mia Green",
                action: "sent a video",
                time: "Today at 20:05",
                message: "Watch till the end! 🎥 -",
                img: "assets/images/notific id-1.svg",
                unread: true,
            },
            {
                id: 8,
                name: "Liam Wilson",
                action: "joined an event",
                time: "Today at 21:50",
                message: "Save the date! 📅 -",
                img: "assets/images/notific id-2.svg",
                unread: false,
            },
        ];

        function initNotificationComponent(container) {
            const notificationIcon =
                container.querySelector(".notification-icon");
            const notificationBox = container.querySelector(".notification-box");
            const notificationList =
                container.querySelector(".notification-list");

            function renderNotifications() {
                notificationList.innerHTML = "";
                notifications.forEach((notification) => {
                    const div = document.createElement("div");
                    div.className = `flex items-center p-2 text-[#8D8D8D] cursor-pointer ${
                notification.unread ? "bg-[#0062FF33]" : "bg-[#FFFFFF]"
              }`;
                    div.innerHTML = `
                    <img src="${notification.img}" class="w-11 h-11 rounded-full mr-2">
                    <div class="flex-1">
                        <p class="text-[14px]"><span class="font-[600]">${notification.name}</span> ${notification.action}</p>
                     <div class="flex flex-row  gap-2 ">
                      <p class="text-[#8D8D8D]  text-[13px] font-[600]">${notification.message}</p>
                      <p class="text-[#8D8D8D]  text-[11px]">${notification.time}</p>
                    </div>
                    </div>
                `;
                    div.addEventListener("click", () => {
                        notification.unread = false;
                        renderNotifications();
                    });
                    notificationList.appendChild(div);
                });
            }

            notificationIcon.addEventListener("click", (event) => {
                event.stopPropagation();
                notificationBox.classList.toggle("hidden");

                notificationIcon.src = notificationBox.classList.contains("hidden") ?
                    "Assets/images/nav-7.svg" :
                    "Assets/images/nav 7-green.svg";
            });

            document.addEventListener("click", (event) => {
                if (
                    !notificationBox.contains(event.target) &&
                    event.target !== notificationIcon
                ) {
                    notificationBox.classList.add("hidden");
                    notificationIcon.src = "Assets/images/nav-7.svg";
                }
            });

            renderNotifications();
        }

        document
            .querySelectorAll(".notification-container")
            .forEach(initNotificationComponent);
    });
</script>
@endpush