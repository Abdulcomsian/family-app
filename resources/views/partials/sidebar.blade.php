     <div
         class="w-full md:w-[180px] xl:w-[268px] bg-white p-4 mt-4 md:fixed md:z-30 md:h-screen md:top-[74px]">
         <a href="profileShow.html">
             <div class="flex items-center mb-6">
                 <img
                     alt="Profile Picture"
                     class="rounded-full w-[40px] h-[40px] mr-2"
                     height="40"
                     src="{{asset('assets/images/Ellipse 1201.svg')}}
              "
                     width="50" />
                 <span class="text-lg font-semibold lg:font-bold text-[#2C2C73]">
                     Profile
                 </span>
             </div>
         </a>

         <ul class="text-gray-600 mb-4">
             <h6 class="text-lg font-bold text-gray-700 mb-2"> My clique</h6>
             <ul class="text-gray-600 mb-4">
                 @forelse($members as $member)
                 <li class="mb-1 flex items-center gap-2">
                     <img src="{{ asset('Assets/images/owner.svg') }}" alt="Member icon" class="w-5 h-5" />
                     {{ $member->name }}
                 </li>
                 @empty
                 <li>No members invited yet.</li>
                 @endforelse
             </ul> 

             <button
                 id="open-popup"
                 class="w-full xl:w-[222px] h-[48px] font-semibold text-[13px] mx-auto py-2 px-4 border border-[#2C2C73] text-[#2C2C73] rounded-lg">
                 Add More
             </button>
     </div>

     <!-- Sidebar Popup -->
     <div
         id="popup"
         class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center z-50">
         <div
             class="bg-white p-8 rounded-lg shadow-md text-center items-center justify-center flex flex-col relative xl:w-[560px] xl:h-[420px] lg:px-16">
             <h2
                 class="text-[18px] lg:text-[24px] font-semibold lg:font-[700] text-[#2C2C73] mb-6">
                 Add to Clique
             </h2>

             <div class="">
                 <button
                     id="add-member"
                     class="bg-[#8B89D9] text-[#FFFFFF] py-4 font-semibold rounded-xl mb-4 w-full xl:w-[419px] lg:h-[50px]"
                     onclick="openAddMemberModal()">
                     Add Member
                 </button>
                 <button
                     id="create-group"
                     class="bg-[#2C2C73] text-white py-4 lg:mt-2 font-semibold rounded-xl w-full xl:w-[419px] lg:h-[50px]"
                     onclick="openCreateGroupModal()">
                     Create Group
                 </button>
             </div>

             <button
                 id="close-popup"
                 class="absolute top-2 right-2 text-gray-500 hover:text-gray-800 text-2xl"
                 aria-label="Close popup"></button>
         </div>
     </div>

     <!-- Sidebar Add Member Modal -->
     <div
         id="addMemberModal"
         class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center z-50">
         <div
             class="bg-[#FAFAFA] p-8 rounded-lg shadow-md text-center items-center justify-center flex flex-col relative xl:w-[560px] xl:h-[420px]">
             <button
                 onclick="closeAddMemberModal()"
                 class="absolute top-4 right-4 text-gray-800 font-bold py-1 px-3 rounded-full"
                 aria-label="Close add member modal"></button>

             <h2 class="text-center text-[#2C2C73] font-bold text-[24px] mb-6">
                 Add Member
             </h2>

             <form method="POST" action="{{route('add.member') }}">
                 @csrf
                 <label
                     for="member-name"
                     class="block text-[#8D8D8D] items-start flex text-[15px] font-semibold mb-1">Name</label>
                 <input
                     id="member-name"
                     name="name"
                     type="text"
                     class="w-full lg:w-[400px] mb-5 px-4 py-3 rounded-lg border border-[#E3E3E3] text-[#8D8D8D] focus:outline-none focus:ring-2 focus:ring-indigo-300" />

                 <label
                     for="member-email"
                     class="block text-[#8D8D8D] text-[15px] font-semibold flex items-start mb-1">Email Address/Mobile Number</label>
                 <input
                     id="member-email"
                     name="email"
                     type="text"
                     class="w-full mb-6 px-4 py-3 rounded-lg border border-[#E3E3E3] text-[#8D8D8D] focus:outline-none focus:ring-2 focus:ring-indigo-300" />

                 <div class="flex gap-4">
                     <button
                         type="button"
                         onclick="closeAddMemberModal()"
                         class="flex-1 border border-[#2C2C73] text-[#2C2C73] font-semibold rounded-lg py-3 hover:bg-indigo-50 transition">
                         Cancel
                     </button>

                     <button
                         type="submit"
                         class="flex-1 bg-[#6FD997] text-[#FFFFFF] font-semibold text-[16px] rounded-lg py-3 hover:bg-green-500 transition">
                         Send Invitation
                     </button>
                 </div>
             </form>
         </div>
     </div>

     <!-- Sidebar Create Group Modal -->
     <div
         id="createListPopup"
         class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden flex items-center justify-center z-50">
         <div
             class="bg-[#FAFAFA] p-8 rounded-lg shadow-md text-center items-center justify-center flex flex-col relative xl:w-[560px]">
             <button
                 onclick="closeCreateGroupModal()"
                 class="absolute top-4 right-4 text-[#8D8D8D] text-2xl font-bold"
                 aria-label="Close create group modal"></button>

             <h1 class="text-center text-[#2C2C73] font-bold text-[24px] mb-6">
                 Create Group
             </h1>

             <div class="mb-4">
                 <label
                     for="list-name"
                     class="block text-[15px] flex items-start text-[#8D8D8D] font-semibold mb-2">Profile Photo</label>
                 <button
                     class="w-full lg:w-[400px] h-[50px] bg-[#8B89D9] rounded-lg p-3">
                     <p class="text-[#FFFFFF]">Upload</p>
                 </button>
             </div>
             <div class="mb-4">
                 <label
                     for="list-name"
                     class="block text-[15px] flex items-start text-[#8D8D8D] font-semibold mb-2">Name</label>
                 <input
                     id="list-name"
                     type="text"
                     class="w-full lg:w-[400px] h-[50px] border border-[#E3E3E3] rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                     placeholder="Enter list name" />
             </div>

             <div class="mb-6">
                 <label
                     for="search-invite"
                     class="block text-[15px] flex items-start text-[#8D8D8D] font-semibold mb-2">Add Clique</label>
                 <div class="relative">
                     <input
                         id="search-invite"
                         type="text"
                         class="w-full lg:w-[400px] h-[50px] border border-[#E3E3E3] rounded-lg p-3 pl-9 focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder:text-[15px] placeholder:text-[#8D8D8D]"
                         placeholder="Search here" />
                     <div
                         class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400">
                         <svg
                             width="20"
                             height="20"
                             viewBox="0 0 24 24"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                             <path
                                 d="M20 11C20 15.97 15.97 20 11 20C6.03 20 2 15.97 2 11C2 6.03 6.03 2 11 2"
                                 stroke="#8D8D8D"
                                 stroke-linecap="round"
                                 stroke-linejoin="round" />
                             <path
                                 d="M18.9304 20.6898C19.4604 22.2898 20.6704 22.4498 21.6004 21.0498C22.4504 19.7698 21.8904 18.7198 20.3504 18.7198C19.2104 18.7098 18.5704 19.5998 18.9304 20.6898Z"
                                 stroke="#8D8D8D"
                                 stroke-linecap="round"
                                 stroke-linejoin="round" />
                             <path
                                 d="M14 5H20"
                                 stroke="#8D8D8D"
                                 stroke-linecap="round"
                                 stroke-linejoin="round" />
                             <path
                                 d="M14 8H17"
                                 stroke="#8D8D8D"
                                 stroke-linecap="round"
                                 stroke-linejoin="round" />
                         </svg>
                     </div>
                 </div>
             </div>

             <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                 <div
                     class="flex items-center bg-[#FFFFFF] lg:w-[200px] border border-[#E3E3E3] rounded-lg p-2">
                     <img
                         src="{{asset('assets/images/chatboy.svg')}}"
                         alt="Profile picture"
                         class="w-[52px] h-[52px] mr-2" />
                     <div>
                         <p class="font-semibold text-[#000000] text-[14px] pb-1">
                             Alex Linderson
                         </p>
                         <button
                             class="bg-[#8B89D9] w-full lg:font-semibold xl:w-[120px] text-white text-[10px] px-3 py-1 rounded-full mt-1">
                             Add
                         </button>
                     </div>
                 </div>
                 <!-- =========== -->
                 <div
                     class="flex items-center bg-[#FFFFFF] lg:w-[200px] border border-[#E3E3E3] rounded-lg p-2">
                     <img
                         src="{{asset('assets/images/chatboy.svg')}}"
                         alt="Profile picture"
                         class="w-[52px] h-[52px] mr-2" />
                     <div>
                         <p class="font-semibold text-[#000000] text-[14px] pb-1">
                             Alex Linderson
                         </p>
                         <button
                             class="bg-[#8B89D9] lg:font-semibold w-full xl:w-[120px] text-white text-[10px] px-3 py-1 rounded-full mt-1">
                             Add
                         </button>
                     </div>
                 </div>
             </div>

             <div class="flex justify-between">
                 <button
                     onclick="closeCreateGroupModal()"
                     class="w-full xl:w-[200px] bg-white text-[#262664] text-base font-semibold py-2 px-4 rounded-lg border border-[#262664] mr-2 hover:bg-[#f0f0f0] transition">
                     Cancel
                 </button>
                 <button
                     class="w-full xl:w-[200px] bg-[#6FD997] text-white text-base font-semibold py-2 px-4 rounded-lg ml-2 transition">
                     Create
                 </button>
             </div>
         </div>
     </div>