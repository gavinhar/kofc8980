<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Bullhorn from "@/Components/Icons/Bullhorn.vue";
import Calendar from "@/Components/Icons/Calendar.vue";
import {Link} from "@inertiajs/vue3"
</script>

<template>
    <AppLayout title="Welcome">

        <div class="hero bg-base-200 py-12 md:py-36">
            <div class="hero-content text-center">
                <div class="max-w-7xl">
                    <h1 class="text-5xl font-bold">Knights of Columbus Council 8980</h1>
                    <p class="py-6">
                        St Michael Catholic Church, Murrells Inlet, SC
                    </p>
                    <button class="btn bg-[#112866] text-white hover:bg-[#112866]/80">Join</button>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex">
                        <span class="text-[#CB0E0E]">
                            <Bullhorn/>
                        </span>
                        <h3 class="font-semibold text-3xl my-auto ms-3">
                            Announcements
                        </h3>
                    </div>

                    <p class="mt-6 text-gray-500 leading-relaxed">
                        <ul>
                            <li><span class="font-bold text-black">Announcement 1</span>
                                - Sign up for golf commitee
                            </li>

                            <li><span class="font-bold text-black">Announcement 1</span>
                                - Pay annual membership dues
                            </li>
                        </ul>
                    </p>

                    <div class="flex w-full justify-center">
                        <Link href="#events"
                              class="btn bg-[#112866] text-white hover:bg-[#112866]/80">
                            More Announcements
                        </Link>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex">
                        <span class="text-[#CB0E0E]">
                            <Calendar/>
                        </span>
                        <h3 class="font-semibold text-3xl my-auto ms-3">
                            Upcoming Events
                        </h3>
                    </div>

                    <p class="my-6 text-gray-500 leading-relaxed">
                        <ul>
                            <li>
                                <span class="font-bold text-black">Feb 4 @ 7pm</span>
                                - Meeting
                                <Link href="#" class="text-[#112866] underline">go</Link>
                            </li>

                            <li>
                                <span class="font-bold text-black">Feb 5</span>
                                Food drive
                            </li>

                            <li>
                                <span class="font-bold text-black">Feb 5</span>
                                Food drive
                            </li>
                        </ul>
                    </p>

                    <div class="flex w-full justify-center">
                        <Link href="#events"
                              class="btn bg-[#112866] text-white hover:bg-[#112866]/80">
                            More Events
                        </Link>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>
