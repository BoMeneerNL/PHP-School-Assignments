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
                      Deze website gebruikt cookies
                    </h3>
                    <div class="text-sm text-gray-500">
                  <p>voor meer info over welke data de cookies verzamelt klik op "meer info"</p>
                  </div>
                  </div>
                </div>
              </div>
              <div class="m-5">
              <form id="gegevens" class="py-2">
                <label for="provincie">Provincie:</label>
                    <select id="provincie" name="provincie">
                        <option value="Drenthe">Drenthe</option>
                        <option value="Flevoland">Flevoland</option>
                        <option value="Friesland">Friesland/Fryslân</option>
                        <option value="Gelderland">Gelderland</option>
                        <option value="Groningen">Groningen</option>
                        <option value="Noord-Brabant">Noord-Brabant</option>
                        <option value="Noord-Holland">Noord-Holland</option>
                        <option value="Zuid-Holland">Zuid-Holland</option>
                        <option value="Zeeland">Zeeland</option>
                        <option value="Noord-Brabant">Noord-Brabant</option>
                        <option value="Limburg">Limburg</option>
                    </select>
                    <br/>
                    <label for="woonplaats">Woonplaats:</label>
                    <input type="text" id="woonplaats" name="woonplaats" placeholder="woonplaats">
                    <br/>
                    <label for="postcode">postcode:</label>
                    <input type="text" id="postcode" name="postcode" minlength="6" maxlength="6">
                    <br/>
                    <label for="huisnummer">huisnummer:</label>
                    <input type="number" id="huisnummer" name="huisnummer">
                    <br/>
                    <label for="betaalwijze">betaalmothode:</label>
                    <select id="betaalwijze" name="betaalwijze">
                        <option value="iDeal">iDeal</option>
                        <option value="BPay">BPay</option>
                        <option value="paypal">PayPal</option>
                    </select>
                    
                </form>
                
                <button type="submit" form="gegevens" value="gegevens" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm" onclick="executor(5)">
                  betalen
                </button>
                </div>
                    </div>
                </div>
            </div>
        </div>
    ')


?>
