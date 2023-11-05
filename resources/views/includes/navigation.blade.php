
<nav class="bg-white">
  <div class="max-w-screen-xl flex flex-wrap  pb-10 pt-2 -ml-2 place-items-center -mb-10">
    <a href="https://miettas.com.au/" class="flex items-center  -pb-2"><img src="/images/logo_black_clear.png" class="h-28 mr-3 -mt-2" alt="Mietta's Logo"/></a>    
    
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>

    <div class="hidden w-full md:block md:w-auto ml-6" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class="block py-2 pl-3 pr-4 text-gray-900 ">Home</a>
        </li>
        <li>
          <a href="{{ route('recipes.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 ">Recipes</a>
        </li>
        <li>
          <a href="{{ route('ingredients.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 ">Ingredients</a>
        </li>
        <li>
          <a href="{{ route('mymethods.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 ">Methods</a>
        </li>
        <li>
          <a href="{{ route('contents.index') }}" class="block py-2 pl-3 pr-4 text-gray-900 ">Articles</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- <script>
    const button = document.querySelector('button.mobile.button');
    const menu = document.querySelector('mobile.menu');

    btn.addEventListener('click', () => {
        menu.classlist.toggles('hidden');
    }};
</script> -->