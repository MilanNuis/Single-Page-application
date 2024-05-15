<?php
require_once("./unitils/connection.php");
?>

<div class="bg-white">
  <div class="pb-16 pt-6 sm:pb-24">
    <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <ol role="list" class="flex items-center space-x-4">
        <li>
          <div class="flex items-center">
            <a href="#" class="mr-4 text-sm font-medium text-gray-900">Robotica</a>
            <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
              <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor" />
            </svg>
          </div>
        </li>

        <li class="text-sm">
          <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">Pai Botzees</a>
        </li>
      </ol>
    </nav>
    <div class="mx-auto mt-8 max-w-2xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <div class="lg:grid lg:auto-rows-min lg:grid-cols-12 lg:gap-x-8">
        <div class="lg:col-span-5 lg:col-start-8">
          <div class="flex justify-between">
            <h1 class="text-xl font-medium text-gray-900">Pai Botzees</h1>
            <p class="text-xl font-medium text-gray-900">€ 114,-</p>
          </div>
          <!-- Reviews -->
          <div class="mt-4">
            <h2 class="sr-only">Reviews</h2>
            <div class="flex items-center">
              <p class="text-sm text-gray-700">
                3.9
                <span class="sr-only"> out of 5 stars</span>
              </p>
              <div class="ml-1 flex items-center">
                <!-- Active: "text-yellow-400", Inactive: "text-gray-200" -->
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
                <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                </svg>
              </div>
              <div aria-hidden="true" class="ml-4 text-sm text-gray-300">·</div>
              <div class="ml-4 flex">
                <a href="#" class="text-sm font-medium text-red-500 hover:text-red-600">Bekijk 4 reviews</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Image gallery -->
        <div class="mt-8 lg:col-span-7 lg:col-start-1 lg:row-span-3 lg:row-start-1 lg:mt-0">
          <h2 class="sr-only">Images</h2>

          <div class="grid grid-cols-1 lg:grid-cols-2 lg:grid-rows-3 lg:gap-8">
            <img src="https://pmot.nl/wp-content/uploads/color-box-002-600x489.jpg" alt="robot set" class="lg:col-span-2 lg:row-span-2 rounded-lg">
          </div>
        </div>

        <div class="mt-8 lg:col-span-5">
          <form>
            <!-- Color picker -->

            <!-- Size picker -->

            <button type="submit" class="mt-8 flex w-full items-center justify-center rounded-md border border-transparent bg-red-500 px-8 py-3 text-base font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">Toevoegen aan mandje</button>
          </form>

          <!-- Product details -->
          <div class="mt-10">
            <h2 class="text-sm font-medium text-gray-900">Beschrijving</h2>

            <div class="prose prose-sm mt-4 text-gray-500">
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
          </div>

          <div class="mt-8 border-t border-gray-200 pt-8">
            <h2 class="text-sm font-medium text-gray-900">Extra info</h2>

            <div class="prose prose-sm mt-4 text-gray-500">
              <ul role="list">
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
              </ul>
            </div>
          </div>

          <!-- Policies -->
          <section aria-labelledby="policies-heading" class="mt-10">
            <h2 id="policies-heading" class="sr-only"></h2>

            <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
              <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                <dt>
                  <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                  </svg>
                  <span class="mt-4 text-sm font-medium text-gray-900">Wereldwijde verzending</span>
                </dt>
                <dd class="mt-1 text-sm text-gray-500">Ook beschikbaar in Duitsland en Engeland</dd>
              </div>
              <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                <dt>
                  <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <span class="mt-4 text-sm font-medium text-gray-900">Importeur</span>
                </dt>
                <dd class="mt-1 text-sm text-gray-500">Wij zijn de exclusieve importeur van Pai Botzees </dd>
              </div>
            </dl>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>