<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    pagination: {},
});
</script>

<template>
    <div
        class="mt-6 py-2 flex flex-row w-full items-center justify-start flex-wrap space-x-2"
    >
        <template v-for="link in pagination.links" :key="link">
            <div
                v-if="link.url === null"
                v-html="link.label"
                class="text-xs py-2 px-4 rounded-lg bg-gray-50 text-gray-300"
            ></div>
            <Link
                v-else
                :href="link.url"
                class="text-xs py-2 px-4 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                :class="{
                    'bg-indigo-700 text-indigo-50 hover:bg-indigo-800 hover:text-white':
                        link.active,
                }"
                v-html="link.label"
            ></Link>
        </template>
    </div>
</template>
