<?php
include_once "../PHP-BGScripts/vartable.php";
if(!isset($_COOKIE['prod1a']) || $_COOKIE['prod1a'] < 0){$prod1a = 0;}else{$prod1a = $_COOKIE['prod1a'];}
if(!isset($_COOKIE['prod2a']) || $_COOKIE['prod2a'] < 0){$prod2a = 0;}else{$prod1a = $_COOKIE['prod2a'];}
if(!isset($_COOKIE['prod3a']) || $_COOKIE['prod3a'] < 0){$prod3a = 0;}else{$prod1a = $_COOKIE['prod3a'];}
if(!isset($_COOKIE['prod4a']) || $_COOKIE['prod4a'] < 0){$prod4a = 0;}else{$prod1a = $_COOKIE['prod4a'];}
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
                      U besteling is voltooid
                    </h3>
                    <div class="text-sm text-gray-500">
                   <p> '.$names[0].'('.$prod1a.'x)</p><br/>
                   <p> '.$names[1].'('.$prod2a.'x)</p><br/>
                   <p> '.$names[2].'('.$prod3a.'x)</p><br/>
                   <p> '.$names[3].'('.$prod4a.'x)</p><br/>
                   <p> Provincie: '.$_GET['provincie'].'</p><br/>
                   <p>Woonplaats: '.$_GET['woonplaats'].'</p><br/>
                   <p>Postcode: '.$_GET['postcode'].'</p><br/>
                   <p>Huisnummer: '.$_GET['huisnummer'].'</p>
                   
                   
                   
                   <p>betaal type: '.$_GET['betaalwijze'].'</p>
                  </div>
                  </div>
                </div>
              </div>
              
                    </div>
                </div>
            </div>
        </div>
    ');
?>
