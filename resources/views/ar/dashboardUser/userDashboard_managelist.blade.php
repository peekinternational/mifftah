@extends('ar.dashboardUser.dash_master_layout')
@section('content')
  <div class="dashleft  col-lg-9 col-md-9 col-sm-12 col-xs-12 nopadding">
    <div class="mlistbtn_btnwrp text-capitalize">
      <div class="mlisttab_btn active">قوائم نشط</div>
      <div class="mlisttab_btn"> القوائم الخاملة</div>
    </div>
    <div class="mltabfullwrp">
      <div id="activelisttdiv" class="mlistingtab active">
        
         @foreach ($user_mange as $active_users)
        <section class="managelistingeach mgnB20 fulwidthm whitebg left pdg15">
          <div class="row">
            <div class=" col-lg-4  col-md-6 col-sm-6 col-xs-12 ">
              <div class=" newlistingitem fulwidthm">
                <div class="newlistingitem_in "><a href="{{ url('/ar-home/preview') }}/{{$active_users->id}}" title="View Preview" class="graybg">
                    <div class="listingimageouter fulwidthm left">
                      <div class="listingimage">
                        <div class="featuredim">
                          <img src="{{ asset('images/featured.png')}}" title="Featured Property">
                        </div>
                        <div class=" listinimgcover">
                          <div class="listinimgcoverin media-cover">
                            <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/1/8/beautiful-21864_960_720.jpg')}}">
                          </div>
                        </div>
                        <div class="photocount">4 الصور</div>
                      </div>
                    </div>
                  </a>
                  <div class="newlistingdetails fulwidthm left graybg">
                    <div class="n_l_discptn ">
                      <div class=" dblue_bg fulwidthm left">
                        <div class="n_lprice halfwidth  left whitetext robotoregular font-size14" title="$ {{$active_users->price}}">$ {{$active_users->price}}</div>
                        <div class="n_lsqft halfwidth  text-right left whitetext robotoregular font-size14" title="HomeSize : {{$active_users->homesize}} Sq.ft">{{$active_users->homesize}} Sq.ft</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-8  col-md-6 col-sm-6 col-xs-12 mgnT15">
              <div class="resulthead">
                <a class="fontsize18 robotomedium graytext resultname mgnB10" href="#" title="View Preview"> {{$active_users->propertytype}} </a>
                <p class="postdate lgraytext robotomedium fontsize13 mgnB30">{{$active_users->region}},{{$active_users->street}} </p>
              </div>
              <div class="mangeactionwrp">
                <ul class="mangeactnbtnul">
                  <li class="mangeactbtnli left">
                    <a class="mangactnbtn dblue_bg pdg10">إدارة القوائم <i class="fa fa-angle-down"></i></a>
                    <div class="mangeactnlistwrp mangeactnlistwrp1">
                      <ul class="mangeactionul">
                        <li class="mangeactionli"><a href="" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>تحرير قائمة</a></li>
                        <li class="mangeactionli"><a id="removelist_8" href="#" class="mangeaction_a removelist"><i class="fa fa-angle-double-right"></i>إزالة قائمة</a></li>
                        <li class="mangeactionli"><a href="#" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>View Statistics</a></li>
                        <li class="mangeactionli"><a style="cursor:pointer;" id="unlist_8" class="mangeaction_a unlistnow"><i class="fa fa-angle-double-right"></i>إلغاء إدراج الآن</a></li>
                        <li class="mangeactionli"><a style="cursor:pointer;" id="unfeatured_8" class="mangeaction_a markunfeatured"><i class="fa fa-angle-double-right"></i>إزالة حالة مميزة</a></li>
                      
                      </ul>
                    </div>
                  </li>
                  
                  <li class="mangeactbtnli left">
                    <a class="mangactnbtn lblue_bg pdg10">إدارة وكلاء <i class="fa fa-angle-down"></i></a>
                    <div class="mangeactnlistwrp mangeactnlistwrp2">
                      <ul class="mangeactionul">
                        <li class="mangeactionli"><a href="#" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>إدارة وكلاء أسوشيتد</a></li>
                        <li class="mangeactionli"><a href="#" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>وكلاء المنتسبين إلى قائمة</a></li>
                      </ul>
                    </div>
                  </li>
                
                </ul>
              
              </div>
            </div>
          
          </div>
        
        
        </section>
        @endforeach
         <div class="pagination">
           {{ $user_mange->links() }}
         </div>
      </div> <!-- Tab1 ends -->
      <div id="inactivelistdivv" class="mlistingtab ">
        <section class="managelistingeach mgnB20 fulwidthm whitebg left pdg15">
          <div class="row">
            
            <div class=" col-lg-4  col-md-6 col-sm-6 col-xs-12 ">
              <div class=" newlistingitem fulwidthm">
                <div class="newlistingitem_in "><a href="#" title="View Preview" class="graybg">
                    <div class="listingimageouter fulwidthm left">
                      <div class="listingimage">
                        <div class="featuredim">
                        </div>
                        <div class=" listinimgcover">
                          <div class="listinimgcoverin media-cover">
                            <img class="img-responsive-height" src="{{ asset('userdata/List/Thumb/1/239/cabin-68243_960_720.jpg')}}">
                          </div>
                        </div>
                        <div class="photocount">1 Photos</div>
                      </div>
                    
                    </div>
                  </a>
                  <div class="newlistingdetails fulwidthm left graybg">
                    <div class="n_l_discptn ">
                      <div class=" dblue_bg fulwidthm left">
                        <div class="n_lprice halfwidth  left whitetext robotoregular font-size14" title="$ 454,555">$ 454,555</div>
                        <div class="n_lsqft halfwidth  text-right left whitetext robotoregular font-size14" title="Home Size : 45 Sq.ft"> 45 Sq.ft</div>
                      
                      
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=" col-lg-8  col-md-6 col-sm-6 col-xs-12 mgnT15">
              <div class="resulthead">
                <a class="fontsize18 robotomedium graytext resultname mgnB10" href="#" title="View Preview">Single Family Property For Sale </a>
                <p class="postdate lgraytext robotomedium fontsize13 mgnB30">H#343,st#3434, Islamorada, Village Of Islands 46000</p>
              </div>
              <div class="mangeactionwrp">
                <ul class="mangeactnbtnul">
                  <li class="mangeactbtnli left">
                    <a class="mangactnbtn dblue_bg pdg10">Manage Listings <i class="fa fa-angle-down"></i></a>
                    <div class="mangeactnlistwrp mangeactnlistwrp1">
                      <ul class="mangeactionul">
                        <li class="mangeactionli">
                         <a href="#" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>Edit Listing</a></li>
                        <li class="mangeactionli"><a href="#" id="removelist_239" class="mangeaction_a removelist"><i class="fa fa-angle-double-right"></i>Remove Listing</a></li>
                        <li class="mangeactionli"><a href="#" class="mangeaction_a"><i class="fa fa-angle-double-right"></i>View Statistics</a></li>
                        <li class="mangeactionli"><a style="cursor:pointer;" id="listt_239" class="mangeaction_a listnow"><i class="fa fa-angle-double-right"></i>List Now</a></li>
                      </ul>
                    </div>
                  </li>
                
                </ul>
              
              </div>
            </div>
          
          </div>
        
        
        </section>
        <div class="paginationnumber">
          <ul id="pagedivvv2" class="paginationul fulwidthm left mgnB30" style="display:block;">
          </ul>
        </div><!-- No results ends -->
      </div> <!-- Tab2 ends -->
    </div> <!-- tabfullwrp ends -->
  </div>
  
  <script type="text/javascript">
    
    $(document).ready(function () {
      $(".mlistbtn_btnwrp .mlisttab_btn").click(function (e) {
        if (!$(this).hasClass("active")) {
          var tabNum = $(this).index();
          
          var nthChild = tabNum + 1;
          
          $(".mlistbtn_btnwrp .mlisttab_btn.active").removeClass("active");
          $(this).addClass("active");
          $(".mltabfullwrp .mlistingtab.active").removeClass("active");
          $(".mltabfullwrp .mlistingtab:nth-child(" + nthChild + ")").addClass("active");
        }
      });
      
      $(".unlistnow").click(function (e) {
        
        var id = $(this).attr('id');
        
        var data = id.split('_');
        var lid = data[1];
        if (lid < 10) {
          $(".errorsgc").html("Sorry, You cannot perform this operation in demo.");
          $(".errorsgc").animate({right: "21px"});
          
          setTimeout(function () {
            $(".errorsgc").animate({right: "-410px"});
            
          }, 2000);
          return false;
        }
        
        $.ajax({
          
          type: "POST", cache: false,
          
          url: "http://inout-realestate.demo.inoutscripts.net/user/unlistnow",
          
          data: {'lid': lid},
          
          success: function (data) {
            
            if (data == 50) {
              $(".errorsgc").html("Sorry, You cannot perform this operation in demo.");
              $(".errorsgc").animate({right: "21px"});
              
              setTimeout(function () {
                $(".errorsgc").animate({right: "-410px"});
                
              }, 2000);
              return false;
            }
            
            if (data == 1) {
              location.reload();
            }
            if (data == 2) {
              $(".errorsgc").html("You don't have the permission to list it.");
              $(".errorsgc").animate({right: "21px"});
              
              setTimeout(function () {
                $(".errorsgc").animate({right: "-410px"});
                
              }, 2000);
              return false;
            }
            if (data == 3) {
              $(".errorsgc").html("Cannot UnList Now. Listing requests already Exists.");
              $(".errorsgc").animate({right: "21px"});
              
              setTimeout(function () {
                $(".errorsgc").animate({right: "-410px"});
                
              }, 2000);
              return false;
            }
            
            
          }
        });
        
      });
//
      
      $(".markunfeatured").click(function (e) {
        
        var id = $(this).attr('id');
        
        var data = id.split('_');
        var lid = data[1];
        if (lid < 10) {
          $(".errorsgc").html("Sorry, You cannot perform this operation in demo.");
          $(".errorsgc").animate({right: "21px"});
          
          setTimeout(function () {
            $(".errorsgc").animate({right: "-410px"});
            
          }, 2000);
          return false;
        }
        if (confirm("Do you want Remove this Listing Featured Status?") == true) {
          $.ajax({
            
            type: "POST", cache: false,
            
            url: "http://inout-realestate.demo.inoutscripts.net/user/removefeaturedlist",
            
            data: "listid=" + lid,
            
            
            success: function (data) {
              
              //alert(data);
              if (data == 1) {
                
                
                location.reload();
                
              }
            }
          });
          
        }
        
        
      });
      
      $(".markfeatured").click(function (e) {
        
        var id = $(this).attr('id');
        
        var data = id.split('_');
        var lid = data[1];
        var userid = 0;
        if (confirm("Do you want make as featured this Listing?") == true) {
          $.ajax({
            
            type: "POST", cache: false,
            
            url: "http://inout-realestate.demo.inoutscripts.net/user/featuredlist",
            
            data: "listid=" + lid + "&userid=" + userid,
            
            
            success: function (data) {
              
              // alert(data);
              
              
              if (data == 1) {
                location.reload();
              }
              
              
            }
          });
          
        }
        
        
      });
      
      
      $(".listnow").click(function (e) {
        
        var id = $(this).attr('id');
        
        var data = id.split('_');
        var lid = data[1];
        
        
        $.ajax({
          
          type: "POST", cache: false,
          
          url: "http://inout-realestate.demo.inoutscripts.net/user/listnow",
          
          data: {'lid': lid},
          
          success: function (data) {
            //alert(data);
            if (data == 1) {
              location.reload();
            }
            if (data == 2) {
              $(".errorsgc").html("You don't have the permission to list it.");
              $(".errorsgc").animate({right: "21px"});
              
              setTimeout(function () {
                $(".errorsgc").animate({right: "-410px"});
                
              }, 2000);
              return false;
            }
            
            if (data == 4) {
              window.location.href = "http://inout-realestate.demo.inoutscripts.net/list/extendlisting/" + lid;
            }
            
            
          }
        });
        
      });
    });
    
    function page_load(page) {
      
      var page = page;
      
      
      $.ajax({
        type: "POST",
        url: "http://inout-realestate.demo.inoutscripts.net/user/selectactivelists",
        
        data: "page=" + page,
        
        
        success: function (msg) {
          
          var details = msg.split("??");
          //   alert(details[2]);
          if (msg != '') {
            
            // $('#pagedivvv1').empty();
            
            
            $('#activelisttdiv').empty();
            $('#activelisttdiv').html(details[1]);
            
            $('#pagedivvv1').html(details[2]);
            
            $('#pagedivvv1 li').siblings().find('a').removeClass("active");
            $("#page_" + page).addClass("active");
          }
          
          
        }
      });
    }
    
    function page_load1(page) {
      
      var page = page;
      
      
      $.ajax({
        type: "POST",
        url: "http://inout-realestate.demo.inoutscripts.net/user/selectinactivelists",
        
        data: "page=" + page,
        
        
        success: function (msg) {
          //alert(msg);
          var details = msg.split("??");
          // alert(details[2]);
          if (msg != '') {
            
            //$('#pagedivvv2').empty();
            
            
            $('#inactivelistdivv').empty();
            $('#inactivelistdivv').html(details[1]);
            
            //$('#pagedivvv2').html(details[2]);
            
            $('#pagedivvv2 li').siblings().find('a').removeClass("active");
            $("#page2_" + page).addClass("active");
          }
          
          
        }
      });
    }
    
    function page_load2(page) {
      
      var page = page;
      
      
      $.ajax({
        type: "POST",
        url: "http://inout-realestate.demo.inoutscripts.net/user/selectincompletelists",
        
        data: "page=" + page,
        
        
        success: function (msg) {
          //	alert(msg);
          var details = msg.split("??");
          
          if (msg != '') {
            
            // $('#pagedivvv3').empty();
            
            
            $('#incompletelisttdivv').empty();
            $('#incompletelisttdivv').html(details[1]);
            
            // $('#pagedivvv3').html(details[2]);
            
            $('#pagedivvv3 li').siblings().find('a').removeClass("active");
            $("#page3_" + page).addClass("active");
          }
          
          
        }
      });
    }
  
  </script>
@endsection