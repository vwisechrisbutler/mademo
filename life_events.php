<article
  id="life_events"
  class="animate fade-out"
  data-time-in="60"
  data-time-out="9999"
  data-incoming-remove="fade-out"
  data-outgoing-add="fade-out"
  >

  <script>
    $(document).ready(function(){
      mrlPauseAt(65);
    });
  </script>

  <h1>Life Events</h1>

  <p
    class="animate fade-out"
    data-incoming-remove="fade-out"
    data-time-in="61"
    data-time-out="9999"
    data-incoming-remove="fade-out">
    Have you recently experienced any of these major changes, or do you expect to in the next year?
  </p>

  <div
    class="animate fade-out inputs fake-inputs for-snapshot fieldset"
    data-incoming-remove="fade-out"
    data-time-in="62"
    data-time-out="9999">
    <label>
      <input type="checkbox" name="life_events" value="marriage">Change in marital status
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="life_events" value="birth">Birth of a child
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="life_events" value="elder_care">Elder / family care
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="life_events" value="education">Educational expense
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="life_events" value="retirement">Retirement
      <div class="fake-input"></div>
    </label>
    <label>
      <input type="checkbox" name="life_events" value="income_loss">Loss of income
      <div class="fake-input"></div>
    </label>
  </div>

  <button
    id="confirm_life_events"
    class="animate fade-out next-slide-button color-primary"
    data-time-in="63"
    data-time-out="9999"
    data-incoming-remove="fade-out"
    type="button"
    data-next-slide="#household_assets">
    Next
  </button>

</article>