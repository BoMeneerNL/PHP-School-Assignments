<?php
echo('
<div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="sm:flex sm:items-start">
          <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
              Uw bestelling
            </h3>
            <div class="mt-2">
');
if($_COOKIE['prod1' > 0]){
echo('
    <figure class="md:flex bg-gray-100 rounded-xl p-8">
                <img class="w-24 h-24 rounded-full mx-auto" src="" alt="" width="1" height="1">
                <div class="pt-6 text-center pr-2 space-y-4">
                  <figcaption class="font-medium">
                    <div class="text-cyan-600">
                      Sarah Dayan
                    </div>
                    <div class="text-gray-500">
                      Staff Engineer, Algolia
                    </div>
                  </figcaption>
                </div>
              </figure>




');
}
if($_COOKIE['prod2' > 0]){
    echo('
    <figure class="md:flex bg-gray-100 rounded-xl p-8">
                <img class="w-24 h-24 rounded-full mx-auto" src="" alt="" width="1" height="1">
                <div class="pt-6 text-center pr-2 space-y-4">
                  <figcaption class="font-medium">
                    <div class="text-cyan-600">
                      Sarah Dayan
                    </div>
                    <div class="text-gray-500">
                      Staff Engineer, Algolia
                    </div>
                  </figcaption>
                </div>
              </figure>
');
}
echo('

')
?>
