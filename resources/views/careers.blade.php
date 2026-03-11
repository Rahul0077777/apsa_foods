@extends('layouts.frontend')

@section('content')

<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">


    <!-- Main Content Wrapper -->
    <div class="layout-container flex grow flex-col items-center">

        <!-- Hero Section -->
        <div class="w-full px-4 md:px-10 lg:px-40 py-5">
            <div class="mx-auto flex w-full flex-col">
                <div class="@container">
                    <div class="@[480px]:p-4">
                        <div class="relative flex min-h-[400px] flex-col gap-6 overflow-hidden rounded-xl bg-cover bg-center bg-no-repeat p-8 text-center items-center justify-center"
                            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.6) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDwfgroIAfr9LrsLy3S29NtxR1GoSB7CJwu0bzDwbbAY4CgZ7Eyr77mT8equAlBQhoB0ofWyhgnmwq39dHEcnOl9fJHa3DDTU0M6uM68NsIoh0snCfV49Q0W6UglkUxZKexl0Deo-aaWotf8lfU5A9ZrsVh6dQH-I9r-nWrA0Wk4fHUmxUV6T1fx1PFo26tdVcK2koydJ4QNEY6wTYytgMDnoBF96t0_7o5iF3KtoVQTMRZSdi8z-FTLf9moFLt3561uWGEWskn1-k");'>
                            <div class="flex flex-col gap-4">
                                <h1 class="text-white text-4xl font-black md:text-5xl">Careers at Apsavi Bubbly 🚀</h1>
                                <!-- <h1 class="text-white text-4xl font-black md:text-5xl">Build Fast. Sell Hard. Scale Big. -->
                                </h1>
                                <!-- <p class="mx-auto max-w-lg text-white opacity-90">
                                    Apsavi Bubbly is building a next-gen bubbly soda & mineral water brand with one
                                    clear goal:
                                    win shelves, own outlets, and scale distribution fast.

                                </p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center max-w-5xl mx-auto text-lg leading-relaxed text-neutral-600 dark:text-neutral-300 space-y-4">
            <p><strong>Build Fast. Sell Hard. Scale Big.</strong></p>
            <p>Apsavi Bubbly is building a <strong>next-gen bubbly soda & mineral water brand</strong> with one clear goal:<br><strong>win shelves, own outlets, and scale distribution fast.</strong></p>
            <p>We operate like a <strong>startup with FMCG discipline</strong>—clear targets, strong execution, and zero tolerance for mediocrity.</p>
            <p>If you want <strong>comfort,</strong> this isn’t for you.</p>
            <p>If you want <strong>growth, ownership, and impact,</strong> read on.</p>
        </div>

        <!-- Why Join Us -->
        <!-- Features / Why Apsavi Bubbly -->
        <div class="w-full px-4 md:px-10 lg:px-40 pb-5">
            <div class="mx-auto flex w-full flex-col">
                <div class="flex flex-col gap-8 px-4 py-6">

                    <h2 class="text-text-main text-2xl font-bold leading-tight md:text-3xl">
                        Why Apsavi Bubbly?
                    </h2>

                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">

                        <!-- Point 1 -->
                        <div
                            class="group flex flex-col gap-3 rounded-xl border border-accent-light bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                            <div class="text-primary mb-2">
                                <span class="material-symbols-outlined text-4xl">trending_up</span>
                            </div>
                            <h3 class="text-text-main text-base font-bold dark:text-white">
                                Aggressive Growth Play
                            </h3>
                            <p class="text-text-secondary text-sm dark:text-[#8bc48b]">
                                Rapid expansion across General Trade, Modern Trade & HoReCa.
                            </p>
                        </div>

                        <!-- Point 2 -->
                        <div
                            class="group flex flex-col gap-3 rounded-xl border border-accent-light bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                            <div class="text-primary mb-2">
                                <span class="material-symbols-outlined text-4xl">track_changes</span>
                            </div>
                            <h3 class="text-text-main text-base font-bold dark:text-white">
                                Target-Driven Culture
                            </h3>
                            <p class="text-text-secondary text-sm dark:text-[#8bc48b]">
                                Clear KPIs. Clear numbers. Performance decides growth.
                            </p>
                        </div>

                        <!-- Point 3 -->
                        <div
                            class="group flex flex-col gap-3 rounded-xl border border-accent-light bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                            <div class="text-primary mb-2">
                                <span class="material-symbols-outlined text-4xl">local_drink</span>
                            </div>
                            <h3 class="text-text-main text-base font-bold dark:text-white">
                                High-Velocity Products
                            </h3>
                            <p class="text-text-secondary text-sm dark:text-[#8bc48b]">
                                Bubbly sodas & mineral water with daily repeat consumption.
                            </p>
                        </div>

                        <!-- Point 4 -->
                        <div
                            class="group flex flex-col gap-3 rounded-xl border border-accent-light bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                            <div class="text-primary mb-2">
                                <span class="material-symbols-outlined text-4xl">corporate_fare</span>
                            </div>
                            <h3 class="text-text-main text-base font-bold dark:text-white">
                                Corporate Processes, Startup Speed
                            </h3>
                            <p class="text-text-secondary text-sm dark:text-[#8bc48b]">
                                Strong SOPs, pricing discipline, audits—executed at startup pace.
                            </p>
                        </div>

                        <!-- Point 5 -->
                        <div
                            class="group flex flex-col gap-3 rounded-xl border border-accent-light bg-white p-6 shadow-sm transition-all hover:border-primary/50 hover:shadow-md dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                            <div class="text-primary mb-2">
                                <span class="material-symbols-outlined text-4xl">rocket_launch</span>
                            </div>
                            <h3 class="text-text-main text-base font-bold dark:text-white">
                                Fast Career Acceleration
                            </h3>
                            <p class="text-text-secondary text-sm dark:text-[#8bc48b]">
                                Deliver results → own bigger territories → move up faster.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- How to Apply + Apply Form Section -->
