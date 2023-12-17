<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
    <title>Creer un compte</title>
</head>
<body>
    <header class ='h-auto py-10 bg-[conic-gradient(at_bottom_right,_var(--tw-gradient-stops))] from-green-200 to-green-500  flex justify-center items-center p-10 flex-col  '>
        <h1 class ='text-lg font-black text-white text-center my-5 lg:text-2xl'>
            Rejoignez notre Jardin Vert: Inscrivez-vous pour Cultiver des Moments de Beauté Botanique
        </h1>
        <form id="form" class="w-full max-w-lg bg-gray-300 p-10 rounded-xl" action="process/signup.php" method = "POST">
  <div class="flex flex-wrap -mx-3">
    <div class="w-full md:w-1/2 px-3  md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Prenom
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="first-name" type="text" placeholder="Jane" name="Pnom">
      <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Nom
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last-name" type="text" placeholder="Doe" name="nom">
    </div>
  </div>
 
    <div class="w-full my-3  ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Email
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="mail" type="email" placeholder="email.pro@mail.com" name="email">
    </div>
    <div class="w-full ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Mot de pass
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="password" type="password" placeholder="******************" name="pass">
    </div>
    <div class="w-full ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Confirmez le mot de pass
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************" name="cpass">
    </div>
    <div class="w-full ">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Choisir votre role
      </label>
      <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"   name="role">
        <option value="admin">Admin</option>
        <option value="client">Client</option>
      </select>
    </div>
    <div class="w-full  flex justify-center items-center">
      <input class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded " value="Valider" type="submit" id = 'go' name = 'go'>    
    </div>  
</form>
   

        

    </header>

</body>
</html>