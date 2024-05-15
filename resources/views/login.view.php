<?php

$hideNav = true;
session_start();

function loginUser () {
    if ($_SESSION['loggedInUser'] == 2) {
        echo "Invalide gebruikersnaam/wachtwoord combinatie";
    }
}

?>

<div class="h-full bg-white">
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Inloggen op je account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="../controllers/login.php" method="POST">
                <div>

                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email adress</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <h2>
                    <?php loginUser(); ?>
                </h2>
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Wachtwoord</label>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-red-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Inloggen</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Nog geen account?
                <a href="?page=register" class="font-semibold leading-6 text-red-500 hover:text-red-600">Maak een account aan</a>
            </p>
        </div>
    </div>
</div>