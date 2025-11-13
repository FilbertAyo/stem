<x-admin-layout>
    <x-slot name="header">
        <div>
            <p class="text-xs uppercase tracking-wide text-slate-500">Control Center</p>
            <h1 class="mt-1 text-2xl font-semibold text-white">Welcome back, {{ auth()->user()->name }}</h1>
        </div>
    </x-slot>

    <section class="space-y-10">
        <div class="grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
                <p class="text-sm font-medium text-slate-400">Total Students</p>
                <div class="mt-3 flex items-baseline gap-2">
                    <span class="text-3xl font-semibold text-white">1,248</span>
                    <span class="text-sm text-emerald-400">+4.2%</span>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
                <p class="text-sm font-medium text-slate-400">Active Teachers</p>
                <div class="mt-3 flex items-baseline gap-2">
                    <span class="text-3xl font-semibold text-white">84</span>
                    <span class="text-sm text-emerald-400">+1.8%</span>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
                <p class="text-sm font-medium text-slate-400">Ongoing Programs</p>
                <div class="mt-3 flex items-baseline gap-2">
                    <span class="text-3xl font-semibold text-white">12</span>
                    <span class="text-sm text-emerald-400">+1</span>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
                <p class="text-sm font-medium text-slate-400">Support Tickets</p>
                <div class="mt-3 flex items-baseline gap-2">
                    <span class="text-3xl font-semibold text-white">5</span>
                    <span class="text-sm text-amber-400">-2</span>
                </div>
            </div>
        </div>

        <div class="grid gap-6 lg:grid-cols-3">
            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6 lg:col-span-2">
                <h2 class="text-lg font-semibold text-white">Recent Activity</h2>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-white">New cohort enrolled</p>
                            <p class="text-xs text-slate-400">STEM Foundations · 32 students</p>
                        </div>
                        <span class="text-xs text-slate-500">6m ago</span>
                    </li>
                    <li class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-white">Teacher onboarding completed</p>
                            <p class="text-xs text-slate-400">Amina Njoroge · Robotics</p>
                        </div>
                        <span class="text-xs text-slate-500">42m ago</span>
                    </li>
                    <li class="flex items-start justify-between">
                        <div>
                            <p class="text-sm font-medium text-white">New partner school</p>
                            <p class="text-xs text-slate-400">Mombasa Technical Institute</p>
                        </div>
                        <span class="text-xs text-slate-500">2h ago</span>
                    </li>
                </ul>
            </div>

            <div class="rounded-2xl border border-slate-800 bg-slate-900/60 p-6">
                <h2 class="text-lg font-semibold text-white">Quick Actions</h2>
                <div class="mt-4 space-y-3">
                    <a href="#" class="block rounded-lg border border-slate-800 px-4 py-3 text-sm font-medium text-slate-200 hover:bg-slate-800/60">
                        Invite new teacher
                    </a>
                    <a href="#" class="block rounded-lg border border-slate-800 px-4 py-3 text-sm font-medium text-slate-200 hover:bg-slate-800/60">
                        Publish program update
                    </a>
                    <a href="#" class="block rounded-lg border border-slate-800 px-4 py-3 text-sm font-medium text-slate-200 hover:bg-slate-800/60">
                        Review support queue
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
