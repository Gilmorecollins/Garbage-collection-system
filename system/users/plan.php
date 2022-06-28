<?php
  session_start();
  if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
include ('../includes/header.php')
?>
<body>
<div class="plan-container" >
     <header>
          <h1>Pricing Plan</h1>
     </header>
  <div class="cards">
     <div class="card shadow">
        <ul>
          <li class="pack">Silver Plan</li>
          <li class="bottom-bar">Daily Pic</li>
          <li class="price bottom-bar" id="silver">$300</li>
          <li class="bottom-bar">Daily Gabbage pick</li> 
          <li class="bottom-bar">Basic</li>
          
          <form action="../php_actions/silver_plan_action.php" method="post"> 
               <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>">
               <input type="hidden" name="plan" value="Silver Plan">
               <input type="hidden" name="price" value="$300">
               <button type="submit" class="button">Choose This plan</button>
          </form>
        </ul>
     </div>
     <div class="card active">
        <ul>
          <li class="pack">Bronze Plan</li>
          <li class="bottom-bar">Monthly Pick-up</li>
          <li class="price bottom-bar" id="bronze">$400</li>
          <li class="bottom-bar">Daily Gabbage pick</li>
          <li class="bottom-bar">Basic</li>
          <form action="../php_actions/bronze_plan_action.php" method="post">
          <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>">
               <input type="hidden" name="plan" value="Bronze Plan">
               <input type="hidden" name="price" value="$400">
               <button type="submit" class="btn">Choose This plan</button>
          </form>
        </ul>
     </div>
     <div class="card">
        <ul>
          <li class="pack">Gold Plan</li>
          <li class="bottom-bar">Yearly Pick-Up</li>
          <li class="price bottom-bar" id="gold">$500</li>
          <li class="bottom-bar">Daily Gabbage pick</li>
          <li class="bottom-bar">Basic</li>
          <form action="../php_actions/gold_plan_action.php" method="post">
          <input type="hidden" name="userId" value="<?php echo $_SESSION['id'] ?>">
               <input type="hidden" name="plan" value="Gold Plan">
               <input type="hidden" name="price" value="$500">
               <button type="submit" class="btn">Choose This plan</button>
          </form>
        </ul>
     </div>
   </div>
</div>
</body>


<style>
     /* .plan-container {
    /* background-color: #f7f7f7; }*/
 

body{
     background: linear-gradient(135deg, #21445c, #ad2134);
     font-family: Arial, Helvetica, sans-serif;
    width: 100%;
    max-width: width 1440px;
    margin: 0 auto;
    display: flex;
    padding-bottom: 3rem;
    flex-direction: column;
    align-items: center;
    overflow-x: hidden;
    overflow-y: hidden;
}
header{
     color: white;
     margin: 3,3rem 0;
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-items: center;
}
.cards{
     display: flex;
     justify-content: center;
     align-items: center;
     flex-wrap: wrap;
}
.card{
     background-color: #fff;
     color: hsl(233, 13%, 49%);
     border-radius: .8rem;
}
.cards .card.active{
     background: linear-gradient(135deg, rgba(163,168,240,1)0%,rgba(105,111,221,1)100%);
     color: #fff;
     display: flex;
     align-items: center;
     transform: scale(1.1);
     z-index: 1;
}
ul{
     margin:2.6rem;
     display: flex;
     flex-direction: column;
     align-items: center;
     justify-content:center;
}
ul li{
     list-style-type: none;
     display: flex;
     justify-content: center;
     width: 100%;
     padding: 1rem 0;
}
ul li.price{
     font-size: 2rem;
     color: hsl(232, 13%, 33%);
}
</style>

<?php
  } else {
    header("Location: ../login.php");
    exit();
  }
  ?>