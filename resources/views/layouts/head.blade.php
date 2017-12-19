<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>eabyas blog</title>
  <link rel="icon" href="/img/logo-small.png">


  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--   <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://bootstrap-confirmation.js.org/assets/css/docs.min.css" rel="stylesheet">
  <link href="http://bootstrap-confirmation.js.org/assets/css/style.css" rel="stylesheet"> --}}




  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/docs.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/tinymce/skins/lightgray/content.min.css" rel="stylesheet">
  <link href='/tinymce/skins/lightgray/fonts/tinymce.woff'  fileExtension=".woff" mimeType="application/x-font-woff" '>
  <link href="/tinymce/skins/lightgray/skin.min.css" rel="stylesheet">
  <link href="/tinymce/skins/lightgray/content.min.css" rel="stylesheet">


  <!-- Bootstrap core CSS -->
  {{-- <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}


  <!-- Custom fonts for this template -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
{{--   <link href='https://fonts.gstatic.com/s/notoserif/v6/lJAvZoKA5NttpPc9yc6lPYWiMMZ7xLd792ULpGE4W_Y.woff2' rel='stylesheet' type='text/css'>
  <link href='https://fonts.gstatic.com/s/notoserif/v6/eCpfeMZI7q4jLksXVRWPQ_k_vArhqVIZ0nv9q090hN8.woff2' rel='stylesheet' type='text/css'>
  <link href='https://use.typekit.net/af/8bc105/00000000000000003b9b0734/27/l?subset_id=2&fvd=n4&v=3' rel='stylesheet' type='text/css'>
  <link href='https://fonts.gstatic.com/s/roboto/v18/Hgo13k-tfSpn0qi1SFdUfVtXRa8TVwTICgirnJhmVJw.woff2' rel='stylesheet' type='text/css'>
  <link href='https://fonts.gstatic.com/s/roboto/v18/CWB0XYA8bzo0kSThX0UTuA.woff2' rel='stylesheet' type='text/css'>
  <link href='https://fonts.gstatic.com/s/roboto/v18/RxZJdnzeo3R5zSexge8UUVtXRa8TVwTICgirnJhmVJw.woff2' rel='stylesheet' type='text/css'>
  <link href='https://fonts.gstatic.com/s/productsans/v9/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2' rel='stylesheet' type='text/css'>
  <link href='http://fonts.gstatic.com/s/opensans/v15/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2' rel='stylesheet' type='text/css'>
  --}}
  <link href='/fonts/glyphicons-halflings-regular.woff' fileExtension=".woff" mimeType="application/x-font-woff">
  <link href="/css/corporate.css" rel="stylesheet">
  <link href="/css/navbar.css" rel="stylesheet">

{{--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="http://bootstrap-confirmation.js.org/assets/js/docs.min.js"></script>
  <script src="http://bootstrap-confirmation.js.org/dist/bootstrap-confirmation2/bootstrap-confirmation.min.js"></script> --}}

  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/docs.min.js"></script>
  <script src="/js/bootstrap-confirmation.min.js"></script>




  <script src="/tinymce/tinymce.min.js"></script>
  <script src="/tinymce/themes/modern/theme.min.js"></script>
  <script type="text/javascript">
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

 {{--    <script>  
tinymce.init({
      selector:'#textarea', 
      plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
      "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
      ],
      toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
      toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
      image_advtab: true ,
      
      external_filemanager_path:"/tinymce/filemanager/",
      filemanager_title:"Responsive Filemanager" ,
      external_plugins: { "filemanager" : "filemanager/plugin.min.js"}
    });</script> --}}
    <script type="text/javascript">
      tinymce.init({
        selector:'#textarea', 
        plugins: [
        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "save table contextmenu directionality emoticons template paste textcolor"
        ],

        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
        images_upload_url: '/postAcceptor.php',
      // images_upload_base_path : '/storage/'
    });

  </script>
</head>