<div class="w-full px-4 md:px-10 lg:px-40 pb-24">
    <div class="mx-auto grid max-w-6xl grid-cols-1 gap-10 lg:grid-cols-12">

        <!-- LEFT SIDE -->
        <div class="lg:col-span-7 flex flex-col gap-10">

            <!-- How to Apply Card -->
            <div class="rounded-2xl border border-accent-light bg-white p-8 shadow-sm dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">

                <h2 class="mb-4 text-2xl font-bold text-text-main dark:text-white">
                    How to Apply
                </h2>

                <p class="mb-4 text-text-secondary dark:text-[#8bc48b]">
                    Whether you're a starter with hunger or a professional with experience,
                    if you have the drive — we want to hear from you.
                </p>

                <p class="mb-6 text-text-secondary dark:text-[#8bc48b]">
                    Interested in joining the Apsavi journey? Send us your details and we'll take it from there.
                </p>

                <div class="space-y-3 text-sm">

                    <p>
                        📧 <strong>Email:</strong>
                        <a href="mailto:careers@apsavibubbly.com"
                            class="text-primary underline">
                            careers@apsavibubbly.com
                        </a>
                    </p>

                    <p>
                        📄 <strong>Subject:</strong> Applying for [Role Name]
                    </p>

                    <p>
                        📞 <strong>Phone No:</strong> Mention in email
                    </p>

                    <p>
                        📍 <strong>Location:</strong> Current city & state
                    </p>

                    <p>
                        📎 <strong>Attach:</strong> Resume + short intro (optional but recommended)
                    </p>

                </div>

            </div>


            <!-- Life at Apsavi -->
            <div class="text-center">

                <h2 class="mb-4 text-2xl font-bold dark:text-white">
                    Life at Apsavi Bubbly
                </h2>

                <p class="max-w-2xl mx-auto text-text-secondary dark:text-[#8bc48b]">
                    We move fast. We learn faster. We celebrate wins — big and small<br>
                    If you believe in building something meaningful from the ground up,<br>
                    <strong class="dark:text-white">Apsavi Bubbly is where you belong.</strong>
                </p>

                <div class="mt-8">

                    <p class="font-bold dark:text-white">
                        Built on Belief. Bottled with Purpose.
                    </p>

                    <p class="text-text-secondary dark:text-[#8bc48b]">
                        Join us. Let’s make India bubbly 🥤✨
                    </p>

                </div>

            </div>

        </div>


        <!-- Right Column: Sticky Application Form -->
                <div class="lg:col-span-5">
                    <div
                        class="sticky top-24 rounded-xl border border-accent-light bg-white p-6 shadow-lg dark:bg-[#1a2e1a] dark:border-[#2a4e2a]">
                        <h3 class="mb-1 text-xl font-bold text-text-main dark:text-white">Apply Now</h3>
                        <p class="mb-6 text-sm text-text-secondary dark:text-[#8bc48b]">Take the first step towards
                            a fresh career.</p>
                        <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data"
                            class="flex flex-col gap-4">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label class="mb-1 block text-sm font-medium text-text-main dark:text-gray-300">Full
                                    Name</label>
                                <input name="name"
                                    class="w-full rounded-lg border-accent-light bg-background-light p-2.5 text-sm text-text-main placeholder-text-secondary focus:border-primary focus:ring-primary dark:bg-[#102210] dark:border-[#2a4e2a]"
                                    placeholder="Jane Doe" type="text" required />
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="mb-1 block text-sm font-medium text-text-main dark:text-gray-300">Email
                                    Address</label>
                                <input name="email"
                                    class="w-full rounded-lg border-accent-light bg-background-light p-2.5 text-sm text-text-main placeholder-text-secondary focus:border-primary focus:ring-primary dark:bg-[#102210] dark:border-[#2a4e2a]"
                                    placeholder="jane@example.com" type="email" required />
                            </div>

                            <!-- Role Selection -->
                            <div>
                                <label
                                    class="mb-1 block text-sm font-medium text-text-main dark:text-gray-300">Position</label>
                                <div class="relative">
                                    <select name="career_opening_id"
                                        class="w-full appearance-none rounded-lg border-accent-light bg-background-light p-2.5 text-sm text-text-main focus:border-primary focus:ring-primary dark:bg-[#102210] dark:border-[#2a4e2a]">

                                        @foreach($jobs as $job)
                                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                                        @endforeach

                                        <option value="">General Application</option>
                                    </select>

                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-text-secondary">
                                        <span class="material-symbols-outlined">expand_more</span>
                                    </div>
                                </div>
                            </div>

                            <!-- LinkedIn -->
                            <div>
                                <label class="mb-1 block text-sm font-medium text-text-main dark:text-gray-300">LinkedIn
                                    / Portfolio URL</label>
                                <input name="portfolio"
                                    class="w-full rounded-lg border-accent-light bg-background-light p-2.5 text-sm text-text-main placeholder-text-secondary focus:border-primary focus:ring-primary dark:bg-[#102210] dark:border-[#2a4e2a]"
                                    placeholder="https://linkedin.com/in/..." type="url" />
                            </div>

                            <!-- Resume Upload -->
                            <div class="mt-2">
                                <label
                                    class="mb-1 block text-sm font-medium text-text-main dark:text-gray-300">Resume/CV</label>
                                <div
                                    class="relative flex cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-accent-light bg-background-light px-4 py-6 text-center hover:border-primary/50 hover:bg-white dark:bg-[#102210] dark:border-[#2a4e2a] dark:hover:bg-[#152b15] transition-colors">
                                    <span
                                        class="material-symbols-outlined mb-2 text-3xl text-text-secondary">cloud_upload</span>
                                    <p class="text-xs font-medium text-text-main dark:text-gray-300">
                                        <span class="text-primary underline">Click to upload</span> or drag and drop
                                    </p>
                                    <p class="mt-1 text-[10px] text-text-secondary">PDF, DOCX (Max 5MB)</p>
                                    <input name="resume" accept=".pdf,.docx,.doc"
                                        class="absolute inset-0 h-full w-full opacity-0 cursor-pointer" type="file"
                                        required />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button
                                class="mt-4 flex w-full items-center justify-center rounded-lg bg-primary py-3 text-sm font-bold text-text-main shadow-md hover:bg-[#0fd60f] transition-all hover:shadow-lg active:scale-95"
                                type="submit">
                                Submit Application
                            </button>
                        </form>

                    </div>
                </div>

    </div>
</div>


    @endsection