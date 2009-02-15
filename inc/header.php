<?php # (C) 2009 KrutiMedia Productions, Inc
      # Trimba CMS - core includes: header

if ($conf_site_status == '0') {
  die('The site is offline')

ob_start();

session_start();

if (!isset($page_title)) {
	$page_title = '$conf_site_name';
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
<head>
<meta name="description" content="<?php echo ' . $conf_site_meta_desc . ' ?>" />
<meta name="keywords" content="<?php echo ' . $conf_site_meta_keywords . ' ?>" />

<?php
	include('style_data.php');
	include('script_data.php');
?>
</head>