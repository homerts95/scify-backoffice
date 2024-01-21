<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head} from '@inertiajs/vue3';
import Table from '/resources/js/Components/Table.vue';

const props = defineProps({
    games: Array
});

const columns = [
    {label: 'Application', field: 'application.name', isLink: false},
    {label: 'Creator', field: 'creator.name', isLink: false},
    {label: 'Link', field: 'link', isLink: true, textField: 'name'},
    {label: 'Date of Creation', field: 'date_of_creation', isLink: false},
];
</script>

<template>
    <Head title="Dashboard"/>
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <Table
            title="Games / Exercises"
            description="Summary of number of games / exercises created by the community for the Memor-i-studio and Διάννοια applications"
            :columns="columns"
            :items="props.games"
        />
    </AuthenticatedLayout>
</template>
