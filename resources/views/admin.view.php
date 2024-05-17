<?php
$hideNav = true;

if (!isAdmin()) {
    header("Location: /");
}

?>

<header class="absolute inset-x-0 top-0 z-50 flex h-16 border-b border-gray-900/10">
    <div class="mx-auto flex w-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">
        <div class="flex flex-1 items-center gap-x-6">
            <button type="button" class="-m-3 p-3 md:hidden">
                <span class="sr-only">Open main menu</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                </svg>
            </button>
            <h1 class=" text-white bg-red-500 rounded p-1 px-2  font-bold">PMOT</h1>
            <a href="/">
                <h1 class=" text-white bg-red-500 rounded p-1 px-2  font-bold">Terug</h1>
            </a>
        </div>
        <nav class="hidden md:flex md:gap-x-11 md:text-sm md:font-semibold md:leading-6 md:text-gray-700">
        </nav>
        <div class="flex flex-1 items-center justify-end gap-x-8">
            <a href="?page=addproduct" class="rounded-full bg-red-500 p-1.5 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                </svg>
            </a>
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your profile</span>
                <img class="h-8 w-8 rounded-full bg-gray-800" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </a>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 left-0 z-50 w-full overflow-y-auto bg-white px-4 pb-6 sm:max-w-sm sm:px-6 sm:ring-1 sm:ring-gray-900/10">
            <div class="-ml-0.5 flex h-16 items-center gap-x-6">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                <div class="-ml-0.5">
                    <a href="#" class="-m-1.5 block p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                </div>
            </div>
            <div class="mt-2 space-y-2">
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Invoices</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Clients</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Expenses</a>
            </div>
        </div>
    </div>
</header>

<main>
    <div class="relative isolate overflow-hidden pt-16">
        <!-- Secondary navigation -->


        <!-- Stats -->
        <div class="border-b border-b-gray-900/10 lg:border-t lg:border-t-gray-900/5">
            <dl class="mx-auto grid max-w-7xl grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 lg:px-2 xl:px-0">
                <div class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8">
                    <dt class="text-sm font-medium leading-6 text-gray-500">Omzet</dt>
                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$omzet</dd>
                </div>
                <div class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l">
                    <dt class="text-sm font-medium leading-6 text-gray-500">Orders</dt>
                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$orders</dd>
                </div>
                <div class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 lg:border-l">
                    <dt class="text-sm font-medium leading-6 text-gray-500">Klanten</dt>
                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$klanten</dd>
                </div>
                <div class="flex items-baseline flex-wrap justify-between gap-y-2 gap-x-4 border-t border-gray-900/5 px-4 py-10 sm:px-6 lg:border-t-0 xl:px-8 sm:border-l">
                    <dt class="text-sm font-medium leading-6 text-gray-500">Voorraad</dt>
                    <dd class="w-full flex-none text-3xl font-medium leading-10 tracking-tight text-gray-900">$voorraad</dd>
                </div>
            </dl>
        </div>
    </div>

    <div class="space-y-16 py-16 xl:space-y-20">
        <!-- Recent activity table -->
        <div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 class="mx-auto max-w-2xl text-base font-semibold leading-6 text-gray-900 lg:mx-0 lg:max-w-none">Recente orders</h2>
            </div>
            <div class="mt-6 overflow-hidden border-t border-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                        <table class="w-full text-left">
                            </thead>
                            <tbody>
                                <tr class="text-sm leading-6 text-gray-900">
                                    <th scope="colgroup" colspan="3" class="relative isolate py-2 font-semibold">
                                        <time datetime="2023-03-22">Vandaag</time>
                                        <div class="absolute inset-y-0 right-full -z-10 w-screen border-b border-gray-200 bg-gray-50"></div>
                                        <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-gray-200 bg-gray-50"></div>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                                <tr class="text-sm leading-6 text-gray-900">
                                    <th scope="colgroup" colspan="3" class="relative isolate py-2 font-semibold">
                                        <time datetime="2023-03-21">Gisteren</time>
                                        <div class="absolute inset-y-0 right-full -z-10 w-screen border-b border-gray-200 bg-gray-50"></div>
                                        <div class="absolute inset-y-0 left-0 -z-10 w-screen border-b border-gray-200 bg-gray-50"></div>
                                    </th>
                                </tr>
                                <tr>
                                    <td class="relative py-5 pr-6">
                                        <div class="flex gap-x-6">
                                            <svg class="hidden h-6 w-5 flex-none text-gray-400 sm:block" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-.75-4.75a.75.75 0 001.5 0V8.66l1.95 2.1a.75.75 0 101.1-1.02l-3.25-3.5a.75.75 0 00-1.1 0L6.2 9.74a.75.75 0 101.1 1.02l1.95-2.1v4.59z" clip-rule="evenodd" />
                                            </svg>
                                            <div class="flex-auto">
                                                <div class="flex items-start gap-x-3">
                                                    <div class="text-sm font-medium leading-6 text-gray-900">Order: XXXXXX</div>
                                                    <div class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">Paid</div>
                                                </div>
                                                <div class="mt-1 text-xs leading-5 text-gray-500">$orderWaarde</div>
                                            </div>
                                        </div>
                                        <div class="absolute bottom-0 right-full h-px w-screen bg-gray-100"></div>
                                        <div class="absolute bottom-0 left-0 h-px w-screen bg-gray-100"></div>
                                    </td>
                                    <td class="hidden py-5 pr-6 sm:table-cell">
                                        <div class="text-sm leading-6 text-gray-900">Robotica</div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">PMOT</div>
                                    </td>
                                    <td class="py-5 text-right">
                                        <div class="flex justify-end">
                                            <a href="#" class="text-sm font-medium leading-6 text-red-500 hover:text-red-600">Bekijk<span class="hidden sm:inline"> order</span><span class="sr-only">, invoice #00012, Reform</span></a>
                                        </div>
                                        <div class="mt-1 text-xs leading-5 text-gray-500">KlantID <span class="text-gray-900">XXXXX</span></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>