
<?php if (isset($_REQUEST['spl-form']['receipt-optout'])) : ?>

<div class="alert alert-warning">

  <h4>Got it.</h4>

  <p>
   You have been successfully removed from the emailed receipts system.
  </p>
  <p>
    <strong>Note:</strong> You will continue to receive material due, overdue, and hold request notifications.
  </p>

  <p>
    Please ask at the circulation desk if you would like to begin receiving receipts again.
  </p>
  <p>
     Thanks for using the Library!
  </p>

</div>

<?php else : ?>

<div class="alert alert-success">

  <h4>Ok</h4>

  <p>
   You will continue to receive emailed receipts.
  </p>

  <p>
    Thanks for using the Library!
  </p>

</div>

<?php endif; ?>
