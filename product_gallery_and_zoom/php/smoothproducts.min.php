<?php

// Pictures attached to this product for image Cover and Gallery
$sql_str = "SELECT ATTACHED_DOC.* FROM ATTACHED_DOC 
              WHERE RELATED_REC_TYPE = " . ATT_DOC_RELATED_REC_PRODUCT_GEN
                . " AND LNK_RELATED_REC = " . #_GET#['product_id'] ;
$qry = new dbQuery($sql_str,"File: " . __FILE__ . " LINE " . __LINE__) ;
$att_doc_recs = $qry -> getRecords() ;
$att_doc_rec_count = $qry -> getCount() ;
unset($qry) ;


$cover_img = '' ;
$other_imgs = '' ;
$img_gallery = '' ;
$other_docs = '' ;

if ($att_doc_rec_count == 0)
{
  $cover_img = '<img src="/images/no_image_available.png">' ;
  $cover_class = 'product_cover' ;
  // Cover only
  $prod_images_height = 500 ;
  $other_imgs = '' ;
  $img_gallery = $cover_img ;
  $other_docs = '' ;
}
else
{
  // Cover + gallery images
  if ($att_doc_rec_count == 1)
    $prod_images_height = 500 ;
  else
    $prod_images_height = 600 ;
  $cover_class = 'sp_wrap' ;

  // ************************ Gallery of all images ******************
  // Now find all other images
  foreach($att_doc_recs as $att_doc_rec)
  {
    $img_name = $att_doc_rec['DOC_FILE_NAME'] ;
    if (isImageFileName($img_name))
    {

      // *************** Create Gallery *******************
      // For gallery we have to resize and make it small and save into temp folder
      $img_full_name = $GLOBALS['upload_prefix'] . '/' . attached_docs_folder 
                          . '/' . $att_doc_rec['DOC_FOLDER'] . '/' . $img_name ;

      // Convert fild to image resource based on extension
      $file_ext = getFileExtension($img_name) ;
      if ($file_ext == "jpg")
        $img = imagecreatefromjpeg($img_full_name) ; 
      elseif ($file_ext == "png")
        $img = imagecreatefrompng($img_full_name) ; 
      elseif ($file_ext == "gif")
        $img = imagecreatefromgif($img_full_name) ; 

      // Resize the image to smaller one and save into temp folder
      $img = resizeImage($img,500,500) ;
      $resized_full_name = $GLOBALS['upload_prefix'] . '/' . temp_folder . '/' . $img_name ;
      imagejpeg($img,$resized_full_name) ;

      // Now create the img tag and link to the one saved in temp folder
      // If this is the cover image add sp_default
      if ($att_doc_rec['LNK_CAT'] == ATTACHED_DOC_CAT_COVER_IMAGE_ID)
      {
        $img_gallery .= 
        '<a href="/~attached_docs_folder~/' . $att_doc_rec['DOC_FOLDER'] 
                .  '/' . $img_name . '" class="sp_default"><img src="/~temp_folder~/' . $img_name . '" alt=""></a>' ;
      }
      else
      {
        $img_gallery .= 
        '<a href="/~attached_docs_folder~/' . $att_doc_rec['DOC_FOLDER'] 
                .  '/' . $img_name . '"><img src="/~temp_folder~/' . $img_name . '" alt=""></a>' ;
      }


    } // Is image
  } // All attached docs
} // rec_count != 0

?>
