
    <div class="top-area show-onload">
        <div class="bg-holder full">
            <div class="bg-front full-height bg-front-mob-rel">
                <div class="container full-height">
                    <div class="rel full-height">


                       
                       <div class="container">


                        <div class="search-tabs search-tabs-bg search-tabs-bottom mb50">

                            <div class="row">

                                <div class="col-md-2">



                                    <div class="tabbable">
                                        <ul class="nav nav-tabs" id="myTab" style="font-weight: bold;">

                                            <li class="active">
                                                <a href="#tab-1" data-toggle="tab" id="FlightTab"><i class="fa fa-plane"></i> BOOK FLIGHTS</a>
                                            </li>
                                            <li>
                                                <a href="#tab-2" data-toggle="tab" id="HotelTab">
                                                    <i class="fa fa-building-o"></i> BOOK HOTELS
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="tab"><i class="fa fa-th-large"></i> <span>
                                                Hajj</span></a>
                                            </li>
                                            <li>
                                                <a href="" data-toggle="tab"><i class="fa fa-th-large"></i> <span>
                                                Umrah</span></a>
                                            </li>
                                                                                      
                                             <li class="nav-item dropdown">
                                                 <a  class="nav-link dropdown-toggle" href="#tab-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-large"></i>Tourism</a>
                                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                     <li><a href="" class="dropdown-item">Fixed Packages</a></li>
                                                     <li><a href="" class="dropdown-item">Make My Package</a></li>
                                                 </ul>
                                             </li> 
                                             <li>
                                                <a href="" data-toggle="tab"><i class="fa fa-th-large"></i> <span>Visa
                                                </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                
                                <div class="col-md-10"> 
                                                <form id="form1" action="" method="post">
                                                    

                                                    <div class="tab-content">
                                                        <div class="tab-pane fade" id="tab-2">
                                                            <span class="errMessHotel" id="errMessHotel"></span>
                                                            <h2>
                                                            Search Hotels</h2>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group form-group-lg form-group-icon-left">
                                                                        <i class="fa fa-map-marker input-icon"></i>
                                                                        <label>
                                                                        FLIGHTS</label>
                                                                        <input class="typeahead form-control" type="text" id="destCity" name="destCity" autocomplete="off" autocorrect="off" placeholder="City, Country" />
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="input-daterange">
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-icon-left">
                                                                                    <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                    <label>
                                                                                    CHECK-IN</label>
                                                                                    <input class="form-control" type="text" name="checkIn" id="checkIn" placeholder="DD/MM/YYYY" value="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-icon-left">
                                                                                    <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                    <label>
                                                                                    CHECK-OUT</label>
                                                                                    <input class="form-control" type="text" name="checkOutDate" id="checkOut" placeholder="DD/MM/YYYY" value="" />
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>
                                                                                    ROOMS</label>
                                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons" id="NoOfRoomsGroup">
                                                                                        <label class="btn btn-primary active" id="1">
                                                                                            <input type="radio" name="options" />1
                                                                                        </label>
                                                                                        <label class="btn btn-primary" id="2">
                                                                                            <input type="radio" name="options" />2
                                                                                        </label>
                                                                                        <label class="btn btn-primary" id="3">
                                                                                            <input type="radio" name="options" />3
                                                                                        </label>
                                                                                        <label class="btn btn-primary" id="3+">
                                                                                            <input type="radio" name="options" />3+
                                                                                        </label>
                                                                                    </div>
                                                                                    <select class="form-control hidden" name="NoOfRooms" id="NoOfRooms">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option selected="selected">4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg">
                                                                                    <label>
                                                                                    GUESTS</label>
                                                                                    <div class="btn-group-select-num">
                                                                                        <label class="btn btn-primary active" title="Adults">
                                                                                            <span class="fa fa-male"></span>
                                                                                        </label>
                                                                                        <label class="btn btn-primary" id="totalAdultValue">2</label>
                                                                                        <label class="btn btn-primary active" title="Children">
                                                                                            <span class="fa fa-child"></span>
                                                                                        </label>
                                                                                        <label class="btn btn-primary" id="totalChildValue">0</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button class="btn btn-primary btn-lg" type="button" id="HotelSearch" style="padding-bottom: 30px" data-toggle="modal" data-target="#loginFormR">
                                                            Search for Hotels</button>
                                                        </div>
                                                        <div class="tab-pane fade in active" id="tab-1">
                                                            <span class="errMess" id="errMess" style="display: none;color:red;"></span>
                                                            <h2>
                                                            Search for Best Flights</h2>
                                                            <div class="tabbable">
                                                                <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                                    <li class="active">
                                                                        <a id="roundTrip" data-toggle="tab">
                                                                        Round Trip</a>
                                                                    </li>
                                                                    <li>
                                                                        <a id="oneWay" data-toggle="tab">
                                                                        One Way</a>
                                                                    </li>
                                                                    <li>
                                                                        <a id="multistop" data-toggle="tab">
                                                                        Multistop</a>
                                                                    </li>
                                                                </ul>
                                                                <br>
                                                                <div class="tab-content" id="flightSearch">
                                                                    <div class="tab-pane fade in active">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="row">
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group form-group-lg form-group-icon-left">
                                                                                            <i class="fa fa-map-marker input-icon"></i>
                                                                                            <label>
                                                                                            From</label>
                                                                                            <input class="typeahead form-control" type="text" id="source" name="source" autocomplete="off" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <div class="form-group form-group-lg form-group-icon-left">
                                                                                            <i class="fa fa-map-marker input-icon"></i>
                                                                                            <label>
                                                                                            To</label>
                                                                                            <input class="typeahead form-control" type="text" id="dest" name="dest" autocomplete="off" />
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="input-daterange">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                <label>
                                                                                                Departing</label>
                                                                                                <input class="form-control" id="departing" name="departing" type="text" placeholder="DD/MM/YYYY" value="" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                                                <label>
                                                                                                Returning</label>
                                                                                                <input class="form-control" id="returning" name="returning" type="text" placeholder="DD/MM/YYYY" value="" />
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>
                                                                                    Adult (12+)</label>
                                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons" id="adultCountGroup">
                                                                                        <label class="btn btn-primary active">
                                                                                            <input type="radio" name="options" />1
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />2
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />3
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />3+
                                                                                        </label>
                                                                                    </div>
                                                                                    <select class="form-control hidden" id="adultCount" name="adultCount">
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option selected="selected">4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                        <option>7</option>
                                                                                        <option>8</option>
                                                                                        <option>9</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>
                                                                                    Children (2-11)</label>
                                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons" id="childCountGroup">
                                                                                        <label class="btn btn-primary active">
                                                                                            <input type="radio" name="options" />0
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />1
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />2
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />2+
                                                                                        </label>
                                                                                    </div>
                                                                                    <select class="form-control hidden" id="childCount" name="childCount">
                                                                                        <option>0</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option selected="selected">4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>
                                                                                    Infant (< 2)</label>
                                                                                    <div class="btn-group btn-group-select-num" data-toggle="buttons" id="infantCountGroup">
                                                                                        <label class="btn btn-primary active">
                                                                                            <input type="radio" name="options" />0
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />1
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />2
                                                                                        </label>
                                                                                        <label class="btn btn-primary">
                                                                                            <input type="radio" name="options" />2+
                                                                                        </label>
                                                                                    </div>
                                                                                    <select class="form-control hidden" id="infantCount" name="infantCount">
                                                                                        <option>0</option>
                                                                                        <option>1</option>
                                                                                        <option>2</option>
                                                                                        <option>3</option>
                                                                                        <option selected="selected">4</option>
                                                                                        <option>5</option>
                                                                                        <option>6</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <div class="form-group form-group-lg form-group-select-plus">
                                                                                    <label>
                                                                                    Class</label>
                                                                                    <select class="form-control" id="cabinClass" name="cabinClass">
                                                                                        <option value="1">
                                                                                        Economy</option>
                                                                                        <option value="2">
                                                                                        Premium Economy</option>
                                                                                        <option value="3">
                                                                                        Business</option>
                                                                                        <option value="5">
                                                                                        First</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                        
                                                            </div>
                                                            <button class="btn btn-primary btn-lg" type="button" id="FlightSearch" style="padding-bottom: 30px" data-toggle="modal" data-target="#loginFormR">
                                                            Search for Flights</button>
                                                        </div>
                                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>