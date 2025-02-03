<?php 
    
$timeOut = 38.5;

?>

<section id="retirement-balance" class="animate out-right" data-time-in="27" data-time-out="<?php echo $timeOut; ?>" data-incoming-remove="out-right fade-out" data-outgoing-add="fade-out">
    <article class="copy">
        <h3>Estimated Retirement Balance</h3>
        <h5 class="color-primary">At Age 65</h5>
        <div class="figure">
            <sup>$</sup>
            <span class="odometer" data-odo-start="0" data-odo-time="30" data-odo-finish="<?php echo number_format($data['projectedIncome']); ?>">0</span>
        </div>
    </article>
    <article class="copy animate out-right est-monthly" data-incoming-remove="out-right" data-time-in="33"  data-time-out="<?php echo $timeOut; ?>" data-outgoing-add="fade-out">
        <h3>Estimated Monthly Payout</h3>
        <h5 class="color-primary">At Age 65</h5>
        <div class="figure">
            <sup>$</sup>
            <span class="odometer" data-odo-start="0" data-odo-time="36" data-odo-finish="<?php echo number_format($data['projectedMonthlyIncome']); ?>">0</span>
        </div>
    </article>
</section>