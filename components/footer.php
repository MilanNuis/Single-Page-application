<?php

require_once("./unitils/connection.php");
?>
<footer class="bg-gradient-to-r from-red-500 to-red-700 rounded-t-2xl" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-16">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Contact</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white">T +31 (0)597 591596</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white">F +31 (0)597 591938</a>
                            </li>
                            <li>
                                <a href="mailto:info@pmot.nl" class="text-sm leading-6 text-white hover:text-white">E info@pmot.nl</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Adres</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white">Torenstraat 13</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white">9679 BN</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white"> Scheemda</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm leading-6 text-white hover:text-white">Nederland</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-white">Bedrijf</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="https://pmot.nl/bedrijfsinformatie/" class="text-sm leading-6 text-white hover:text-white">Bedrijfsinformatie</a>
                            </li>
                            <li>
                                <a href="https://pmot.nl/betalings-en-leveringsvoorwaarden/" class="text-sm leading-6 text-white hover:text-white">Betalings en leveringsvoorwaarden</a>
                            </li>
                            <li>
                                <a href="https://pmot.nl/klanteninformatie/" class="text-sm leading-6 text-white hover:text-white">Klanteninformatie</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-sm font-semibold leading-6 text-white">Legal</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="https://pmot.nl/privacybeleid-2/" class="text-sm leading-6 text-white hover:text-white">Privacybeleid</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-10 xl:mt-0">
                <h3 class="text-sm font-semibold leading-6 text-white">Meld je aan voor onze nieuwsbrief</h3>
                <form class="mt-6 sm:flex sm:max-w-md" method="post">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white px-3 py-1.5 text-base text-white shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400 focus:ring-2 focus:ring-inset focus:ring-indigo sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Enter your email">
                    <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                        <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo">Aboneer</button>
                    </div>
                </form>
                <div class="">
                    <a href="" class="text-4xl">🇳🇱</a>
                    <a href="" class="text-4xl px-4">🇬🇧</a>
                    <a href="" class="text-4xl">🇩🇪</a>
                </div>
            </div>
        </div>
        <div class="mt-16 border-t border-white/10 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
            <div class="flex space-x-6 md:order-2">
                <a href="https://www.facebook.com/PMOT.nl" class="text-white-400 hover:text-white-500">
                    <span class="sr-only">Facebook</span>
                    <svg class="h-6 w-6 text-white" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                    </svg>
                </a>          
            </div>
            <p class="mt-8 text-xs leading-5 text-white md:order-1 md:mt-0">&copy; 2020 PMOT, All rights reserved.</p>
        </div>
    </div>
</footer>
