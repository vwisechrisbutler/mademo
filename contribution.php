<section id="contribution" class="animate short-right" data-time-in="13" data-time-out="24" data-incoming-remove="short-right" data-outgoing-add="fade-out">
  <article class="animate top">
    <h3 class="label">Your Contribution</h3>
    <h5 class="color-primary">Current Year-to-date Contribution</h5>
    <div class="figure">
      <sup>$</sup>
      <span class ="data_currentYTDTotal"><?php echo $data['currentYTDTotal']; ?></span>
    </div>
    <sub class="contribution-rate">
      <span id="current_pre_tax_rate">Your current contribution rate is</span>
      <span class="data_currentDeferral"><?php echo $data['currentDeferral']; ?></span>%
    </sub>
  </article>
</section>