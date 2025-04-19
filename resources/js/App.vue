<template>
    <!--header section-->
    <div class="bg-white border-b border-gray-300 fixed top-0 w-full shadow">
        <div class="lg:container mx-auto p-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1 min-w-[250px]">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <img :src="fileLink('Ajmal.jpg')" class="w-12 h-12 rounded-full border-2 border-blue-400" alt="">
                            <span class="font-semibold text-xl pl-1">Ajmal Mohd</span>
                        </div>
                        <div class="relative inline-block text-left group">
                            <three-dots-icon class="w-6 h-6 cursor-pointer"></three-dots-icon>
                            <div class="origin-top-right absolute right-0 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 hidden group-hover:block">
                                <div class="py-1">
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">Profile</a>
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2 text-right">
                    <button class="bg-red-500 text-white px-4 py-2 rounded-md" @click="logout">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:container mx-auto mt-[90px] px-4 mb-4">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-1 min-w-[300px] bg-white p-4 shadow-md rounded-md">
                <input type="text" placeholder="Search" class="w-full p-2 rounded-md border border-gray-300 focus:outline-none focus:ring focus:border-blue-400 mb-2">
                
                <div class="max-h-96 overflow-y-scroll">
                    <div class="flex p-2 items-center mb-3 rounded-md bg-gray-100 cursor-pointer">
                        <div class="relative">
                            <img :src="fileLink('Ajmal.jpg')" class="w-12 h-12 rounded-full border-2 border-blue-400" alt="">
                            <div class="absolute h-3 w-3 bg-slate-400 rounded-full -top-1.5 -left-1.5 ml-2"></div>
                        </div>
                        <div class="ml-4">
                            <p class="font-semibold">Ajmal Mohd</p>
                            <p class="text-gray-500">Hello</p>
                        </div>
                    </div>

                    <div class="flex p-2 items-center mb-3 rounded-md hover:bg-gray-100 cursor-pointer">
                        <div class="relative">
                            <img :src="fileLink('Ajmal.jpg')" class="w-12 h-12 rounded-full border-2 border-blue-400" alt="">
                            <div class="absolute h-3 w-3 bg-red-400 rounded-full -top-1.5 -left-1.5 ml-2"></div>
                        </div>
                        <div class="ml-4">
                            <p class="font-semibold">Ajmal Mohd</p>
                            <p class="text-gray-500">Hello</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-2 bg-stone-50 shadow-md rounded-md">

                <div v-if="isChatOpen">
                    <!--chat header-->
                    <div class="flex items-center justify-between mb-4 bg-slate-200 px-4 pb-2 pt-2 rounded-tl-md rounded-tr-md">
                        <div class="flex items-center">
                            <img :src="fileLink('Ajmal.jpg')" class="w-12 h-12 rounded-full border-2 border-white" alt="">
                            <div class="ml-4">
                                <p class="font-semibold">Ajmal Mohd</p>
                                <p class="text-gray-500">online</p>
                            </div>
                        </div>
                        <div class="relative inline-block text-left group">
                            <three-dots-icon class="w-6 h-6 cursor-pointer"></three-dots-icon>
                            <div class="origin-top-right absolute right-0 w-40 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 z-50 hidden group-hover:block">
                                <div class="py-1">
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">Close Chat</a>
                                    <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">Clear Chat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <!--chat body-->
                    <div class="overflow-y-scroll max-h-60 min-h-[20rem] px-4">
                        <div class="flex items-center mb-4">
                            <img :src="fileLink('Ajmal.jpg')" class="w-7 h-7 rounded-full border-2 border-white mr-1" alt="">
                            <div class="text-sm p-2 shadow bg-white rounded-md max-w-xs">
                                dddddddddddffgggggggggggggg
                                <!-- <div class="absolute top-[1/2] -translate-y-1/2 left-[50%] ml-1 hidden group-hover:block bg-gray-600 py-1 px-1.5 text-white rounded z-50 max-w">12:00</div> -->
                            </div>
                            <three-dots-icon class="w-4 h-4 cursor-pointer"></three-dots-icon>
                        </div>

                        <div class="flex items-center mb-4 justify-end">
                            <three-dots-icon class="w-4 h-4 cursor-pointer"></three-dots-icon>
                            <div class="text-sm p-2 shadow bg-indigo-100 rounded-md max-w-xs">
                                dddddddddd
                            </div>
                            <img :src="fileLink('Ajmal.jpg')" class="mr-1 w-7 h-7 rounded-full border-2 border-white" alt="">
                        </div>
                    </div>

                    <!--chat footer-->
                    <div class="flex items-center bg-white rounded-md p-4">
                        <input type="text" placeholder="Message" class="w-full p-2 rounded-md border border-gray-300 focus:outline-none">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-md disabled:bg-gray-400 ml-2" disabled>Send</button>
                    </div>

                </div>
                <div v-else class="flex flex-col items-center justify-center min-h-[20rem]">
                    <img :src="fileLink('')" alt="">
                    <p class="text-2xl font-semibold mt-4">Laravel Chat Application</p>
                    <p class="text-gray-500">Select a chat to start messaging</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ThreeDotsIcon from "@/components/ThreeDotsIcon.vue";

export default {
    name: 'ChatApp',
    components: { ThreeDotsIcon },

    data () {
        return {
            isChatOpen: true,
        }
    },
    methods: {
        logout() {
            console.log('logout');
        },

        fileLink(file) {
            return 'http://127.0.0.1:8000/assets/' + file;
        }
    }
}
</script>

<style>

</style>