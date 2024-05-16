<?php

if (isset($_SESSION['loggedInUser'])) {
    var_dump($_SESSION['loggedInUser']);
}

?>

<div class="overflow-hidden bg-gradient-to-r from-red-500 to-red-700 py-8 w-full rounded-t-2xl">
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">PMOT</h2>
                <p class="mt-6 text-xl leading-8 text-white">De specialist voor uitdagende techniek materialen voor STEAM educatie en particuleren.</p>
                <p class="mt-6 text-base leading-7 text-white">PMOT is gespecialiseerd in wetenschap en techniek voor de basisschool en het voortgezet onderwijs. Hiervoor is een, speciaal voor het onderwijs uitgeselecteerd assortiment samengesteld, dat past binnen onderzoekend en ontwerpend leren. Gebaseerd op 30 jaar ervaring binnen dit leergebied..</p>
            </div>

            <div class="flex flex-wrap items-start justify-end gap-6 sm:gap-8 lg:contents shadow">
                <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                    <img src="resources/img/hero_img.png" alt="" class="aspect-[7/5] w-[35rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-slate-50 mt-10 overflow-hidden py-8 w-full">
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:px-8 mb-10">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-12 gap-y-16 lg:mx-0 lg:min-w-full lg:max-w-none lg:flex-none lg:gap-y-8">
            <div class="lg:col-end-1 lg:w-full lg:max-w-lg lg:pb-8">
                <div class="w-0 flex-auto lg:ml-auto lg:w-auto lg:flex-none lg:self-end">
                    <img src="resources/img/surprise-1-300x228.png" alt="" class="aspect-[7/5] w-[37rem] max-w-none rounded-2xl bg-gray-50 object-cover">
                </div>
            </div>
            <div class="flex flex-col ml-32">
                <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl">Al 30 jaar kwaliteit</h2>
                <p class="mt-6 text-xl leading-8 text-black w-1/6">Uw Partner in Onderzoekend en Ontwerpend Leren voor Basisonderwijs en Voortgezet Onderwijs</p>
                <p class="mt-6 text-base leading-7 text-black w-1/5">Naast het leveren van materialen, biedt PMOT uitgebreide scholing en begeleiding. Dit helpt scholen bij de naadloze integratie van vakken zoals rekenen, taal, sociale vaardigheden en wereldoriëntatie in hun onderzoekend en ontwerpend leerprogramma. PMOT streeft ernaar een totaaloplossing te bieden die het leerproces verrijkt en stimuleert.</p>
                <div class="mt-10 flex">
                    <a href="?page=shop" class="rounded-md bg-red-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Bekijk webshop <span aria-hidden="true">&rarr;</span></a>
                </div>

            </div>
        </div>
    </div>
    <h2 class="text-3xl font-bold tracking-tight text-black sm:text-4xl flex justify-center">Door ons aanbevolen producten</h2>
    <div class="mx-auto max-w-7xl px-6 lg:flex lg:justify-between lg:px-8 pt-3 borders w-screen pb-3">
        <div class="group relative shadow p-3 rounded">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://pmot.nl/wp-content/uploads/20180605_all.16-002-300x300.png" alt="Starterset Robotica" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="?page=shop">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Starterset Robotica
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">LEGO</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$128</p>
            </div>
        </div>

        <div class="group relative shadow p-3 rounded">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://pmot.nl/wp-content/uploads/2016/02/minibaksteen-300x300.jpg" alt="Starterset Robotica" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="?page=shop">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Minibaksteenen
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Minibricks</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$83</p>
            </div>
        </div>

        <div class="group relative shadow p-3 rounded">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://pmot.nl/wp-content/uploads/Mabot-1-300x300.jpg" alt="Starterset Robotica" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="?page=shop">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Robot
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">Robotica</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$239</p>
            </div>
        </div>

        <div class="group relative shadow p-3 rounded">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                <img src="https://pmot.nl/wp-content/uploads/Biofeedback2-1.jpg" alt="Starterset Robotica" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-sm text-gray-700">
                        <a href="?page=shop">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Brick”R”knowledge
                        </a>
                    </h3>
                    <p class="mt-1 text-sm text-gray-500">elektronisch</p>
                </div>
                <p class="text-sm font-medium text-gray-900">$156</p>
            </div>
        </div>
    </div>
</div>