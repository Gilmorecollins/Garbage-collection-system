<!-- Modal Trigger -->
<a class="waves-effect waves-light btn  modal-trigger btn-outline-success" href="#delete_user<?php echo $payment_id; ?>">Review</a>

<!-- Modal Structure -->
<div id="delete_user<?php echo $payment_id; ?>" class="modal">
<div class="modal-content">
<h4>Request</h4>
<p>
<h5 class="text-red">APPROVE OR DECLINE THIS REQUEST..?</h5>
</p>
   
</div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">Back</a>
               <a class="btn waves-effect waves-light ml-2  green darken-2" type="submit" href="modals/approveprequest_sql.php?pid=<?php echo $payment_id; ?>" name="action">Recived<i class="material-icons fas fa-check right"></i></a>
               <a class="btn waves-effect waves-light  red darken-2" type="submit" href="modals/declineprequest_sql.php?pid=<?php echo $payment_id; ?>" name="action">Not Recived<i class="material-icons fas fa-times right"></i></a>
               
          </div>
</div>