<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'

setInterval(() => {
    Inertia.reload({ only: ['pulses', 'total'] });
}, 10000);

defineProps({
    pulses: Array,
    total: Number,
})
</script>

<template>

    <Head title="Welcome" />

    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        <h1 class="text-6xl text-center">{{ totalTime }}</h1>
        <div class="lg:flex flex-wrap items-center justify-center w-full">


            <div class="overflow-x-auto relative">
                <h1 class="display-1 text-center">{{ total }}</h1>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                id
                            </th>
                            <th scope="col" class="py-3 px-6">
                                minuteTime
                            </th>
                            <th scope="col" class="py-3 px-6">
                                clicks
                            </th>
                            <th scope="col" class="py-3 px-6">
                                keystrokes
                            </th>
                            <th scope="col" class="py-3 px-6">
                                isActive
                            </th>
                            <th scope="col" class="py-3 px-6">
                                isSynced
                            </th>
                            <th scope="col" class="py-3 px-6">
                                isIdle
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Comment
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="pulse in pulses" :key="pulse.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="py-4 px-6">
                                {{ pulse.id }}
                            </td>
                            <td class="py-4 px-6 text-red-700">
                                {{ new Date(pulse.minuteTime).toISOString() }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.clicks }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.keystrokes }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.isActive }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.isSynced }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.isIdle }}
                            </td>
                            <td class="py-4 px-6">
                                {{ pulse.comment }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div>

</template>
