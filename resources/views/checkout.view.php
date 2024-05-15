<div class="bg-white">

  <main class="relative mx-auto grid max-w-7xl grid-cols-1 gap-x-16 lg:grid-cols-2 lg:px-8">
    <h1 class="sr-only">Checkout</h1>

    <section aria-labelledby="summary-heading" class="bg-indigo-900 pb-12 pt-6 text-black md:px-10 lg:col-start-2 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:bg-transparent lg:px-0 lg:pb-24 lg:pt-0">
      <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
        <h2 id="summary-heading" class="sr-only">Order totaal</h2>

        <ul role="list" class="divide-y divide-white divide-opacity-10 text-sm font-medium">
          <li class="flex items-start space-x-4 py-6">
            <img src="https://pmot.nl/wp-content/uploads/color-box-002-600x489.jpg" alt="Front of zip tote bag with white canvas, white handles, and black drawstring top." class="h-20 w-20 flex-none rounded-md object-cover object-center">
            <div class="flex-auto space-y-1">
              <h3 class="text-black">Pai Botzees</h3>
              <p>Robotica</p>
            </div>
            <p class="flex-none text-base font-medium text-white">$210.00</p>
          </li>

          <!-- More products... -->
        </ul>

        <dl class="space-y-6 border-t border-white border-opacity-10 pt-6 text-sm font-medium">
          <div class="flex items-center justify-between">
            <dt>Subtotaal</dt>
            <dd>€145.00</dd>
          </div>

          <div class="flex items-center justify-between">
            <dt>Verzendkosten</dt>
            <dd>€25.00</dd>
          </div>

          <div class="flex items-center justify-between">
            <dt>BTW 21%</dt>
            <dd>€47.60</dd>
          </div>

          <div class="flex items-center justify-between border-t border-white border-opacity-10 pt-6 text-red-500">
            <dt class="text-base">Totaal</dt>
            <dd class="text-base">€217.60</dd>
          </div>
        </dl>
      </div>
    </section>

    <section aria-labelledby="payment-and-shipping-heading" class="py-16 lg:col-start-1 lg:row-start-1 lg:mx-auto lg:w-full lg:max-w-lg lg:pb-24 lg:pt-0">
      <h2 id="payment-and-shipping-heading" class="sr-only">Verzendstuk</h2>

      <form>
        <div class="mx-auto max-w-2xl px-4 lg:max-w-none lg:px-0">
          <div>
            <h3 id="contact-info-heading" class="text-lg font-medium text-gray-900">Contact informatie</h3>

            <div class="mt-6">
              <label for="email-address" class="block text-sm font-medium text-gray-700">Email adres</label>
              <div class="mt-1">
                <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>

          <div class="mt-10">
            <h3 id="payment-heading" class="text-lg font-medium text-gray-900">Kaartdetails</h3>

            <div class="mt-6 grid grid-cols-3 gap-x-4 gap-y-6 sm:grid-cols-4">
              <div class="col-span-3 sm:col-span-4">
                <label for="card-number" class="block text-sm font-medium text-gray-700">Kaartnummer</label>
                <div class="mt-1">
                  <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="col-span-2 sm:col-span-3">
                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Vervaldatum (MM/YY)</label>
                <div class="mt-1">
                  <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                <div class="mt-1">
                  <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>
            </div>
          </div>

          <div class="mt-10">
            <h3 id="shipping-heading" class="text-lg font-medium text-gray-900">Verzend adres</h3>

            <div class="mt-6 grid grid-cols-1 gap-x-4 gap-y-6 sm:grid-cols-3">
              <div class="sm:col-span-3">
                <label for="address" class="block text-sm font-medium text-gray-700">Adres</label>
                <div class="mt-1">
                  <input type="text" id="address" name="address" autocomplete="street-address" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="city" class="block text-sm font-medium text-gray-700">Stad</label>
                <div class="mt-1">
                  <input type="text" id="city" name="city" autocomplete="address-level2" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="region" class="block text-sm font-medium text-gray-700">Provincie</label>
                <div class="mt-1">
                  <input type="text" id="region" name="region" autocomplete="address-level1" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="postal-code" class="block text-sm font-medium text-gray-700">Postcode</label>
                <div class="mt-1">
                  <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                </div>
              </div>
            </div>
          </div>

          <div class="mt-10">
            <h3 class="text-lg font-medium text-gray-900">Factuur gegevens</h3>

            <div class="mt-6 flex items-center">
              <input id="same-as-shipping" name="same-as-shipping" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-red-500 focus:ring-red-600">
              <div class="ml-2">
                <label for="same-as-shipping" class="text-sm font-medium text-gray-900">Zelfde als verzend adres</label>
              </div>
            </div>
          </div>

          <div class="mt-10 flex justify-end border-t border-gray-200 pt-6">
            <button type="submit" class="rounded-md border border-transparent bg-red-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-gray-50">Betalen</button>
          </div>
        </div>
      </form>
    </section>
  </main>
</div>