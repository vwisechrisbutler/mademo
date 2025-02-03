<article
  id="household_assets"
  class="fade-out"
  >

  <script>
    $(document).ready(function(){
      mrlPauseAt(76.5);
    });
  </script>

  <h1
    class="animate fade-out"
    data-incoming-remove="fade-out"
    data-time-in="66"
    data-time-out="9999"
    data-incoming-remove="fade-out"
    >Household Assets</h1>

  <p
    class="animate fade-out"
    data-incoming-remove="fade-out"
    data-time-in="67"
    data-time-out="9999"
    data-incoming-remove="fade-out"
    >
    Do you have other assets to help in retirement, excluding Social Security and the value of your home?
  </p>

  <div
    class="animate fade-out inputs fake-inputs for-snapshot fieldset"
    data-incoming-remove="fade-out"
    data-time-in="68"
    data-time-out="9999">
    <div class="legend label-text">Asset types (Check all that apply):</div>
    <label>
      <input type="checkbox" name="asset_types" value="former_account">Former retirement account
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="asset_types" value="life_insurance">Life insurance
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="asset_types" value="ira">Individual retirement account (IRA)
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="asset_types" value="other_insurance">Other insurance
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="asset_types" value="savings">CD or other savings account
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="asset_types" value="annuities">Annuities
      <div class="fake-input"></div>
    </label>
  </div>

  <div
    class="animate fade-out inputs"
    data-incoming-remove="fade-out"
    data-time-in="71"
    data-time-out="9999">
    <label class="for-snapshot">
      <div class="label-text">Total value of all assets:</div>
      <span class="currency-prefix">$</span>
      <input type="text" name="other_assets" autocomplete="off" class="inputmask-numberformat" />
    </label>
  </div>

  <button
    id="confirm_household_assets"
    class="animate fade-out next-slide-button color-primary" 
    data-time-in="76"
    data-time-out="9999"
    data-incoming-remove="fade-out"
    type="button" 
    data-next-slide="#snapshot">
    Next
  </button>

</article>