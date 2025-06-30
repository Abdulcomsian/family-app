@extends("layouts.main")
@section("content")
<!-- Main content -->
<div class="container p-4 flex-1 mx-auto md:ml-[180px] xl:ml-[268px]">
    <!-- top content -->
    <div
        class="flex flex-col md:flex-row justify-between items-center bg-white p-3 px-5 rounded shadow mb-4">
        <button
            id="openModelBtn"
            class="flex justify-center items-center gap-4">
            <h1 class="text-[18px] font-bold text-[#2C2C73]">
                Create New Event
            </h1>
            <svg
                width="20"
                height="20"
                viewBox="0 0 24 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M8 2.5V5.5"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M16 2.5V5.5"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M3.5 9.59009H20.5"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M19.21 16.27L15.6701 19.81C15.5301 19.95 15.4 20.21 15.37 20.4L15.18 21.75C15.11 22.24 15.45 22.5801 15.94 22.5101L17.29 22.32C17.48 22.29 17.75 22.16 17.88 22.02L21.4201 18.4801C22.0301 17.8701 22.3201 17.1601 21.4201 16.2601C20.5301 15.3701 19.82 15.66 19.21 16.27Z"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M18.7002 16.78C19.0002 17.86 19.8402 18.7 20.9202 19"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M12 22.5H8C4.5 22.5 3 20.5 3 17.5V9C3 6 4.5 4 8 4H16C19.5 4 21 6 21 9V12.5"
                    stroke="#2C2C73"
                    stroke-width="1.5"
                    stroke-miterlimit="10"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M11.9955 14.2H12.0045"
                    stroke="#2C2C73"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M8.29431 14.2H8.30329"
                    stroke="#2C2C73"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
                <path
                    d="M8.29431 17.2H8.30329"
                    stroke="#2C2C73"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>

        <button
            class="bg-[#FFBB0033] text-yellow-800 px-4 py-2 rounded rounded-md w-[194px] h-[40px]"
            id="openAlbumModalBtn">
            <div class="flex items-center justify-center gap-2">
                <svg
                    width="21"
                    height="21"
                    viewBox="0 0 24 25"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.97 1.5H18.03C17.16 1.5 16.52 1.86 16.23 2.5C16.07 2.79 16 3.13 16 3.53V6.47C16 7.74 16.76 8.5 18.03 8.5H20.97C21.37 8.5 21.71 8.43 22 8.27C22.64 7.98 23 7.34 23 6.47V3.53C23 2.26 22.24 1.5 20.97 1.5ZM21.91 5.43C21.81 5.53 21.66 5.6 21.5 5.61H20.09V6.12L20.1 7C20.09 7.17 20.03 7.31 19.91 7.43C19.81 7.53 19.66 7.6 19.5 7.6C19.17 7.6 18.9 7.33 18.9 7V5.6L17.5 5.61C17.17 5.61 16.9 5.33 16.9 5C16.9 4.67 17.17 4.4 17.5 4.4L18.38 4.41H18.9V3.01C18.9 2.68 19.17 2.4 19.5 2.4C19.83 2.4 20.1 2.68 20.1 3.01L20.09 3.72V4.4H21.5C21.83 4.4 22.1 4.67 22.1 5C22.09 5.17 22.02 5.31 21.91 5.43Z"
                        fill="#FFBB00" />
                    <path
                        d="M9.00012 10.8801C10.3146 10.8801 11.3801 9.81456 11.3801 8.50012C11.3801 7.18568 10.3146 6.12012 9.00012 6.12012C7.68568 6.12012 6.62012 7.18568 6.62012 8.50012C6.62012 9.81456 7.68568 10.8801 9.00012 10.8801Z"
                        fill="#FFBB00" />
                    <path
                        d="M20.97 8.5H20.5V13.11L20.37 13C19.59 12.33 18.33 12.33 17.55 13L13.39 16.57C12.61 17.24 11.35 17.24 10.57 16.57L10.23 16.29C9.52 15.67 8.39 15.61 7.59 16.15L3.85 18.66C3.63 18.1 3.5 17.45 3.5 16.69V8.31C3.5 5.49 4.99 4 7.81 4H16V3.53C16 3.13 16.07 2.79 16.23 2.5H7.81C4.17 2.5 2 4.67 2 8.31V16.69C2 17.78 2.19 18.73 2.56 19.53C3.42 21.43 5.26 22.5 7.81 22.5H16.19C19.83 22.5 22 20.33 22 16.69V8.27C21.71 8.43 21.37 8.5 20.97 8.5Z"
                        fill="#FFBB00" />
                </svg>
                <span class="text-[#FFBB00] text-[13px] font-semibold">Create new album</span>
            </div>
        </button>
    </div>

    <!-- =========Create new event popup=========== -->
    <div
        id="albumModalWrapper"
        class="fixed inset-0 bg-black bg-opacity-40 hidden justify-center items-center z-50 p-4">
        <div
            class="bg-[#FAFAFA] rounded-2xl w-full max-w-md p-8 relative lg:max-w-[577px]">
            <button
                id="closeAlbumModalBtn"
                class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl">
                <!-- &times; -->
            </button>

            <h1
                class="text-[#2C2C73] font-semibold text-[24px] text-center mb-6">
                Add Album
            </h1>

            <form class="space-y-6 lg:w-[419px] mx-auto">
                <div>
                    <label
                        for="albumNameInput"
                        class="block mb-2 text-[#8D8D8D] text-[15px] font-semibold">
                        Name
                    </label>
                    <input
                        id="albumNameInput"
                        type="text"
                        class="w-full rounded-lg border border-[#E3E3E3] px-4 py-3 text-base text-[#2e2e6e] placeholder:text-[#a0a0a0] focus:outline-none focus:ring-2 focus:ring-[#8a8a8a]" />
                </div>
                <div>
                    <label
                        for="albumPhotosUpload"
                        class="block mb-2 text-[#8D8D8D] text-[15px] font-semibold">
                        Add Photos
                    </label>
                    <button
                        type="button"
                        id="albumPhotosUpload"
                        class="w-full bg-[#8B89D9] text-[#FFFFFF] text-[16px] font-semibold rounded-lg py-3">
                        Upload
                    </button>
                </div>
                <div class="flex justify-between mt-6 gap-4">
                    <button
                        type="button"
                        id="cancelAlbumModalBtn"
                        class="flex-1 border border-[#2C2C73] text-[#2C2C73] text-[16px] font-semibold rounded-lg py-3">
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="flex-1 bg-[#6FD997] text-[#FFFFFF] text-[16px] font-semibold rounded-lg py-3">
                        Add
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div
        id="eventModal"
        class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
        <!-- Modal Content -->
        <div
            class="bg-[#FAFAFA] w-[95%] max-w-4xl max-h-[95vh] overflow-y-auto p-6 lg:px-16 rounded-lg shadow-xl relative">
            <!-- Close Button -->
            <button
                id="closeModalBtn"
                class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">
                &times;
            </button>

            <h2 class="text-[24px] font-bold text-center text-[#2C2C73] mb-6">
                Create Event
            </h2>

            <form method="POST" action="{{route('create.event') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Event Name</label>
                    <input
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md"
                        type="text" name="name" />
                </div>

                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Image</label>
                    <input
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md bg-white"
                        type="file"
                        name="image_url"
                        accept="image/*" />
                </div>
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Date</label>
                    <input
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md placeholder-[#8D8D8D]"
                        placeholder="MM/DD/YY"
                        type="date" name="date" />
                </div>
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Categories</label>
                    <select
                        name="category"
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md text-[#8D8D8D]">
                        <option value="">Select</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Family">Family</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">RSVP Date</label>
                    <input
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md placeholder-[#8D8D8D]"
                        placeholder="mm/dd/yy"
                        type="date" name="rsvp_date" />
                </div>
                <!-- <div class="mb-4">
                            <label class="block text-[15px] font-[600] text-[#8D8D8D]">Assign Event</label>
                            <select
                                name="assigned_event"
                                class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md text-[#8D8D8D]">
                                <option>Select</option>
                            </select>
                        </div> -->
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Assign Event</label>
                    <select
                        name="assigned_event"
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md text-[#8D8D8D]">
                        <option value="">Select</option>
                        <option value="Ali">Ali</option>
                        <option value="Sara">Sara</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Owner</label>
                    <input
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md"
                        type="text" name="owner" />
                </div>
                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Event Description</label>
                    <textarea
                        class="w-full mt-2 p-2 border border-[#E3E3E3] rounded-md"
                        rows="4" name="description"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-[15px] font-[600] text-[#8D8D8D]">Invite Clique</label>
                    <select
                        name="invite_clique[]"
                        multiple
                        class="w-full mt-2 p-2 border border-[#E3E3E3] h-[50px] rounded-md text-[#8D8D8D]">
                        @foreach ($members as $member)
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                    <small class="text-gray-500">Hold Ctrl (Cmd on Mac) to select multiple</small>
                </div>


                <!-- Invite Cards -->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
                    <!-- Repeat this block for each person -->
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center p-2 border rounded-md gap-2">
                        <img
                            alt="Profile picture"
                            class="w-12 h-12 mr-2"
                            src="Assets/images/chatboy.svg" />
                        <div>
                            <div
                                class="flex flex-row gap-6 justify-between items-center">
                                <p class="text-gray-700">Siblings</p>
                                <div class="flex items-center">
                                    <img
                                        src="Assets/images/Ellipse-1.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full" />
                                    <img
                                        src="Assets/images/Ellipse-2.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-3.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                    <img
                                        src="Assets/images/Ellipse-4.svg"
                                        alt="Profile picture"
                                        class="w-6 h-6 rounded-full -ml-2" />
                                </div>
                            </div>
                            <button
                                class="bg-[#8B89D9] w-full text-[#FFFFFF] h-[26px] px-2 rounded-full mt-1">
                                Invite
                            </button>
                        </div>
                    </div>

                    <!-- Copy above block to show more invites -->
                    <!-- You already had 9, so just copy-paste as needed -->
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-between gap-8">
                    <button
                        type="button"
                        id="cancelModalBtn"
                        class="bg-white w-full text-blue-900 border border-blue-900 px-6 py-2 rounded-md">
                        Cancel
                    </button>
                    <button
                        type="submit"
                        class="bg-[#6FD997] w-full text-white px-6 py-2 rounded-md">
                        Create Event
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- ==================== -->

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-4">
        <!-- Left section for event details -->
        <div class="lg:col-span-2 bg-white p-4 rounded shadow w-full">
            <img
                src="Assets/images/Rectangle 110662.svg"
                alt="A couple holding hands with a bouquet of flowers in the background"
                class="w-full rounded-sm" />

            <div
                class="mt-4 flex flex-row justify-between items-center border-b border-[#E3E3E3] pb-3 mb-2">
                <div>
                    <h2 class="text-[18px] font-semibold text-[#8B89D9]">
                        Event Name
                    </h2>
                    <p
                        class="text-[#8D8D8D] font-semibold tracking-[-0.28px] text-[13px]">
                        Date & Time
                    </p>
                </div>
                <!--  -->
                <div class="flex items-center mt-2">
                    <img
                        src="Assets/images/Ellipse-1.svg"
                        alt="Profile picture"
                        class="w-10 h-10 rounded-full" />
                    <img
                        src="Assets/images/Ellipse-2.svg"
                        alt="Profile picture"
                        class="w-10 h-10 rounded-full -ml-5" />
                    <img
                        src="Assets/images/Ellipse-3.svg"
                        alt="Profile picture"
                        class="w-10 h-10 rounded-full -ml-5" />
                    <img
                        src="Assets/images/Ellipse-4.svg"
                        alt="Profile picture"
                        class="w-10 h-10 rounded-full -ml-5" />
                    <img
                        src="Assets/images/Ellipse-5.svg"
                        alt="Profile picture"
                        class="w-10 h-10 rounded-full -ml-5" />

                    <!-- Last circle with overlay for +16 -->
                    <div class="relative -ml-5">
                        <img
                            src="Assets/images/Ellipse-6.svg"
                            alt="More profiles"
                            class="w-10 h-10 rounded-full opacity-100" />
                        <span
                            class="absolute inset-0 flex items-center justify-center text-white font-bold text-[12px] bg-black bg-opacity-10 rounded-full">
                            +16
                        </span>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 md:border-r md:pr-4">
                    <h2 class="text-[15px] font-semibold text-[#8B89D9] mb-3 mt-1">
                        Description
                    </h2>
                    <p
                        class="text-[#8D8D8D] text-[13px] tracking-[-0.28px] mb-6 max-w-[409px]">
                        Lorem ipsum dolor sit amet consectetur. Diam vulputate id ac
                        consectetur placerat sit accumsan. Fermentum sit pharetra
                        faucibus et tempus suscipit. Elementum vel ut enim quam
                        ullamcorper semper maecenas. Ultrices id id maecenas integer
                        pretium pulvinar porta nascetur nunc. Cras arcu quis enim
                        nisl. Enim faucibus ornare fusce eu sed leo at fermentum.
                        Tellus et id elementum pellentesque ullamcorper eget. Dictum
                        libero eget in cras in pellentesque erat.
                    </p>
                    <!--  -->
                    <h3 class="text-[15px] font-semibold text-[#8B89D9] mb-4">
                        Owner
                    </h3>
                    <div class="flex items-center mb-6">
                        <img
                            alt="Profile picture of the creator"
                            class="w-[32px] h-[32px] rounded-full mr-3"
                            src="Assets/images/owner.svg" />
                        <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                    </div>
                    <!--  -->
                    <div>
                        <h3 class="text-[15px] font-semibold text-[#8B89D9] mb-4">
                            Invited
                        </h3>
                        <div class="grid grid-cols-3 gap-4 mb-2">
                            <!-- Repeat this block for each member -->
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <!--  -->
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <div class="flex items-center">
                                <img
                                    alt="Profile picture of a member"
                                    class="w-[32px] h-[32px] rounded-full mr-4"
                                    src="Assets/images/owner.svg" />
                                <span class="text-[#8D8D8D] text-[13px] font-semibold">Name</span>
                            </div>
                            <!-- End of member block -->
                        </div>
                    </div>
                    <!--  -->
                </div>
                <!--  -->
                <hr class="md:hidden" />
                <div class="-ml-2">
                    <div class="flex justify-between items-center mb-4">
                        <h2
                            class="font-semibold text-[15px] tracking-[-0.28px] text-[#8B89D9]">
                            Tasks
                        </h2>
                        <!-- <a class="text-[#2C2C73] text-[13px] font-semibold" href="#"
                    >+Add Task</a
                  > -->
                        <!-- Add Task Button -->
                        <button
                            id="openModalBtn"
                            class="text-[#2C2C73] text-[13px] font-semibold">
                            +Add Task
                        </button>
                    </div>
                    <!-- Modal Background -->
                    <div
                        id="taskModal"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
                        <!-- Modal Content -->
                        <div
                            class="bg-[#FAFAFA] rounded-lg px-16 py-6 w-[90%] max-w-[550px] shadow-xl relative">
                            <h2
                                class="text-[24px] font-[700] text-center text-[24px] text-[#2C2C73] mb-6">
                                Add New Task
                            </h2>
                            <form method="POST" action="{{ route('create.task') }}">
                                @csrf
                                <div class="mb-4">
                                    <!-- Task Details -->
                                    <label for="textDetails" class="block text-[15px] font-[600] text-[#8D8D8D] mb-1">Task Details</label>
                                    <textarea
                                        id="taskDetails"
                                        name="description"
                                        class="w-full border border-[#E3E3E3] rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-2"
                                        rows="3"></textarea>

                                    <!-- Assign Members -->
                                    <div class="mb-4">
                                        <label class="block text-[15px] text-[#8D8D8D] font-[600] mb-1">Assign Members</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                            @foreach($members as $member)
                                            <div class="flex items-center border border-[#E3E3E3] rounded-lg p-2">
                                                <img
                                                    alt="Profile picture"
                                                    class="w-12 h-12 mr-2 rounded-full object-cover"
                                                    src="{{ $member->image_url ?? asset('Assets/images/chatboy.svg') }}" />
                                                <div>
                                                    <p class="font-semibold text-[#000000] text-[14px] font-[600]">{{ $member->name }}</p>
                                                    <label class="inline-flex items-center mt-1">
                                                        <input type="checkbox" name="assign_task[]" value="{{ $member->id }}" class="form-checkbox h-4 w-4 text-blue-600">
                                                        <span class="ml-2 text-sm text-gray-600">Assign</span>
                                                    </label>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Submit Buttons -->
                                <div class="flex justify-between">
                                    <button
                                        id="closeModalBtnB"
                                        class="w-1/2 bg-white text-[#262664] text-[16px] font-[600] py-2 px-4 rounded-lg border border-[#262664] focus:outline-none focus:shadow-outline mr-2"
                                        type="button">
                                        Cancel
                                    </button>
                                    <button
                                        class="w-1/2 bg-[#6FD997] text-[#FFFFFF] text-[16px] font-[600] py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline ml-2"
                                        type="submit">
                                        Assign
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!--  -->
                    <!-- <div
                  class="bg-[#FAFAFA] p-8 rounded-lg shadow-md w-full max-w-md"
                >
                  <button
                    id="closeCreateListPopup"
                    class="absolute top-2 right-2 text-[#8D8D8D]"
                  >
                    &times;
                  </button>

                  <h1
                    class="text-2xl font-[700] text-center text-[24px] text-[#2C2C73]"
                  >
                    Create Lists
                  </h1>
                  <div class="mb-4">
                    <label
                      class="block text-[15px] text-[#8D8D8D] font-[600] mb-2"
                      for="name"
                      >List Name</label
                    >
                    <input
                      class="w-full lg:h-[50px] border border-[#E3E3E3] rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                      id="name"
                      type="text"
                    />
                  </div>
                  
                  
                </div> -->
                    <!--  -->
                    <div class="space-y-4">
                        <!-- Repeat this block for each task -->
                        <div class="flex items-center flex-col">
                            <div class="text-[12px] text-[#8B89D9] mr-auto">
                                08:00 AM - 09:00 AM
                            </div>
                            <div
                                class="flex flex-row bg-[#FAFAFA] px-2 py-2 rounded-lg gap-2 border-[#E3E3E3] border lg:w-[208px]">
                                <div
                                    class="text-center bg-[#6FD997] flex items-center flex-col justify-center text-[#FFFFFF] rounded-lg w-[50px] h-[48px]"
                                    style="font-family: Poppins, sans-serif">
                                    <div class="text-[14px] font-bold">17</div>
                                    <div class="text-[10px] font-normal tracking-[-0.28px]">
                                        Jun
                                    </div>
                                </div>
                                <img src="Assets/images/tinko-green.svg" alt="" />
                                <div class="flex flex-col">
                                    <div class="text-[14px] text-[#8B89D9]">Name</div>
                                    <div class="text-[12px] text-[#8D8D8D]">
                                        Bring Dinner Meal
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center flex-col">
                            <div class="text-[12px] text-[#8B89D9] mr-auto">
                                08:00 AM - 09:00 AM
                            </div>
                            <div
                                class="flex flex-row bg-[#FAFAFA] px-2 py-2 rounded-lg gap-2 border-[#E3E3E3] border lg:w-[208px]">
                                <div
                                    class="text-center bg-[#6FD997] flex items-center flex-col justify-center text-[#FFFFFF] rounded-lg w-[50px] h-[48px]"
                                    style="font-family: Poppins, sans-serif">
                                    <div class="text-[14px] font-bold">17</div>
                                    <div class="text-[10px] font-normal tracking-[-0.28px]">
                                        Jun
                                    </div>
                                </div>
                                <img src="Assets/images/tinko-green.svg" alt="" />
                                <div class="flex flex-col">
                                    <div class="text-[14px] text-[#8B89D9]">Name</div>
                                    <div class="text-[12px] text-[#8D8D8D]">
                                        Bring Dinner Meal
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center flex-col">
                            <div class="text-[12px] text-[#8B89D9] mr-auto">
                                08:00 AM - 09:00 AM
                            </div>
                            <div
                                class="flex flex-row bg-[#FAFAFA] px-2 py-2 rounded-lg gap-2 border-[#E3E3E3] border lg:w-[208px]">
                                <div
                                    class="text-center bg-[#6FD997] flex items-center flex-col justify-center text-[#FFFFFF] rounded-lg w-[50px] h-[48px]"
                                    style="font-family: Poppins, sans-serif">
                                    <div class="text-[14px] font-bold">17</div>
                                    <div class="text-[10px] font-normal tracking-[-0.28px]">
                                        Jun
                                    </div>
                                </div>
                                <img src="Assets/images/tinko-green.svg" alt="" />
                                <div class="flex flex-col">
                                    <div class="text-[14px] text-[#8B89D9]">Name</div>
                                    <div class="text-[12px] text-[#8D8D8D]">
                                        Bring Dinner Meal
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center flex-col">
                            <div class="text-[12px] text-[#8B89D9] mr-auto">
                                08:00 AM - 09:00 AM
                            </div>
                            <div
                                class="flex flex-row bg-[#FAFAFA] px-2 py-2 rounded-lg gap-2 border-[#E3E3E3] border lg:w-[208px]">
                                <div
                                    class="text-center bg-[#6FD997] flex items-center flex-col justify-center text-[#FFFFFF] rounded-lg w-[50px] h-[48px]"
                                    style="font-family: Poppins, sans-serif">
                                    <div class="text-[14px] font-bold">17</div>
                                    <div class="text-[10px] font-normal tracking-[-0.28px]">
                                        Jun
                                    </div>
                                </div>
                                <img src="Assets/images/tinko-green.svg" alt="" />
                                <div class="flex flex-col">
                                    <div class="text-[14px] text-[#8B89D9]">Name</div>
                                    <div class="text-[12px] text-[#8D8D8D]">
                                        Bring Dinner Meal
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- End of task block -->
                    </div>
                </div>
                <!--  -->
                <hr class="md:hidden" />
                <div class="flex flex-col md:w-[409px]">
                    <h3 class="text-[15px] font-semibold text-[#8B89D9] mb-4">
                        Category
                    </h3>
                    <div class="flex flex-wrap gap-4 mb-6">
                        <!-- Repeat this block for each member -->

                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Social</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">School</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-4 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Performance</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Sports</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Celebration</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Holiday</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Date Night</span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-6 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Appointment
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="px-5 py-1 border border-[#6FD997] text-[13px] text-[#6FD997] rounded-full">Meeting
                            </span>
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </div>

        <!-- Right sidebar for Upcoming Event -->
        <div class="bg-white p-4 rounded shadow w-full">
            <h3 class="text-[18px] font-semibold text-[#8B89D9]">
                Upcoming Event
            </h3>
            <div class="flex flex-wrap gap-6 xl:gap-0">
                <div class="flex flex-col mb-2 border-b border-[#E3E3E3] pb-4">
                    <img
                        src="Assets/images/Rectangle 110662.svg"
                        alt="Event preview"
                        class="w-[337px] h-[153px] rounded" />
                    <div class="flex flex-row gap-4 mr-auto">
                        <div
                            class="flex flex-col items-center justify-center rounded bg-[#FFFFFF] shadow-md w-[40px] h-[40px]">
                            <p class="text-[#2C2C73] text-[14px] font-bold">17</p>
                            <span class="text-[10px] text-[#2C2C73]">Jun</span>
                        </div>
                        <div class="">
                            <h4 class="text-[13px] text-[#8D8D8D] font-semibold">
                                Event Name
                            </h4>
                            <p class="text-[13px] text-[#8D8D8D]">Location</p>
                        </div>
                    </div>
                </div>
                <!-- Add more upcoming event items as needed -->

                <div class="">
                    <div class="flex flex-col border-b border-[#E3E3E3] pb-4">
                        <img
                            src="Assets/images/Rectangle 110662.svg"
                            alt="Event preview"
                            class="w-[337px] h-[153px] rounded" />
                        <div class="flex flex-row gap-4 mr-auto">
                            <div
                                class="flex flex-col items-center justify-center rounded bg-[#FFFFFF] shadow-md w-[40px] h-[40px]">
                                <p class="text-[#2C2C73] text-[14px] font-bold">17</p>
                                <span class="text-[10px] text-[#2C2C73]">Jun</span>
                            </div>
                            <div class="">
                                <h4 class="text-[13px] text-[#8D8D8D] font-semibold">
                                    Event Name
                                </h4>
                                <p class="text-[13px] text-[#8D8D8D]">Location</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="flex flex-col mb-4 border-b border-[#E3E3E3] pb-4">
                        <img
                            src="Assets/images/Rectangle 110662.svg"
                            alt="Event preview"
                            class="w-[337px] h-[153px] rounded" />
                        <div class="flex flex-row gap-4 mr-auto">
                            <div
                                class="flex flex-col items-center justify-center rounded bg-[#FFFFFF] shadow-md w-[40px] h-[40px]">
                                <p class="text-[#2C2C73] text-[14px] font-bold">17</p>
                                <span class="text-[10px] text-[#2C2C73]">Jun</span>
                            </div>
                            <div class="">
                                <h4 class="text-[13px] text-[#8D8D8D] font-semibold">
                                    Event Name
                                </h4>
                                <p class="text-[13px] text-[#8D8D8D]">Location</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- </div> -->
@push("scripts")
<script>
    // ------------
    const openAlbumModalBtn = document.getElementById("openAlbumModalBtn");
    const closeAlbumModalBtn = document.getElementById("closeAlbumModalBtn");
    const cancelAlbumModalBtn = document.getElementById(
        "cancelAlbumModalBtn"
    );
    const albumModalWrapper = document.getElementById("albumModalWrapper");

    openAlbumModalBtn.addEventListener("click", () => {
        albumModalWrapper.classList.remove("hidden");
        albumModalWrapper.classList.add("flex");
    });

    closeAlbumModalBtn.addEventListener("click", () => {
        albumModalWrapper.classList.add("hidden");
        albumModalWrapper.classList.remove("flex");
    });

    cancelAlbumModalBtn.addEventListener("click", () => {
        albumModalWrapper.classList.add("hidden");
        albumModalWrapper.classList.remove("flex");
    });

    // Optional: Close modal when clicking outside the modal box
    albumModalWrapper?.addEventListener("click", (e) => {
        if (e.target === albumModalWrapper) {
            albumModalWrapper.classList.add("hidden");
            albumModalWrapper.classList.remove("flex");
        }
    });
    //   // JavaScript for add Group Popup Handling
    const bodyA = document.bodyA;
    const popup = document.getElementById("popup"); // assuming you have a sidebar popup too
    const openPopup = document.getElementById("open-popup");
    const closePopup = document.getElementById("close-popup");

    if (openPopup && closePopup && popup) {
        openPopup.addEventListener("click", () => {
            popup.classList.remove("hidden");
            bodyA.classList.add("overflow-hidden");
        });

        closePopup.addEventListener("click", () => {
            popup.classList.add("hidden");
            bodyA.classList.remove("overflow-hidden");
        });
    }

    function openAddMemberModal() {
        document.getElementById("addMemberModal").classList.remove("hidden");
        bodyA.classList.add("overflow-hidden");
    }

    function closeAddMemberModal() {
        document.getElementById("addMemberModal").classList.add("hidden");
        bodyA.classList.remove("overflow-hidden");
    }

    function openCreateGroupModal() {
        document.getElementById("createListPopup").classList.remove("hidden");
        bodyA.classList.add("overflow-hidden");
    }

    function closeCreateGroupModal() {
        document.getElementById("createListPopup").classList.add("hidden");
        bodyA.classList.remove("overflow-hidden");
    }

    function closeAllModals() {
        if (popup) popup.classList.add("hidden");
        const addMemberModal = document.getElementById("addMemberModal");
        if (addMemberModal) addMemberModal.classList.add("hidden");
        const createListPopup = document.getElementById("createListPopup");
        if (createListPopup) createListPopup.classList.add("hidden");
        bodyA.classList.remove("overflow-hidden");
    }

    window.onclick = function(event) {
        const createListPopup = document.getElementById("createListPopup");
        if (event.target === popup || event.target === createListPopup) {
            closeAllModals();
        }
    };

    //   // JavaScript for add member Popup Handling
    const body = document.body;

    function openAddMemberModal() {
        document.getElementById("addMemberModal").classList.remove("hidden");
        body.classList.add("overflow-hidden");
    }

    function closeAddMemberModal() {
        document.getElementById("addMemberModal").classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }

    function closeAllModals() {
        document.getElementById("addMemberModal").classList.add("hidden");
        body.classList.remove("overflow-hidden");
    }

    window.onclick = function(event) {
        const modal = document.getElementById("addMemberModal");
        if (event.target === modal) {
            closeAllModals();
        }
    };
    // ==================
    // document
    //     .getElementById("sidebar-toggle")
    //     .addEventListener("click", () => {
    //         document.getElementById("sidebar").classList.toggle("hidden");
    //     });
    // ====== //
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
    // Add task popup //
    const openBtn = document.getElementById("openModalBtn");

    const modal = document.getElementById("taskModal");
    const closeBtn = document.getElementById("closeModalBtnB");

    function closeModal() {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
    }

    // Close modal when clicking the close button
    closeBtn.addEventListener("click", closeModal);

    // Close modal when clicking outside of the modal
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    openBtn.addEventListener("click", () => {
        modal.classList.remove("hidden");
        modal.classList.add("flex");
    });

    closeBtn.addEventListener("click", () => {
        modal.classList.remove("flex");
        modal.classList.add("hidden");
    });

    // Close modal when clicking outside of it
    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.classList.remove("flex");
            modal.classList.add("hidden");
        }
    });
    // Create new event Popup//
    const openModelBtn = document.getElementById("openModelBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const cancelModalBtn = document.getElementById("cancelModalBtn");
    const eventModal = document.getElementById("eventModal");

    openModelBtn.addEventListener("click", () => {
        eventModal.classList.remove("hidden");
        eventModal.classList.add("flex");
    });

    function closeModal() {
        eventModal.classList.remove("flex");
        eventModal.classList.add("hidden");
    }

    closeModalBtn.addEventListener("click", closeModal);
    cancelModalBtn.addEventListener("click", closeModal);

    // Close on outside click
    eventModal.addEventListener("click", (e) => {
        if (e.target === eventModal) closeModal();
    });
</script>
@endpush


<!-- uytyutiuiohioji -->