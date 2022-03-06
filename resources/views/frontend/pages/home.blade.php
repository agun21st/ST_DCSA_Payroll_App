@extends('frontend.layouts.app')
@section('content')
    <!-- ==================Bannar Part Start Here===============    -->
    <section id="bannar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bannar-text text-center">
                        <h1>Find homes first. Tour homes fast.</h1>
                        <h3>Search properties for sale and for rent in Bangladesh</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape1">
            <img src="images/Frame.png" alt="img" class="img-fluid">
        </div>
        <div class="shape2">
            <img src="images/XMLID_1_.png" alt="img" class="img-fluid">
        </div>
    </section>
    <!-- ==================Search Part Start Here===============    -->
    <section id="search">
        <div class="container">
            <div class="search_main">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-md-3">
                        <div class="location">
                            <select name="" id="">
                        <option value="">Location</option>
                        <option value="">Dhaka</option>
                        <option value="">Barisal</option>
                        <option value="">Sylhet</option>
                        <option value="">Khulna</option>
                    </select>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="property_type">
                            <select name="" id="">
                    <option value="">Property Type</option>
                    <option value="">Property 1</option>
                    <option value="">Property 2</option>
                    <option value="">Property 3</option>
                    <option value="">Property 4</option>
                </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="for_sale">
                            <select name="" id="">
                    <option value="">For Sale</option>
                    <option value="">Sale 1</option>
                    <option value="">Sale 2</option>
                    <option value="">Sale 3</option>
                    <option value="">Sale 4</option>
                </select>
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <div class="search_btn">
                            <a href="{{url('/search-property')}}">
                    Search
                </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Find Properties Part Start Here===============    -->
    <section id="find_properties_id">
        <div class="find_prev common_btn">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </div>
        <div class="find_next common_btn">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </div>
        <div class="container">
            <ul class="nav nav-pills find_item_slide" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-dhaka-tab" data-bs-toggle="pill" data-bs-target="#pills-dhaka" type="button" role="tab" aria-controls="pills-dhaka" aria-selected="false">
            <div class="item text-center">
            <div class="item_img">
                <img src="images/find_properties1.jpg" alt="img" class="img-fluid w-80 h-100">
            </div>
            <h4>Dhaka</h4>
            <h5>75 Properties</h5>
            </div>
        </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-chittagong-tab" data-bs-toggle="pill" data-bs-target="#pills-chittagong" type="button" role="tab" aria-controls="pills-chittagong" aria-selected="false">
            <div class="item text-center">
            <div class="item_img">
                <img src="images/find_properties2.jpg" alt="img" class="img-fluid w-80 h-100">
            </div>
            <h4>Chittagong</h4>
            <h5>60 Properties</h5>
            </div>
        </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-khulna-tab" data-bs-toggle="pill" data-bs-target="#pills-khulna" type="button" role="tab" aria-controls="pills-khulna" aria-selected="false">
            <div class="item text-center">
            <div class="item_img">
                <img src="images/find_properties3.jpg" alt="img" class="img-fluid w-80 h-100">
            </div>
            <h4>Khulna</h4>
            <h5>45 Properties</h5>
            </div>
        </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-barisal-tab" data-bs-toggle="pill" data-bs-target="#pills-barisal" type="button" role="tab" aria-controls="pills-barisal" aria-selected="false">
            <div class="item text-center">
            <div class="item_img">
                <img src="images/find_properties3.jpg" alt="img" class="img-fluid w-80 h-100">
            </div>
            <h4>Barisal</h4>
            <h5>72 Properties</h5>
            </div>
        </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-shylet-tab" data-bs-toggle="pill" data-bs-target="#pills-shylet" type="button" role="tab" aria-controls="pills-shylet" aria-selected="false">
            <div class="item text-center">
            <div class="item_img">
                <img src="images/find_properties3.jpg" alt="img" class="img-fluid w-80 h-100">
            </div>
            <h4>Shylet</h4>
            <h5>25 Properties</h5>
            </div>
        </button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-dhaka" role="tabpanel" aria-labelledby="pills-dhaka-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/dhanmondi.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Dhanmondi</h4>
                                    <h5>60 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/gulshan.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Gulshan</h4>
                                    <h5>40 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/banani.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Banani</h4>
                                    <h5>45 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/uttara.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Uttara</h4>
                                    <h5>65 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/mirpur.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Mirpur</h4>
                                    <h5>52 Properties</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-chittagong" role="tabpanel" aria-labelledby="pills-chittagong-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/dhanmondi.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Chittagong 1</h4>
                                    <h5>60 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/gulshan.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Chittagong 2</h4>
                                    <h5>40 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/banani.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Chittagong 3</h4>
                                    <h5>45 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/uttara.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Chittagong 4</h4>
                                    <h5>65 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/mirpur.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Chittagong 5</h4>
                                    <h5>52 Properties</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-khulna" role="tabpanel" aria-labelledby="pills-khulna-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/dhanmondi.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Khulna 1</h4>
                                    <h5>60 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/gulshan.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Khulna 2</h4>
                                    <h5>40 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/banani.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Khulna 3</h4>
                                    <h5>45 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/uttara.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Khulna 4</h4>
                                    <h5>65 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/mirpur.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Khulna 5</h4>
                                    <h5>52 Properties</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-barisal" role="tabpanel" aria-labelledby="pills-barisal-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/dhanmondi.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Barisal 1</h4>
                                    <h5>60 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/gulshan.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Barisal 2</h4>
                                    <h5>40 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/banani.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Barisal 3</h4>
                                    <h5>45 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/uttara.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Barisal 4</h4>
                                    <h5>65 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/mirpur.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Barisal 5</h4>
                                    <h5>52 Properties</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-shylet" role="tabpanel" aria-labelledby="pills-shylet-tab">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/dhanmondi.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Shylet 1</h4>
                                    <h5>60 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="find_bottom_item">
                                <img src="images/gulshan.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Shylet 2</h4>
                                    <h5>40 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/banani.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Shylet 3</h4>
                                    <h5>45 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/uttara.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Shylet 4</h4>
                                    <h5>65 Properties</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="find_bottom_item">
                                <img src="images/mirpur.jpg" alt="img" class="img-fluid w-100">
                                <div class="overlay">
                                    <h4>Shylet 5</h4>
                                    <h5>52 Properties</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Love to Buy Part Start Here===============    -->
    <section id="love_buy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading">
                        <h1>Peoples Love to Buy</h1>
                        <h3>Take a deep dive and browse homes or apartments for rent and local insights to find what is right for you.</h3>
                    </div>
                </div>
            </div>
            <div class="row rent_main">
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent1.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent2.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent3.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hot_properties_btn">
                        <a href="">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Ready to Rent Part Start Here===============    -->
    <section id="ready_rent">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading">
                        <h1>Ready to Rent</h1>
                        <h3>Take a deep dive and browse homes or apartments for rent and local insights to find what is right for you.</h3>
                    </div>
                </div>
            </div>
            <div class="row rent_main">
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent1.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent2.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="rent_item">
                        <div class="rent_img">
                            <img src="images/rent3.jpg" alt="img" class="img-fluid w-100">
                        </div>
                        <div class="rent_details">
                            <h4>The Residences at Dhaka City</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                        </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <h5>10,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hot_properties_btn">
                        <a href="">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==================Hot Properties Part Start Here===============    -->
    <section id="hot_properties">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_heading">
                        <h1>Hot properties of this month</h1>
                        <h3>Take a deep dive and browse homes or apartments for rent and local insights to find what is right for you.</h3>
                    </div>
                </div>
            </div>
            <div class="row hot_proper" style="margin-top: 50px;">
                <div class="col-lg-3 position-relative">
                    <div class="hot_details_main">
                        <div class="item">
                            <h4>Oriental Paradise</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-10 , Mirpur 01, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 1 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 730 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <del>10,0000</del>
                                <h5>75,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item">
                            <h4>Blue Sky</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-27 , Dhanmondi, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 3 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 2 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 1200 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <del>30,0000</del>
                                <h5>25,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="item">
                            <h4>Dream House</h4>
                            <h5>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.657 16.657L13.414 20.9C13.2284 21.0857 13.0081 21.233 12.7656 21.3336C12.523 21.4341 12.2631 21.4859 12.0005 21.4859C11.738 21.4859 11.478 21.4341 11.2354 21.3336C10.9929 21.233 10.7726 21.0857 10.587 20.9L6.343 16.657C5.22422 15.5381 4.46234 14.1127 4.15369 12.5608C3.84504 11.009 4.00349 9.40047 4.60901 7.93868C5.21452 6.4769 6.2399 5.22749 7.55548 4.34846C8.87107 3.46943 10.4178 3.00024 12 3.00024C13.5822 3.00024 15.1289 3.46943 16.4445 4.34846C17.7601 5.22749 18.7855 6.4769 19.391 7.93868C19.9965 9.40047 20.155 11.009 19.8463 12.5608C19.5377 14.1127 18.7758 15.5381 17.657 16.657V16.657Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 11C15 11.7956 14.6839 12.5587 14.1213 13.1213C13.5587 13.6839 12.7956 14 12 14C11.2044 14 10.4413 13.6839 9.87868 13.1213C9.31607 12.5587 9 11.7956 9 11C9 10.2044 9.31607 9.44129 9.87868 8.87868C10.4413 8.31607 11.2044 8 12 8C12.7956 8 13.5587 8.31607 14.1213 8.87868C14.6839 9.44129 15 10.2044 15 11V11Z" stroke="#757575" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg> Road No-08 , Mohammadpur, Dhaka
                            </h5>
                            <div class="bed-main">
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 2 Beds
                                </div>
                                <div class="bed_item">
                                    <svg width="23" height="19" viewBox="0 0 23 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.0515 11.0837H21.6602V11.0467C21.659 10.3022 21.4052 9.58013 20.9402 8.9986C20.4753 8.41708 19.8268 8.01055 19.1007 7.8455V1.56575C19.1002 1.15065 18.9351 0.752702 18.6416 0.459182C18.348 0.165661 17.9501 0.000529212 17.535 0H4.954C4.5389 0.000529212 4.14095 0.165661 3.84743 0.459182C3.55391 0.752702 3.38878 1.15065 3.38825 1.56575V7.8455C2.66223 8.01055 2.01372 8.41708 1.54877 8.9986C1.08383 9.58013 0.829979 10.3022 0.82875 11.0467V11.0837H0.4375C0.321488 11.0838 0.210247 11.1299 0.128214 11.212C0.0461811 11.294 6.62357e-05 11.4052 0 11.5212V14.9067C6.62357e-05 15.0228 0.0461811 15.134 0.128214 15.216C0.210247 15.2981 0.321488 15.3442 0.4375 15.3442H1.18525V17.9193C1.18522 17.9767 1.19651 18.0336 1.21849 18.0867C1.24046 18.1398 1.27269 18.188 1.31332 18.2287C1.35395 18.2693 1.40219 18.3015 1.45529 18.3235C1.50838 18.3455 1.56529 18.3568 1.62275 18.3568H3.4315C3.54753 18.3568 3.65881 18.3107 3.74086 18.2286C3.82291 18.1466 3.869 18.0353 3.869 17.9193V15.3442H18.3627V17.9193C18.3627 18.0353 18.4088 18.1466 18.4909 18.2286C18.5729 18.3107 18.6842 18.3568 18.8002 18.3568H20.8662C20.9237 18.3568 20.9806 18.3455 21.0337 18.3235C21.0868 18.3015 21.135 18.2693 21.1757 18.2287C21.2163 18.188 21.2485 18.1398 21.2705 18.0867C21.2925 18.0336 21.3038 17.9767 21.3037 17.9193V15.3442H22.0515C22.1675 15.3442 22.2787 15.2981 22.3608 15.216C22.4428 15.134 22.4889 15.0228 22.489 14.9067V11.5212C22.4889 11.4052 22.4428 11.294 22.3608 11.212C22.2787 11.1299 22.1675 11.0838 22.0515 11.0837ZM4.26325 1.56575C4.26351 1.38263 4.33637 1.20709 4.46586 1.07761C4.59534 0.948125 4.77088 0.875265 4.954 0.875H17.535C17.7181 0.875265 17.8937 0.948125 18.0231 1.07761C18.1526 1.20709 18.2255 1.38263 18.2257 1.56575V7.76125H15.19V3.87975C15.19 3.82229 15.1787 3.76538 15.1568 3.71229C15.1348 3.65919 15.1026 3.61095 15.0619 3.57032C15.0213 3.52969 14.9731 3.49746 14.92 3.47549C14.8669 3.45351 14.81 3.44222 14.7525 3.44225H7.7365C7.67904 3.44222 7.62213 3.45351 7.56904 3.47549C7.51594 3.49746 7.4677 3.52969 7.42707 3.57032C7.38643 3.61095 7.35421 3.65919 7.33223 3.71229C7.31026 3.76538 7.29897 3.82229 7.299 3.87975V7.76125H4.26325V1.56575ZM14.315 7.76125H8.174V4.31725H14.315V7.76125ZM1.70375 11.0467C1.70421 10.4077 1.95822 9.79498 2.41002 9.34305C2.86181 8.89111 3.47447 8.63691 4.1135 8.63625H18.3755C19.0144 8.63691 19.6269 8.89097 20.0786 9.34269C20.5304 9.79441 20.7845 10.4069 20.7852 11.0457V11.0828H1.70375V11.0467ZM2.9945 17.4815H2.06025V15.3442H2.9945V17.4815ZM20.4292 17.4815H19.2377V15.3442H20.4287L20.4292 17.4815ZM21.6145 14.4692H0.875V11.9587H21.614L21.6145 14.4692Z" fill="#757575"/>
                            </svg> &nbsp; 2 Bath
                                </div>
                                <div class="bed_item">
                                    <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.92357 3.87098V0H18.9785V14.129H14.0335V18H0.978516V3.87098H5.92357ZM6.74255 0.801369H18.1595V13.3277H14.0335V3.87098H6.74255V0.801369ZM13.2145 14.129V17.1986H1.7975V4.67235H5.92357V14.129H13.2145ZM13.2145 13.3277H6.74255V4.67235H13.2145V13.3277Z" fill="#757575"/>
                            </svg> &nbsp; 930 Sq. Ft.
                                </div>
                            </div>
                            <div class="price">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 9V7C9 6.46957 8.78929 5.96086 8.41421 5.58579C8.03914 5.21071 7.53043 5 7 5M9 9V13C9 13.5304 9.21071 14.0391 9.58579 14.4142C9.96086 14.7893 10.4696 15 11 15C11.5304 15 12.0391 14.7893 12.4142 14.4142C12.7893 14.0391 13 13.5304 13 13V12M9 9H7M9 9H13M19 10C19 11.1819 18.7672 12.3522 18.3149 13.4442C17.8626 14.5361 17.1997 15.5282 16.364 16.364C15.5282 17.1997 14.5361 17.8626 13.4442 18.3149C12.3522 18.7672 11.1819 19 10 19C8.8181 19 7.64778 18.7672 6.55585 18.3149C5.46392 17.8626 4.47177 17.1997 3.63604 16.364C2.80031 15.5282 2.13738 14.5361 1.68508 13.4442C1.23279 12.3522 1 11.1819 1 10C1 7.61305 1.94821 5.32387 3.63604 3.63604C5.32387 1.94821 7.61305 1 10 1C12.3869 1 14.6761 1.94821 16.364 3.63604C18.0518 5.32387 19 7.61305 19 10Z" stroke="#EC2028" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                                <del>80,0000</del>
                                <h5>70,0000</h5>
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 ms-auto position-relative">
                    <div class="hot_property_main">
                        <div class="item">
                            <img src="images/hot_properties1.jpg" alt="img" class="img-fluid h-100 w-100">
                        </div>
                        <div class="item">
                            <img src="images/hot_properties2.jpg" alt="img" class="img-fluid h-100 w-100">
                        </div>
                        <div class="item">
                            <img src="images/hot_properties3.jpg" alt="img" class="img-fluid h-100 w-100">
                        </div>
                    </div>
                    <div class="slide_arrows">
                        <div class="hot_prev">
                            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        </div>
                        <div class="hot_next">
                            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="hot_properties_btn">
                        <a href="">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection