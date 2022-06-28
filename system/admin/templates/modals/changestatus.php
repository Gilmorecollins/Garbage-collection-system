<!-- Modal Trigger -->
<a class="waves-effect waves-light btn  modal-trigger btn-outline-danger" href="#delete_user<?php echo $user_id; ?>">Review</a>

<!-- Modal Structure -->
<div id="delete_user<?php echo $user_id; ?>" class="modal">
<div class="modal-content">
<h4>Request</h4>
<p>
<h5 class="text-red">APPROVE OR DECLINE THIS REQUEST..?</h5>
</p>
   
</div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">Back</a>
               <a class="btn waves-effect waves-light ml-2  green darken-2" type="submit" href="modals/approverequest_sql.php?idr=<?php echo $user_id; ?>" name="action">Approve<i class="material-icons fas fa-check right"></i></a>
               <a class="btn waves-effect waves-light  red darken-2" type="submit" href="modals/declinerequest_sql.php?idr=<?php echo $user_id; ?>" name="action">Decline<i class="material-icons fas fa-times right"></i></a>
               
          </div>
</div>