<?
ini_set ('display_errors', 0);
header('Content-type: text/html; charset=utf-8');

$dev  = isset($_GET['dev'])  ? true : false;
$less = isset($_GET['less']) ? true : false;

if($dev === true) {
  ini_set ('display_errors', 1);
}

if($less === true) {
  include ROOT."/inc/core/libs/less/Less.php";
  $options = array( "compress"=>true );
  if($dev == true) {
    $options["sourceMap"] = true;
  }
  try {
    $parser = new Less_Parser($options);
    $parser->parseFile( ROOT.'/inc/view/'.VIEW.'/less/style.less', ROOT.'/inc/view/'.VIEW.'/less/' );
    $parser->parse('@generated: true;');
    file_put_contents(ROOT.'/inc/view/'.VIEW.'/css/style.css',$parser->getCss());
  } catch(Exception $e){
      echo '<script>console.error("'.htmlspecialchars(str_replace("\n"," ",$e->getMessage())).'");</script>';
  }
}

if($_SERVER['REQUEST_URI']=='/index.php'){header("Location: /");exit;}

include('text.php');
include('view.php');