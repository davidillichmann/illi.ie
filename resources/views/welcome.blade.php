<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>illi — Web artisans</title>
    <meta name="description" content="I help small and medium businesses build, fix, and modernise their web presence and internal tools.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://illi.ie">
    <meta property="og:title" content="illi — Web artisans">
    <meta property="og:description" content="I help small and medium businesses build, fix, and modernise their web presence and internal tools — you deal with me directly, from first conversation to finished product.">
    <meta property="og:image" content="https://illi.ie/og-image.jpg">

    {{-- Twitter/X card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="illi — Web artisans">
    <meta name="twitter:description" content="I help small and medium businesses build, fix, and modernise their web presence and internal tools — you deal with me directly, from first conversation to finished product.">
    <meta name="twitter:image" content="https://illi.ie/og-image.jpg">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=fraunces:400,400i,700|inter:400,500&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-stone-900 antialiased">

    <div class="min-h-[100dvh] 2xl:min-h-0 flex flex-col">

    {{-- Nav --}}
    <header class="px-6 py-8 md:px-12 lg:px-16">
        <div class="max-w-3xl mx-auto flex items-center justify-between">
            <span class="font-serif text-xl tracking-tight">illi</span>
            <a href="mailto:david@illi.ie" class="text-sm text-stone-500 hover:text-stone-900 transition-colors">david@illi.ie</a>
        </div>
    </header>

    {{-- Hero --}}
    <section class="flex-1 flex items-center px-6 pt-16 pb-24 md:px-12 md:pt-24 md:pb-32 lg:px-16">
        <div class="max-w-3xl mx-auto">
            <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight text-stone-900 border-l-[3px] border-amber-400 pl-6">
                Your<br>
                <span id="rotating-word" class="text-amber-400 transition-opacity duration-300">web artisans</span>
            </h1>
            <p class="mt-10 text-lg md:text-xl text-stone-600 leading-relaxed max-w-xl">
                I help small and medium businesses build, fix, and modernise their web presence and internal tools — you deal with me directly, from first conversation to finished product.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="#contact" class="inline-block bg-amber-400 text-stone-900 text-sm px-6 py-3 rounded-full hover:bg-amber-300 transition-colors">Get in touch</a>
                <a href="#work" class="inline-block text-sm px-6 py-3 text-stone-600 hover:text-amber-400 transition-colors">See my work →</a>
            </div>
        </div>
    </section>

    </div>

    {{-- Case Studies --}}
    <section id="work" class="px-6 py-20 md:px-12 md:py-28 lg:px-16 bg-stone-50">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">Work</h2>

            <div class="divide-y divide-stone-200">

                <div class="py-10">
                    <p class="text-xs text-stone-400 mb-3">Workspace booking platform</p>
                    <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Clearooms</h3>
                    <p class="text-stone-600 leading-relaxed">
                        A startup needed a full booking platform built from scratch — room and desk reservations, Google and Microsoft calendar integrations, Stripe payments, and real-time availability. I was part of the core team that built it from zero to a live production product, and later led development as the platform grew.
                    </p>
                </div>

                <div class="py-10">
                    <p class="text-xs text-stone-400 mb-3">Healthcare app modernisation</p>
                    <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Laya Healthcare</h3>
                    <p class="text-stone-600 leading-relaxed">
                        A major Irish health insurer was running critical patient-facing tools on outdated technology. I led the rebuild of their login system and patient cover-checker app into modern, fast, maintainable applications — without disrupting live services in the process.
                    </p>
                </div>

                <div class="py-10">
                    <p class="text-xs text-stone-400 mb-3">Internal platform for a music group</p>
                    <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Music catalogue platform</h3>
                    <p class="text-stone-600 leading-relaxed">
                        A large music company needed a custom internal platform to manage artists, contracts, and release workflows across their catalogue. I was part of the core team that spent nearly three years building and refining this — a complex, high-stakes product used daily by their entire operation.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Services --}}
    <section id="services" class="px-6 py-20 md:px-12 md:py-28 lg:px-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">Services</h2>

            <p class="text-stone-600 leading-relaxed mb-10">
                Whether you're starting from scratch or trying to fix what you already have, here's where I can help:
            </p>

            <div>

                <div class="border-t border-stone-200 py-10">
                    <h3 class="font-medium text-stone-900 mb-3">New websites and web apps</h3>
                    <p class="text-stone-500 leading-relaxed text-sm">Got an idea or a business that needs a proper online presence? I'll build something <span class="text-amber-400">clean, fast, and easy to manage</span>.</p>
                </div>

                <div class="border-t border-stone-200 py-10">
                    <h3 class="font-medium text-stone-900 mb-3">Modernising old systems</h3>
                    <p class="text-stone-500 leading-relaxed text-sm">Running on something outdated, slow, or held together with duct tape? I can assess what you have and <span class="text-amber-400">bring it up to speed</span>.</p>
                </div>

                <div class="border-t border-stone-200 py-10">
                    <h3 class="font-medium text-stone-900 mb-3">Internal tools and portals</h3>
                    <p class="text-stone-500 leading-relaxed text-sm">Need something just for your team? Booking systems, admin panels, customer portals — tools that <span class="text-amber-400">make your operation run smoother</span>.</p>
                </div>

                <div class="border-t border-stone-200 py-10">
                    <h3 class="font-medium text-stone-900 mb-3">Ongoing support and development</h3>
                    <p class="text-stone-500 leading-relaxed text-sm">Some clients need a one-off project. Others want someone they can call when something breaks or when the next idea hits. <span class="text-amber-400">I'm open to both.</span></p>
                </div>

            </div>

            <p class="border-t border-stone-200 pt-10 text-stone-500 text-sm leading-relaxed">
                I work with businesses in hospitality, trades, property, e-commerce, healthcare, and beyond. If you're not sure whether what you need falls into any of these — just ask.
            </p>
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="px-6 py-20 md:px-12 md:py-28 lg:px-16 bg-stone-50">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">About</h2>

            <div class="space-y-5 text-stone-600 leading-relaxed">
                <p>
                    I'm David, the person behind <span class="font-serif">illi</span>. I've spent <span class="text-amber-400">8 years</span> building web products for companies ranging from Irish healthcare providers to international music groups — always as someone who gets their hands dirty, not just someone who writes a spec and disappears.
                </p>
                <p>
                    I'm based in Celbridge, Ireland, and I work with clients remotely and in person. I'm straightforward to deal with, I communicate clearly, and I don't hide behind jargon. If I can't help you with something, I'll tell you — and I'll probably know someone who can.
                </p>
                <p>Also, I like <span class="text-amber-400">mango</span>.</p>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section id="contact" class="bg-stone-900 px-6 py-20 md:px-12 md:py-28 lg:px-16">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-500 mb-10">Contact</h2>
            <p class="font-serif text-3xl md:text-4xl text-white mb-4 leading-snug">Let's talk about<br>what you need.</p>
            <p class="text-stone-400 mb-8">Have a project in mind? <a href="https://calendar.app.google/sXgCAHtJmi3ZnTY17" target="_blank" rel="noopener noreferrer" class="text-amber-400 hover:text-amber-300 transition-colors">Book a call →</a></p>
            <div class="text-stone-400 space-y-1">
                <p class="font-medium text-white">David Illichmann</p>
                <p><a href="mailto:david@illi.ie" class="hover:text-white transition-colors">david@illi.ie</a></p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="px-6 py-8 md:px-12 lg:px-16 border-t border-stone-100">
        <div class="max-w-3xl mx-auto flex items-center justify-between">
            <span class="font-serif text-sm text-stone-400">illi</span>
            <span class="text-xs text-stone-300">Celbridge, Ireland</span>
        </div>
    </footer>

</body>
</html>
