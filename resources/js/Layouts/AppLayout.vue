<script setup>
import {ref} from 'vue';
import {Head, router} from '@inertiajs/vue3';
import Banner from '@/Components/Banner.vue';
import NavBar from "@/Components/NavBar.vue";

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div class="bg-gray-100">
        <Head :title="title"/>

        <Banner/>

        <div class="min-h-screen pb-6">
            <NavBar/>

            <!-- Page Heading -->
            <!--            <header v-if="$slots.header" class="bg-white shadow">-->
            <!--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">-->
            <!--                    <slot name="header" />-->
            <!--                </div>-->
            <!--            </header>-->

            <!-- Page Content -->
            <main>
                <slot/>
            </main>
        </div>

        <div class="pt-3 md:pt-12">
            <footer class="footer bg-neutral text-white p-10">
                <nav>
                    <h6 class="footer-title">Services</h6>
                    <a class="link link-hover">Branding</a>
                    <a class="link link-hover">Design</a>
                    <a class="link link-hover">Marketing</a>
                    <a class="link link-hover">Advertisement</a>
                </nav>
                <nav>
                    <h6 class="footer-title">Company</h6>
                    <a class="link link-hover">About us</a>
                    <a class="link link-hover">Contact</a>
                    <a class="link link-hover">Jobs</a>
                    <a class="link link-hover">Press kit</a>
                </nav>
                <nav>
                    <h6 class="footer-title">Legal</h6>
                    <a class="link link-hover">Terms of use</a>
                    <a class="link link-hover">Privacy policy</a>
                    <a class="link link-hover">Cookie policy</a>
                </nav>
            </footer>
        </div>
    </div>
</template>
