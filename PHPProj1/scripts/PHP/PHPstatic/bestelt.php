<?php
include_once '../PHP-BGScripts/vartable.php';
echo('
<div class="fixed z-10 inset-0 overflow-y-auto mr-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  <div class="flex items-end justify-center min-h-screen pt-4 px-2 pb-20 text-center sm:block sm:p-0">
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
if($_COOKIE['prod1a'] > 0){
echo('
    <figure class="md:flex bg-gray-100 rounded-xl p-8 text-right">
                <img class="w-24 h-24 rounded-full mx-auto" src="" alt="" width="1" height="1">
                <div class="pt-6 text-center pr-2 space-y-4">
                  <figcaption class="font-medium" style="font-size: smaller">
                    <div class="text-cyan-600">
                      '. $names[0].'
                    </div>
                    <div class="text-gray-500">
                    <p>'.($prices[0] * $_COOKIE['prod1a']).'€</p>
                    <br/>
                    <p class="italic " style="font-size: xx-small">'.$prices[0].'€ p.s</p>
                    </div>
                  </figcaption>
                </div>
              </figure>
              <br/>
');
}
if($_COOKIE['prod2a'] > 0){
    echo('
    <figure class="md:flex bg-gray-100 rounded-xl p-8">
                <img class="w-24 h-24 rounded-full mx-auto" src="" alt="" width="1" height="1">
                <div class="pt-6 text-center pr-2 space-y-4">
                  <figcaption class="font-medium" style="font-size: smaller">
                    <div class="text-cyan-600">
                      <p>'. $names[1].'</p>
                    </div>
                    <div class="text-gray-500">
                    <p>'.($prices[1] * $_COOKIE['prod2a']).'€</p>
                    <p>'.$_COOKIE['prod2a'].'x</p>
                    <br/>
                    <p class="italic " style="font-size: xx-small">'.$prices[1].'€ p.s</p>
                    </div>
                  </figcaption>
                </div>
              </figure>
');
}
if(!isset($_COOKIE['prod1a']) && !isset($_COOKIE['prod2a'])){
    echo('
        <p class="text-red-700">er is nog geen product toegevoegt</p>
        
    ');

}
echo('
<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
              <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="executor(4)">
                  terug naar producten
                </button>
                
                
                    
');
if(!isset($_COOKIE['prod1a']) && !isset($_COOKIE['prod2a'])){
$outbtn = '<button id="disabled" disabled style="cursor: not-allowed" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="executor(2)">
        <span id="hovertext">Het is nog niet mogelijk om afterekenen omdat er nog geen product geselecteerd is</span>
        afrekenen 
        </button>';
}
else{
$outbtn = '<button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="executor(5)">
        afrekenen  
        </button>';
}
echo('

                '.$outbtn.'
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
')
?>