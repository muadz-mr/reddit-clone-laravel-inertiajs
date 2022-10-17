<script setup>
import PrimaryLink from "@/Components/PrimaryLink.vue";

const props = defineProps([
    "topButtonTitle",
    "showTopButton",
    "title",
    "description",
    "items",
]);
</script>

<template>
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">{{ title }}</h1>
                <p class="mt-2 text-sm text-gray-700">
                    {{ description }}
                </p>
            </div>
            <div
                class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none"
                v-if="showTopButton"
            >
                <PrimaryLink :href="route('communities.create')">
                    {{ topButtonTitle }}
                </PrimaryLink>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 overflow-x-auto">
                <div
                    class="inline-block min-w-full py-2 align-middle px-1"
                >
                    <div
                        class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg"
                    >
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                    >
                                        Name
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        Slug
                                    </th>
                                    <th
                                        scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        Description
                                    </th>
                                    <th
                                        scope="col"
                                        class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                                    >
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr v-for="item in items" :key="item.id">
                                    <td
                                        class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6"
                                    >
                                        {{ item.name }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                    >
                                        {{ item.slug }}
                                    </td>
                                    <td
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                    >
                                        {{ item.description }}
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                                    >
                                        <a
                                            href="#"
                                            class="text-indigo-600 hover:text-indigo-900"
                                            >Edit<span class="sr-only"
                                                >, {{ item.name }}</span
                                            ></a
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
