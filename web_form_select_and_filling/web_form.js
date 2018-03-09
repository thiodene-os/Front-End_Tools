<script type="text/javascript">
  $(function()
  {
    // Handle the user infrmation, saves the Itinerary ino a JSON string
    $(".btn_save_itinerary").click(function()
    {
      // Confirm sending this message
      if (! confirm("Do you want to save this Itinerary?"))
        return false ;

      // JSON empty string
      info = '' ;

      // ------------------------1: Event Details-------------------------------
      // Bride
      bride_name = $("#bride_name").val() ;
      if (bride_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bride_name": ' + '"' + bride_name + '"' ;
      }

      bride_phone = $("#bride_phone").val() ;
      if (bride_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bride_phone": ' + '"' + bride_phone + '"' ;
      }

      bride_cell = $("#bride_cell").val() ;
      if (bride_cell.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bride_cell": ' + '"' + bride_cell + '"' ;
      }

      // Groom
      groom_name = $("#groom_name").val() ;
      if (groom_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "groom_name": ' + '"' + groom_name + '"' ;
      }

      groom_phone = $("#groom_phone").val() ;
      if (groom_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "groom_phone": ' + '"' + groom_phone + '"' ;
      }

      groom_cell = $("#groom_cell").val() ;
      if (groom_cell.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "groom_cell": ' + '"' + groom_cell + '"' ;
      }

      // ------------------------------2: Numbers-------------------------------

      // -----------------------------3: Arrivals-------------------------------
      bride_arrive_time = $("#bride_arrive_time").val() ;
      if (bride_arrive_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bride_arrive_time": ' + '"' + bride_arrive_time + '"' ;
      }

      groom_arrive_time = $("#groom_arrive_time").val() ;
      if (groom_arrive_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "groom_arrive_time": ' + '"' + groom_arrive_time + '"' ;
      }

      door_sign = $("#door_sign").val() ;
      if (door_sign.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "door_sign": ' + '"' + door_sign + '"' ;
      }

      receive_line_loc = $("#receive_line_loc").val() ;
      if (receive_line_loc.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "receive_line_loc": ' + '"' + receive_line_loc + '"' ;
      }

      if ($("#name_cards span").hasClass("selected"))
      {
        name_cards = $("#name_cards").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "name_cards": ' + '"' + name_cards + '"' ;
      }

      // -----------------------------4: Reception------------------------------
      if ($("#bridal_suite span").hasClass("selected"))
      {
        bridal_suite = $("#bridal_suite").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bridal_suite": ' + '"' + bridal_suite + '"' ;
      }

      addt_room = $("#addt_room").val() ;
      if (addt_room.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "addt_room": ' + '"' + addt_room + '"' ;
      }

      addt_room_purpose = $("#addt_room_purpose").val() ;
      if (addt_room_purpose.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "addt_room_purpose": ' + '"' + addt_room_purpose + '"' ;
      }

      if ($("#have_ceremony_here span").hasClass("selected"))
      {
        have_ceremony_here = $("#have_ceremony_here").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "have_ceremony_here": ' + '"' + have_ceremony_here + '"' ;

        if (have_ceremony_here == 'Yes')
        {
          // handle additional options
          if ($("#have_gazebo_decorator span").hasClass("selected"))
          {
            have_gazebo_decorator = $("#have_gazebo_decorator").find("span.selected").attr("value") ;
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "have_gazebo_decorator": ' + '"' + have_gazebo_decorator + '"' ;
          }

          ceremony_bakup_loc = $("#ceremony_bakup_loc").val() ;
          if (ceremony_bakup_loc.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "ceremony_bakup_loc": ' + '"' + ceremony_bakup_loc + '"' ;
          }
        }
      }

      // -----------------------------5: Vendor------------------------------
      // Minister
      minister_name = $("#minister_name").val() ;
      if (minister_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "minister_name": ' + '"' + minister_name + '"' ;
      }

      minister_email = $("#minister_email").val() ;
      if (minister_email.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "minister_email": ' + '"' + minister_email + '"' ;
      }

      minister_phone = $("#minister_phone").val() ;
      if (minister_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "minister_phone": ' + '"' + minister_phone + '"' ;
      }

      minister_cell = $("#minister_cell").val() ;
      if (minister_cell.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "minister_cell": ' + '"' + minister_cell + '"' ;
      }

      // DJ Info
      dj_company_name = $("#dj_company_name").val() ;
      if (dj_company_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "dj_company_name": ' + '"' + dj_company_name + '"' ;
      }

      dj_contact_name = $("#dj_contact_name").val() ;
      if (dj_contact_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "dj_contact_name": ' + '"' + dj_contact_name + '"' ;
      }

      dj_email = $("#dj_email").val() ;
      if (dj_email.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "dj_email": ' + '"' + dj_email + '"' ;
      }

      dj_phone = $("#dj_phone").val() ;
      if (dj_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "dj_phone": ' + '"' + dj_phone + '"' ;
      }

      dj_arrival_time = $("#dj_arrival_time").val() ;
      if (dj_arrival_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "dj_arrival_time": ' + '"' + dj_arrival_time + '"' ;
      }

      // Podium
      if ($("#need_a_podium span").hasClass("selected"))
      {
        need_a_podium = $("#need_a_podium").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "need_a_podium": ' + '"' + need_a_podium + '"' ;
      }

      // Entertainments
      if ($("#entertainment_at_event span").hasClass("selected"))
      {
        entertainment_at_event = $("#entertainment_at_event").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "entertainment_at_event": ' + '"' + entertainment_at_event + '"' ;
      }

      have_cocktail_hour = $("#have_cocktail_hour").val() ;
      if (have_cocktail_hour.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "have_cocktail_hour": ' + '"' + have_cocktail_hour + '"' ;
      }
      first_course_time = $("#first_course_time").val() ;
      if (first_course_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "first_course_time": ' + '"' + first_course_time + '"' ;
      }
      night_station_time = $("#night_station_time").val() ;
      if (night_station_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "night_station_time": ' + '"' + night_station_time + '"' ;
      }

      // Cake
      cake_company_name = $("#cake_company_name").val() ;
      if (cake_company_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "cake_company_name": ' + '"' + cake_company_name + '"' ;
      }

      cake_contact_name = $("#cake_contact_name").val() ;
      if (cake_contact_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "cake_contact_name": ' + '"' + cake_contact_name + '"' ;
      }

      cake_phone = $("#cake_phone").val() ;
      if (cake_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "cake_phone": ' + '"' + cake_phone + '"' ;
      }

      cake_arrival_time = $("#cake_arrival_time").val() ;
      if (cake_arrival_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "cake_arrival_time": ' + '"' + cake_arrival_time + '"' ;
      }

      // Florist
      florist_company_name = $("#florist_company_name").val() ;
      if (florist_company_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "florist_company_name": ' + '"' + florist_company_name + '"' ;
      }

      florist_contact_name = $("#florist_contact_name").val() ;
      if (florist_contact_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "florist_contact_name": ' + '"' + florist_contact_name + '"' ;
      }

      florist_phone = $("#florist_phone").val() ;
      if (florist_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "florist_phone": ' + '"' + florist_phone + '"' ;
      }

      florist_arrival_time = $("#florist_arrival_time").val() ;
      if (florist_arrival_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "florist_arrival_time": ' + '"' + florist_arrival_time + '"' ;
      }

      // Photo/Video
      photo_video_company_name = $("#photo_video_company_name").val() ;
      if (photo_video_company_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "photo_video_company_name": ' + '"' + photo_video_company_name + '"' ;
      }

      photo_video_contact_name = $("#photo_video_contact_name").val() ;
      if (photo_video_contact_name.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "photo_video_contact_name": ' + '"' + photo_video_contact_name + '"' ;
      }

      photo_video_phone = $("#photo_video_phone").val() ;
      if (photo_video_phone.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "photo_video_phone": ' + '"' + photo_video_phone + '"' ;
      }

      photo_video_arrival_time = $("#photo_video_arrival_time").val() ;
      if (photo_video_arrival_time.length > 0)
      {
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "photo_video_arrival_time": ' + '"' + photo_video_arrival_time + '"' ;
      }

      // -----------------------------6: Linens and More------------------------------
      // ---------------Linen
      // Head Table
      if ($("#htable_linen_prov_by span").hasClass("selected"))
      {
        htable_linen_prov_by = $("#htable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "htable_linen_prov_by": ' + '"' + htable_linen_prov_by + '"' ;
      }

      // Guest Table
      if ($("#gtable_linen_prov_by span").hasClass("selected"))
      {
        gtable_linen_prov_by = $("#gtable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "gtable_linen_prov_by": ' + '"' + gtable_linen_prov_by + '"' ;
      }

      // Receiving Table
      if ($("#rtable_linen_prov_by span").hasClass("selected"))
      {
        rtable_linen_prov_by = $("#rtable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "rtable_linen_prov_by": ' + '"' + rtable_linen_prov_by + '"' ;
      }

      // Cake Table
      if ($("#ctable_linen_prov_by span").hasClass("selected"))
      {
        ctable_linen_prov_by = $("#ctable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "ctable_linen_prov_by": ' + '"' + ctable_linen_prov_by + '"' ;
      }

      // Antipasto Bar
      if ($("#atable_linen_prov_by span").hasClass("selected"))
      {
        atable_linen_prov_by = $("#atable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "atable_linen_prov_by": ' + '"' + atable_linen_prov_by + '"' ;
      }

      // Sweet Table
      if ($("#stable_linen_prov_by span").hasClass("selected"))
      {
        stable_linen_prov_by = $("#stable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "stable_linen_prov_by": ' + '"' + stable_linen_prov_by + '"' ;
      }

      // Napkins
      if ($("#napkins_prov_by span").hasClass("selected"))
      {
        napkins_prov_by = $("#napkins_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "napkins_prov_by": ' + '"' + napkins_prov_by + '"' ;
      }

      // Signing Table
      if ($("#sgtable_linen_prov_by span").hasClass("selected"))
      {
        sgtable_linen_prov_by = $("#sgtable_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "sgtable_linen_prov_by": ' + '"' + sgtable_linen_prov_by + '"' ;
      }

      // ---------------Misc
      // Back Drop
      if ($("#bdrop_linen_prov_by span").hasClass("selected"))
      {
        bdrop_linen_prov_by = $("#bdrop_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bdrop_linen_prov_by": ' + '"' + bdrop_linen_prov_by + '"' ;
      }

      // Napkin Ring
      if ($("#nprings_linen_prov_by span").hasClass("selected"))
      {
        nprings_linen_prov_by = $("#nprings_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "nprings_linen_prov_by": ' + '"' + nprings_linen_prov_by + '"' ;
      }

      // Charger Plates
      if ($("#chg_plates_linen_prov_by span").hasClass("selected"))
      {
        chg_plates_linen_prov_by = $("#chg_plates_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "chg_plates_linen_prov_by": ' + '"' + chg_plates_linen_prov_by + '"' ;
      }

      // Chair Cover
      if ($("#chair_cov_linen_prov_by span").hasClass("selected"))
      {
        chair_cov_linen_prov_by = $("#chair_cov_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "chair_cov_linen_prov_by": ' + '"' + chair_cov_linen_prov_by + '"' ;
      }

      // Overlays
      if ($("#ovl_linen_prov_by span").hasClass("selected"))
      {
        ovl_linen_prov_by = $("#ovl_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "ovl_linen_prov_by": ' + '"' + ovl_linen_prov_by + '"' ;
      }

      // Busta Box
      if ($("#bustabox_linen_prov_by span").hasClass("selected"))
      {
        bustabox_linen_prov_by = $("#bustabox_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "bustabox_linen_prov_by": ' + '"' + bustabox_linen_prov_by + '"' ;
      }

      // Swag Head
      if ($("#htable_swag_prov_by span").hasClass("selected"))
      {
        htable_swag_prov_by = $("#htable_swag_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "htable_swag_prov_by": ' + '"' + htable_swag_prov_by + '"' ;
      }

      // Swag Receiving
      if ($("#rtable_swag_linen_prov_by span").hasClass("selected"))
      {
        rtable_swag_linen_prov_by = $("#rtable_swag_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "rtable_swag_linen_prov_by": ' + '"' + rtable_swag_linen_prov_by + '"' ;
      }

      // Other
      if ($("#other_linen_prov_by span").hasClass("selected"))
      {
        other_linen_prov_by = $("#other_linen_prov_by").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "other_linen_prov_by": ' + '"' + other_linen_prov_by + '"' ;
      }

      // in-House Linen
      if ($("#inhouse_linens span").hasClass("selected"))
      {
        inhouse_linens = $("#inhouse_linens").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "inhouse_linens": ' + '"' + inhouse_linens + '"' ;
      }

      // -----------------------------7: Delivery------------------------------
      // Bombonieres
      if ($("#items_leave_bombo span").hasClass("selected"))
      {
        items_leave_bombo = $("#items_leave_bombo").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_bombo": ' + '"' + items_leave_bombo + '"' ;

        if (items_leave_bombo == 'Yes')
        {
          items_leave_bombo_how_many = $("#items_leave_bombo_how_many").val() ;
          if (items_leave_bombo_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_bombo_how_many": ' + '"' + items_leave_bombo_how_many + '"' ;
          }
        }

      }

      // Centerpieces
      if ($("#items_leave_cntrpiece span").hasClass("selected"))
      {
        items_leave_cntrpiece = $("#items_leave_cntrpiece").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_cntrpiece": ' + '"' + items_leave_cntrpiece + '"' ;

        if (items_leave_cntrpiece == 'Yes')
        {
          items_leave_cntrpiece_how_many = $("#items_leave_cntrpiece_how_many").val() ;
          if (items_leave_cntrpiece_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_cntrpiece_how_many": ' + '"' + items_leave_cntrpiece_how_many + '"' ;
          }
        }

      }

      // Seating Cards
      if ($("#items_leave_seat_card span").hasClass("selected"))
      {
        items_leave_seat_card = $("#items_leave_seat_card").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_seat_card": ' + '"' + items_leave_seat_card + '"' ;

        if (items_leave_seat_card == 'Yes')
        {
          items_leave_seat_card_how_many = $("#items_leave_seat_card_how_many").val() ;
          if (items_leave_seat_card_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_seat_card_how_many": ' + '"' + items_leave_seat_card_how_many + '"' ;
          }
        }

      }

      // Busta Box
      if ($("#items_leave_busta_box span").hasClass("selected"))
      {
        items_leave_busta_box = $("#items_leave_busta_box").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_busta_box": ' + '"' + items_leave_busta_box + '"' ;

        if (items_leave_busta_box == 'Yes')
        {
          items_leave_busta_box_how_many = $("#items_leave_busta_box_how_many").val() ;
          if (items_leave_busta_box_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_busta_box_how_many": ' + '"' + items_leave_busta_box_how_many + '"' ;
          }
        }

      }

      // Receiving Line Cookies
      if ($("#items_leave_rec_line span").hasClass("selected"))
      {
        items_leave_rec_line = $("#items_leave_rec_line").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_rec_line": ' + '"' + items_leave_rec_line + '"' ;

        if (items_leave_rec_line == 'Yes')
        {
          items_leave_rec_line_how_many = $("#items_leave_rec_line_how_many").val() ;
          if (items_leave_rec_line_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_rec_line_how_many": ' + '"' + items_leave_rec_line_how_many + '"' ;
          }
        }

      }

      // Book to Sign
      if ($("#items_leave_book_sign span").hasClass("selected"))
      {
        items_leave_book_sign = $("#items_leave_book_sign").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_book_sign": ' + '"' + items_leave_book_sign + '"' ;

        if (items_leave_book_sign == 'Yes')
        {
          items_leave_book_sign_how_many = $("#items_leave_book_sign_how_many").val() ;
          if (items_leave_book_sign_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_book_sign_how_many": ' + '"' + items_leave_book_sign_how_many + '"' ;
          }
        }

      }

      // Pen
      if ($("#items_leave_pen span").hasClass("selected"))
      {
        items_leave_pen = $("#items_leave_pen").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_pen": ' + '"' + items_leave_pen + '"' ;

        if (items_leave_pen == 'Yes')
        {
          items_leave_pen_how_many = $("#items_leave_pen_how_many").val() ;
          if (items_leave_pen_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_pen_how_many": ' + '"' + items_leave_pen_how_many + '"' ;
          }
        }

      }

      // Picture in Frame
      if ($("#items_leave_pic_frame span").hasClass("selected"))
      {
        items_leave_pic_frame = $("#items_leave_pic_frame").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_pic_frame": ' + '"' + items_leave_pic_frame + '"' ;

        if (items_leave_pic_frame == 'Yes')
        {
          items_leave_pic_frame_how_many = $("#items_leave_pic_frame_how_many").val() ;
          if (items_leave_pic_frame_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_pic_frame_how_many": ' + '"' + items_leave_pic_frame_how_many + '"' ;
          }
        }

      }

      // Cake Lifter
      if ($("#items_leave_cake_lift span").hasClass("selected"))
      {
        items_leave_cake_lift = $("#items_leave_cake_lift").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_cake_lift": ' + '"' + items_leave_cake_lift + '"' ;

        if (items_leave_cake_lift == 'Yes')
        {
          items_leave_cake_lift_how_many = $("#items_leave_cake_lift_how_many").val() ;
          if (items_leave_cake_lift_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_cake_lift_how_many": ' + '"' + items_leave_cake_lift_how_many + '"' ;
          }
        }

      }

      // Cake Knife
      if ($("#items_leave_cake_knife span").hasClass("selected"))
      {
        items_leave_cake_knife = $("#items_leave_cake_knife").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_cake_knife": ' + '"' + items_leave_cake_knife + '"' ;

        if (items_leave_cake_knife == 'Yes')
        {
          items_leave_cake_knife_how_many = $("#items_leave_cake_knife_how_many").val() ;
          if (items_leave_cake_knife_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_cake_knife_how_many": ' + '"' + items_leave_cake_knife_how_many + '"' ;
          }
        }

      }

      // Champagne Flutes
      if ($("#items_leave_champ_flut span").hasClass("selected"))
      {
        items_leave_champ_flut = $("#items_leave_champ_flut").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_champ_flut": ' + '"' + items_leave_champ_flut + '"' ;

        if (items_leave_champ_flut == 'Yes')
        {
          items_leave_champ_flut_how_many = $("#items_leave_champ_flut_how_many").val() ;
          if (items_leave_champ_flut_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_champ_flut_how_many": ' + '"' + items_leave_champ_flut_how_many + '"' ;
          }
        }

      }

      // Cake Topper
      if ($("#items_leave_cake_top span").hasClass("selected"))
      {
        items_leave_cake_top = $("#items_leave_cake_top").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_cake_top": ' + '"' + items_leave_cake_top + '"' ;

        if (items_leave_cake_top == 'Yes')
        {
          items_leave_cake_top_how_many = $("#items_leave_cake_top_how_many").val() ;
          if (items_leave_cake_top_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_cake_top_how_many": ' + '"' + items_leave_cake_top_how_many + '"' ;
          }
        }

      }

      // Menus
      if ($("#items_leave_menus span").hasClass("selected"))
      {
        items_leave_menus = $("#items_leave_menus").find("span.selected").attr("value") ;
        info = addCommaToEndOfNonEmptyString(info) ;
        info += "\n" + '  "items_leave_menus": ' + '"' + items_leave_menus + '"' ;

        if (items_leave_menus == 'Yes')
        {
          items_leave_menus_how_many = $("#items_leave_menus_how_many").val() ;
          if (items_leave_menus_how_many.length > 0)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_menus_how_many": ' + '"' + items_leave_menus_how_many + '"' ;
          }
        }

      }

      // Add initial empty lines to each multi-line input
      iter = 1 ;
      $("#items_leave_other input[type=text]").each(function()
      {
        if ($(this).val().length > 0)
        {
          if (iter == 1)
          {
            info = addCommaToEndOfNonEmptyString(info) ;
            info += "\n" + '  "items_leave_other": [' + '"' + $(this).val() + '"' ;
          }
          else
          {
            info += ',"' + $(this).val() + '"' ;
          }
          iter++ ;

        }
      }) ;
      // Finish the JSON string for the array from #items_leave_other
      if (iter > 1)
        info += ']' ;

      // Finish the JSON String and run the PHP function
      if (info.length > 0)
      {
        info = '{' + info + "\n" + '}' ;
        info = xmlbEncodeForAJAX(info) ;

        prog =  '$do_record = new doRecord("ITINERARY") ;'
        + "\n" + '$new_rec = array() ;'
        + "\n" + '$new_rec[\'LNK_EVENT\'] = ' + %event_id% + ' ;'
        + "\n" + '$new_rec[\'ITIN_VALUES_JSON\'] = xmlbDecodeFromAJAX("' + info + '") ;'
        + "\n" + '$do_record -> new_record = $new_rec ;'
        + "\n" + '$do_record -> id_column_val = ' + %itin_id% + ' ;'
        + "\n" + 'if (! $do_record -> update()) '
        + "\n" + '{ '
        + "\n" + '  debug(getGlobalMsg(),"getGlobalMsg","File: " . __FILE__ . " Line: " . __LINE__) ;'
        + "\n" + '  return Null ; '
        + "\n" + '} '
        + "\n" + 'unset($new_rec) ;'
        + "\n" + 'unset($do_record) ;'
        + "\n" + '$prog_result = "doAfterItineraryOptionsSaved(\" . %event_id% . \")" ; ' ;


        runBackEndProg(prog) ; 

      }

    });

  }) ;

  // Adds comma to non-empty string
  function addCommaToEndOfNonEmptyString(info)
  {
    // For a string to pass to JSON add the comma before adding any new parameter
    if (info.length > 0)
      info = info + ',' ;
    return info ;
  } // addCommaToEndOfNonEmptyString

  function doAfterItineraryOptionsSaved()
  {
    alert("OK") ;
    //window.location.assign( '%checkout_redirect_href%?liquor_checkout_id=' + liq_checkout_id );
  } // doAfterItineraryOptionsSaved  

</script>
