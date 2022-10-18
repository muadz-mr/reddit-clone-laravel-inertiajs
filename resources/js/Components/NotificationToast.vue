<script setup>
defineProps(["type", "textSmall", "textNormal"]);
</script>

<template>
    <!-- <div class="fixed bottom-0 left-0 right-0 bg-green-400 transition-transform translate-y-full duration-500 ease-in-out"> -->
    <div class="fixed bottom-0 left-0 right-0" :class="{ 'bg-green-500': type === 'success', 'bg-red-500': type === 'error' }">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
                <div class="w-0 flex-1 flex items-center">
                    <svg
                        class="h-6 w-6 flex-none fill-green-100 stroke-green-600 stroke-2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                    >
                        <circle cx="12" cy="12" r="11" />
                        <path
                            d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9"
                            fill="none"
                        />
                    </svg>
                    <p class="ml-3 font-medium text-white truncate">
                        <span class="md:hidden">{{ textSmall }}</span>
                        <span class="hidden md:inline">{{ textNormal }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
