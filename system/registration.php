<?php
include('./includes/header.php');
?>

<div class="container">
    <div class="title">Client Registration</div>
    <div class="content">
        <form action="php_actions/user_reg_action.php" method="post"  >
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Names</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="input-box">
                    <span class="details">Residence</span>
                    <input type="text" placeholder="Residence Name" name="residence">
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your email" name="email">
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" placeholder="Enter your number" name="numbers">
                </div>
                <div class="input-box">
                    <span class="details">Collection Address</span>
                    <input type="text" placeholder="Enter your Address" name="address">
                </div>

                <div class="input-box">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Gabage Type</label>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <select  class="form-control  show-tick" name="gabbage_type"  data-live-search="true">
                                <option selected value="">---Choose---</option>

                                <option value="Household waste"> Household waste</option>
                                <option value="Hazardous waste">Hazardous waste </option>
                                <option value="Medical Waste">Medical Waste </option>
                                <option value="Electrical waste">Electrical waste </option>
                                <option value="Recyclable Waste ">Recyclable Waste </option>
                                <option value="Construction Debris">Construction Debris </option>
                                <option value="Green Waste">Green Waste </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Enter your password" name="pass">
                </div>    
                <div class="input-box">
                    <span class="details">Cornfirm Password</span>
                    <input type="password" placeholder="Enter your password" name="re_pas">
                </div>
            </div>
            <div class="">
                <button type="submit" class="button" name="action">Register</button>
            </div>
            <div class="text-center">
            <p>Already have an account..? Login<a href="login.php"> Here</a></p>
            </div>
        </form>
    </div>
</div>