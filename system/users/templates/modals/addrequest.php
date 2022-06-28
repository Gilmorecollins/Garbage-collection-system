<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger mt-3 deep-purple darken-4" href="#addteacher">Add Request</a>

<!-- Modal Structure -->
<div id="addteacher" class="modal">
     <form action="modals/addrequest_sql.php" method="post">
          <div class="modal-content">
               <h4>Add Request</h4>

               <div class=" mb-5">
                    <div class="input-field col s6">
                         <input id="last_name" type="hidden" name="userid"  value="<?php echo $_SESSION['id']?>" class="validate">
                         <h6>Please Click add to send your Request</h6>
                    </div>
               </div>
          </div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
               <button class="btn waves-effect waves-light deep-purple darken-4" type="submit" name="action">ADD Request
               <i class="material-icons right">send</i>
               </button>
          </div>
     </form>
</div>