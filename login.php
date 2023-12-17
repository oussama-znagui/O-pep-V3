<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <header class ='h-screen py-10 bg-[conic-gradient(at_bottom_right,_var(--tw-gradient-stops))] from-green-200 to-green-500  flex justify-center items-center p-10 flex-col  '>
        <div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action = 'process/login.php' method='POST'>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        Email
      </label>
      <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" placeholder="user.info@mail.com">
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Mot de pass
      </label>
      <input name = "pass" class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="password" placeholder="******************">
     
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
       Valider
      </button>
     
    </div>
  </form>
  <p class="text-center text-gray-900 text-xs">
    &copy;2023 Opep. All rights reserved.
  </p>
</div>
    </header>
    
</body>
</html>