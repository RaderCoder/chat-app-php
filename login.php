<?php

include 'partials/header.php';

?>
<header class="bg-white shadow-sm">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Login or Sign Up</h1>
    </div>
</header>

<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="" method="POST">
	<h2 class="text-3xl font-bold tracking-tight text-gray-900 pb-8">Not a member? Sign up today</h2>
	<div class="mb-4">
	<label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
    </label>
    <input type="text" name="username" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
	</div>
	<div class="mb-6">
	<label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
    </label>
	<input type="password" name="password" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
	</div>
	<div class="mb-4">
	<label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        Email
    </label>
	<input type="email" name="email" class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
	</div>
	<input type="submit" value="Submit">
	
</form>

<?php
include 'partials/footer.php';