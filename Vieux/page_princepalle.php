<!-- component -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  </head>
  <body class="bg-blue-600">
    <span
      class="absolute text-white text-4xl top-5 left-4 cursor-pointer"
      onclick="openSidebar()"
    >
      <i class="bi bi-filter-left px-2 bg-gray-900 rounded-md"></i>
    </span>
    <div
      class="sidebar fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-gray-900"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center">
          <i class="bi bi-app-indicator px-2 py-1 rounded-md bg-blue-600"></i>
          <h1 class="font-bold text-gray-200 text-[15px] ml-3">Gestion des tickets</h1>
          <i
            class="bi bi-x cursor-pointer ml-28 lg:hidden"
            onclick="openSidebar()"
          ></i>
        </div>
        <div class="my-2 bg-gray-600 h-[1px]"></div>
      </div>
      <div
        class="p-2.5 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700 text-white"
      >
        <i class="bi bi-search text-sm"></i>
        <input
          type="text"
          placeholder="Search"
          class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
        />
      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-house-door-fill"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Home</span>
      </div>
      <a href="ajouter_tichets.php" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white">
    <i class="bi bi-bookmark-fill"></i>
    <span class="text-[15px] ml-4 text-gray-200 font-bold">Ajouter Ticket</span>
        </a>

      <div class="my-4 bg-gray-600 h-[1px]"></div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
        onclick="dropdown()"
      >
        <i class="bi bi-chat-left-text-fill"></i>
        <a href="tikt_trater.php" class="flex justify-between w-full items-center">
    <span class="text-[15px] ml-4 text-gray-200 font-bold">Ticht assiner a vous</span>
    <span class="text-sm rotate-180" id="arrow">
        <i class="bi bi-chevron-down"></i>
    </span>
</a>

      </div>
      <div
        class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-white"
      >
        <i class="bi bi-box-arrow-in-right"></i>
        <span class="text-[15px] ml-4 text-gray-200 font-bold">Logout</span>
      </div>
    </div>
    

    <div class="main-content ml-[300px] p-6">
      <h2 class="text-2xl font-bold text-white mb-4">Liste des tickets</h2>
  <table class="w-full bg-white border border-gray-300">
    <thead>
      <tr>
        <th class="py-2 px-4 border-b">Titre</th>
        <th class="py-2 px-4 border-b">Date</th>
        <th class="py-2 px-4 border-b">Statut</th>
        <th class="py-2 px-4 border-b">Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Replace the following rows with your actual ticket data -->
      <tr>
        <td class="py-2 px-4 border-b">Ticket 1</td>
        <td class="py-2 px-4 border-b">2023-01-01</td>
        <td class="py-2 px-4 border-b">Open</td>
        <td class="py-2 px-4 border-b">
          <button class="bg-red-500 text-white px-2 py-1 rounded">Edit</button>
        </td>
      </tr>
      <tr>
        <td class="py-2 px-4 border-b">Ticket 2</td>
        <td class="py-2 px-4 border-b">2023-02-01</td>
        <td class="py-2 px-4 border-b">Closed</td>
        <td class="py-2 px-4 border-b">
          <button class="bg-red-500 text-white px-2 py-1 rounded">Edit</button>
        </td>
      </tr>
      <!-- End of ticket rows -->
    </tbody>
  </table>
</div>

    




  </body>
</html>