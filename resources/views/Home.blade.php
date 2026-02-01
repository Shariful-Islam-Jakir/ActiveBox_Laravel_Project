    @extends('layout.app')

    @section('tittle','Home Page')

    @section('content')

    <!--Banner area-->

    <div class="ActiveBox_banner">
        <div class="container">
            <div class="ActiveBox_content">
                <div>
                    <h1>Active Box</h1>
                    <p>Lorem color,Lorem Font,Lorem Background</p>
                </div>
                <div>
                    <button>Call Now</button>
                    <a href="#"><i class="fa-solid fa-chevron-down"></i></a>
                </div>
                
            </div>
        </div>
    </div>

    <!--Banner End-->

    <div class="ActiveBox_About">
        <div class="container">
            <div class="ActiveBox_tittle">
                <h1>Active Box About</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut dolore repudiandae, inventore exercitationem modi aut delectus. Esse omnis unde natus, fugiat hic accusamus provident! Doloremque aperiam consequuntur itaque labore?</p>
            </div>
        </div>
    </div>

    <!--ActiveBox About End-->

    <div class="ActiveBox_Service">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ActiveBox_Service_Icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="ActiveBox_Service_Tittle">
                        <h5>Live Phone</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Service_Icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="ActiveBox_Service_Tittle">
                        <h5>Live Phone</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Service_Icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <div class="ActiveBox_Service_Tittle">
                        <h5>Live Phone</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Service end-->

    <div class="ActiveBox_Work">
        <div class="container">
            <div class="ActiveBox_Work_Tittle">
                <h2>Active Box Work Tittle</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor architecto quos sit impedit nemo nobis dolorum saepe est ipsam velit odit omnis blanditiis officia,.</p>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ActiveBox_Work_Image">
                        <img src="image/image eight.png">
                        <div class="ActiveBox_Work_Image_hover">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Active Box Work End-->

    <div class="ActiveBox_Contact">
        <div class="container">
             <div class="ActiveBox_Contact_Tittle">
                <h2>Active Box Contact</h2>
                <p>Lorem ipsum dolor sit officia,.</p>
            </div>
            <div class="row">
                <div class="ActiveBox_From">
                    <div class="ActiveBox_Input">
                        <input type="text" name="name" placeholder="enter your name" class="form-control">
                    </div>
                    <div class="ActiveBox_Input">
                        <input type="email" name="email" placeholder="enter your email" class="form-control">
                    </div>
                    <div class="ActiveBox_Input">
                        <textarea cols="30" rows="7" placeholder="enter your message" class="form-control" ></textarea>
                    </div>

                    <div class="ActiveBox_foot">
                        <div class="ActiveBox_foot_left">
                            <input type="checkbox" name="sub" id="sub">
                            <label>Subscribe Check Box</label>
                        </div>
                        <div class="ActiveBox_foot_right">
                            <input type="submit" value="send">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Active Box Contact End-->

    @endsection