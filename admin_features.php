<?php

ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_maxlifetime', 0);
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_lname = $_SESSION['user_lastname'] ;
$email = $_SESSION['user_email'] ;


if (!isset($_SESSION['notifications'])) {
  $_SESSION['notifications'] = [];
}

function addLoginNotification($userName) {
  $message = "Login successful for user: " . htmlspecialchars($userName);
  $_SESSION['notifications'][] = $message;
}

addLoginNotification($user_lname);  

// Display notifications
?>



<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
      <!-- ============TITLE============= -->
      <title>Ocean Fortune</title>
  
      <!-- ============HEAD-ICON-LOGO============= -->
      <link rel="icon" type="image/png" href="assets/images/logo.png">
  
      <!-- ============CSS-LINKS============= -->
      <link rel="stylesheet" href="assets/css/features.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/mediaquery.css">
      <link rel="stylesheet" href="assets/css/main-mediaquery.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  
  
  
      <!-- ============FONT-AWESOME-LINKS============= -->
      <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


  

  </head>



<body>


      <header class="dashboard_header">
          <div class="wrapper">
            <div class="logo">
              <div class="image_wrapper">
                  <img src="assets/images/logo.png" width="42" height="42" alt="">
              </div>
            </div>
            
            <div class="icons">
              <ul>
                <h4 style="color: white;"><?php echo htmlspecialchars($user_lname); ?>
                  <span class="login-status"></span>
                </h4>
                  <li class=""><a href="#"><i class="material-icons notification-icon">notifications_none</i></a>
                      <div class="notification_box">
                        <div class="wrapper">
                          <header>
                              <span>Notifications</span>
                              <a href="#">Clear All</a>
                          </header>
                          <ul>
                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>487887</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>

                              <li>
                                  <a href="#">
                                      <i class="fa fa-user"></i>
                                      <span>Your OTP is <p>651902</p></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="view_all"><a href="#">View All</a></div>
                        </div>
                      </div>
                  </li>

                  <li><a><i class="material-icons account-icon">account_circle</i></a>
                      <div class="profile_box">
                          <ul>
                              <li>
                                  <a href="admin_profile.php">
                                      <i class="material-icons">person_outline</i>
                                      <span>Profile </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="admin_wallet_page.php">
                                      <i class="material-icons">account_balance_wallet</i>
                                      <span>Wallet</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="logout.php">
                                      <i class="material-icons">logout</i>
                                      <span>Logout</span>
                                  </a>
                              </li>
                          </ul>
                      </div>

                      
                  </li>

                
              </ul>
            </div>
          </div>


        <!-- ============ CRYPTO STICKER ============= //--AT THE TOP, BELOW THE NAV BAR--//-->
        <div class="crypto-ticker">
          <div style="height:62px; background-color: #1e293b; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;">
              <div style="height:40px; padding:0px; margin:0px; width: 100%;">
                  <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
                  <!-- <script>
                      document.addEventListener('contextmenu', (event) => event.preventDefault());
                          document.onkeydown = function(e) {
                              // Disable F12, Ctrl+Shift+I (Inspector), Ctrl+Shift+J (Console), Ctrl+U (View Source)
                              if (e.keyCode == 123 || // F12
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) || // Ctrl+Shift+I
                                  (e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) || // Ctrl+Shift+J
                                  (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) { // Ctrl+U
                                  return false; // Prevent the event
                              }
                          };
                  </script> -->
              </div>
              <div style="color: #1e293b; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                  <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px"></a>
              </div>
          </div>
        </div>
      </header>
            

        <?php
        
             include 'dashboard_logic.php'             
        
        ?>

    
        
            
    <aside class="sidebar">
        <div class="wrapper">


            <div class="sidebar_menu">
                <ul>
                    <li>
                        <a href="admin_dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_swap.php">
                            <i class="material-icons">swap_calls</i>
                            <span>Swap</span>
                        </a>
                    </li>

                    <li>
                        <a href="users.php">
                            <i class="fa fa-user-o"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <li>
                        <a href="admin_history.php">
                            <i class="material-icons">history</i>
                            <span>History</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_features.php">
                            <i class="material-icons">widgets</i>
                            <span>Features</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin_market.php">
                            <i class="material-icons">store</i>
                            <span>Market</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="sidebar_widgets">
            <div class="wrapper">
                <div class="image">
                <img src="assets/images/crypto-join.png" alt="">
                </div>
                <div class="text">
                <h3>Invest Now!</h3>
                <a href="">
                    Buy and Sell Coins
                </a>
                <br><br>
                </div>
            </div>
            </div>
        </div>
    </aside>
      
      <main class="main_content">

        <div class="investment-header">
            <h1 class="investment-title">Investment</h1>
            <div class="dropdown">
                <div class="dropdown-item" id="createInvestment">Create Investment</div>
                <div class="dropdown-item">Generate Plan</div>
            </div>
        </div>

        <div class="cards-container" id="cardsContainer">
            <!-- <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Crypto Currency</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options crypto-options">
                    <h6>Crypto Currency Investment Options</h6>
                    <a>Bitcoin</a>
                    <a>Ethereum</a>
                    <a>Binance Coin</a>
                    <a>Litecoin</a>
                    <a>Dogecoin</a>
                    <a>XRP</a>
                    <a>Shiba Inu</a>
                    <a>USDT</a>
                </div>
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div> -->

            <!-- <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Forex</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options forex-options">
                    <h6>Forex Investment Options</h6>
                    <a>USD/CAD</a>
                    <a>EUR/USD</a>
                    <a>USD/CHF</a>
                    <a>GBP/USD</a>
                    <a>NZD/USD</a>
                    <a>EUR/GBP</a>
                    <a>EUR/CAD</a>
                    <a>EUR/AUD</a>
                    <a>GBP/CHF</a>
                    <a>EUR/JPY</a>
                </div>
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div> -->
<!-- 
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Stocks</h2>
                </div>
                <button class="select-button">Select Option</button>
                <div class="selection-options stocks-options">
                    <h6>Stocks Investment Options</h6>
                    <a>Advanced Micro Devices Inc</a>
                    <a>GameStop Corporation</a>
                    <a>Cassava Sciences Inc</a>
                    <a>Alpha Metallurgical Resources Inc</a>
                    <a>Danaos Corp</a>
                    <a>Cleveland-Cliffs Inc</a>
                    <a>Movado Group Inc</a>
                    <a>Aerocentury Corp</a>
                    <a>NVIDIA Corporation</a>
                    <a>Microsoft Corporation</a>
                </div> -->
                <div class="card-dropdown">
                    <div class="card-dropdown-item edit">Edit</div>
                    <div class="card-dropdown-item delete">Delete</div>
                    <div class="card-dropdown-item add-option">Add Option</div>
                </div>
            </div>
        </div>






        <!-- Create Investment Modal -->
        <div class="modal" id="createModal">
            <div class="modal-content">
                <h2 class="modal-title">Create New Investment</h2>
                <input type="text" class="modal-input" placeholder="Enter investment name" id="investmentName">
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelCreateButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmCreateButton">Create New</button>
                </div>
            </div>
        </div>

        <!-- Edit Investment Modal -->
        <div class="modal" id="editModal">
            <div class="modal-content">
                <h2 class="modal-title">Edit Investment</h2>
                <input type="text" class="modal-input" placeholder="Enter new investment name" id="editInvestmentName">
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelEditButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmEditButton">Save</button>
                </div>
            </div>
        </div>
 
        <!-- Delete Confirmation Modal -->
        <div class="modal" id="deleteModal">
            <div class="modal-content">
                <h2 class="modal-title">Confirm Delete</h2>
                <p>Are you sure you want to delete this investment?</p>
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelDeleteButton">Cancel</button>
                    <button class="modal-button confirm" id="confirmDeleteButton">Confirm</button>
                </div>
            </div>
        </div>

        <!-- Create Investment Modal -->
        <div class="modal" id="addOption">
            <div class="modal-content">
                <h2 class="modal-title">Create New Option</h2>
                <input type="text" class="modal-input" placeholder="Name" id="crypto_name">
                <input type="text" class="modal-input" placeholder="Symbol" id="symbol">
                <div class="modal-buttons">
                    <button class="modal-button cancel" id="cancelAddOptionButton">Close</button>
                    <button class="modal-button confirm" id="confirmAddOptionButton">Add New</button>
                </div>
            </div>
        </div>
        <!-- ///// -->










        <!-- PLANS -->
        <header class="plans-header" id="plans-header" style="display: none;">

            <div class="header-content" >
                <div class="header-left" >
                    <h1>XRP</h1>
                    <h4>Stake from $0.00 (0.00 XRP) wallet</h4>
                    <div class="dropdown-arrow">

                        <div class="plans-header-dropdown">
                            <!-- names from  the backend -->
                            <div class="plans-header-dropdown-item edit_plan">Edit <!-- from the backend --></div>
                            <div class="plans-header-dropdown-item delete_plan">Delete </div>
                            <div class="plans-header-dropdown-item add_plan">Add plan </div>
                            <div class="plans-header-dropdown-item  link_crypto">Link to crypto </div>
                        </div>
                    </div>
                </div>
                <button class="btn-back">Back</button>
            </div>


            <!-- ADD PLAN -->
            <section class="add_plan_popup action_overlay" id="">
                <div class="wrapper">
                    <header>
                        <h4>
                            Create new plan
                        </h4>
                        <img class="close_addplan_popup" src="assets/images/c-close-svgrepo-com.svg" alt="Close" width="20">
                    </header>
                    <main style="display:flex; flex-direction:column; gap:10px;">
                        <form id="addPlanForm">
                            <!-- Hidden field for crypto_id which will be dynamically set -->
                            <input type="hidden" id="selected_crypto_id" name="crypto_id" value="">

                            <label for="name">Name*</label>
                            <input id="name" name="name" value="" type="text" placeholder="Name*" style="width: 100%;" required>

                            <label for="roi">ROI*</label>
                            <input id="roi" name="roi" value="" type="text" placeholder="Enter ROI" style="width: 100%;" required>

                            <label for="roi_max">ROI Max*</label>
                            <input id="roi_max" name="roi_max" value="" type="text" placeholder="Enter ROI Max" style="width: 100%;" required>

                            <label for="minimum">Minimum*</label>
                            <input id="minimum" name="minimum" value="" type="text" placeholder="Enter Minimum" style="width: 100%;" required>

                            <label for="maximum">Maximum*</label>
                            <input id="maximum" name="maximum" value="" type="text" placeholder="Enter Maximum" style="width: 100%;" required>

                            <label for="earning_duration">Earning Duration*</label>
                             <select id="earning_duration" name="earning_duration" style="width: 100%;" required>
                                <option value="">Choose</option>
                                <option value="5">Every Five Minutes</option>
                                <option value="10">Every Ten Minutes</option>
                                <option value="30">Every Thirty Minutes</option>
                                <option value="60">Hourly</option>
                                <option value="360">Every Six Hours</option>
                                <option value="1440">Daily</option>
                                <option value="720">Twice Daily</option>
                            </select>

                            <label for="duration_timeframe">Duration Timeframe*</label>
                            <input id="duration_timeframe" name="duration_timeframe" value="" type="text" placeholder="Enter Duration Timeframe" style="width: 100%;" required>

                            <label for="duration">Duration*</label>
                            <select id="duration" name="duration" style="width: 100%;" required>
                                    <option value="">Choose</option>
                                    <option value="60">Hourly</option>
                                    <option value="1440">Daily</option>
                                    <option value="43200">Monthly</option>
                            </select>

                            <label for="commission">Commission*</label>
                            <input id="commission" name="commission" value="" type="text" placeholder="Enter Commission" style="width: 100%;" required>

                            <label for="benefit">Benefit*</label>
                            <input id="benefit" name="benefit" value="" type="text" placeholder="Enter Benefit" style="width: 100%;" required>

                            <div class="rate">
                                <label for="rate">Fixed rate</label>
                            </div>

                            <div style="display: flex; gap:10px;">
                                <button id="close" class="close_addplan_popup negative_btn" type="button">Close</button>
                                <button id="edit_btn" class="positive_btn" name="button" type="submit">Add New</button>
                            </div>
                        </form>
                    </main>

                </div>
            </section>


            <!-- EDIT PLAN -->
            <div class="modal edit_plan_popup" id="editModal">
                <div class="modal-content">
                    <h2 class="modal-title">Edit Option</h2>
                    <input type="text" class="modal-input" placeholder="Name" id="edit_crypto_name">
                    <input type="text" class="modal-input" placeholder="Symbol" id="edit_symbol">
                    <div class="modal-buttons">
                        <button class="close_edit_plan_popup modal-button cancel" id="close_edit_modal">Close</button>
                        <button class="modal-button confirm" id="confirm_edit_crypto">Edit</button>
                    </div>
                </div>
            </div>

            <!-- ///// -->

            <!-- DELETE PLAN -->
            <div class="modal delete_plan_popup" id="deleteModal">
                <div class="modal-content">
                    <h2 class="modal-title">Confirm Delete</h2>
                    <p>Are you sure you want to delete <span id="cryptoName"></span></p>
                    <div class="modal-buttons">
                        <button class="close_delete_plan_popup modal-button cancel" id="cancelDelete">Cancel</button>
                        <button id="confirmDelete" class="modal-button confirm">Confirm</button>
                    </div>
                </div>
            </div>







        </header>


         


        <div class="container">
            <div class="plans-container">
                    <!-- <div class="plans-card">
                        <div class="plans-card-header">
                            <h5>${plan.name}
                            <div class="plans-card-dropdown">
                                <div class="plans-card-dropdown-item edit_mining">Edit <span>XRP Trial</span> Mining</div>
                                <div class="plans-card-dropdown-item delete_mining">Delete <span>XRP Trial</span> Mining</div>

                            </div>
                            </h5>
                            
                        </div>
                        <div class="card-body">
                            <div class="price-range">
                                <h2>$${parseFloat(plan.minimum).toFixed(2)}</h2>
                                <i class="fas fa-long-arrow-alt-down"></i>
                                <h2>$${parseFloat(plan.maximum).toFixed(2)}</h2>
                            </div>
                            <h6>Includes:</h6>
                            <ul>
                                <li>${parseFloat(plan.roi).toFixed(2)}% ROI</li>
                                <li>Contract: ${plan.earning_duration} ${plan.duration_timeframe}(s)</li>
                                <li>Commission: ${parseFloat(plan.commission).toFixed(2)}%</li>
                                <li>Benefit: ${plan.benefit}</li>
                            </ul>
                            <div class="button-wrapper">
                                <button class="btn-invest">Invest Now</button>
                            </div>
                        </div>
                    </div> -->

                
                            
            <!-- EDIT MINING -->
            <section class="edit_mining_popup action_overlay" style="visibility: hidden; opacity: 0; pointer-events: none;">
                <div class="wrapper">
                    <header>
                        <h4>
                            <!-- backend will add the name here -->
                            Edit <span>XRP Trial</span> Mining
                        </h4>
                        <img class="close_mining" src="assets/images/c-close-svgrepo-com.svg" alt="Close" width="20">
                    </header>
                    <main style="display:flex; flex-direction:column; gap:10px;">
                        <form action="addPlan.php" method="POST">
                            <!-- Hidden field for crypto_id which will be dynamically set -->
                            <input type="hidden" id="selected_crypto_id" name="crypto_id" value="">
                            <label for="name">Name*</label>
                            <input id="name" name="name" value="" type="text" placeholder="Name*" style="width: 100%;" required>

                            <label for="roi">ROI*</label>
                            <input id="roi" name="roi" value="" type="text" placeholder="Enter ROI" style="width: 100%;" required>

                            <label for="roi_max">ROI Max*</label>
                            <input id="roi_max" name="roi_max" value="" type="text" placeholder="Enter ROI Max" style="width: 100%;" required>

                            <label for="minimum">Minimum*</label>
                            <input id="minimum" name="minimum" value="" type="text" placeholder="Enter Minimum" style="width: 100%;" required>

                            <label for="maximum">Maximum*</label>
                            <input id="maximum" name="maximum" value="" type="text" placeholder="Enter Maximum" style="width: 100%;" required>

                            <label for="earning_duration">Earning Duration*</label>
                            <input id="earning_duration" name="earning_duration" value="" type="text" placeholder="Enter Earning Duration" style="width: 100%;" required>

                            <label for="duration_timeframe">Duration Timeframe*</label>
                            <input id="duration_timeframe" name="duration_timeframe" value="" type="text" placeholder="Enter Duration Timeframe" style="width: 100%;" required>

                            <label for="duration">Duration*</label>
                            <select id="duration" name="duration" style="width: 100%;" required>
                                <option value="">Choose</option>
                                <option value="5">Every Five Minutes</option>
                                <option value="10">Every Ten Minutes</option>
                                <option value="30">Every Thirty Minutes</option>
                                <option value="60">Hourly</option>
                                <option value="360">Every Six Hours</option>
                                <option value="1440">Daily</option>
                                <option value="720">Twice Daily</option>
                            </select>

                            <label for="commission">Commission*</label>
                            <input id="commission" name="commission" value="" type="text" placeholder="Enter Commission" style="width: 100%;" required>

                            <label for="benefit">Benefit*</label>
                            <input id="benefit" name="benefit" value="" type="text" placeholder="Enter Benefit" style="width: 100%;" required>

                            <div class="rate">
                                <label for="rate">Fixed rate</label>
                            </div>

                            <div style="display: flex; gap:10px;">
                                <button id="close" class="close_addplan_popup negative_btn" type="button">Close</button>
                                <button id="edit_btn" class="positive_btn" name="button" type="submit">Add New</button>
                            </div>
                        </form>
                    </main>

                </div>
            </section>

            <!-- DELETE MINING-->
            <div class="modal delete_mining_popup" id=" ">
                <div class="modal-content">
                    <!-- backend will add the name here -->
                    <h2 class="modal-title">Delete <span>XRP Trial</span> Mining</h2>



                    <!-- backend will add the name here -->
                    <p>Are you sure you want to Delete <span>XRP Trial </span>Mining? </p>
                    <div class="modal-buttons">
                        <button class="close_delete_mining modal-button cancel">Cancel</button>
                        <button class="modal-button confirm">Confirm</button>
                    </div>
                </div>
            </div>



        </div>



      </main>

      <script>
            const investmentTitle = document.querySelector('.investment-title');
            const dropdown = document.querySelector('.dropdown');



            const createInvestment = document.getElementById('createInvestment');
            
            const showplansHeaderDropdown = document.querySelector('.dropdown-arrow');
            const plansHeaderDropdown = document.querySelector('.plans-header-dropdown');

            const createModal = document.getElementById('createModal');

            const editModal = document.getElementById('editModal');

            const deleteModal = document.getElementById('deleteModal');

            const addOptionModal = document.getElementById('addOption')

            const cancelCreateButton = document.getElementById('cancelCreateButton');
            const confirmCreateButton = document.getElementById('confirmCreateButton');

            const cancelEditButton = document.getElementById('cancelEditButton');
            const confirmEditButton = document.getElementById('confirmEditButton');

            const cancelDeleteButton = document.getElementById('cancelDeleteButton');
            const confirmDeleteButton = document.getElementById('confirmDeleteButton');
            
            const cancelAddOptionButton = document.getElementById('cancelAddOptionButton');
            const confirmAddOptionButton = document.getElementById('confirmAddOptionButton');


            const investmentName = document.getElementById('investmentName');
            const editInvestmentName = document.getElementById('editInvestmentName');
            const cardsContainer = document.querySelector('.cards-container');

            const planCardHeader = document.querySelectorAll('.plans-card-header');
            const planCardDropdown = document.querySelectorAll('.plans-card-dropdown');

            let currentCard = null;

            // Toggle dropdown when investment title is clicked
            investmentTitle.addEventListener('click', () => {
                dropdown.classList.toggle('active');

            });
            
            showplansHeaderDropdown.addEventListener('click', () => {
                plansHeaderDropdown.classList.toggle('active');
            })

            document.addEventListener('click', (e) => {
                if (!e.target.closest('.investment-header')) {
                    dropdown.classList.remove('active');
                }
            });

            // Show create modal when 'Create Investment' is clicked
            createInvestment.addEventListener('click', () => {
                createModal.classList.add('active');
                dropdown.classList.remove('active');
                investmentName.value = ''; // Clear input
            });

            cancelCreateButton.addEventListener('click', () => {
                createModal.classList.remove('active');
            });
