@extends('layouts.frontend')

@section('title', 'Contact Us - JuiceBrand')

@section('content')
<main class="flex flex-col min-h-screen">
    <!-- Hero Section -->
    <div class="w-full bg-background-light dark:bg-background-dark py-12 lg:py-16">
        <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10">
            <div class="flex flex-col gap-4 max-w-2xl">
                <h1 class="text-text-main dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tight">
                    Let's squeeze the day together.
                </h1>
                <p class="text-text-secondary dark:text-gray-300 text-lg font-normal leading-relaxed">
                    Have a question about our ingredients, a recent order, or just want to say hello? Our team is ready
                    to help you on your wellness journey.
                </p>
            </div>
        </div>
    </div>

    <!-- Content Grid -->
    <div class="layout-content-container max-w-[1200px] mx-auto px-6 lg:px-10 pb-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">

            <!-- Contact Form -->
            <div
                class="lg:col-span-7 bg-white dark:bg-[#1a331a]/50 border border-[#e7f3e7] dark:border-[#1a331a] rounded-2xl p-6 md:p-8 shadow-sm">
                <form method="POST" action="{{ route('contact.submit') }}" class="flex flex-col gap-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label class="flex flex-col gap-2">
                            <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Full Name</span>
                            <input name="name"
                                class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="Jane Doe" type="text" required />
                        </label>

                        <label class="flex flex-col gap-2">
                            <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Email Address</span>
                            <input name="email"
                                class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="jane@example.com" type="email" required />
                        </label>
                    </div>

                    <label class="flex flex-col gap-2">
                        <span class="text-text-main dark:text-gray-200 text-sm font-semibold">
                            Phone Number <span class="text-text-secondary font-normal">(Optional)</span>
                        </span>
                        <input name="phone"
                            class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] h-12 px-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                            placeholder="(555) 123-4567" type="tel" />
                    </label>

                    <label class="flex flex-col gap-2">
                        <span class="text-text-main dark:text-gray-200 text-sm font-semibold">Message</span>
                        <textarea name="message"
                            class="w-full rounded-lg border border-[#cfe7cf] dark:border-gray-600 bg-[#f8fcf8] dark:bg-[#102210] min-h-[160px] p-4 text-base text-text-main dark:text-white placeholder:text-text-secondary focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all resize-y"
                            placeholder="How can we help you today?" required></textarea>
                    </label>

                    <button
                        class="mt-2 flex w-full md:w-auto md:self-start items-center justify-center rounded-lg bg-primary h-12 px-8 text-text-main font-bold text-base hover:bg-green-400 hover:shadow-lg hover:shadow-green-500/20 active:scale-95 transition-all duration-200"
                        type="submit">
                        Send Message
                    </button>
                </form>

            </div>

            <!-- Sidebar Info -->
            <div class="lg:col-span-5 flex flex-col gap-8">
                <!-- Info Card -->
                <div class="bg-[#e7f3e7] dark:bg-[#1a331a] rounded-2xl p-8 flex flex-col gap-8">
                    <div>
                        <h3 class="text-xl font-bold text-text-main dark:text-white mb-6">Contact Information</h3>
                        <div class="flex flex-col gap-6">

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">location_on</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Headquarters</p>
                                    <p class="text-text-secondary dark:text-gray-300 leading-relaxed">
                                       A-05, Shakti Enclave Paschim Vihar<br />, Delhi-110063
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">mail</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Email Us</p>
                                    <a class="text-text-secondary dark:text-gray-300 hover:text-primary transition-colors"
                                        href="mailto:Apsafoods@gmail.com">
                                        Apsafoods@gmail.com
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="mt-1 flex items-center justify-center size-10 rounded-full bg-white dark:bg-white/10 text-primary shrink-0">
                                    <span class="material-symbols-outlined">schedule</span>
                                </div>
                                <div>
                                    <p class="font-bold text-text-main dark:text-white">Support Hours</p>
                                    <p class="text-text-secondary dark:text-gray-300">Mon-Fri, 9am - 5pm PST</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="border-t border-white/50 dark:border-white/10 pt-6">
                        <h4 class="text-sm font-bold text-text-main dark:text-white uppercase tracking-wider mb-4">
                            Follow Us</h4>
                        <div class="flex gap-4">
                            <!-- Social icons same as your HTML (unchanged) -->
                        </div>
                    </div>
                </div>

                <!-- Help Teaser -->
                <div
                    class="rounded-2xl border border-primary/30 bg-primary/5 dark:bg-primary/10 p-6 flex items-center gap-4">
                    <span class="material-symbols-outlined text-primary text-3xl">help</span>
                    <div>
                        <p class="font-bold text-text-main dark:text-white">Need quick answers?</p>
                        <a class="text-sm text-text-secondary hover:text-primary underline decoration-primary/50 underline-offset-2"
                            href="#">
                            Check out our Frequently Asked Questions
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Map Section -->
    <!-- Map Section -->
    <div class="w-full relative rounded-2xl overflow-hidden shadow-sm border border-[#e7f3e7] dark:border-[#1a331a]">
        <iframe class="w-full h-[400px]" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=A-05, Shakti Enclave, Paschim Vihar, Delhi-110063&output=embed">
        </iframe>
    </div>

</main>


@endsection