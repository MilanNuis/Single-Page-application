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
                                <a class="text-sm leading-6 text-white hover:text-white">T +31 (0)597 591596</a>
                            </li>
                            <li>
                                <a class="text-sm leading-6 text-white hover:text-white">F +31 (0)597 591938</a>
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
                                <a class="text-sm leading-6 text-white hover:text-white">Torenstraat 13</a>
                            </li>
                            <li>
                                <a class="text-sm leading-6 text-white hover:text-white">9679 BN</a>
                            </li>
                            <li>
                                <a class="text-sm leading-6 text-white hover:text-white"> Scheemda</a>
                            </li>
                            <li>
                                <a class="text-sm leading-6 text-white hover:text-white">Nederland</a>
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
                <form class="mt-6 sm:flex sm:max-w-md" method="post" action="../controllers/newsLetter.php">
                    <label for="email-address" class="sr-only">Email address</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border-0 bg-white px-3 py-1.5 text-base text-slate-800 shadow-sm ring-1 ring-inset ring-white-300 placeholder:text-white-400 focus:ring-2 focus:ring-inset focus:ring-indigo sm:w-64 sm:text-sm sm:leading-6 xl:w-full" placeholder="Enter your email">
                    <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                        <button type="submit" class="flex w-full items-center justify-center rounded-md bg-indigo px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo">Aboneer</button>
                    </div>
                </form>
                <div class="flex flex-row">
                    <a href="" class="text-4xl"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="#fff" d="M1 11H31V21H1z"></path>
                            <path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#a1292a"></path>
                            <path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#264387"></path>
                            <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path>
                            <path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path>
                        </svg></a>
                    <a href="" class="text-4xl px-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <rect x="1" y="4" width="30" height="24" rx="4" ry="4" fill="#071b65"></rect>
                            <path d="M5.101,4h-.101c-1.981,0-3.615,1.444-3.933,3.334L26.899,28h.101c1.981,0,3.615-1.444,3.933-3.334L5.101,4Z" fill="#fff"></path>
                            <path d="M22.25,19h-2.5l9.934,7.947c.387-.353,.704-.777,.929-1.257l-8.363-6.691Z" fill="#b92932"></path>
                            <path d="M1.387,6.309l8.363,6.691h2.5L2.316,5.053c-.387,.353-.704,.777-.929,1.257Z" fill="#b92932"></path>
                            <path d="M5,28h.101L30.933,7.334c-.318-1.891-1.952-3.334-3.933-3.334h-.101L1.067,24.666c.318,1.891,1.952,3.334,3.933,3.334Z" fill="#fff"></path>
                            <rect x="13" y="4" width="6" height="24" fill="#fff"></rect>
                            <rect x="1" y="13" width="30" height="6" fill="#fff"></rect>
                            <rect x="14" y="4" width="4" height="24" fill="#b92932"></rect>
                            <rect x="14" y="1" width="4" height="30" transform="translate(32) rotate(90)" fill="#b92932"></rect>
                            <path d="M28.222,4.21l-9.222,7.376v1.414h.75l9.943-7.94c-.419-.384-.918-.671-1.471-.85Z" fill="#b92932"></path>
                            <path d="M2.328,26.957c.414,.374,.904,.656,1.447,.832l9.225-7.38v-1.408h-.75L2.328,26.957Z" fill="#b92932"></path>
                            <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path>
                            <path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path>
                        </svg></a>
                    <a href="" class="text-4xl"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <path fill="#cc2b1d" d="M1 11H31V21H1z"></path>
                            <path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"></path>
                            <path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" transform="rotate(180 16 24)" fill="#f8d147"></path>
                            <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path>
                            <path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path>
                        </svg></a>
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