// Event listener for creating an investment card
            confirmCreateButton.addEventListener('click', () => {
                const name = investmentName.value.trim(); // Get the value from the input field
                if (name) {
                    fetch('create_investment.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({ action: 'create_investment', name: name })
                    })
                    .then(response => response.json()) // Parse the JSON response
                    .then(data => {
                        if (data.success) {
                            // Show success Toastify notification
                            Toastify({
                                text: "Investment table created successfully!",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Green success background
                            }).showToast();

                            const newCard = createCard(name); // Create a new card with the investment name
                            cardsContainer.appendChild(newCard); // Add the new card to the container
                            createModal.classList.remove('active'); // Close the modal
                        } else {
                            // Show error Toastify notification
                            Toastify({
                                text: "Error: " + data.message,
                                duration: 5000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                            }).showToast();
                        }
                    })
                    .catch(error => {
                        // Show error Toastify notification for any other errors
                        Toastify({
                            text: "An error occurred: " + error.message,
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    });
                } else {
                    // Show error Toastify notification for empty input
                    Toastify({
                        text: "Please enter an investment name.",
                        duration: 3000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                    }).showToast();
                }
            });


           // Fetch and display investments from the database
            function fetchInvestments() {
                fetch('fetch_investments.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.success && data.investments.length > 0) {
                            data.investments.forEach(investment => {
                                const newCard = createCard(investment.investment_name, investment.card_id);
                                cardsContainer.appendChild(newCard);
                            });
                        } else {
                            // Show Toastify notification when no investments are found
                            Toastify({
                                text: "No investments found.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                            }).showToast();
                        }
                    })
                    .catch(error => {
                        // Show Toastify notification for fetch errors
                        Toastify({
                            text: "Error fetching investments: " + error.message,
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    });
            }



        function createCard(name, id) {
        const newCard = document.createElement('div');
        newCard.className = 'card';
        newCard.setAttribute('data-id', id); // Set the data-id attribute

        newCard.innerHTML = `
            <div class="card-header">
                <h2 class="card-title">${name}</h2>
            </div>
            <button class="select-button">Select Option</button>
            <div class="selection-options" id="crypto-list-container">
                <h6>${name} Investment Options</h6>
                <!-- Options will be dynamically added here -->
            </div>
            <div class="card-dropdown" >
                <div class="card-dropdown-item edit">Edit ${name}</div>
                <div class="card-dropdown-item delete">Delete ${name}</div>
                <div class="card-dropdown-item add-option">Add Option</div>
            </div>
        `;

        addCardListeners(newCard); // Attach listeners
        fetchAndPopulateCryptos(newCard, id); // Populate cryptos for the card
        return newCard;
    }



        function addCardListeners(card) {
            const cardHeader = card.querySelector('.card-header');
            const cardDropdown = card.querySelector('.card-dropdown');
            const editButton = card.querySelector('.edit');
            const deleteButton = card.querySelector('.delete');
            const addOptionButton = card.querySelector('.add-option');
            const selectButton = card.querySelector('.select-button');
            const selectionOptions = card.querySelector('.selection-options');

            // Toggle dropdown visibility
            cardHeader.addEventListener('click', () => {
                cardDropdown.classList.toggle('active');
            });

            // Edit investment
            editButton.addEventListener('click', () => {
                const currentCard = card;
                const currentName = card.querySelector('.card-title').textContent;
                const investmentId = card.getAttribute('data-id');
                
                editInvestmentName.value = currentName;
                editModal.classList.add('active');
                cardDropdown.classList.remove('active');

                confirmEditButton.addEventListener('click', function confirmEditHandler() {
                    const newName = editInvestmentName.value.trim();
                    if (newName && investmentId) {
                        fetch('edit_investment.php', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ id: investmentId, new_name: newName }),
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    currentCard.querySelector('.card-title').textContent = newName; // Update UI
                                    editModal.classList.remove('active');
                                    
                                    // Show success Toastify notification
                                    Toastify({
                                        text: "Investment updated successfully!",
                                        duration: 3000,
                                        close: true,
                                        gravity: "top",
                                        position: "right",
                                        backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                                    }).showToast();
                                } else {
                                    // Show error Toastify notification
                                    Toastify({
                                        text: "Error: " + data.message,
                                        duration: 5000,
                                        close: true,
                                        gravity: "top",
                                        position: "right",
                                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                                    }).showToast();
                                }
                            })
                            .catch(error => {
                                // Handle network or fetch errors with Toastify
                                Toastify({
                                    text: "An error occurred: " + error.message,
                                    duration: 5000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                                }).showToast();
                            })
                            .finally(() => {
                                confirmEditButton.removeEventListener('click', confirmEditHandler); // Clean up listener
                            });
                        } else {
                            // Show validation error Toastify notification
                            Toastify({
                                text: "Invalid input or investment ID.",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                            }).showToast();
                        }
                    });
            });

            // Delete investment
            deleteButton.addEventListener('click', () => {
                const investmentId = card.getAttribute('data-id');
                deleteModal.classList.add('active');
                cardDropdown.classList.remove('active');

                confirmDeleteButton.addEventListener('click', function confirmDeleteHandler() {
                    fetch('delete_investment.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ id: investmentId }),
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                card.remove(); // Remove the card from the DOM
                                deleteModal.classList.remove('active');
                                // Show success Toastify notification
                                Toastify({
                                    text: "Investment deleted successfully!",
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Green success background
                                }).showToast();
                            } else {
                                // Show error Toastify notification
                                Toastify({
                                    text: "Error: " + data.message,
                                    duration: 5000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                                }).showToast();
                            }
                        })
                        .catch(error => {
                            // Show error Toastify notification for fetch errors
                            Toastify({
                                text: "An error occurred. Please try again.",
                                duration: 5000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                            }).showToast();
                        })
                        .finally(() => {
                            confirmDeleteButton.removeEventListener('click', confirmDeleteHandler); // Clean up listener
                        });
                });
            });


            // Add Option
            addOptionButton.addEventListener('click', () => {
                const investmentId = card.getAttribute('data-id');
                addOptionModal.classList.add('active');
                cardDropdown.classList.remove('active');

                confirmAddOptionButton.addEventListener('click', function confirmAddOptionHandler() {
                    const cryptoNameInput = document.querySelector('#crypto_name');
                    const symbolInput = document.querySelector('#symbol');
                    const cryptoName = cryptoNameInput.value.trim();
                    const symbol = symbolInput.value.trim();

                    if (!cryptoName || !symbol) {
                        // Show error Toastify notification
                        Toastify({
                            text: "Please fill in both the Crypto Name and Symbol.",
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                        return;
                    }

                    fetch('addCrypto.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ card_id: investmentId, crypto_name: cryptoName, symbol }),
                    })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                const newOption = document.createElement('a');
                                newOption.textContent = `${cryptoName} (${symbol})`;
                                selectionOptions.appendChild(newOption);
                                cryptoNameInput.value = '';
                                symbolInput.value = '';
                                // Show success Toastify notification
                                Toastify({
                                    text: "Crypto added successfully!",
                                    duration: 3000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Green success background
                                }).showToast();
                                // Delay the page reload to show the toast
                                setTimeout(() => {
                                    window.location.href = window.location.href; // Reload page after success
                                }, 3000); // Delay for the duration of the toast
                            } else {
                                // Show error Toastify notification
                                Toastify({
                                    text: "Error: " + data.message,
                                    duration: 5000,
                                    close: true,
                                    gravity: "top",
                                    position: "right",
                                    backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                                }).showToast();
                            }
                        })
                        .catch(error => {
                            // Show error Toastify notification for fetch errors
                            Toastify({
                                text: "An error occurred. Please try again.",
                                duration: 5000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                            }).showToast();
                        })
                        .finally(() => {
                            confirmAddOptionButton.removeEventListener('click', confirmAddOptionHandler); // Clean up listener
                        });
                });
            });

            cancelAddOptionButton.addEventListener('click', () => {
                addOptionModal.classList.remove('active');
            });

            // Toggle selection options
            selectButton.addEventListener('click', () => {
                selectionOptions.classList.toggle('active');
                selectButton.textContent = selectionOptions.classList.contains('active') ? 'Hide Options' : 'Select Option';
            });
        }

        // Global variables to store the selected crypto's ID and Name
        let selectedCryptoId = null;
        let selectedCryptoName = null;

        // Function to fetch and populate cryptos dynamically
        function fetchAndPopulateCryptos(card, cardId) {
            fetch('getCryptos.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ card_id: cardId }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const selectionOptions = card.querySelector('.selection-options');
                    selectionOptions.innerHTML = '';  // Clear existing options

                    data.cryptos.forEach(crypto => {
                        const cryptoOption = document.createElement('a');
                        cryptoOption.textContent = `${crypto.crypto_name} (${crypto.symbol})`;
                        cryptoOption.setAttribute('data-crypto-id', crypto.crypto_id);
                        selectionOptions.appendChild(cryptoOption);

                        // Add event listener to store the selected crypto's ID and Name
                        cryptoOption.addEventListener('click', function () {
                            storeSelectedCryptoId(crypto.crypto_id, crypto.crypto_name);  // Store selected crypto ID
                            updateHeaderContent(crypto);
                            document.getElementById('plans-header').style.display = 'block';
                            fetchAndDisplayPlans(crypto.crypto_id);  // Fetch and display plans based on selected crypto_id
                        });
                    });
                } else {
                    console.error('Error fetching cryptos:', data.message);
                }
            })
            .catch(error => {
                console.error('Error fetching cryptos:', error);
            });
        }

        // Function to store the selected crypto's ID and Name
        function storeSelectedCryptoId(cryptoId, cryptoName) {
            selectedCryptoId = cryptoId;  // Store the selected crypto's ID
            selectedCryptoName = cryptoName;  // Store the selected crypto's Name
        }

        // Function to update the header content with selected crypto name
        function updateHeaderContent(crypto) {
            const headerLeft = document.querySelector('.header-left');
            headerLeft.querySelector('h1').textContent = crypto.crypto_name;
            fetchCryptoDetails(crypto.symbol);
        }

        // Function to fetch and display the crypto details (e.g., available balance)
        function fetchCryptoDetails(cryptoSymbol) {
            fetch('getCryptoTransactions.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ crypto_symbol: cryptoSymbol }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const availableBalance = data.available_balance;
                    updateBalanceDisplay(availableBalance, cryptoSymbol);
                } else {
                    console.error('Error fetching crypto details:', data.message);
                    updateBalanceDisplay(0, cryptoSymbol); // Default to 0 on error
                }
            })
            .catch(error => {
                console.error('Error fetching crypto details:', error);
                updateBalanceDisplay(0, cryptoSymbol); // Default to 0 on error
            });
        }

        // Function to update the balance display in the header
        function updateBalanceDisplay(availableBalance, cryptoSymbol) {
            const headerLeft = document.querySelector('.header-left');
            headerLeft.querySelector('h4').textContent = `Stake from $${availableBalance.toFixed(2)} (${cryptoSymbol}) wallet`;
        }

        // Function to fetch and display investment plans based on the selected crypto
        function fetchAndDisplayPlans(cryptoId) {
            fetch('getPlans.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ crypto_id: cryptoId })
            })
            .then(response => response.json())
            .then(data => {
                const plansContainer = document.querySelector('.plans-container');
                plansContainer.innerHTML = '';  // Clear any existing plans

                if (data.success && data.plans.length > 0) {
                    data.plans.forEach((plan, index) => {
                        const planCard = `
                            <div class="plans-card">
                                <div class="plans-card-header">
                                    <h5>${plan.name}
                                    <div class="plans-card-dropdown">
                                        <div class="plans-card-dropdown-item edit_mining">Edit <span>${plan.name}</span></div>
                                        <div class="plans-card-dropdown-item delete_mining">Delete <span>${plan.name}</span></div>
                                    </div>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="price-range">
                                        <h2>$${parseFloat(plan.minimum).toFixed(2)}</h2>
                                        <i class="fas fa-long-arrow-alt-down"></i>
                                        <h2>$${parseFloat(plan.maximum).toFixed(2)}</h2>
                                    </div>
                                    <h6>Includes:</h6>
                                    <ul>
                                        <li>${parseFloat(plan.roi).toFixed(2)}% ROI</li>
                                        <li>Contract: ${plan.duration_timeframe} Day(s)</li>
                                        <li>Commission: ${parseFloat(plan.commission).toFixed(2)}%</li>
                                        <li>Benefit: ${plan.benefit}</li>
                                    </ul>
                                    <div class="button-wrapper">
                                        <button class="btn-invest">Invest Now</button>
                                    </div>
                                </div>
                            </div>
                        `;
                        plansContainer.insertAdjacentHTML('beforeend', planCard);
                    });

                    // Now, after the plans are added, add the event listeners for toggling dropdowns
                    const planCardHeader = document.querySelectorAll('.plans-card-header');
                    const planCardDropdown = document.querySelectorAll('.plans-card-dropdown');

                    planCardHeader.forEach((card, index) => {
                        card.addEventListener('click', () => {
                            planCardDropdown.forEach((dropdown, dropdownIndex) => {
                                if (dropdownIndex === index) {
                                    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                                } else {
                                    dropdown.style.display = 'none';
                                }
                            });
                        });
                    });
                } else {
                    plansContainer.innerHTML = '<p>No plans available for this cryptocurrency.</p>';
                }
            })
            .catch(error => {
                console.error('Error fetching plans:', error);
            });
        }

        // Event listener for the "Back" button to refresh the page
        document.querySelector('.btn-back').addEventListener('click', function() {
            location.reload();  // Reload the page to refresh everything
        });





            // Open the edit modal and populate it with the selected crypto's details
            function openEditModal(cryptoId, cryptoName, symbol) {
                selectedCryptoId = cryptoId; // Store the selected crypto's ID
                document.getElementById('edit_crypto_name').value = cryptoName;
                document.getElementById('edit_symbol').value = symbol;
                document.getElementById('editModal').style.display = 'block';  // Show the modal
            }

            // Close the modal
            document.getElementById('close_edit_modal').addEventListener('click', () => {
                document.getElementById('editModal').style.display = 'none';  // Hide the modal
            });

            // Confirm the edit when the "Edit" button is clicked
            document.getElementById('confirm_edit_crypto').addEventListener('click', function() {
                const cryptoNameInput = document.querySelector('#edit_crypto_name');
                const symbolInput = document.querySelector('#edit_symbol');
                const cryptoName = cryptoNameInput.value.trim();
                const symbol = symbolInput.value.trim();

                if (!cryptoName || !symbol) {
                    alert('Please fill in both the Crypto Name and Symbol.');
                    return;
                }

                // Send the updated data to the server to update the crypto
                fetch('editCrypto.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        crypto_id: selectedCryptoId,
                        crypto_name: cryptoName,
                        symbol: symbol
                    }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Update the selected option in the list
                        const cryptoOption = document.querySelector(`[data-crypto-id="${selectedCryptoId}"]`);
                        if (cryptoOption) {
                            cryptoOption.textContent = `${cryptoName} (${symbol})`;
                        }

                        document.getElementById('editModal').style.display = 'none';  // Hide the modal

                        // Show success Toastify notification
                        Toastify({
                            text: "Crypto updated successfully!",
                            duration: 3000,  // Show the toast for 3 seconds
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Green success background
                        }).showToast();

                        // Delay the reload to allow the toast to be visible
                        setTimeout(() => {
                            window.location.href = window.location.href; // Reload the page
                        }, 3000); // 3 seconds delay to match the toast duration
                    } else {
                        // Show error Toastify notification
                        Toastify({
                            text: "Error: " + data.message,
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    }
                    })
                    .catch(error => {
                        // Show error Toastify notification for fetch errors
                        Toastify({
                            text: "An error occurred. Please try again.",
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    });

            });
            // Function to open the delete modal and populate it with the selected crypto's details
            function openDeleteModal(cryptoId, cryptoName) {
                selectedCryptoId = cryptoId; // Store the selected crypto's ID
                document.getElementById('cryptoName').textContent = cryptoName;
                document.getElementById('deleteModal').style.display = 'block';  // Show the modal
            }

            // Event listener for the "Confirm Delete" button
            document.getElementById('confirmDelete').addEventListener('click', function () {
                if (!selectedCryptoId) {
                    alert('Invalid crypto ID. Please try again.');
                    return;
                }

                // Send delete request to the server with the selected cryptoId
                fetch('deleteCrypto.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ crypto_id: selectedCryptoId }),  // Send selectedCryptoId to delete
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Successfully deleted, remove the crypto from the list in the UI
                        const cryptoElement = document.querySelector(`[data-crypto-id="${selectedCryptoId}"]`);
                        if (cryptoElement) {
                            cryptoElement.remove(); // Remove the crypto option from the DOM
                        }

                        // Show success Toastify notification
                        Toastify({
                            text: "Crypto deleted successfully!",
                            duration: 3000,  // Toast will be visible for 3 seconds
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Green success background
                        }).showToast();

                        closeDeleteModal();  // Close the modal

                        // Reload the page after the toast
                        setTimeout(() => {
                            window.location.href = window.location.href; // Reload the page
                        }, 3000); // Wait for the toast to be visible before reloading
                    } else {
                        // Show error Toastify notification
                        Toastify({
                            text: `Error: ${data.message}`,
                            duration: 5000,  // Toast will be visible for 5 seconds
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    }
                    })
                    .catch(error => {
                        console.error('Deletion error:', error);

                        // Show error Toastify notification for fetch errors
                        Toastify({
                            text: 'An error occurred. Please try again.',
                            duration: 5000,  // Toast will be visible for 5 seconds
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)", // Red/yellow error background
                        }).showToast();
                    });

            });

            // Event listener for the "Cancel" button to close the modal
            document.getElementById('cancelDelete').addEventListener('click', closeDeleteModal);

            // Function to close the delete modal
            function closeDeleteModal() {
                const modal = document.getElementById('deleteModal');
                modal.style.display = 'none';  // Hide the modal
            }

            document.getElementById('addPlanForm').addEventListener('submit', function (e) {
                e.preventDefault(); // Prevent form submission

                const formData = new FormData(this); // Collect all form data
                const submitButton = document.getElementById('edit_btn');
                
                // Disable the submit button to prevent multiple clicks
                submitButton.disabled = true;
                submitButton.textContent = "Processing...";

                fetch('addPlan.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json()) // Expect JSON response from PHP
                .then(data => {
                    submitButton.disabled = false;
                    submitButton.textContent = "Add New";

                    if (data.success) {
                        // Show success notification
                        Toastify({
                            text: "Investment plan added successfully!",
                            duration: 3000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
                        }).showToast();

                        // Optionally clear the form
                        document.getElementById('addPlanForm').reset();
                    } else {
                        // Show error notification
                        Toastify({
                            text: "Error: " + data.message,
                            duration: 5000,
                            close: true,
                            gravity: "top",
                            position: "right",
                            backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                        }).showToast();
                    }
                })
                .catch(error => {
                    submitButton.disabled = false;
                    submitButton.textContent = "Add New";

                    // Handle fetch errors
                    Toastify({
                        text: "An error occurred: " + error.message,
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "linear-gradient(to right, #ff5f6d, #ffc371)",
                    }).showToast();
                });
            });




            cancelEditButton.addEventListener('click', () => {
                editModal.classList.remove('active');
            });

            confirmDeleteButton.addEventListener('click', () => {
                if (currentCard) {
                    currentCard.remove();
                    deleteModal.classList.remove('active');
                }
            });

            cancelDeleteButton.addEventListener('click', () => {
                deleteModal.classList.remove('active');
            });

            [createModal, editModal, deleteModal].forEach(modal => {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('active');
                    }
                });
            });

            // Listen for enter key on investment name inputs
            investmentName.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    confirmCreateButton.click();
                }
            });

            editInvestmentName.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    confirmEditButton.click();
                }
            });

            // Close dropdowns if clicked outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.card-header') && !e.target.closest('.select-button')) {
                    document.querySelectorAll('.card-dropdown, .selection-options').forEach(dropdown => {
                        dropdown.classList.remove('active');
                    });
                }
            });

            fetchInvestments();

            planCardHeader.forEach((card, index) => {
            card.addEventListener('click', () => {
                planCardDropdown.forEach((dropdown, dropdownIndex) => {
                    if (dropdownIndex === index) {
                        dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
                    } else {
                        dropdown.style.display = 'none';
                    }
                });
            });
        });


        document.addEventListener('DOMContentLoaded', () => {
            const addPlan = document.querySelector('.add_plan');
            const addPlanPopup = document.querySelector('.add_plan_popup');
                addPlan.addEventListener('click', () => {
                    addPlanPopup.style.visibility = 'visible';
                    addPlanPopup.style.opacity = '1';
                })


            const closeAddPlanPopup = document.querySelectorAll('.close_addplan_popup');
                closeAddPlanPopup.forEach((close) => {
                    close.addEventListener('click', () => {
                        addPlanPopup.style.visibility = 'hidden';
                        addPlanPopup.style.opacity = '0';
                    })
                });

            const editPlan = document.querySelector('.edit_plan');
            const editPlanPopup = document.querySelector('.edit_plan_popup');
                editPlan.addEventListener('click', () => {
                    editPlanPopup.style.visibility = 'visible';
                    editPlanPopup.style.opacity = '1';
                })
            const closeEditPlanPopup = document.querySelector('.close_edit_plan_popup');
                    closeEditPlanPopup.addEventListener('click', () => {
                        editPlanPopup.style.visibility = 'hidden';
                        editPlanPopup.style.opacity = '0';
                    })



            const deletePlan = document.querySelector('.delete_plan');
            const deletePlanPopup = document.querySelector('.delete_plan_popup');
                deletePlan.addEventListener('click', () => {
                    deletePlanPopup.style.visibility = 'visible';
                    deletePlanPopup.style.opacity = '1';
                });
            const closeDeletePlanPopup = document.querySelector('.close_delete_plan_popup');
                closeDeletePlanPopup.addEventListener('click', () => {
                    deletePlanPopup.style.visibility = 'hidden';
                    deletePlanPopup.style.opacity = '0';
                })








            const editMining = document.querySelectorAll('.edit_mining');
            const editMiningPopup = document.querySelector('.edit_mining_popup');
            
            const deleteMining = document.querySelectorAll('.delete_mining');
            const deleteMiningPopup = document.querySelector('.delete_mining_popup');


            editMining.forEach((edit_mining) => {

                edit_mining.addEventListener('click', () => {
                    editMiningPopup.style.visibility = 'visible';
                    editMiningPopup.style.opacity = '1';
                });
            });



            deleteMining.forEach((delete_mining) => {

                delete_mining.addEventListener('click', () => {
                    deleteMiningPopup.style.visibility = 'visible';
                    deleteMiningPopup.style.opacity = '1';
                });
            });

            const closeMiningButtons = document.querySelectorAll('.close_mining');
            const closeDeleteMining = document.querySelectorAll('.close_delete_mining');

            closeMiningButtons.forEach((close) => {
                close.addEventListener('click', () => {
                    editMiningPopup.style.visibility = 'hidden';
                    editMiningPopup.style.opacity = '0';
                })
            });

            closeDeleteMining.forEach((close) => {
                close.addEventListener('click', () => {
                    deleteMiningPopup.style.visibility = 'hidden';
                    deleteMiningPopup.style.opacity = '0';
                })
            });
        
            
        });







            
      </script>



      

      
      
       <footer  class="dashboard_footer">
        <div class="wrapper">
          <span>© 2024 <a href="index.php">Creative Fortune</a>All Right Reserved</span>
          <span><a href="#">Purchase Now</a></span>
        </div>
       </footer>

      <section class="bottom_nav">
        <div class="wrapper">
            <ul>
                <li>
                    <a href="admin_dashboard.php">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="admin_swap.php">
                        <i class="material-icons">swap_calls</i>
                        <span>Swap</span>
                    </a>
                </li>
            </ul>
            
            <ul>
                <li>
                    <a href="users.php">
                        <i class="fa fa-user-o"></i>
                        <span>Users</span>
                    </a>
                </li>
            </ul>
            

            <ul>
                <li>
                    <a href="admin_history.php">
                        <i class="material-icons">history</i>
                        <span>History</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="features.php">
                        <i class="material-icons">widgets</i>
                        <span>Features</span>
                    </a>
                </li>
            </ul>

            <ul>
                <li>
                    <a href="market.php">
                        <i class="material-icons">store</i>
                        <span>Market</span>
                    </a>
                </li>
            </ul>
        </div>
      </section>



    <!-- ============JAVASCRIPT-LINKS============= -->
    <script src="assets/user/javascript/popup.js"></script>
    <script src="assets/user/javascript/function.js"></script>


</body>
</html>

