<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.gtag')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>illi: Freelance Web Developer, Ireland</title>
    <meta name="description"
          content="I build, fix and modernise web apps and internal tools for small and mid-sized businesses. Based in Celbridge, Ireland.">

    <link rel="canonical" href="https://illi.ie">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://illi.ie">
    <meta property="og:title" content="illi: Your Web Artisan">
    <meta property="og:description"
          content="I build, fix and modernise web apps and internal tools for small and mid-sized businesses. You deal with me directly, from the first conversation to the finished product.">
    <meta property="og:image" content="https://illi.ie/og-image.png">

    {{-- Twitter/X card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="illi: Your Web Artisan">
    <meta name="twitter:description"
          content="I build, fix and modernise web apps and internal tools for small and mid-sized businesses. You deal with me directly, from the first conversation to the finished product.">
    <meta name="twitter:image" content="https://illi.ie/og-image.png">

    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=fraunces:400,400i,700|inter:400,500&display=swap" rel="stylesheet"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @include('partials.jsonld')
</head>
<body class="bg-white text-stone-900 antialiased">

<div class="min-h-[100dvh] xl:min-h-0 flex flex-col">

    {{-- Nav --}}
    <header class="px-6 py-8 md:px-12 lg:px-16">
        <div class="max-w-3xl mx-auto flex items-center justify-between">
            <span class="font-serif text-xl tracking-tight">illi</span>
            <a href="mailto:david@illi.ie" class="text-sm text-stone-500 hover:text-stone-900 transition-colors">david@illi.ie</a>
        </div>
    </header>

    {{-- Hero --}}
    <section class="flex-1 flex items-center px-6 pt-16 pb-24 md:px-12 md:pt-24 md:pb-32 lg:px-16">
        <div class="max-w-3xl mx-auto w-full">
            <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight text-stone-900 border-l-[3px] border-amber-600 pl-6">
                Your<br>
                <span id="rotating-word" class="text-amber-600 transition-opacity duration-300">web artisan</span>
            </h1>
            <p class="mt-10 text-lg md:text-xl text-stone-600 leading-relaxed max-w-xl">
                I build, fix and modernise web apps and internal tools for small and mid-sized businesses. You deal with me directly, from the first conversation to the finished product.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4">
                <a href="#contact"
                   class="inline-block bg-amber-600 text-white text-sm px-6 py-3 rounded-full hover:bg-amber-700 transition-colors">Get
                    in touch</a>
                <a href="#work"
                   class="inline-block text-sm px-6 py-3 text-stone-600 hover:text-amber-600 transition-colors">See my
                    work →</a>
            </div>
            <p class="mt-8 text-sm text-stone-500">
                <a href="#extra-hands" class="hover:text-amber-600 transition-colors">Need extra hands on your team? →</a>
            </p>
        </div>
    </section>

</div>

{{-- Sound familiar? --}}
<section id="sound-familiar" class="px-6 py-20 md:px-12 md:py-28 lg:px-16 bg-stone-50">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">Sound familiar?</h2>

        <div>

            <details class="familiar group border-t border-stone-200" open>
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;We run the business on spreadsheets, WhatsApp and phone calls.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    <span class="text-amber-600">Everything in one proper system</span> built around how you already work, so nothing depends on who saw which message or who has the latest file.
                </p>
            </details>

            <details class="familiar group border-t border-stone-200">
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;Our clients keep ringing for information they should be able to look up themselves.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    <span class="text-amber-600">A client portal.</span> Your clients log in and find what they need, and your phone rings less.
                </p>
            </details>

            <details class="familiar group border-t border-stone-200">
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;Our system still works, but it&rsquo;s showing its age.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    It gets <span class="text-amber-600">modernised piece by piece</span>, and your business keeps running while it happens.
                </p>
            </details>

            <details class="familiar group border-t border-stone-200">
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;We already have software, it just needs someone to look after it.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    <span class="text-amber-600">A fresh pair of hands</span> for what you have: what's broken gets fixed, what's missing gets built.
                </p>
            </details>

            <details class="familiar group border-t border-stone-200">
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;We have an idea for a product and nobody to build it.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    From a few notes to <span class="text-amber-600">a live product</span>, with someone who has done it before.
                </p>
            </details>

            <details class="familiar group border-t border-stone-200">
                <summary class="group/summary block cursor-pointer list-none py-6 md:py-7 focus:outline-none [&::-webkit-details-marker]:hidden">
                    <h3 class="flex items-start justify-between gap-6 rounded-sm font-serif text-xl md:text-2xl leading-snug text-stone-900 group-focus-visible/summary:outline group-focus-visible/summary:outline-2 group-focus-visible/summary:outline-offset-8 group-focus-visible/summary:outline-amber-600">
                        <span class="text-balance">&ldquo;Our website no longer reflects the business.&rdquo;</span>
                        <svg class="mt-1.5 h-4 w-4 shrink-0 text-stone-400 transition duration-300 group-open:rotate-45 group-open:text-amber-600 group-hover/summary:text-amber-600 md:mt-2" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" aria-hidden="true">
                            <path d="M8 2v12M2 8h12"/>
                        </svg>
                    </h3>
                </summary>
                <p class="max-w-xl pb-8 pr-10 text-stone-600 leading-relaxed text-pretty">
                    <span class="text-amber-600">A new site</span> that is fast, easy to update, and looks like the business you are today.
                </p>
            </details>

        </div>

        <p class="border-t border-stone-200 pt-10 text-stone-600 leading-relaxed">
            If any of that sounds like your business, let's talk. Not on the list?
            <a href="#contact" class="text-amber-600 hover:text-amber-700 transition-colors whitespace-nowrap">Just ask →</a>
        </p>
    </div>
</section>

{{-- Work --}}
<section id="work" class="px-6 py-20 md:px-12 md:py-28 lg:px-16">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">Work</h2>

        <div class="divide-y divide-stone-200">

            <div class="py-10">
                <p class="text-xs text-stone-400 mb-3">Flow survey and remote monitoring specialists</p>
                <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">CWSL Portal</h3>
                <p class="text-stone-600 leading-relaxed">
                    CWSL's site work was spread across multiple spreadsheets, AppSheet automations and a separate
                    form-filling app. With that much data it had become hard to navigate and harder to maintain. CWSL
                    Portal brings it all into one app with simpler flows. Crews fill in site forms on their phones and
                    can keep working without signal, syncing once they are back online. The office follows each site's
                    progress on a map, and the data lives in a proper database. The requirements were worked out side
                    by side with the CWSL team, and the portal is now in daily use.
                </p>
            </div>

            <div class="py-10">
                <p class="text-xs text-stone-400 mb-3">Internal platform for Nettwerk Music Group</p>
                <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Nettwerk Central</h3>
                <p class="text-stone-600 leading-relaxed">
                    Nettwerk needed a custom internal platform to manage artists, contracts and release workflows
                    across their catalogue. I was part of the core team that built and refined it for nearly three
                    years, including the pipeline that takes a release from scheduling through to distribution. It is
                    used daily across their operation.
                </p>
            </div>

            <div class="py-10">
                <p class="text-xs text-stone-400 mb-3">Irish health insurance provider</p>
                <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Laya Healthcare</h3>
                <p class="text-stone-600 leading-relaxed">
                    Laya was running critical patient-facing tools on outdated technology. I led the rebuild of their
                    login system and cover-checker app into modern, fast, maintainable applications, without
                    disrupting live services in the process.
                </p>
            </div>

            <div class="py-10">
                <p class="text-xs text-stone-400 mb-3">Workspace booking platform</p>
                <h3 class="font-serif text-2xl md:text-3xl text-stone-900 mb-5">Clearooms</h3>
                <p class="text-stone-600 leading-relaxed">
                    A startup needed a full booking platform built from scratch: room and desk reservations, Google and
                    Microsoft calendar integrations, Stripe payments, and real-time availability. I was part of the core
                    team that built it from zero to a live production product, and later led development as the platform
                    grew.
                </p>
            </div>

        </div>
    </div>
</section>

{{-- About and How I work --}}
<section id="about" class="px-6 py-20 md:px-12 md:py-28 lg:px-16 bg-stone-50">
    <div class="max-w-3xl mx-auto">
        <div class="overflow-hidden">
            <img src="{{ asset('david-avatar.jpg') }}" alt="David Illichmann"
                 class="float-right w-20 h-20 lg:w-28 lg:h-28 rounded-full object-cover object-center ml-4 mb-2 md:ml-8 md:mb-4 ring-2 ring-stone-200">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">About</h2>

            <div class="space-y-5 text-stone-600 leading-relaxed">
                <p>
                    I'm David, the person behind <span class="font-serif">illi</span>. I've spent <span
                        class="text-amber-600 whitespace-nowrap">over 9 years</span> building web products, from
                    startups getting their first version live to established companies modernising what they already
                    run, always as someone who gets their hands dirty, not just someone who writes a spec and
                    disappears.
                </p>
                <p>
                    I'm based in Celbridge, Ireland, and I work with clients remotely and in person. I'm straightforward
                    to deal with, I communicate clearly, and I don't hide behind jargon. If I can't help you with
                    something, I'll tell you, and I'll probably know someone who can.
                </p>
                <p>Also, I like <span class="text-amber-600">mango</span>.</p>
            </div>
        </div>

        <div id="how-i-work" class="mt-16 border-t border-stone-200 pt-16 md:mt-20 md:pt-20">
            <h2 class="text-xs font-medium uppercase tracking-widest text-stone-400 mb-10">How I work</h2>

            <div class="space-y-5 text-stone-600 leading-relaxed">
                <p>
                    Most projects I deliver on my own, start to finish. I talk to the people who will use it, work out
                    what is really needed, then design it and build it. You don't pay for a team you don't need.
                </p>
                <p>
                    When a project calls for more, whether that's a designer, another developer or a marketing
                    specialist, I bring in people I've worked with and trust. <span class="text-amber-600">You still deal with me.</span>
                </p>
            </div>
        </div>
    </div>
</section>

{{-- Contact --}}
<section id="contact" class="bg-stone-900 px-6 py-20 md:px-12 md:py-28 lg:px-16">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-xs font-medium uppercase tracking-widest text-stone-500 mb-10">Contact</h2>
        <p class="font-serif text-3xl md:text-4xl text-white mb-12 leading-snug">Let's talk about<br>what you need.</p>

        <div class="grid gap-10 md:grid-cols-2 md:gap-12">

            <div id="project" class="flex flex-col border-t border-stone-700 pt-6 scroll-mt-8 transition-colors target:border-amber-600">
                <h3 class="font-medium text-white mb-3">Have a project in mind?</h3>
                <p class="text-sm text-stone-400 leading-relaxed mb-6">
                    Tell me what's not working, even if all you have is a few notes. No pitch, just a conversation.
                </p>
                <p class="mt-auto">
                    <a href="https://calendar.app.google/sXgCAHtJmi3ZnTY17" target="_blank" rel="noopener noreferrer"
                       class="text-amber-600 hover:text-amber-500 transition-colors">Book a call →</a>
                </p>
            </div>

            <div id="extra-hands" class="flex flex-col border-t border-stone-700 pt-6 scroll-mt-8 transition-colors target:border-amber-600">
                <h3 class="font-medium text-white mb-3">Need extra hands on your team?</h3>
                <p class="text-sm text-stone-400 leading-relaxed mb-6">
                    I also work as a contract developer alongside in-house teams and agencies, mostly in Laravel and
                    React. If you need an experienced developer who can get up to speed quickly, get in touch.
                </p>
                <p class="mt-auto">
                    <a href="mailto:david@illi.ie"
                       class="text-amber-600 hover:text-amber-500 transition-colors">Email me →</a>
                </p>
            </div>

        </div>

        <div class="mt-14 text-stone-400 space-y-1">
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
