<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { Inertia } from '@inertiajs/inertia'

setInterval(() => {
    Inertia.reload({ only: ['timeSlots', 'totalTime'] });
}, 10000);

defineProps({
    timeSlots: Array,
    totalTime: Number,
})
</script>

<template>

    <Head title="Welcome" />

    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        <h1 class="text-6xl text-center">{{ totalTime }}</h1>
        <div class="lg:flex flex-wrap items-center justify-center w-full">
            <div v-for="timeSlot in timeSlots" :key="timeSlot.id" tabindex="0" aria-label="card 1"
                class="focus:outline-none lg:w-5/12 lg:mr-7 lg:mb-0 m-6 bg-white dark:bg-gray-800  p-6 shadow rounded border-spacing-2">
                <div class="flex items-center border-b border-gray-200 dark:border-gray-700  pb-6">
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-1/2">
                            <p tabindex="0"
                                class="focus:outline-none text-xl font-medium leading-5 text-gray-800 dark:text-white ">
                                {{ timeSlot.id }}</p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                Active Time: <b>{{ timeSlot.activeTime }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                Inactive Time: <b>{{ timeSlot.inactiveTime }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                DurationMinutes: <b>{{ timeSlot.durationMinutes }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                isSynced: <b>{{ timeSlot.isSynced }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                BeginDate: <b>{{ new Date(timeSlot.beginDate).toISOString() }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                EndinDate: <b>{{ new Date(timeSlot.endDate).toISOString() }}</b>
                            </p>
                            <p tabindex="0"
                                class="focus:outline-none text-sm leading-normal pt-2 text-gray-800 dark:text-gray-200 ">
                                Day: <b>{{ timeSlot.day }}</b>
                            </p>
                        </div>
                        <div class="pl-3 w-1/2" v-if="timeSlot.screenshots[0]">
                            <img v-if="timeSlot.screenshots[0].liveURL" :src="timeSlot.screenshots[0].liveURL" alt="" width="200" height="200">
                            <p v-else>Uploading...</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none dark:text-white text-gray-800" width="28" height="28"
                                viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="currentColor" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <h2 class="display-2">MinutePulses</h2>

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        id
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        minuteNumber
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        clicks
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        keystrokes
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        isComplete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="minutePulse in timeSlot.minute_pulses"
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ minutePulse.id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ minutePulse.minuteNumber }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ minutePulse.clicks }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ minutePulse.keystrokes }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ minutePulse.isComplete }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="px-2">
                    <h2 class="display-2">Screenshots</h2>

                    <div class="overflow-x-auto relative">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="py-3 px-6">
                                        id
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        displayId
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        dimensions
                                    </th>
                                    <th scope="col" class="py-3 px-6">
                                        capturedAt
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="screenshot in timeSlot.screenshots"
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ screenshot.id }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ screenshot.displayId }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ screenshot.dimensions }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ new Date(screenshot.capturedAt).toISOString() }}
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
