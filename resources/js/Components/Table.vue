<script setup>
import PrimaryLink from "@/Components/PrimaryLink.vue";
import Pagination from "@/Components/Pagination.vue";

import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps([
    "topButtonTitle",
    "showTopButton",
    "title",
    "description",
    "items",
    "actionLinks",
    "pagination",
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
                <div class="inline-block min-w-full py-2 align-middle px-1">
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
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        Created At
                                    </th>
                                    <th
                                        scope="col"
                                        class="relative px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    >
                                        Actions
                                        <span class="sr-only">Actions</span>
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
                                        class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                    >
                                        {{ item.created_at }}
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-sm font-medium sm:pr-6"
                                    >
                                        <Link
                                            :href="
                                                route(
                                                    'communities.edit',
                                                    item.id
                                                )
                                            "
                                            class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                        >
                                            Edit
                                        </Link>
                                        <Link
                                            :href="
                                                route(
                                                    'communities.destroy',
                                                    item.id
                                                )
                                            "
                                            class="text-red-600 hover:text-red-900 ml-4 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                            method="delete"
                                            as="button"
                                            type="button"
                                        >
                                            Delete
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <Pagination :pagination="pagination" />
        </div>
    </div>
</template>
