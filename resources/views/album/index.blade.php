@extends("layouts.main")
@section("content")

<div
    class="w-full flex flex-col md:ml-[180px] xl:ml-[268px] lg:flex-row mainBody">
    <!-- Main Content md:w-2/4 lg:w-[706px]-->
    <div class="w-full lg:min-w-[706px] lg:h-[194px] p-4">
        <!-- Create Post -->
        <div class="bg-white p-4 mb-4">
            <span class="text-[#2C2C73] ml-auto text-[18px] font-bold">Create
            </span>

            <div
                class="flex space-x-2 mt-4 flex-col items-center justify-center gap-4 md:gap-1 md:flex-row md:items-start md:justify-start">
                <!-- ٓAdd Album -->
                @if(!$isSingleView)

                <button
                    id="openModalBtn"
                    class="flex items-center space-x-2 py-2 px-3 bg-[#FFBB0033] rounded-md w-[194px] h-[40px]">
                    <img src="Assets/images/gallery-add.svg" class="" />
                    <span
                        class="text-[#FFBB00] text-[13px] lg:font-semibold leading-[17.7px]">
                        Create new album
                    </span>
                </button>
                @endif


                <!-- Add Photo -->
                <button
                    id="openPhotosModalBtn"
                    class="flex items-center space-x-2 py-2 px-2 bg-[#009DFF33] rounded-md w-[194px] h-[40px]">
                    <img src="{{asset('assets/images/video-play.svg')}} " class="" />
                    <span
                        class="text-[#009DFF] text-[13px] leading-[17.7px] lg:font-semibold">
                        Add pictures to album
                    </span>
                </button>
            </div>
            <!-- set advance chnage  -->
        </div>
        <!-- Example of switching between views -->
        <div id="albumList" class="hidden">Album List Content</div>
        <div id="sharedList" class="hidden">Shared Content</div>
        <div id="albumGallery" class="hidden">Gallery Content</div>

        <!-- Add ALBUMS -->
        <div
            id="albumModal"
            class="fixed inset-0 bg-black bg-opacity-40 hidden justify-center items-center z-50 p-4">
            <div
                class="bg-[#FAFAFA] rounded-2xl w-full max-w-md p-8 relative lg:max-w-[577px]">
                <button
                    id="closeModalBtn"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl">
                    <!-- &times; -->
                </button>

                <h1
                    class="text-[#2C2C73] font-semibold text-[24px] text-center mb-6">
                    Add Album
                </h1>
                <form method="POST" action="{{ route('create.album') }}" enctype="multipart/form-data" class="space-y-6 lg:w-[419px] mx-auto">
                    @csrf

                    <!-- Album Name -->
                    <div>
                        <label for="name" class="block mb-2 text-[#8D8D8D] text-[15px] font-semibold">Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            required
                            class="w-full rounded-lg border border-[#E3E3E3] px-4 py-3 text-base text-[#2e2e6e] placeholder:text-[#a0a0a0] focus:outline-none focus:ring-2 focus:ring-[#8a8a8a]" />
                    </div>

                    <!-- Hidden File Input -->
                    <div>
                        <label class="block mb-2 text-[#8D8D8D] text-[15px] font-semibold">Add Photos</label>

                        <!-- Hidden file input -->
                        <input
                            type="file"
                            name="photos[]"
                            id="photos"
                            multiple
                            class="hidden" />

                        <!-- Custom Upload Button -->
                        <button
                            type="button"
                            onclick="document.getElementById('photos').click();"
                            class="w-full bg-[#8B89D9] text-[#FFFFFF] text-[16px] font-semibold rounded-lg py-3">
                            Upload
                        </button>

                        <!-- Optional: show selected file names -->
                        <p id="fileList" class="text-sm text-gray-600 mt-2"></p>
                    </div>

                    <!-- Submit Buttons -->
                    <div class="flex justify-between mt-6 gap-4">
                        <button
                            type="button"
                            id="cancelBtn"
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
        <!--  Add Photos Popup Modal -->
        <div
            id="photosModal"
            class="fixed inset-0 bg-black bg-opacity-40 hidden justify-center items-center z-50 p-4">
            <div
                class="bg-gray-100 rounded-xl w-full max-w-md p-6 relative lg:max-w-[577px]">
                <button
                    id="closePhotosModalBtn"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 text-2xl">
                    <!-- &times; -->
                </button>

                <h2
                    class="text-[#2C2C73] font-semibold text-[24px] text-center mb-6">
                    Add Photos
                </h2>

                <form method="POST" action="{{ route('add.picture') }}" enctype="multipart/form-data" class="space-y-4 lg:w-[419px] mx-auto">
                    @csrf

                    <!-- Album ID (can be dynamic) -->
                    <input type="hidden" name="album_id" value="{{ $album->id ?? 1 }}">

                    <!-- Upload Input -->
                    <div>
                        <label for="photos" class="block mb-2 text-[#8D8D8D] text-[15px] font-semibold">Add Photos</label>

                        <input
                            type="file"
                            name="image_url[]"
                            id="photos"
                            multiple
                            accept="image/*"
                            class="block w-full text-sm text-gray-500
                   file:mr-4 file:py-2 file:px-4
                   file:rounded-lg file:border-0
                   file:text-sm file:font-semibold
                   file:bg-[#8B89D9] file:text-white
                   hover:file:bg-indigo-600"
                            required>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between mt-6 gap-4">
                        <button
                            type="button"
                            id="cancelBtnA"
                            class="flex-1 border border-[#2C2C73] text-[#2C2C73] text-[16px] font-semibold rounded-lg py-3">
                            Cancel
                        </button>

                        <button
                            type="submit"
                            class="flex-1 bg-[#6FD997] text-white text-[16px] font-semibold rounded-lg py-3">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Posts -->
        <div class="bg-white mb-4 p-4">
            <div class="mx-auto">


                {{-- All Albums List --}}
                @if(!$isSingleView)
                <div class=" bg-white mb-4 p-4">
                    <div class="mx-auto">
                        <div id="album-list">
                            <h2 class="text-[16px] text-[#2C2C73] font-bold mb-4">Your Albums</h2>
                            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[10px] mb-8">
                                @foreach($albums as $album)
                                <a href="{{ route('albums.show', $album->id) }}">
                                    <div class="bg-white cursor-pointer overflow-hidden">
                                        <img
                                            src="{{ $album->coverPhoto ? asset('storage/' . $album->coverPhoto->image_url) : asset('Assets/images/gallery-1.svg') }}"
                                            class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                            alt="Album Cover" />
                                        <div class="p-1">
                                            <h3 class="text-[15px] text-[#8B89D9]">{{ $album->name }}</h3>
                                            <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                                {{ $album->photos->count() }} Images
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <div id="shared-list">
                            <h2 class="text-[16px] font-semibold mb-4 text-[#8B89D9]">
                                Shared Albums
                            </h2>
                            <div
                                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[10px]">
                                <div
                                    onclick="openAlbum()"
                                    class="bg-white overflow-hidden cursor-pointer">
                                    <img
                                        alt="Album cover image of a person smiling"
                                        class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                        height="200"
                                        src="Assets/images/gallery-1.svg"
                                        width="300" />
                                    <div class="p-1">
                                        <div class="flex flex-row justify-between">
                                            <div>
                                                <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <img
                                                    alt="Profile image of a person"
                                                    class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                                    height=""
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="30" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="30" />
                                            </div>
                                        </div>

                                        <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                            50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                        </p>
                                    </div>
                                </div>

                                <div class="bg-white overflow-hidden">
                                    <img
                                        alt="Album cover image of a person smiling"
                                        class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                        height="200"
                                        src="Assets/images/gallery-2.svg"
                                        width="300" />
                                    <div class="p-1">
                                        <div class="flex flex-row justify-between">
                                            <div>
                                                <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                            </div>
                                            <div class="flex items-center justify-center">
                                                <img
                                                    alt="Profile image of a person"
                                                    class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                                    height=""
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="30" />
                                                <img
                                                    alt="Profile image of a person"
                                                    class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                                    height="30"
                                                    src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                                    width="30" />
                                            </div>
                                        </div>

                                        <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                            50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Single Album Gallery --}}
                @if($isSingleView)
                <div id="album-gallery" class="bg-white mb-4 text-gray-800">
                    <div class="max-w-[706px] mx-auto p-4">
                        <div class="flex flex-row space-x-2 mb-4">
                            <a href="{{ route('album') }}" class="text-[#2C2C73] text-[16px] font-semibold gap-2 flex flex-row">
                                <img src="{{ asset('Assets/images/arrow-left.svg') }}" alt="Back" />
                                <span class="text-[16px]">{{ $album->name }}</span>
                            </a>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2 sm:gap-3 md:gap-4">
                            @foreach($album->photos as $index => $photo)
                            <img
                                loading="lazy"
                                src="{{ asset('storage/' . $photo->image_url) }}"
                                onclick="openLightbox({{ $index }})"
                                class="gallery-img w-full aspect-[4/3] lg:h-[156px] rounded-lg object-cover cursor-pointer" />
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                {{-- <div id="shared-list">
                    <h2 class="text-[16px] font-semibold mb-4 text-[#8B89D9]">
                        Shared Albums
                    </h2>
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[10px]">
                        <div
                            onclick="openAlbum()"
                            class="bg-white overflow-hidden cursor-pointer">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-1.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>

                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-2.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 3 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-1.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 4 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-2.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-3.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 6 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-4.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 7 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-3.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                        <!-- 8 -->
                        <div class="bg-white overflow-hidden">
                            <img
                                alt="Album cover image of a person smiling"
                                class="w-full h-48 lg:w-[161px] lg:h-[115px] rounded-[4px] object-cover"
                                height="200"
                                src="Assets/images/gallery-4.svg"
                                width="300" />
                            <div class="p-1">
                                <div class="flex flex-row justify-between">
                                    <div>
                                        <h3 class="text-[15px] text-[#8B89D9]">Album Name</h3>
                                    </div>
                                    <div class="flex items-center justify-center">
                                        <img
                                            alt="Profile image of a person"
                                            class="w-[16px] h-[16px] rounded-full border-2 border-white -ml-2"
                                            height=""
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                        <img
                                            alt="Profile image of a person"
                                            class="h-[16px] w-[16px] rounded-full border-2 border-white -ml-2"
                                            height="30"
                                            src="https://storage.googleapis.com/a1aa/image/lcONfmLvMux3xvZZEmqyEa4nPbduQlq0-FoW1pEUkNI.jpg"
                                            width="30" />
                                    </div>
                                </div>

                                <p class="text-[#8D8D8D] text-[10px] lg:w-[161px]">
                                    50 Images &nbsp; 50 Videos &nbsp; 50 Posts
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

            <!-- Lightbox Modal -->
            <div
                id="lightbox"
                class="fixed inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center z-50 hidden opacity-0 transition-opacity duration-300">

                <div class="relative w-full h-[460px] lg:w-[864px] lg:h-[464px]">

                    <!-- Close Button -->
                    <button
                        id="closeLightbox"
                        onclick="closeModal()"
                        class="absolute top-0 lg:-top-[11%] xl:-top-[9%] right-0 lg:-right-[4%] text-white text-3xl z-50">
                        <img
                            src="{{asset('assets/images/close-circle.svg')}}"
                            alt="Close"
                            class="max-w-[36px] lg:max-w-[36px]" />
                    </button>

                    <!-- Main Image -->
                    <img
                        id="lightboxImage"
                        src=""
                        class="h-full w-full object-cover rounded-xl shadow-lg overflow-hidden transition-opacity duration-300" />

                    <!-- Caption Box -->
                    <div
                        id="captionBox"
                        class="relative -mt-24 border-t border-black/10 absolute rounded-xl backdrop-blur-sm bg-black/10 w-full h-[97px] lg:w-[842px] lg:pb-[19px] pt-4">

                        <span id="imageCaption" class="text-white text-sm lg:pl-4">Image caption goes here</span>

                        <!-- Close Caption Button -->
                        <button
                            onclick="closeCaption()"
                            class="absolute top-1 right-2 text-white text-xl">
                            <img
                                src="Assets/images/close-circle.svg"
                                alt="Close caption"
                                class="max-w-[20px] lg:max-w-[30px]" />
                        </button>
                    </div>

                    <!-- Thumbnails Container -->
                    <div
                        class="flex mt-4 gap-2 overflow-x-auto max-w-full px-4"
                        id="thumbnailContainer"></div>

                    <!-- Left Arrow -->
                    <div
                        class="absolute left-2 lg:-left-[8%] top-1/2 transform -translate-y-1/2 cursor-pointer z-50 max-w-[30px] lg:max-w-[50px]"
                        onclick="prevImage()">
                        <img src="Assets/images/blue arrow left.svg" alt="Previous" />
                    </div>

                    <!-- Right Arrow -->
                    <div
                        class="absolute right-2 lg:-right-[5%] top-1/2 transform -translate-y-1/2 cursor-pointer z-50 max-w-[30px] lg:max-w-[50px]"
                        onclick="nextImage()">
                        <img src="Assets/images/blue arrow right.svg" alt="Next" />
                    </div>

                </div>
            </div>


            <!-- Modal -->
            <div
                id="modal"
                class="fixed inset-0 hidden items-center justify-center z-50 modal">
                <div class="relative max-w-3xl mx-auto">
                    <img id="modal-img" src="" class="max-h-[80vh] rounded-lg" />
                    <button
                        onclick="closeModal()"
                        class="absolute top-2 right-2 text-white text-2xl">
                        ✕
                    </button>
                </div>
            </div>
            <!-- ghfghghjgkjhhjfddsgffjvcghdgfhjkjkj -->
        </div>
    </div>
    <!-- Right Sidebar md:w-1/4 xl:max-w-[408px]-->
    <div class="w-full xl:max-w-[408px] p-4 md:pl-0">
        <!-- Upcoming Event -->
        <div class="bg-white p-4 mb-4">
            <div class="flex justify-between items-center mb-4">
                <span class="font-bold text-lg text-[#2C2C73]">
                    Upcoming Event
                </span>
                <!-- <a class="text-[#8D8D8D] text-[13px]" href="#"> See All </a> -->
            </div>
            <img
                alt="Event Image"
                class="w-full rounded-lg mb-2"
                height="150"
                src="{{ $event[0]->image_url ? asset($event[0]->image_url) : asset('assets/images/Rectangle 110662.svg') }}"
                width="300" />
            <div class="flex flex-row gap-2 items-center pt-2">
                <div
                    class="flex flex-col items-center py-1 px-2 rounded-lg shadow-md w-[40px] h-[40px]">
                    <span class="text-gray-600 text-[14px] font-bold"> {{ \Carbon\Carbon::parse($event[0]->date)->format('d') ?? '' }} </span>
                    <span class="text-[10px]">{{ \Carbon\Carbon::parse($event[0]->date)->format('M') ?? '' }}
                    </span>
                </div>
                <div class="flex flex-col">
                    <p class="font-semibold text-[13px] text-[#8D8D8D]">
                        {{-- Event Name --}}
                        {{$event[0]->name ?? ""}}
                    </p>
                    <p class="text-[#8D8D8D] text-[13px]"> {{$event[0]->category ?? ""}}</p>
                </div>
            </div>
        </div>
        <!-- My Tasks -->

        <!-- <div class="bg-white p-4 mb-4">
            <span class="font-bold text-[#2C2C73] text-[15px]"> My Tasks </span>
            <div class="mt-2">
                @forelse($task as $item)
                <span class="text-[#8B89D9] text-[12px] pt-1">
                    {{ \Carbon\Carbon::parse($item->created_at)->format('h:i A') }} -
                    {{ \Carbon\Carbon::parse($item->created_at)->addHour()->format('h:i A') }}
                </span>
                <div class="flex items-center mb-2 bg-[#FAFAFA] border border-[#E3E3E3] pl-2 py-2 rounded-xl">
                    <div
                        class="bg-[#70D997] w-[50px] h-[48px] flex flex-col items-center text-green-600 rounded-lg p-2"
                        style="font-family: Poppins, sans-serif">
                        <span class="text-[14px] font-bold text-[#FFFFFFD4]">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d') }}
                        </span>
                        <span class="text-[10px] text-[#FFFFFFD4]">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('M') }}
                        </span>
                    </div>
                    <span class="px-3">
                        <svg width="5" height="26" viewBox="0 0 5 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.57812" y="2.36377" width="1.57576" height="23.6364" rx="0.787879"
                                fill="url(#paint0_linear_6232_3649)" fill-opacity="0.7" />
                            <circle cx="2.36364" cy="2.36364" r="2.36364" fill="#2C2C73" />
                            <defs>
                                <linearGradient id="paint0_linear_6232_3649" x1="2.366" y1="2.36377" x2="2.366"
                                    y2="26.0001" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7D72FC" />
                                    <stop offset="1" stop-color="#7D72FC" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>
                    <div>
                        <p class="text-[14px] text-[#8B89D9]">Name
                        </p>
                        <p class="text-[#8D8D8D] text-[12px]">{{ $item->description }}</p>
                    </div>
                </div>
                @empty
                <p class="text-sm text-gray-500">No tasks available.</p>
                @endforelse
            </div>
        </div> -->


        <div class="bg-white p-4 mb-4">
            <span class="font-bold text-[#2C2C73] text-[15px]"> My Tasks </span>

            <div class="mt-2">
                @forelse($task as $item)
                {{-- Time Range --}}
                <span class="text-[#8B89D9] text-[12px] pt-1">
                    {{ \Carbon\Carbon::parse($item->created_at)->format('h:i A') }} -
                    {{ \Carbon\Carbon::parse($item->created_at)->addHour()->format('h:i A') }}
                </span>

                {{-- Task Block --}}
                <div class="flex items-center mb-2 bg-[#FAFAFA] border border-[#E3E3E3] pl-2 py-2 rounded-xl">

                    {{-- Date Box --}}
                    <div class="bg-[#70D997] w-[50px] h-[48px] flex flex-col items-center text-green-600 rounded-lg p-2" style="font-family: Poppins, sans-serif">
                        <span class="text-[14px] font-bold text-[#FFFFFFD4]">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('d') }}
                        </span>
                        <span class="text-[10px] text-[#FFFFFFD4]">
                            {{ \Carbon\Carbon::parse($item->created_at)->format('M') }}
                        </span>
                    </div>

                    {{-- Vertical Line Icon --}}
                    <span class="px-3">
                        <svg width="5" height="26" viewBox="0 0 5 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="1.57812" y="2.36377" width="1.57576" height="23.6364" rx="0.787879"
                                fill="url(#paint0_linear_6232_3649)" fill-opacity="0.7" />
                            <circle cx="2.36364" cy="2.36364" r="2.36364" fill="#2C2C73" />
                            <defs>
                                <linearGradient id="paint0_linear_6232_3649" x1="2.366" y1="2.36377" x2="2.366"
                                    y2="26.0001" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#7D72FC" />
                                    <stop offset="1" stop-color="#7D72FC" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </span>

                    {{-- Task Info --}}
                    <div>
                        {{-- Member Name(s) --}}
                        <p class="text-[14px] text-[#8B89D9] font-medium">
                            @foreach ($item->members as $member)
                            {{ $member->name }}@if(!$loop->last), @endif
                            @endforeach
                        </p>

                        {{-- Task Description --}}
                        <p class="text-[#8D8D8D] text-[12px]">
                            {{ $item->description }}
                        </p>
                    </div>
                </div>
                @empty
                <p class="text-sm text-gray-500">No tasks available.</p>
                @endforelse
            </div>
        </div>


        <!-- Chats -->
        <div class="bg-white p-4 rounded-lg xl:sticky">
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
                    <img src="Assets/images/chatboy.svg" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[12px] font-semibold">
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
                    <img src="Assets/images/chatboy.svg" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[12px] font-semibold">
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
                    <img src="Assets/images/chatboy.svg" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[12px] font-semibold">
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
                    <img src="Assets/images/chatboy.svg" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[12px] font-semibold">
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
                    <img src="Assets/images/chatboy.svg" alt="" />
                </div>
                <div class="pl-2">
                    <p class="font-semibold text-[14px] text-[#8B89D9]">
                        Alex Linderson
                    </p>
                    <p class="text-[#797C7B] text-[12px]">How are you today?</p>
                </div>
                <div class="ml-auto items-center justify-center">
                    <span class="text-[#797C7B] text-[12px] font-semibold">
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
    // POPUP CREATE Picture
    const openPhotosModalBtn = document.getElementById("openPhotosModalBtn");
    const closePhotosModalBtn = document.getElementById(
        "closePhotosModalBtn"
    );
    const cancelBtnA = document.getElementById("cancelBtnA");
    const photosModal = document.getElementById("photosModal");

    openPhotosModalBtn.addEventListener("click", () => {
        photosModal.classList.remove("hidden");
        photosModal.classList.add("flex");
    });

    closePhotosModalBtn.addEventListener("click", () => {
        photosModal.classList.add("hidden");
        photosModal.classList.remove("flex");
    });

    cancelBtnA?.addEventListener("click", () => {
        photosModal.classList.add("hidden");
        photosModal.classList.remove("flex");
    });

    // Optional: Click outside to close
    photosModal.addEventListener("click", (e) => {
        if (e.target === photosModal) {
            photosModal.classList.add("hidden");
            photosModal.classList.remove("flex");
        }
    });
    // POPUP CREATE ALBUM
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const cancelBtn = document.getElementById("cancelBtn");
    const albumModal = document.getElementById("albumModal");

    openModalBtn.addEventListener("click", () => {
        albumModal.classList.remove("hidden");
        albumModal.classList.add("flex");
    });

    closeModalBtn.addEventListener("click", () => {
        albumModal.classList.add("hidden");
        albumModal.classList.remove("flex");
    });

    cancelBtn.addEventListener("click", () => {
        albumModal.classList.add("hidden");
        albumModal.classList.remove("flex");
    });

    // Optional: Close modal when clicking outside the box
    albumModal?.addEventListener("click", (e) => {
        if (e.target === albumModal) {
            albumModal.classList.add("hidden");
            albumModal.classList.remove("flex");
        }
    });
    // =============== //
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
    //   =================modal==================//
    const albumList = document.getElementById("album-list");
    const sharedList = document.getElementById("shared-list");
    const albumGallery = document.getElementById("album-gallery");
    const modal = document.getElementById("modal");
    const modalImg = document.getElementById("modal-img");

    function openAlbum() {
        albumList.classList.add("hidden");
        sharedList.classList.add("hidden");
        albumGallery.classList.remove("hidden");

        // Hide "Create new album" button
        document.getElementById("openModalBtn").classList.add("hidden");
        // Move "Add Photo" button to the start
        const addPhotoBtn = document.getElementById("openPhotosModalBtn");
        const parentDiv = addPhotoBtn.parentElement;

        // Change flex alignment of parent to start
        parentDiv.classList.remove("items-center", "justify-center");
        parentDiv.classList.add("items-start", "justify-start");
    }

    function goBack() {
        albumGallery.classList.add("hidden");
        albumList.classList.remove("hidden");
        sharedList.classList.remove("hidden");
        // Show "Create new album" button
        document.getElementById("openModalBtn").classList.remove("hidden");

        // Reset position of "Add Photo" button
        const addPhotoBtn = document.getElementById("openPhotosModalBtn");
        const parentDiv = addPhotoBtn.parentElement;

        // Reset flex alignment of parent to center
        parentDiv.classList.remove("items-start", "justify-start");
        parentDiv.classList.add("items-center", "justify-center");
    }

    const lightbox = document.getElementById("lightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const closeLightbox = document.getElementById("closeLightbox");
    const imageCaption = document.getElementById("imageCaption");
    const captionBox = document.getElementById("captionBox");
    const thumbnailContainer = document.getElementById("thumbnailContainer");

    const galleryImages = Array.from(
        document.querySelectorAll(".gallery-img")
    );
    const images = galleryImages.map((img) => img.src);
    const captions = images.map((_, index) => `Caption here ${index + 1}`);
    let currentIndex = 0;

    galleryImages.forEach((img, index) => {
        img.addEventListener("click", () => openLightbox(index));
    });

    function openLightbox(index) {
        currentIndex = index;
        updateLightbox();
        lightbox.classList.remove("hidden");
        setTimeout(() => lightbox.classList.remove("opacity-0"), 10);
    }


    function closeModal() {
        lightbox.classList.add("opacity-0");
        setTimeout(() => lightbox.classList.add("hidden"), 300);
    }

    function closeCaption() {
        captionBox.classList.add("hidden");
    }

    function updateLightbox() {
        lightboxImage.src = images[currentIndex];
        imageCaption.textContent = captions[currentIndex];
        captionBox.classList.remove("hidden");

        // // Check if screen width is large (>= 1024px)
        // if (window.innerWidth >= 1024) {
        //   lightboxImage.style.width = "842px";
        //   lightboxImage.style.height = "464px";
        //   lightboxImage.style.objectFit = "cover";
        // } else {
        //   // Reset to default size if not a large screen
        //   lightboxImage.style.width = "auto";
        //   lightboxImage.style.height = "auto";
        //   lightboxImage.style.objectFit = "contain";
        // }
        updateThumbnails();
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        updateLightbox();
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateLightbox();
    }

    function updateThumbnails() {
        thumbnailContainer.innerHTML = "";
        images.forEach((src, index) => {
            const thumb = document.createElement("img");
            thumb.src = src;
            thumb.className = `w-0 h-0 object-cover rounded ${
            index === currentIndex ? "ring-2 ring-white" : ""
          }`;
            thumb.addEventListener("click", () => {
                currentIndex = index;
                updateLightbox();
            });
            thumbnailContainer.appendChild(thumb);
        });
    }

    closeLightbox.addEventListener("click", closeModal);

    let startX = 0;
    lightbox.addEventListener(
        "touchstart",
        (e) => (startX = e.touches[0].clientX)
    );
    lightbox.addEventListener("touchend", (e) => {
        let endX = e.changedTouches[0].clientX;
        if (startX - endX > 50) nextImage();
        else if (endX - startX > 50) prevImage();
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

<script>
    // Optional: show selected file names
    document.getElementById('photos').addEventListener('change', function() {
        const files = Array.from(this.files).map(file => file.name).join(', ');
        document.getElementById('fileList').textContent = files;
    });
</script>
@endpush

<!-- uytyutiuiohioji -->