<x-app-layout>
    <x-slot name="header">
        <div>
            <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-100">Welcome back, {{ auth()->user()->name }}</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Here’s a quick overview of your learning activity.</p>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="mx-auto max-w-7xl space-y-8 sm:px-6 lg:px-8">
            <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Completed Lessons</p>
                    <div class="mt-2 flex items-baseline gap-2">
                        <span class="text-3xl font-semibold text-gray-900 dark:text-white">18</span>
                        <span class="text-sm text-emerald-500">+3 this week</span>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Projects</p>
                    <div class="mt-2 flex items-baseline gap-2">
                        <span class="text-3xl font-semibold text-gray-900 dark:text-white">4</span>
                        <span class="text-sm text-blue-500">In progress</span>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Skill Streak</p>
                    <div class="mt-2 flex items-baseline gap-2">
                        <span class="text-3xl font-semibold text-gray-900 dark:text-white">7</span>
                        <span class="text-sm text-emerald-500">days</span>
                    </div>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <p class="text-sm font-medium text-gray-500 dark:text-gray-400">Next Milestone</p>
                    <div class="mt-2 flex items-baseline gap-2">
                        <span class="text-3xl font-semibold text-gray-900 dark:text-white">Capstone Review</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">Scheduled for Friday · 2:00 PM</p>
                </div>
            </div>

            <div class="grid gap-6 lg:grid-cols-3">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800 lg:col-span-2">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Upcoming Sessions</h2>
                    <ul class="mt-4 space-y-4">
                        <li class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Robotics Lab</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">With Ms. Otieno · 25 Nov, 09:00 AM</p>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700 dark:bg-emerald-500/10 dark:text-emerald-300">STEM</span>
                        </li>
                        <li class="flex items-start justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-900 dark:text-white">Design Thinking Workshop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">With Mr. Kamau · 27 Nov, 02:00 PM</p>
                            </div>
                            <span class="rounded-full bg-blue-100 px-3 py-1 text-xs font-semibold text-blue-700 dark:bg-blue-500/10 dark:text-blue-300">Innovation</span>
                        </li>
                    </ul>
                </div>

                <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800">
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Quick Links</h2>
                    <div class="mt-4 space-y-3 text-sm">
                        <a href="#" class="block rounded-lg border border-gray-200 px-4 py-3 font-medium text-gray-700 transition hover:border-emerald-400 hover:text-emerald-600 dark:border-gray-700 dark:text-gray-300 dark:hover:border-emerald-500/40 dark:hover:text-emerald-300">
                            Continue learning path
                        </a>
                        <a href="#" class="block rounded-lg border border-gray-200 px-4 py-3 font-medium text-gray-700 transition hover:border-emerald-400 hover:text-emerald-600 dark:border-gray-700 dark:text-gray-300 dark:hover:border-emerald-500/40 dark:hover:text-emerald-300">
                            Join community forum
                        </a>
                        <a href="#" class="block rounded-lg border border-gray-200 px-4 py-3 font-medium text-gray-700 transition hover:border-emerald-400 hover:text-emerald-600 dark:border-gray-700 dark:text-gray-300 dark:hover:border-emerald-500/40 dark:hover:text-emerald-300">
                            Submit project update
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
