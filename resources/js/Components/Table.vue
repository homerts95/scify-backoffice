<script>
export default {
    props: {
        title: String,
        description: String,
        columns: Array,
        items: Array,
    },
    methods: {
        //reduce until relationship is found
        getProperty(item, path) {
            return path.split('.').reduce((object, key) => object && object[key] ? object[key] : null, item);
        }
    },

};
</script>

<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 sm:px-6 lg:px-8 mt-2">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-xl font-semibold text-gray-900">{{ title }}</h1>
                            <p class="mt-2 text-sm text-gray-700">{{ description }}</p>
                        </div>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg mb-4">
                                    <table class="min-w-full divide-y divide-gray-300">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th v-for="column in columns" :key="column.field" scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                                {{ column.label }}
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="divide-y divide-gray-200 bg-white">
                                        <tr v-for="item in items" :key="item.id">
                                            <td v-for="column in columns" :key="column.field"
                                                class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <a v-if="column.isLink" :href="item[column.field]" target="_blank"
                                                   rel="noopener noreferrer"
                                                   class="text-indigo-600 hover:text-indigo-900">
                                                    {{
                                                        column.textField ? getProperty(item, column.textField) : getProperty(item, column.field)
                                                    }}
                                                </a>
                                                <span v-else>{{ getProperty(item, column.field) }}</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
