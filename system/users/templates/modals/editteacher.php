<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger btn-outline-success" href="#editteacher<?php  echo $row['teacher_id']; ?>">Edit</a>

<!-- Modal Structure -->
<div id="editteacher<?php  echo $row['teacher_id']; ?>" class="modal black-text">
     <form action="modals/editteacher_sql.php?id=<?php  echo $row['teacher_id']; ?>" method="post">
          <div class="modal-content">
               <h4>Add Teacher</h4>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="last_name" type="text" name="fname" value="<?php echo $row ['fname'];?>" class="validate">
                         <label for="last_name">First Name</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="first_name" type="text" name="lname" value="<?php echo $row ['lname'];?>" class="validate">
                         <label for="first_name">Last Name</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="email" type="email" name="email" value="<?php echo $row ['phone'];?>" class="validate">
                         <label for="email">Email</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="number" type="text" name="pnumber" value="<?php echo $row ['email'];?>" class="validate">
                         <label for="number">Phone Number</label>
                    </div>
               </div>
               <div class="row mb-5">
                    <div class="input-field col s6">
                         <input id="tsc" type="text" name="tscnumber" value="<?php echo $row ['tsc'];?>" class="validate">
                         <label for="TSC Number">TSC Number</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="id" type="text" name="idnumber" value="<?php echo $row ['idnumber'];?>" class="validate">
                         <label for="id">Id Number</label>
                    </div>
                    <div class="input-field col s6">
                         <input id="id" type="text" name="wstation" value="<?php echo $row ['wstation'];?>" class="validate">
                         <label for="id">Id Number</label>
                    </div>
               </div>
          </div>
          <div class="modal-footer">
               <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
               <button class="btn waves-effect waves-light deep-purple darken-4" type="submit" name="action">Edit
               <i class="material-icons right">send</i>
               </button>
          </div>
     </form>
</div>