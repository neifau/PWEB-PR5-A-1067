<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<html> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
</head>

<body>

<form>
<div class="min-h-screen flex items-center justify-center w-full">
    <div class="bg-white shadow-md rounded-lg px-8 py-6 max-w-md">
  
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900 text-center">Tambah Contact</h2>  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="owner" class="block text-sm font-medium leading-6 text-gray-900">Owner Name</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                <input type="text" name="owner" id="owner" autocomplete="owner" class="block flex-1 border-1 bg-grey py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Owner Name">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
          <div class="col-span-full">
            <label for="phone" class="block text-sm font-medium leading-6 text-gray-900 -grey">Phone Number</label>
            <div class="mt-2">
              <input type="bigint" name="phone" id="phone" autocomplete="owner" class="block flex-1 border-10 bg-grey py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Phone Number">
            </div>
          </div>

          <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="dashboard.php" type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cancel</a>
          <button type="submit" class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          
        </div>
  </div>
</div>

  </form>
</body>
</html>