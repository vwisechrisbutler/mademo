<section id="salary-confirmation" class="full-background bg-primary no-video">
  <article class="col single rev">
    <form id ="salaryForm">
      
      <div class="intro">
        <h1>Let&#039;s get started.</h1>
      </div>
      <h5>Current Annual Salary:</h5>
      <span class="currency-prefix">$</span><input value="83,000" placeholder="Enter Salary" type="text" name="salary" autocomplete="off" class="inputmask-numberformat" />
      <p class="input-error-message"></p>

      <h5>Pay Frequency:</h5>
      <div class="dropdown">
        <select name="salary-frequency">
          <option value="ANNUALLY" >Annually</option>
          <option value="MONTHLY" selected="selected">Monthly</option>
          <option value="SEMI-MONTHLY" >Semi-Monthly</option>
          <option value="BI-WEEKLY" >Bi-Weekly</option>
          <option value="WEEKLY" >Weekly</option>
        </select>
      </div>
      <button type="button" class="transparent" id="confirm-salary">Confirm</button>

    </form>
  </article>
</section>