<template>


    <div class="w-full min-h-screen bg-gradient-to-br grid place-items-center from-teal-50 to-orange-50 py-10">

        <div class="max-w-3xl bg-white mx-auto p-5 shadow-xl rounded-lg">
            <p class="font-bold mb-5 text-xl">"প্রোডাক্ট ম্যানেজমেন্ট সিস্টেম" Laravel, MySQL, JavaScript, Tailwind CSS, এবং Vue.js ব্যবহার করে তৈরি করতে হবে।</p>

            <p class="font-semibold mb-5 text-xl"> টাস্কসমূহ: </p>
            <p class="font-semibold text-lg">প্রোডাক্ট ও ক্যাটেগরি রিলেশন তৈরি করতে হবে (Many to Many):</p>
            <div class="ml-5 mt-3">
                <p class="font-normal text-sm">১। একটি প্রোডাক্টের একাধিক ক্যাটেগরি থাকতে পারে এবং একটি ক্যাটেগরির একাধিক প্রোডাক্ট থাকতে পারে। </p>
                <p class="font-normal text-sm">১। অবশ্যই প্রোডাক্ট এড করার সময় টাইটেল, ইমেজ, ক্যাটাগরি ভেলিডেশন করতে হবে।  </p>
                <p class="font-normal text-sm">২। প্রোডাক্ট তৈরি করার সময় Multiple ক্যাটাগরি Select করার Option থাকবে।  </p>
                <p class="font-normal text-sm">৩। ক্যাটাগরি ডিলেট করতে হবে, ক্যাটাগরির সঙ্গে Related সমস্ত প্রোডাক্ট ডিলেট হয়ে যাবে । </p>
            </div>
            <p class="font-semibold text-lg mt-5">প্রোডাক্ট ও ফিচার রিলেশন তৈরি করতে হবে (Has Many):</p>
            <div class="ml-5 mt-3">
                <p class="font-normal text-sm">১। একটি প্রোডাক্টের একাধিক ফিচার থাকতে পারে। </p>
                <p class="font-normal text-sm">২। প্রোডাক্ট তৈরি করার সময় ফিচার গুল Add More করার Option থাকবে।  </p>
                <p class="font-normal text-sm">৩। প্রোডাক্ট ডিলেট করতে হবে, প্রোডাক্ট ডিলেট করলে প্রোডাক্ট Related সমস্ত ফিচার গুলা ডিলেট হয়ে যাবে ।</p>
            </div>
            <p class="font-semibold text-lg mt-5">প্রোডাক্ট আপলোড ফর্ম ডিজাইন করতে হবে:</p>
            <div class="ml-5 mt-3">
                <p class="font-normal text-sm">১। Tailwind CSS ব্যবহার করে একটি প্রোডাক্ট আপলোড ফর্ম তৈরি করতে হবে। </p>
                <p class="font-normal text-sm">২। যেখানে একাধিক ক্যাটাগরি একসাথে সিলেক্ট করা যাবে।  </p>
                <p class="font-normal text-sm">৩। একটি "Add More" বাটন থাকবে যার মাধ্যমে একাধিক ফিচার যোগ করা যাবে। Add More করলে নতুন করে একটা Input Field যোগ হবে  </p>
                <p class="font-normal text-sm">৪। প্রোডাক্টের টাইটেল এবং ইমেজ দেওয়া যাবে এমন ফিল্ড থাকবে ইমেজ প্রিভিউ সহ ।</p>
            </div>
            <p class="font-semibold text-lg mt-5">প্রোডাক্ট প্রদর্শন করতে হবে।:</p>
            <div class="ml-5 mt-3">
                <p class="font-normal text-sm">১। প্রোডাক্টগুলো ক্যাটেগরি এবং ফিচারসহ একটি ক্রিয়েটিভ Tailwind UI ডিজাইনে প্রোডাক্টের ডিটেলস দেখাতে হবে। </p>
            </div>
            <p class="font-semibold text-lg mt-5">এডিট ফিচার তৈরি করতে হবে:</p>
            <div class="ml-5 mt-3">
                <p class="font-normal text-sm">১। শুধুমাত্র প্রোডাক্টের টাইটেল এবং ইমেজ এডিট করা যাবে এমন একটি এডিট ফিচার তৈরি করতে হবে। </p>
            </div>
        </div>

    </div>

</template>
<script setup lang="ts">
</script>
