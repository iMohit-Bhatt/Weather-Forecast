    <div class="Register_form" id="myForm">
        <div class="box">
          <form method="POST" action="include/register.php" method="post">
            <div class="msg">
            <p class="display-6">SignUp For Free</p>
            <i class="fa fa-times" onclick="closeForm()"></i>
            </div>
            
            <div class="name details">
              <button><i class="fa fa-user"></i></button>
              <input type="text" name= "name" placeholder="Your Name" required>
            </div>
            <div class="Phone details">
              <button><i class="fa fa-phone"></i></button>
              <input type="text" name="phone" maxlength="10" placeholder="Phone Number" required>
            </div>
            <div class="Email details">
              <button><i class="fa fa-envelope"></i></button>
              <input type="email" name="email" placeholder="Email Id" required>
            </div>
            <div class="Password details">
              <button><i class="fa fa-lock"></i></button>
              <input type="password" name="pass" placeholder="Enter Password" required>
            </div>
            <div class="Create_btn">
              <button class="acc">Create Account</button>
            </div>
            <div class="last_text">
              <p>Already have an account? <a href="#" onclick="openForm2()">Login</a></p>
            </div>
          </form>
        </div>  
    </div>
    
    <div class="Login_form" id="myForm2">
        <div class="box">
        <form method="POST" action="include/login.php">
          <div class="msg">
          <p class="display-6">Login In</p>
          <i class="fa fa-times" onclick="closeForm2()"></i>
          </div>
          <div class="Email details">
            <button><i class="fa fa-envelope"></i></button>
            <input type="text" name="email" placeholder="Email Id" required>
          </div>
          <div class="Password details">
            <button><i class="fa fa-lock"></i></button>
            <input type="password" name="pass" placeholder="Enter Password" required>
          </div>
          <div class="Create_btn">
            <button class="acc">Login</button>
          </div>
          <div class="last_text">
            <p><a href="#" onclick="openForm()" >Click here</a> to register a new account</p>
          </div>
        </form>
        </div>  
    </div>


    <div class="Contact_form" id="myForm3">
        <div class="box">
        <form method="POST" action="include/query.php">
          <div class="msg">
          <p class="display-6">Contact Us</p>
          <i class="fa fa-times" onclick="closeForm3()"></i>
          </div>
          <div class="Email details">
            <button><i class="fa fa-envelope"></i></button>
            <input type="text" name="email" placeholder="Email Id" required>
          </div>
          <div class="Password details">
            <button><i class="fa fa-question"></i></button>
            <input type="text-area" name="query" placeholder="Your Query?" required>
          </div>
          <div class="Create_btn">
            <button class="acc">SEND</button>
          </div>
        </form>
        </div>  
    </div>

    <!--Navbar -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light shadow">
       <div class="container-xxl">
            <a href="#section" class="navbar-brand">
                <span class="fw-bold text-sedondary">
                    Weather Forecast
                </span>
            </a>
            <!-- Toogle for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="flase" aria-lable="Toogle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Nav Links -->
            <div id="main-nav" class="collapse my-nav-data navbar-collapse justify-content-end align-item-center">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="#section" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="openForm3()">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#works" class="nav-link">Help</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="openForm2()">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" onclick="openForm()">SignUp</a>
                    </li>
                </ul>
            </div>
       </div> 
    </nav>


