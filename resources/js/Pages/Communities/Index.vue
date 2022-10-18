<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Table from "@/Components/Table.vue";
import { Head } from "@inertiajs/inertia-vue3";

const props = defineProps(["communities"]);
const tableDescription = "A list of all the communities in the system including their title, slug, and description.";
const pagination = {
    currentPage: props.communities.current_page,
    firstPageUrl: props.communities.first_page_url,
    lastPage: props.communities.last_page,
    lastPageUrl: props.communities.last_page_url,
    links: props.communities.links,
}
</script>

<template>
    <Head title="Communities" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Communities
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <Table topButtonTitle="Add community" showTopButton="true" title="Communities" :description="tableDescription" :items="communities.data" :pagination="pagination"/>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
